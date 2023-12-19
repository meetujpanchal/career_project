const express = require('express')
const app = express()
const path = require('path')
const mysql = require('mysql2')
const { error } = require('console')
const session = require('express-session')
const multer = require('multer')

const storage = multer.diskStorage({
    destination: function(req,file,cb){
        return cb(null, 'admin/views/sb_assets')
    },
    filename: function(req,file,cb){
        return cb(null, `uploads/${Date.now()}-${file.originalname}`)
    }
})

const upload = multer({ storage })

app.set('view engine', 'ejs')
app.set('views', path.resolve('./admin/views'))

app.use(express.json())
app.use(express.urlencoded({ extended: true }))
app.use(express.static('admin/views'))

app.use(session({
    secret: 'secret',
    resave: true,
    saveUninitialized: true
}))

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'career'
});

db.connect((error) => {
    if (error) {
        console.log('Error in connecting database!!' + error);
        return;
    }
    console.log('Database is connected!!')
})

// ========================================Get-Pages=======================================================

app.get('/fs' ,(req,res)=>{
    res.render('facilityadd')
})

app.get('/course' ,(req,res)=>{
    res.render('courseadd')
})

app.get('/college' ,(req,res)=>{
    res.render('collegeadd')
})

// ========================================Log-In=========================================================

app.get('/login', (req, res) => {
    res.render('sblog')
})

app.post('/log', (req, res) => {
    const { name, pass } = req.body;
    const role = "subadmin";
    if(name && pass){
        db.query("SELECT * FROM admin WHERE aname = ? AND pwd = ? AND role = ?",[name,pass,role],function(err,result){
          if ( err ) throw err;
          if(result.length>0){
            req.session.user = name;
            req.session.save();
            res.redirect("/dash")
          }else{
            res.send('<script>alert("Incorrect Username or Password!!")</script>')
          }  
          res.end()
        })
    }else{
        res.send('<script>alert("Enter Username and Password!!")</script>')
        res.end();
    }
    
})

app.get('/logout', (req,res)=>{
    req.session.destroy();
    res.redirect('/login')
})

// ========================================Display========================================================


app.get('/course1', (req, res) => {
    const lnm = req.session.user;
    db.query('SELECT * FROM course', (err, results) => {
        if (err) throw err;
        res.render('course1', {
            cr: results,
            lnm
        })
    })
})

app.get('/clg', (req, res) => {
    const lnm = req.session.user;
    db.query('SELECT * FROM college', (err, clresult) => {
        if (err) throw err;
        res.render('college', {
            cl: clresult,
            lnm
        })
    })
})

app.get('/facility', (req, res) => {
    const lnm = req.session.user;
    db.query('SELECT * FROM facility', (err, result) => {
        if (err) throw err;
        res.render('facility', {
            fs: result,
            lnm
        })
    })
})

// ========================================Display-Count=====================================================

app.get('/dash', (req, res) => {
    const lnm = req.session.user;
    db.query('SELECT count(2) AS id FROM course', (err, result) => {
        if (err) throw err;
        db.query('SELECT count(2) AS clid FROM college', (err, clresult) => {
            if (err) throw err;
            res.render('dash', {
                c: result[0].id,
                cl : clresult[0].clid,
                lnm
            })
        })        
    })
})

// ========================================Inseart=========================================================

app.post('/addfs',(req,res)=>{
    const { fname } = req.body;
    db.query('INSERT INTO facility(facility) VALUES (?)',[fname],(err,result)=>{
        if (err) throw err;
        res.redirect('/facility')
    });
});

app.post('/addcl',upload.single('image') ,(req,res)=>{
    const { clgname,clg_email,Address,mo_no,clg_des,urls } = req.body;
    image = req.file.filename;
    db.query('INSERT INTO college(clgname,clg_email,Address,mo_no,clg_des,image,urls) VALUES (?,?,?,?,?,?,?)',[clgname,clg_email,Address,mo_no,clg_des,image,urls],(err,result)=>{
        if (err) throw err;
        res.redirect('/clg');
    });
});

app.post('/addcr', upload.single('image') ,(req,res)=>{
    console.log(req.file)
    const { cname,cfees,cduration,cdescri,urls } = req.body;
    image = req.file.filename;
    db.query('INSERT INTO course(cname,cfees,cduration,cdescri,image,urls) VALUES (?,?,?,?,?,?)', [cname,cfees,cduration,cdescri,image,urls],(err, result)=>{
        if(err) throw err;
        res.redirect('/course1');
    });
});

// ========================================Delete-Routes====================================================

app.get('/dlfs/:id', (req,res)=>{
    const { id } = req.params;
    db.query('DELETE FROM facility where fid = ?',[id],(err,result)=>{
        res.redirect('/facility')
    });
});

app.get('/dlcourses/:id', (req,res)=>{
    const{ id } = req.params;
    db.query('DELETE FROM course where cid = ?',[id],(err,result)=>{
        res.redirect('/course1')
    });
});

app.get('/dlcollege/:id', (req,res)=>{
    const { id } = req.params;
    db.query('DELETE FROM college where c_id = ?',[id],(err,result)=>{
        res.redirect('/clg')
    });
});

// ========================================Update-Routes====================================================


app.get('/ef/:id',(req,res)=>{
    const { id } = req.params;    
    db.query('SELECT * FROM facility where fid = ?', [id],(err,result)=>{        
        res.render('fsedit',{
            edf: result[0].facility,
            edfi: result[0].fid
        })
    })
})

app.post('/edfs/:id',(req,res)=>{
    const { id } = req.params;
    const { fname } = req.body;
    db.query('UPDATE facility SET facility = ? where fid = ?', [fname,id],(err,result)=>{
        res.redirect('/facility')
    })
})

app.get('/eco/:id',(req,res)=>{
    const { id } = req.params;
    db.query('SELECT * FROM course where cid = ?, '[id],(err,result)=>{
        res.render('courseedit', {
            ec: results[0].cname,
            ec: results[0].cfees,
            ec: results[0].cduration,
            ec: results[0].cdescri,
            ec: results[0].image,
            ec: results[0].urls,
            eci: results[0].cid
        });
    }); 
});

app.post('/ecourse/:id',(req, res) => {
    const {id} = req.params;
    const { cname,cfees,cduration,cdescri,image,urls } = req.body;
    db.query('UPDATE course SET cname = ? ,cfees = ? ,cduration = ? ,cdescri = ? ,image = ? ,urls = ? WHERE cid = ?',[id,cname,cfees,,cduration,cdescri,image,urls], (err, results) => {
        res.redirect('/course1');
    });

});

app.get('/ecol/:id',(req, res) => {
    const {id} = req.params;
    ddb.query('SELECT * FROM college where c_id = ?',[id], (err, results) => {
        res.render('collegeedit',{
            ecl: results.ecl[0].clgname,
            ecl: results.ecl[0].clg_email,
            ecl: results.ecl[0].Address,
            ecl: results.ecl[0].mo_no,
            ecl: results.ecl[0].clg_des,
            ecl: results.ecl[0].image,
            ecl: results.ecl[0].urls,
            ecli: results.ecli[0].c_id
        });
    });
});

app.post('/ecollege/:id',(req, res) => {
    const { id } = req.params;
    const { clgname,clg_email,Address,mo_no,clg_des,image,urls } = req.body;
    db.query('UPDATE collegeg SET clgname = ? ,clg_email = ? ,Address = ? ,mo_no = ? ,clg_des = ? ,image = ? ,urls = ? WHERE c_id = ?',[id,clgname,clg_email,Address,mo_no,clg_des,image,urls], (err,result) => {
        res.redirect('/college');
    });
});


app.listen(8023, () => {
    console.log('Server listening on port 8023')
})
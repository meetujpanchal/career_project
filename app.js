const express = require('express')
const app = express()
const path = require('path')
const mysql = require('mysql2')
const { error } = require('console')

app.set('view engine','ejs')
app.set('views',path.resolve('./views'))

app.use(express.json())
app.use(express.urlencoded({extended: true}))
app.use(express.static('views'))

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'career'
});

db.connect((error)=>{
    if(error){
        console.log('Error in connecting database!!' + error);
        return;
    }
    console.log('Database is connected!!')
})

app.get('/login', (req,res)=>{
    res.render('sblog')
})

app.post('/log',(req,res)=>{

    const { name, pass } = req.body;
    
    db.query('SELECT (aname,pwd) FROM admin where aname = ? AND pwd = ?',[name,pass],(err,result)=>{                
        res.render('dash')
    })

})

app.get('/course1',(req,res)=>{
    db.query('SELECT * FROM course',(err,results)=>{
        if (err) throw err;
        res.render('course1',{
            cr: results
        })
    })
})


app.get('/dash',(req,res)=>{
    res.render('dash')
})
app.get('/clg',(req,res)=>{
    res.render('clg')
})
app.get('/course_offer',(req,res)=>{
    res.render('course_offer')
})
app.get('/facility',(req,res)=>{
    res.render('facility')
})
app.get('/facility_offer',(req,res)=>{
    res.render('facility')
})
app.get('/users', (req,res)=>{
    db.query('SELECT * FROM user',(err,results)=>{
        if (err) throw err;
        res.render('display', {
            ds: results
        })  
    })
})

app.get('/users/:id',(req,res)=>{
    const { id } = req.params;
    db.query('SELECT * FROM user where uid = ?',[ id ],(err,result)=>{
        if (err) throw err;
        res.json(result)
    })
})

app.post('/adus', (req,res)=>{
    const { name,email,number,pass } = req.body;
    db.query('INSERT INTO user(uname, email, phone_no, pwd) VALUES(?,?,?,?)',[ name,email,number,pass ], (err,result)=>{
        if (err) throw err;
        res.json({ message: 'User added successfully', id: result.insertId })
    })
})

app.get('/form', (req,res)=>{
    res.render('user_r');
})

app.post('/postdata',(req,res)=>{

    console.log(req.body);
    res.redirect('/form')

})

app.listen(8023,()=>{
    console.log('Server listening on port 8023')
})
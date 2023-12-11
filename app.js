const express = require('express')
const app = express()
const path = require('path')
const mysql = require('mysql2')
const { error } = require('console')
const session = require('express-session')

app.set('view engine', 'ejs')
app.set('views', path.resolve('./views'))

app.use(express.json())
app.use(express.urlencoded({ extended: true }))
app.use(express.static('views'))

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

app.get('/login', (req, res) => {
    res.render('sblog')
})

app.post('/log', (req, res) => {
    const { name, pass } = req.body;
    db.query('SELECT (aname,pwd) FROM admin where aname = ? AND pwd = ?', [name, pass], (err, result) => {
        res.redirect('/dash')
    })

})

app.get('/course1', (req, res) => {
    db.query('SELECT * FROM course', (err, results) => {
        if (err) throw err;
        res.render('course1', {
            cr: results
        })
    })
})


app.get('/dash', (req, res) => {
    db.query('SELECT count(2) AS id FROM course', (err, result) => {
        if (err) throw err;
        db.query('SELECT count(2) AS clid FROM college', (err, clresult) => {
            if (err) throw err;
            res.render('dash', {
                c: result[0].id,
                cl : clresult[0].clid
            })
        })        
    })
})
app.get('/clg', (req, res) => {
    db.query('SELECT * FROM college', (err, clresult) => {
        if (err) throw err;
        res.render('clg', {
            cl: clresult
        })
    })
})

app.get('/facility', (req, res) => {
    db.query('SELECT * FROM facility', (err, result) => {
        if (err) throw err;
        res.render('facility', {
            fs: result
        })
    })
})

app.listen(8023, () => {
    console.log('Server listening on port 8023')
})
const express = require('express')
const router = express.Router()

router.get('/form', (req,res)=>{
    res.render('user_r');
})

router.post('/postdata',(req,res)=>{

    console.log(req.body);
    res.redirect('/form')

})

module.exports = router;


var express = require('express');
var router = express.Router();
var database=require('../db');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Student details' });
});
router.get('/index', function(req, res, next) {
  res.render('index', { title: 'Student details' });
});
router.post('/searchaction',function(req,res)
{ 
  var regno=req.body.reg;

  console.log(regno);
  var query=`select * from mca where regno="${Register_Number}"`;
  database.query(query,function(error,data)
  {
    if(error)throw error;
    else{
      res.render('index',{title:'Student detail',sampledata:data});
    }
  
});
});


router.get('/home2', function(req, res)  {
  //res.render('table',{data:"result"});
  database.query(`SELECT * FROM mca`,function(err, result) {    
     
    console.log(err);
    if(err)throw err;
    else{
     
      res.render('display',{data:result});
    }
  });
});

router.get('/home', function(req, res)  {
  //res.render('table',{data:"result"});
  database.query(`SELECT * FROM mca`,function(err, result) {    
     
    console.log(err);
    if(err)throw err;
    else{
     
      res.render('table',{data:result});
    }
  });
  
   
});

router.post('/attendence', (req, res) => {
 
 database.query("SELECT * FROM mca",(err, result)  => {
      var atten=[];
      var data = req.body;
     //console.log(data);
    
     if(result.length){ 
     for( i = 0; i< result.length; i++) 
    
         {
          
         Register_Number=result[i].Register_Number;
         Register_Number=""+Register_Number;
         var datetime=new Date();
         
         let month=datetime.getMonth()+1;
   var date=datetime.getFullYear()+'-'+month+'-'+datetime.getDate();
   //console.log(date);
   
         atten[i] = data[Register_Number];
         if(atten[i]=='1'){
         
           database.query(`INSERT INTO attendence (reg_no,date,remark) VALUES ('${Register_Number}','${date}','PRESENT')` ,function (err,result){
             if(err){
             console.log(err);
             }
             else{
             //console.log("sucess");
             //req.redirect('/');
             }
           });
         }
         else{
           
           database.query(`INSERT INTO attendence (reg_no,date,remark) VALUES ('${Register_Number}','${date}','ABSENT')` ,function (err,result){
             if(err){
             console.log(err);
             }
             else{
             //console.log("sucess");
             
             }
           });
         
         }
  
         //console.log(atten[i]);
         
         }
         
     }
 
 })
 res.redirect('/');
});

router.get("/add",(req,res) => {
  //fetching data from form
  res.render("add",{title:'Student details', mesg: true })
  
});
module.exports = router;

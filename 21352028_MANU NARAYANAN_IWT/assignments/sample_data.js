var express = require('express');

var router = express.Router();

var database = require('../database');

router.get("/",function(request, response, next){
    response.render('sample_data',{title : 'Node JS Ajax CURD Application'});
});
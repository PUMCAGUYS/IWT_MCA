const mysql= require("mysql");
var connection = mysql.createConnection({
    host:'localhost',
    database: 'details',
    user:'root',
    password:'codes22'
});
  connection.connect(function(error){
    if(error)
    {
        throw error
    }
    else{
        console.log('MySQL database is conneccted');
    }
  });

  module.exports = connection;
const mysql= require("mysql");
var connection = mysql.createConnection({
    host:'localhost',
    database: 'iwt',
    user:'root',
    password:'Basith@1234'
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
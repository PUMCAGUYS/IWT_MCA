const mysql = require("mysql");

const con = mysql.createPool({
    connectionLimit:10,
    host     : process.env.DB_HOST,
    user     : process.env.DB_USER,
    password : process.env.DB_PASS,
    database : process.env.DB_NAME, 
});

exports.view = (req,res)=>{

    con.getConnection((err,connection)=>{
        if(err) throw err
        connection.query("select * from mca",(err,rows)=>{
            connection.release();
            if(!err){
                res.render("home",{rows});
            }
            else{
                console.log("Error in listing data "+err);
            }
        }); 
    });
    
};


exports.adduser = (req,res)=>{
    res.render("adduser");
}

exports.save = (req,res)=>{
    con.getConnection((err,connection)=>{
        if(err) throw err
        const {name,registerNumber,InstitutionalMail,personalMail,mobile,attendance} = req.body;

        connection.query("insert into mca(Name,RegisterNumber,InstitutionalEmail,PersonalEmail,Mobile,attendance)values(?,?,?,?,?,?)",[name,registerNumber,InstitutionalMail,personalMail,mobile,attendance],(err,rows)=>{

        
            connection.release();
            if(!err){
                res.render("adduser",{msg:"User details added successfully"});
            }
            else{
                console.log("Error in listing data "+err);
            }
        }); 
    });
}

exports.edituser = (req,res)=>{
    con.getConnection((err,connection)=>{
        if(err) throw err
        //get Id from url
        let id = req.params.id;
        connection.query("select * from mca where ID = ?",[id],(err,rows)=>{
            connection.release();
            if(!err){
                res.render("edituser",{rows});
            }
            else{
                console.log("Error in listing data "+err);
            }
        }); 
    });
   
}
exports.attendance = (req,res)=>{
    con.getConnection((err,connection)=>{
        if(err) throw err
        //get Id from url
        let id = req.params.id;
        connection.query("select * from mca where ID = ?",[id],(err,rows)=>{
            connection.release();
            if(!err){
                res.render("attendance",{rows});
            }
            else{
                console.log("Error in listing data "+err);
            }
        }); 
    });
   
}

exports.edit = (req,res)=>{
    con.getConnection((err,connection)=>{
        if(err) throw err
        const {name,registerNumber,institutionalMail,personalMail,mobile,attendance} = req.body;
        let id = req.params.id;

        connection.query("update mca set Name = ?, RegisterNumber = ?, InstitutionalEmail = ?, PersonalEmail = ?, Mobile = ? where ID = ?",[name,registerNumber,institutionalMail,personalMail,mobile,id],(err,rows)=>{

        
            connection.release();
            if(!err){

                
                    con.getConnection((err,connection)=>{
                        if(err) throw err
                        //get Id from url
                        let id = req.params.id;
                        connection.query("select * from mca where ID = ?",[id],(err,rows)=>{
                            connection.release();
                            if(!err){
                                
                                res.render("edituser",{rows,msg:"User details updated successfully"});
                            }
                            else{
                                console.log("Error in listing data "+err);
                            }
                        }); 
                    });
                
            }
            else{
                console.log("Error in listing data "+err);
            }
        }); 
    });
}

exports.delete = (req,res)=>{
    con.getConnection((err,connection)=>{
        if(err) throw err
        //Get ID from url
        let id = req.params.id;
        connection.query("delete from mca where ID=?",[id],(err,rows)=>{
            connection.release();
            if(!err){
                res.redirect("/");
                
            }else{
                console.log(err);
            }

        });
    });
};
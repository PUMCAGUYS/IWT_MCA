const express = require("express");
const router=express.Router();
const studentController=require("../controllers/studentsController");

//VIEW ALL RECORD
router.get("/",studentController.view);

//ADD NEW RECORD
router.get("/adduser",studentController.adduser);
router.post("/adduser",studentController.save);

//update RECORD
router.get("/edituser/:id",studentController.edituser);
router.post("/edituser/:id",studentController.edit);

//ADD NEW RECORD
 //router.get("/attendance",studentController.attendance);
 //router.post("/attendance",studentController.save);

//delete records
router.get("/deleteuser/:id",studentController.delete);

module.exports=router;






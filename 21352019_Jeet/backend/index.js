const express = require("express");
var mysql = require("mysql");
var cors = require("cors");

const app = express();
app.use(cors());
const port = 8000;
app.use(express.json());
app.use(
  express.urlencoded({
    extended: true,
  })
);
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "adminjeet",
  database: "attendence",
});

app.get("/students", (req, res) => {
  con.query("SELECT * FROM student", function (err, result, fields) {
    if (err) throw err;
    res.json(result);
  });
});
app.get("/students/:id", (req, res) => {
  con.query(
    "SELECT * FROM student WHERE reg_no = ?",
    [req.params.id],
    function (err, result, fields) {
      if (err) throw err;
      res.json(result);
    }
  );
});
app.post("/students/add", (req, res) => {
  console.log(req.body);
  var sql =
    "UPDATE student SET name = ?, email = ?, mobile = ?, iwt = ?, mcs = ?, big_data = ?, ML = ? WHERE reg_no = ?";
  var values = [
    req.body.data.name,
    req.body.data.email,
    parseInt(req.body.data.mobile),
    parseInt(req.body.data.iwt),
    parseInt(req.body.data.mcs),
    parseInt(req.body.data.bigData),
    parseInt(req.body.data.ml),
    req.body.data.id,
  ];
  con.query(sql, values, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});
app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`);
});

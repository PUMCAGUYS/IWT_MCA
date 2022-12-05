import React, { useContext, useState } from "react";
import { Form } from "react-bootstrap";
import Table from "react-bootstrap/Table";
import { StudentContext } from "../context/StudentContext";
import Link from "next/link";

function TableComponent() {
  const [searchText, setSearchText] = useState();
  const { studentList } = useContext(StudentContext);
  console.log("studentList", studentList);
  const handleSearchText = (e) => {
    setSearchText(e.target.value);
  };
  return (
    <>
      <Form.Control
        type="email"
        placeholder="Search Student"
        onChange={handleSearchText}
      />
      <br />
      <Table striped bordered hover>
        <thead style={{ backgroundColor: "lightgrey" }}>
          <tr>
            <th>Reg NO</th>
            <th>Name</th>
            <th>Institutional Email</th>
            <th>Personal Email</th>
            <th>Mobile</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody style={{ backgroundColor: "white" }}>
          {searchText
            ? studentList
                .filter(
                  (s) =>
                    s.name.toUpperCase().indexOf(searchText.toUpperCase()) > -1
                )
                .map((d) => (
                  <tr>
                    <td>{d.name}</td>
                    <td>{d.reg_no}</td>
                    <td>{d.mobile}</td>
                    <td>{d.email}</td>
                    <td>{d.in_email}</td>
                  </tr>
                ))
            : studentList &&
              studentList.map((d) => (
                <tr>
                  <td>{d.name}</td>
                  <td>{d.reg_no}</td>
                  <td>{d.mobile}</td>
                  <td>{d.email}</td>
                  <td>{d.in_email}</td>
                  <td style={{ backgroundColor: "lightyellow" }}>
                    <Link
                      href={{
                        pathname: "/student/" + d.reg_no,
                        query: { data: JSON.stringify(d) },
                      }}
                    >
                      {" "}
                      <span className="fa fa-arrow-right"></span>
                    </Link>
                  </td>
                </tr>
              ))}
        </tbody>
      </Table>
    </>
  );
}

export default TableComponent;

import React, { createContext, useEffect, useState } from "react";

export const StudentContext = createContext();

export const StudentProvider = (props) => {
  const [studentList, setStudentList] = useState();
  const [studentDetails, setStudentDetails] = useState();
  useEffect(() => {
    fetchStudentDetails();
  }, []);
  const fetchStudentDetails = async () => {
    const request = await fetch("http://localhost:8000/students");
    const students = await request.json();
    setStudentList(students);
  };

  const fetchSingleStudentDetails = async (id) => {
    const request = await fetch(`http://localhost:8000/students/${id}`);
    const detail = await request.json();
    setStudentDetails(detail);
  };

  const updateStudent = async (data) => {
    try {
      const request = await fetch("http://localhost:8000/students/add", {
        method: "POST",
        headers: {
          Authorization: "Bearer ",
          Accept: "application/json",
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          data: data,
        }),
      });
    } catch (e) {
      console.log("Server side authentication failed");
    }
  };

  const contextProps = {
    studentList,
    studentDetails,
    updateStudent,
    fetchSingleStudentDetails,
  };

  return (
    <StudentContext.Provider value={contextProps}>
      {props.children}
    </StudentContext.Provider>
  );
};

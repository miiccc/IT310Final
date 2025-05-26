<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Manager</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
    font-family: 'Open-Sans', sans-serif;
    background-color: #7b4397;
    color: #333;
    padding: 0;
    }



    h1 {
      font-family: 'Open-Sans', sans-serif;
      text-align: center;
      margin-bottom: 30px;
      font-size: 32px;
      color: #fff;
      text-shadow: 1px 1px 4px #000;
    }

    .controls {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-bottom: 25px;
    }

    input[type="text"] {
      padding: 10px;
      border: none;
      border-radius: 6px;
      font-size: 15px;
      width: 180px;
    }

    button {
      padding: 10px 16px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #2980b9;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #ffffff;
      color: #333;
      border-radius: 10px;
      overflow: hidden;
    }

    th, td {
      padding: 14px;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }

    th {
      background-color: #2980b9;
      color: white;
      font-size: 14px;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    /* Popup modal styles */
    /* Modal Styles */
.modal {
  display: none;
  position: fixed;
  z-index: 10;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: white;
  color: #333;
  width: 400px;
  margin: 100px auto;
  padding: 25px 30px 30px;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
  text-align: center;
}

.modal-content h3 {
  margin-bottom: 20px;
}

.modal-content input[type="text"] {
  width: 90%;
  padding: 10px 14px;
  margin: 10px auto;
  font-size: 14px;
  border: 2px solid #ccc;
  border-radius: 8px;
  outline: none;
  display: block;
  background-color: white;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.modal-content input[type="text"]:focus {
  border-color: #3498db;
  box-shadow: 0 0 4px rgba(52, 152, 219, 0.4);
}

.modal-content button {
  width: 45%;
  margin: 10px 5px 0;
  padding: 10px;
  font-weight: bold;
  background-color: #3498db;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.modal-content button:hover {
  background-color: #2980b9;
}

.close {
  position: absolute;
  top: 12px;
  right: 16px;
  color: #888;
  font-size: 22px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover {
  color: #000;
}



    .modal-content button {
      width: 45%;
      margin: 5px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: #000;
    }
  </style>
</head>
<body>

<h1>Student Database (XML)</h1>

<div class="controls">
  <input type="text" id="id" placeholder="ID">
  <input type="text" id="name" placeholder="Name">
  <input type="text" id="course" placeholder="Course">
  <button onclick="openAddModal()">Add</button>
  <button onclick="deleteStudent()">Delete</button>
  <button onclick="searchStudent()">Search</button>
  <button onclick="updateStudent()">Update</button>
</div>

<table id="studentTable">
  <thead>
    <tr><th>ID</th><th>Name</th><th>Course</th></tr>
  </thead>
  <tbody></tbody>
</table>

<!-- Add Student Modal -->
<div id="addModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeAddModal()">&times;</span>
    <h3>Add New Student</h3>
    <input type="text" id="modalId" placeholder="Student ID">
    <input type="text" id="modalName" placeholder="Name">
    <input type="text" id="modalCourse" placeholder="Course">
    <button onclick="confirmAdd()">Add</button>
    <button onclick="closeAddModal()">Cancel</button>
  </div>
</div>

<script>
let xmlData;

// Load XML data
fetch('students.xml')
  .then(res => res.text())
  .then(str => (new window.DOMParser()).parseFromString(str, "text/xml"))
  .then(data => {
    xmlData = data;
    displayStudents();
  });

// Show students in table
function displayStudents() {
  const tbody = document.querySelector("#studentTable tbody");
  tbody.innerHTML = "";
  const students = xmlData.getElementsByTagName("student");
  for (let student of students) {
    const id = student.getElementsByTagName("id")[0].textContent;
    const name = student.getElementsByTagName("name")[0].textContent;
    const course = student.getElementsByTagName("course")[0].textContent;
    const row = `<tr><td>${id}</td><td>${name}</td><td>${course}</td></tr>`;
    tbody.innerHTML += row;
  }
}

// Modal controls
function openAddModal() {
  document.getElementById("addModal").style.display = "block";
}

function closeAddModal() {
  document.getElementById("addModal").style.display = "none";
}

// Confirm Add from Modal
function confirmAdd() {
  const id = document.getElementById("modalId").value;
  const name = document.getElementById("modalName").value;
  const course = document.getElementById("modalCourse").value;

  const student = xmlData.createElement("student");
  student.innerHTML = `
    <id>${id}</id>
    <name>${name}</name>
    <course>${course}</course>
  `;
  xmlData.documentElement.appendChild(student);
  displayStudents();
  alert("Student added successfully.");
  closeAddModal();
}

// Delete student
function deleteStudent() {
  const id = document.getElementById("id").value;
  const students = xmlData.getElementsByTagName("student");
  for (let i = 0; i < students.length; i++) {
    if (students[i].getElementsByTagName("id")[0].textContent === id) {
      xmlData.documentElement.removeChild(students[i]);
      alert("Student deleted successfully.");
      displayStudents();
      return;
    }
  }
  alert("Student not found.");
}

// Search student
function searchStudent() {
  const id = document.getElementById("id").value;
  const students = xmlData.getElementsByTagName("student");
  for (let student of students) {
    if (student.getElementsByTagName("id")[0].textContent === id) {
      document.getElementById("name").value = student.getElementsByTagName("name")[0].textContent;
      document.getElementById("course").value = student.getElementsByTagName("course")[0].textContent;
      return;
    }
  }
  alert("Student not found.");
}

// Update student
function updateStudent() {
  const id = document.getElementById("id").value;
  const name = document.getElementById("name").value;
  const course = document.getElementById("course").value;
  const students = xmlData.getElementsByTagName("student");

  for (let student of students) {
    if (student.getElementsByTagName("id")[0].textContent === id) {
      student.getElementsByTagName("name")[0].textContent = name;
      student.getElementsByTagName("course")[0].textContent = course;
      alert("Student updated successfully.");
      displayStudents();
      return;
    }
  }
  alert("Student not found.");
}
</script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $xml = new DOMDocument();
    $xml->load('cict.xml');

    $students = $xml->getElementsByTagName('Students')->item(0);

    $newStudent = $xml->createElement('student');

    $id = $xml->createElement('id', $_POST['id']);
    $name = $xml->createElement('name', $_POST['name']);
    $course = $xml->createElement('course', $_POST['course']);

    $newStudent->appendChild($id);
    $newStudent->appendChild($name);
    $newStudent->appendChild($course);

    $students->appendChild($newStudent);

    $xml->save('cict.xml');
    header("Location: index.php");
}
?>

<form method="POST">
    ID: <input type="text" name="id" required><br>
    Name: <input type="text" name="name" required><br>
    Course: <input type="text" name="course" required><br>
    <input type="submit" value="Add Student">
</form>

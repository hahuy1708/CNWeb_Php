<?php

include_once __DIR__ . '/../Model/Database.php';
include_once __DIR__ . '/../Model/M_Student.php';

class Ctrl_Student {
    public function invoke() {
        global $link;
        $modelStudent = new Model_Student($link);


        if (isset($_GET['add'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $university = $_POST['university'];
                $modelStudent->insertStudent($name, $age, $university);
                header("Location: C_Student.php");
                exit;
            }
            include_once(__DIR__ . '/../View/InsertStudent.php');
        } elseif (isset($_GET['stid'])) {
            $student = $modelStudent->getStudentDetail($_GET['stid']);
            include_once(__DIR__ . '/../View/StudentDetail.php');
        } else {
            $studentList = $modelStudent->getAllStudents();
            include_once(__DIR__ . '/../View/StudentList.php');
        }

    }
}

$C_Student = new Ctrl_Student();
$C_Student->invoke();

?>
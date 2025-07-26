<?php
// Controller/C_Student.php
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
        } elseif (isset($_GET['delete'])) {
            if (isset($_GET['stid'])) {
                $stid = $_GET['stid'];
                $student = $modelStudent->getStudentDetail($stid);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
                    $modelStudent->deleteStudent($stid);
                    header("Location: C_Student.php");
                    exit;
                }
                include_once(__DIR__ . '/../View/DeleteStudent.php');
            } else {
                $studentList = $modelStudent->getAllStudents();
                include_once(__DIR__ . '/../View/FormDelete.php');
            }
        } elseif (isset($_GET['update'])) {
            if (isset($_GET['stid'])) {
                $stid = $_GET['stid'];
                $student = $modelStudent->getStudentDetail($stid);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $university = $_POST['university'];
                    $modelStudent->updateStudent($stid, $name, $age, $university);
                    header("Location: C_Student.php");
                    exit;
                }
                include_once(__DIR__ . '/../View/UpdateStudent.php');
            } else {
                $studentList = $modelStudent->getAllStudents();
                include_once(__DIR__ . '/../View/FormUpdate.php');
            }

        } elseif (isset($_GET['stid'])) {
            $student = $modelStudent->getStudentDetail($_GET['stid']);
            include_once(__DIR__ . '/../View/StudentDetail.php');
        }  
        
         elseif (isset($_GET['search'])) {
    $studentList = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
        $ID = $_POST['ID'] ?? '';
        $name = $_POST['name'] ?? '';
        $university = $_POST['university'] ?? '';
        $age = $_POST['age'] ?? '';

        $studentList = $modelStudent->searchStudent($ID, $name, $age, $university); 
    }

    include_once(__DIR__ . '/../View/SearchStudent.php');
}


        else {
            $studentList = $modelStudent->getAllStudents();
            include_once(__DIR__ . '/../View/StudentList.php');
        }
    }
}

$C_Student = new Ctrl_Student();
$C_Student->invoke();

?>
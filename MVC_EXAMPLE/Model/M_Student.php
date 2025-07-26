<?php
include_once 'E_Student.php';
require_once 'Database.php';

class Model_Student {
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function getAllStudents() {
        $sql = "SELECT * FROM sinhvien";
        $result = mysqli_query($this->link, $sql);
        $students = []; 
        while ($row = mysqli_fetch_assoc($result)) {
            $students[] = new Entity_Student(
                $row['id'],
                $row['name'],
                $row['age'],
                $row['university']
            );
        }
        return $students;
    }

    public function getStudentDetail($stid) {
        $allStudent = $this->getAllStudents();
        foreach ($allStudent as $student) {
            if ($student->id == $stid) return $student;
        }
        return null;
    }
    public function insertStudent($name, $age, $university) {
        $sql = "INSERT INTO sinhvien (name, age, university) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "sis", $name, $age, $university);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function updateStudent($stid, $name, $age, $university){
        $sql = "UPDATE sinhvien SET name=?,age=?,university=? WHERE id=?";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "sisi", $name, $age, $university, $stid);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function deleteStudent($stid){
        $sql = "DELETE FROM sinhvien WHERE id=?";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "i", $stid);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function searchStudent($ID, $Name, $Age, $University){
    $sql = "SELECT * FROM sinhvien WHERE 1";

    if (!empty($ID)) {
        $sql .= " AND id = " . intval($ID);  
    }
    if (!empty($Name)) {
        $sql .= " AND name LIKE '%" . mysqli_real_escape_string($this->link, $Name) . "%'";
    }
    if (!empty($Age)) {
        $sql .= " AND age = " . intval($Age);
    }
    if (!empty($University)) {
        $sql .= " AND university LIKE '%" . mysqli_real_escape_string($this->link, $University) . "%'";
    }

    $result = mysqli_query($this->link, $sql);
    $students = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $students[] = new Entity_Student(
            $row['id'],
            $row['name'],
            $row['age'],
            $row['university']
        );
    }
    return $students;
}
}
?>

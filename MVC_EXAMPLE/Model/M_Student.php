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
        $students = []; // fix: khởi tạo trước
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
}
?>

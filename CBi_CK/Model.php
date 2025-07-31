<?php
include_once 'E_Student.php';
require_once 'Database.php';

class Model {
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }
    
    public function getAll<EntityPlural>() {
        $sql = "SELECT * FROM <table>";
        $result = mysqli_query($this->link, $sql);
        $list = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $list[] = new Entity_<EntityName>(
                $row['field1'],
                $row['field2'],
                ...
            );
        }
        return $list;
    }

    public function get<EntityName>Detail($id) {
        $sql = "SELECT * FROM <table> WHERE id = ?";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        return new Entity_<EntityName>($row['...'], ...);
    }

    public function insert<EntityName>($field1, $field2, ...) {
        $sql = "INSERT INTO <table> (field1, field2, ...) VALUES (?, ?, ...)";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "...", $field1, $field2, ...);
        return mysqli_stmt_execute($stmt);
    }

    public function update<EntityName>($id, $field1, $field2, ...) {
        $sql = "UPDATE <table> SET field1=?, field2=?, ... WHERE id=?";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "...i", $field1, $field2, ..., $id);
        return mysqli_stmt_execute($stmt);
    }

    public function delete<EntityName>($id) {
        $sql = "DELETE FROM <table> WHERE id=?";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        return mysqli_stmt_execute($stmt);
    }
}

}
?>

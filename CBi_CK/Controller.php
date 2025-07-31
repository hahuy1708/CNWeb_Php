<?php
include_once __DIR__ . '/../Model/Database.php';
include_once __DIR__ . '/../Model/M_<EntityName>.php';

class Ctrl_<EntityName> {
    public function invoke() {
        global $link;
        $model = new Model_<EntityName>($link);

        if (isset($_GET['add'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
                // Lấy dữ liệu từ form
                $field1 = $_POST['field1'];
                $field2 = $_POST['field2'];
                ...
                $model->insert<EntityName>($field1, $field2, ...);
                header("Location: C_<EntityName>.php");
                exit;
            }
            include_once(__DIR__ . '/../View/Insert<EntityName>.php');
        }

        elseif (isset($_GET['delete'])) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $item = $model->get<EntityName>Detail($id);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
                    $model->delete<EntityName>($id);
                    header("Location: C_<EntityName>.php");
                    exit;
                }
                include_once(__DIR__ . '/../View/Delete<EntityName>.php');
            } else {
                $list = $model->getAll<EntityNamePlural>();
                include_once(__DIR__ . '/../View/FormDelete<EntityName>.php');
            }
        }

        elseif (isset($_GET['update'])) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $item = $model->get<EntityName>Detail($id);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
                    $field1 = $_POST['field1'];
                    $field2 = $_POST['field2'];
                    ...
                    $model->update<EntityName>($id, $field1, $field2, ...);
                    header("Location: C_<EntityName>.php");
                    exit;
                }
                include_once(__DIR__ . '/../View/Update<EntityName>.php');
            } else {
                $list = $model->getAll<EntityNamePlural>();
                include_once(__DIR__ . '/../View/FormUpdate<EntityName>.php');
            }
        }

        elseif (isset($_GET['id'])) {
            $item = $model->get<EntityName>Detail($_GET['id']);
            include_once(__DIR__ . '/../View/<EntityName>Detail.php');
        }

        elseif (isset($_GET['search'])) {
            $list = [];
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
                $searchField1 = $_POST['field1'] ?? '';
                $searchField2 = $_POST['field2'] ?? '';
                ...
                $list = $model->search<EntityName>($searchField1, $searchField2, ...);
            }
            include_once(__DIR__ . '/../View/Search<EntityName>.php');
        }

        else {
            $list = $model->getAll<EntityNamePlural>();
            include_once(__DIR__ . '/../View/<EntityName>List.php');
        }
    }
}

$C_Entity = new Ctrl_<EntityName>();
$C_Entity->invoke();
?>

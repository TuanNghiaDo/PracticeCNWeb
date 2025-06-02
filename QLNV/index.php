<?php
require_once('./app/config/config.php');
require_once(APP_ROOT . '/app/libs/DbConnection.php');
require_once(APP_ROOT . '/app/controllers/HomeController.php');
require_once(APP_ROOT . '/app/controllers/EmployeeController.php');
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$homeController = new HomeController();
$employeeController = new EmployeeController();
if ($controller == 'home') {
    $homeController->index();
} elseif ($controller == 'addEmployee') {
    $employeeController->add();
} elseif ($controller == 'editEmployee') {
    $employeeController->edit($id);
} elseif ($controller == 'removeEmployee' && !isset($_POST['cancel'])) {
    $employeeController->remove($id);
}

if (isset($_POST['create'])) {
    $employeeController->create();
} elseif (isset($_POST['update'])) {
    $employeeController->update();
} elseif (isset($_POST['remove'])) {
    $employeeController->delete();
} elseif (isset($_POST['cancel'])) {
    header('Location: index.php?controller=home');
}

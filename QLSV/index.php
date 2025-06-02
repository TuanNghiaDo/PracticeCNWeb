<?php
require_once('./app/config/config.php');
require_once(APP_ROOT . '/app/libs/DbConnection.php');
require_once(APP_ROOT . '/app/controllers/HomeController.php');
require_once(APP_ROOT . '/app/controllers/StudentController.php'); // Ensure this file defines the studentController class
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$homeController = new HomeController();
$studentController = new StudentController();
if ($controller == 'home') {
    $homeController->index();
} elseif ($controller == 'addStudent') {
    $studentController->add();
} elseif ($controller == 'editStudent') {
    $studentController->edit($id);
} elseif ($controller == 'removeStudent') {
    $studentController->remove($id);
}

if (isset($_POST['create'])) {
    $studentController->create();
} elseif (isset($_POST['update'])) {
    $studentController->update();
} elseif (isset($_POST['remove'])) {
    $studentController->delete();
}

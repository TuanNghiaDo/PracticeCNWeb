<?php
require_once 'app/config/config.php';
require_once APP_ROOT . '/app/controllers/HomeController.php';
require_once APP_ROOT . '/app/controllers/BookController.php';
$homeController = new HomeController();
$bookController = new BookController();
$id = isset($_GET['id']) ? $_GET['id'] : null;
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
if ($controller == 'home') {
    $homeController->index();
} elseif ($controller == 'addBook') {
    $bookController->includeFileAdd();
} elseif ($controller == 'editBook') {
    $bookController->includeFileUpdate($id);
} elseif ($controller == 'removeBook') {
    $bookController->includeFileDelete($id);
}

if (isset($_POST['create'])) {
    $bookController->add();
} elseif (isset($_POST['update'])) {
    $bookController->update();
} elseif (isset($_POST['remove'])) {
    $bookController->delete();
}

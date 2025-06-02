<?php
require_once('./app/config/config.php');
require_once(APP_ROOT . '/app/libs/DbConnection.php');
require_once(APP_ROOT . '/app/controllers/HomeController.php');
require_once(APP_ROOT . '/app/controllers/DishesController.php'); // Ensure this file defines the dishesController class
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$homeController = new HomeController();
$dishesController = new DishesController();
if ($controller == 'home') {
    $homeController->index();
} elseif ($controller == 'addDishes') {
    $dishesController->add();
} elseif ($controller == 'editDishes') {
    $dishesController->edit($id);
} elseif ($controller == 'removeDishes') {
    $dishesController->remove($id);
}

if (isset($_POST['create'])) {
    $dishesController->create();
} elseif (isset($_POST['update'])) {
    $dishesController->update();
} elseif (isset($_POST['remove'])) {
    $dishesController->delete();
}

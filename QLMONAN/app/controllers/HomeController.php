<?php
require_once APP_ROOT . '/app/services/DishesService.php';
class HomeController
{
    public function index()
    {
        $dishesService = new DishesService();
        $dishess = $dishesService->getAllDishes();
        include APP_ROOT . '/app/views/home/index.php';
    }
}

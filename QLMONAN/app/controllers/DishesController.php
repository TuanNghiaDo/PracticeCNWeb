<?php
require_once APP_ROOT . '/app/services/DishesService.php';
require_once APP_ROOT . '/app/models/Dishes.php';
class DishesController
{
    private $dishesService;
    public function __construct()
    {
        $this->dishesService = new DishesService();
    }

    public function add()
    {
        include APP_ROOT . '/app/views/dishes/add.php';
    }

    public function create()
    {
        $name = $_POST['name'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $this->dishesService->save($name, $category, $description);
        header('Location: index.php?controller=home');
    }

    public function edit($id)
    {
        $dishes = $this->dishesService->getDishesById($id);
        include APP_ROOT . '/app/views/dishes/update.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $dishes = new Dishes($id, $name, $category, $description);
        $this->dishesService->update($dishes);
        header('Location: index.php?controller=home');
    }

    public function remove($id)
    {
        $dishes = $this->dishesService->getDishesById($id);
        include APP_ROOT . '/app/views/dishes/delete.php';
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->dishesService->delete($id);
        header('Location: index.php?controller=home');
    }
}

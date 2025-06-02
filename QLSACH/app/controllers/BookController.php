<?php
class BookController
{
    private $bookService;

    public function __construct()
    {
        $this->bookService = new BookService();
    }

    public function includeFileAdd()
    {
        include APP_ROOT . '/app/views/book/add.php';
    }

    public function add()
    {
        $name = $_POST['name'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $this->bookService->add($name, $author, $publisher, $category, $price);
        header('Location: ?controller=home');
    }

    public function includeFileUpdate($id)
    {
        $book = $this->bookService->getBookById($id);
        include APP_ROOT . '/app/views/book/update.php';
    }

    public function includeFileDelete($id)
    {
        $book = $this->bookService->getBookById($id);
        include APP_ROOT . '/app/views/book/delete.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $this->bookService->update($id, $name, $author, $publisher, $category, $price);
        header('Location: ?controller=home');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->bookService->delete($id);
        header('Location: ?controller=home');
    }
}

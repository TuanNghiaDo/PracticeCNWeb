<?php
require_once APP_ROOT . '/app/services/BookService.php';
require_once APP_ROOT . '/app/models/Book.php';
class HomeController
{
    private $bookService;
    public function __construct()
    {
        $this->bookService = new BookService();
    }

    public function index()
    {
        $books = $this->bookService->getAllBooks();
        include APP_ROOT . '/app/views/home/index.php';
    }
}

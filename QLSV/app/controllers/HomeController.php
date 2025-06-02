<?php
require_once APP_ROOT . '/app/services/StudentService.php';
class HomeController
{
    public function index()
    {
        $studentService = new StudentService();
        $students = $studentService->getAllStudents();
        include APP_ROOT . '/app/views/home/index.php';
    }
}

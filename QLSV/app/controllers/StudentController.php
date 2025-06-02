<?php
require_once APP_ROOT . '/app/services/StudentService.php';
require_once APP_ROOT . '/app/models/Student.php';
class StudentController
{
    private $studentService;
    public function __construct()
    {
        $this->studentService = new StudentService();
    }

    public function add()
    {
        include APP_ROOT . '/app/views/student/add.php';
    }

    public function create()
    {
        $name = $_POST['name'];
        $class = $_POST['class'];
        $grade = $_POST['grade'];
        $this->studentService->save($name, $class, $grade);
        header('Location: index.php?controller=home');
    }

    public function edit($id)
    {
        $student = $this->studentService->getstudentById($id);
        include APP_ROOT . '/app/views/student/update.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $grade = $_POST['grade'];
        $student = new Student($id, $name, $class, $grade);
        $this->studentService->update($student);
        header('Location: index.php?controller=home');
    }

    public function remove($id)
    {
        $student = $this->studentService->getStudentById($id);
        include APP_ROOT . '/app/views/student/delete.php';
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->studentService->delete($id);
        header('Location: index.php?controller=home');
    }
}

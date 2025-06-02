<?php
require_once APP_ROOT . '/app/services/EmployeeService.php';
class HomeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployees();
        include APP_ROOT . '/app/views/home/index.php';
    }
}

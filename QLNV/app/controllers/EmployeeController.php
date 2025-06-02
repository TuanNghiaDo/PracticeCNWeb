<?php
require_once APP_ROOT . '/app/services/EmployeeService.php';
require_once APP_ROOT . '/app/models/Employee.php';
require_once APP_ROOT . '/app/services/RoomService.php';
class EmployeeController
{
    private $employeeService;
    private $roomService;
    public function __construct()
    {
        $this->employeeService = new EmployeeService();
        $this->roomService = new RoomService();
    }

    public function add()
    {
        $rooms = $this->roomService->getAllRooms();
        include APP_ROOT . '/app/views/employee/add.php';
    }

    public function create()
    {
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $room = $_POST['room'];
        $this->employeeService->save($name, $birthday, $room);
        header('Location: index.php?controller=home');
    }

    public function edit($id)
    {
        $rooms = $this->roomService->getAllRooms();
        $employee = $this->employeeService->getEmployeeById($id);
        include APP_ROOT . '/app/views/employee/update.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $room = $_POST['room'];
        $employee = new Employee($id, $name, $birthday, $room);
        $this->employeeService->update($employee);
        header('Location: index.php?controller=home');
    }

    public function remove($id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        $room = $this->roomService->getRoomById($employee['RoomId']);
        include APP_ROOT . '/app/views/employee/delete.php';
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->employeeService->delete($id);
        header('Location: index.php?controller=home');
    }
}

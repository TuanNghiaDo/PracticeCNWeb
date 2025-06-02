<?php
require_once APP_ROOT . '/app/models/Employee.php';

class EmployeeService
{
    private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = new DbConnection();
    }
    public function getAllEmployees()
    {
        $employees = [];
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM employee";
            $statement = $connection->query($sql);
            while ($row = $statement->fetch()) {
                $employee = new Employee($row['id'], $row['name'], $row['birthday'], $row['RoomId']);
                $employees[] = $employee;
            }
            return $employees;
        }
    }

    public function getEmployeeById($id)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM employee WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$id]);
                return $statement->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }


    public function save($name, $birthday, $room)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "INSERT INTO employee (name, birthday, RoomId) VALUES (?, ?, ?)";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$name, $birthday, $room]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function update($employee)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "UPDATE employee SET name = ?, birthday = ?, RoomId = ? WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$employee->getName(), $employee->getBirthday(), $employee->getRoomId(), $employee->getId()]);
                return true;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function delete($id)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "DELETE FROM employee WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$id]);
                return true;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}

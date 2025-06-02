<?php
require_once APP_ROOT . '/app/models/Student.php';

class StudentService
{
    private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = new DbConnection();
    }
    public function getAllStudents()
    {
        $students = [];
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM students";
            $statement = $connection->query($sql);
            while ($row = $statement->fetch()) {
                $student = new Student($row['id'], $row['name'], $row['class'], $row['grade']);
                $students[] = $student;
            }
            return $students;
        }
    }

    public function getStudentById($id)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM students WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$id]);
                return $statement->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }


    public function save($name, $class, $grade)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "INSERT INTO students (name, class, grade) VALUES (?, ?, ?)";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$name, $class, $grade]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function update($student)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "UPDATE students SET name = ?, class = ?, grade = ? WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$student->getName(), $student->getClass(), $student->getGrade(), $student->getId()]);
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
            $sql = "DELETE FROM students WHERE id = ?";
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

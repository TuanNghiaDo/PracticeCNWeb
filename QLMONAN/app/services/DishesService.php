<?php
require_once APP_ROOT . '/app/libs/DbConnection.php';
require_once APP_ROOT . '/app/models/Dishes.php';

class DishesService
{
    private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = new DbConnection();
    }
    public function getAlldishes()
    {
        $dishess = [];
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM dishes";
            $statement = $connection->query($sql);
            while ($row = $statement->fetch()) {
                $dishes = new Dishes($row['id'], $row['name'], $row['category'], $row['description']);
                $dishess[] = $dishes;
            }
            return $dishess;
        }
    }

    public function getDishesById($id)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM dishes WHERE id = ?";
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
            $sql = "INSERT INTO dishes (name, class, grade) VALUES (?, ?, ?)";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$name, $class, $grade]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function update($dishe)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "UPDATE dishes SET name = ?, class = ?, grade = ? WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$dishe->getName(), $dishe->getClass(), $dishe->getGrade(), $dishe->getId()]);
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
            $sql = "DELETE FROM dishes WHERE id = ?";
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

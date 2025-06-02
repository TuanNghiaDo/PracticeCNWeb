<?php
require_once APP_ROOT . '/app/models/Book.php';
require_once APP_ROOT . '/app/libs/DbConnection.php';
class BookService
{
    private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = new DbConnection();
    }

    public function getBookById($id)
    {
        $sql = "SELECT * FROM books WHERE id = ?";
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$id]);
                return $statement->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                return null;
            }
        } else {
            echo "Error: Connection failed";
            return null;
        }
    }
    public function getAllBooks()
    {
        $sql = "SELECT * FROM books";
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            try {
                $statement = $connection->prepare($sql);
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                return null;
            }
        } else {
            echo "Error: Connection failed";
            return null;
        }
    }

    public function add($name, $author, $publisher, $category, $price)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "INSERT INTO books (name, author, publisher, category, price) VALUES (?, ?, ?, ?, ?)";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$name, $author, $publisher, $category, $price]);
                return $connection->lastInsertId();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function update($id, $name, $author, $publisher, $category, $price)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "UPDATE books SET name = ?, author = ?, publisher = ?, category = ?, price = ? WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$name, $author, $publisher, $category, $price, $id]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function delete($id)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "DELETE FROM books WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$id]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}

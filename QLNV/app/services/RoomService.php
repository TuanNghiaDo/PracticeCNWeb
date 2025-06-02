<?php
require_once APP_ROOT . '/app/models/Room.php';
class RoomService
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DbConnection();
    }

    public function getAllRooms()
    {
        $rooms = [];
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM phong";
            $statement = $connection->query($sql);
            while ($row = $statement->fetch()) {
                $room = new Room($row['id'], $row['name']);
                $rooms[] = $room;
            }
            return $rooms;
        }
    }

    public function getRoomById($id)
    {
        $connection = $this->dbConnection->getConnection();
        if ($connection) {
            $sql = "SELECT * FROM phong WHERE id = ?";
            try {
                $statement = $connection->prepare($sql);
                $statement->execute([$id]);
                return $statement->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}

<?php
class Employee
{
    private $id;
    private $name;
    private $birthday;
    private $roomId;

    public function __construct($id, $name, $birthday, $roomId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->roomId = $roomId;
        $this->birthday = $birthday;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getRoomId()
    {
        return $this->roomId;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getRoomName()
    {
        $roomService = new RoomService();
        $room = $roomService->getRoomById($this->roomId);
        return $room['name'] ?? 'Unknown';
    }
}

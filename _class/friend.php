<?php
class Friend {

    private $name;
    private $tlf;
    private $address;
    private $image = "";
    private $hobby = "";
    private $friends = [];
    private $id = 0;
    public static $test;

    function __construct($id, $newName, $tlf, $address, $hobby)
    {
        $this->id = $id;
        $this->hobby = $hobby;
        $this->name = $newName;
        $this->tlf = $tlf;
        $this->address = $address;
    }

    public function getName()
    {
        return ucfirst($this->name);
    }
    public function getTlf()
    {
        return $this->tlf;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getHobby()
    {
        return $this->hobby;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getFriends()
    {
        return $this->friends;
    }

    public function setImage($path)
    {
        $this->image = $path;
    }

    public function setFriend($friend)
    {
        array_push($this->friends, $friend);
    }

}

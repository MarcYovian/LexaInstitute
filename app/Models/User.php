<?php

class User
{
    private $nip;
    private $name;
    private $email;
    private $alamat;
    private $image_path;

    public function __construct($nip, $name, $email, $alamat, $image_path)
    {
        $this->nip = $nip;
        $this->name = $name;
        $this->email = $email;
        $this->alamat = $alamat;
        $this->image_path = $image_path;
    }
    public function getNip()
    {
        return $this->nip;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function getImage_path()
    {
        return $this->image_path;
    }

    public function setImage_path($image_path)
    {
        $this->image_path = $image_path;
    }
}

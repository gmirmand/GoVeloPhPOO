<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:33
 */

namespace govelo;


class user
{
    private $id;
    private $subDate;
    private $mail;
    private $surname;
    private $name;
    private $phone;
    private $birth;
    private $img;
    private $sex;
    private $psw;
    private $id_verified;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setSubDate($subDate)
    {
        $this->subDate = $subDate;
    }

    function getSubDate()
    {
        return $this->subDate;
    }

    function setMail($mail)
    {
        $this->mail = $mail;
    }

    function getMail()
    {
        return $this->mail;
    }

    function setSurname($surname)
    {
        $this->surname = $surname;
    }

    function getSurname()
    {
        return $this->surname;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function setBirth($birth)
    {
        $this->birth = $birth;
    }

    function getBirth()
    {
        return $this->birth;
    }

    function setImg($img)
    {
        $this->img = $img;
    }

    function getImg()
    {
        return $this->img;
    }

    function setSex($sex)
    {
        $this->sex = $sex;
    }

    function getSex()
    {
        return $this->sex;
    }

    function setPsw($psw)
    {
        $this->psw = $psw;
    }

    function getPsw()
    {
        return $this->psw;
    }

    function setId_verified($id_verified)
    {
        $this->id_verified = $id_verified;
    }

    function getId_verified()
    {
        return $this->id_verified;
    }

}
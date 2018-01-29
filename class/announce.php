<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:43
 */

namespace govelo;


class announce
{
    private $id;
    private $title;
    private $img;
    private $desc;
    private $price;
    private $town;
    private $address;
    private $id_style;
    private $id_user;
    private $locker;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setImg($img)
    {
        $this->img = $img;
    }

    function getImg()
    {
        return $this->img;
    }

    function setDesc($desc)
    {
        $this->desc = $desc;
    }

    function getDesc()
    {
        return $this->desc;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setTown($town)
    {
        $this->town = $town;
    }

    function getTown()
    {
        return $this->town;
    }

    function setAdress($adress)
    {
        $this->adress = $adress;
    }

    function getAddress()
    {
        return $this->address;
    }

    function setId_style($id_style)
    {
        $this->id_style = $id_style;
    }

    function getId_style()
    {
        return $this->id_style;
    }

    function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }

    function getId_user()
    {
        return $this->id_user;
    }

    function setLocker($locker)
    {
        $this->locker = $locker;
    }

    function getLocker()
    {
        return $this->locker;
    }

}
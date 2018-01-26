<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:49
 */

namespace govelo;


class medal
{
    private $id;
    private $name;
    private $desc;
    private $img;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setDesc($desc)
    {
        $this->desc = $desc;
    }

    function getDesc()
    {
        return $this->desc;
    }

    function setImg($img)
    {
        $this->img = $img;
    }

    function getImg()
    {
        return $this->img;
    }

}
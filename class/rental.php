<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:46
 */

namespace govelo;


class rental
{
    private $id;
    private $id_announce;
    private $id_owner;
    private $id_tenant;
    private $start;
    private $end;
    private $price;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setId_announce($id_announce)
    {
        $this->id_announce = $id_announce;
    }

    function getId_announce()
    {
        return $this->id_announce;
    }

    function setId_owner($id_owner)
    {
        $this->id_owner = $id_owner;
    }

    function getId_owner()
    {
        return $this->id_owner;
    }

    function setId_tenant($id_tenant)
    {
        $this->id_tenant = $id_tenant;
    }

    function getId_tenant()
    {
        return $this->id_tenant;
    }

    function setStart($start)
    {
        $this->start = $start;
    }

    function getStart()
    {
        return $this->start;
    }

    function setEnd($end)
    {
        $this->end = $end;
    }

    function getEnd()
    {
        return $this->end;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }

}
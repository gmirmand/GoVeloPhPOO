<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:48
 */

namespace govelo;


class calendar
{
    private $id;
    private $start;
    private $end;
    private $id_announce;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
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

    function setId_announce($id_announce)
    {
        $this->id_announce = $id_announce;
    }

    function getId_announce()
    {
        return $this->id_announce;
    }

}
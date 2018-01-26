<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:53
 */

namespace govelo;


class verified
{
    private $id;
    private $scan_id;
    private $scan_rc;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setScan_id($scan_id)
    {
        $this->scan_id = $scan_id;
    }

    function getScan_id()
    {
        return $this->scan_id;
    }

    function setScan_rc($scan_rc)
    {
        $this->scan_rc = $scan_rc;
    }

    function getScan_rc()
    {
        return $this->scan_rc;
    }

}
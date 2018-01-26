<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:52
 */

namespace govelo;


class style
{
    private $id;
    private $style;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setStyle($style)
    {
        $this->style = $style;
    }

    function getStyle()
    {
        return $this->style;
    }


}
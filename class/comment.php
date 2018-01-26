<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 26/01/2018
 * Time: 17:49
 */

namespace govelo;


class comment
{
    private $id;
    private $note;
    private $comment;
    private $id_author;
    private $id_receiver;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setNote($note)
    {
        $this->note = $note;
    }

    function getNote()
    {
        return $this->note;
    }

    function setComment($comment)
    {
        $this->comment = $comment;
    }

    function getComment()
    {
        return $this->comment;
    }

    function setId_author($id_author)
    {
        $this->id_author = $id_author;
    }

    function getId_author()
    {
        return $this->id_author;
    }

    function setId_receiver($id_receiver)
    {
        $this->id_receiver = $id_receiver;
    }

    function getId_receiver()
    {
        return $this->id_receiver;
    }

}
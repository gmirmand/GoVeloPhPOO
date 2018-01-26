<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 20/01/2018
 * Time: 17:55
 */

namespace govelo;

foreach (glob("class/*.php") as $filename) {
    include $filename;
}


class globalFunction
{
//    Variable singleton
    private static $_instance;


//     Instanciation ou de récupéreration de l'instance unique
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new globalFunction();
        }
        return self::$_instance;
    }

//    Ajouter une annonce
    function setAnnounce($id, $title, $img, $desc, $price, $town, $adress, $id_style, $id_user, $locker)
    {
        $annonce = new announce();
        $annonce->setId($id);
        $annonce->setTitle($title);
        $annonce->setImg($img);
        $annonce->setDesc($desc);
        $annonce->setPrice($price);
        $annonce->setTown($town);
        $annonce->setAdress($adress);
        $annonce->setId_style($id_style);
        $annonce->setId_user($id_user);
        $annonce->setLocker($locker);
        return $annonce;
    }

    function getAnnounce(announce $annonce)
    {

    }
}

$globalFunction = new globalFunction();





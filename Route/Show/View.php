<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 30/01/2018
 * Time: 11:15 PM
 */

namespace Route\Show;


class View
{
    public static function Process(string $ViewPath,array $Viewbag = array())
    {
        $ViewPath=str_replace('.',DIRECTORY_SEPARATOR,"$ViewPath");
        $FullViewPath=VIEW.$ViewPath.".php";
        if (file_exists($FullViewPath)&&is_readable($FullViewPath))
        {
            extract($Viewbag);
            include $FullViewPath;
        }

    }
}
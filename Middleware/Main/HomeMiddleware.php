<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 17/03/2018
 * Time: 02:40 PM
 */

namespace Middleware\Main;

use Middleware\Important\Security;

class HomeMiddleware
{
    protected $Security;
    public function __construct()
    {
        $this->Security= new Security();
    }

    public function Index()
    {
        return ['Status'=>true];
    }
    public function Aboutus()
    {
        return ['Status'=>true];
    }
    public function Post(string $QuerryString)
    {
        return ['Status'=>true];
    }
}
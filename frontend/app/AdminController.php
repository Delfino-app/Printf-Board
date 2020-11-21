<?php

namespace App;



/**
 * Class Coffee MVC :: CONTROLLER
 * @package Test
 */
class AdminController
{
    /**
     * Coffee constructor.
     */
    public function __construct()
    {

    }

    public function entrar(){

       $op = new \CoffeeCode\Optimizer\Optimizer();

       echo $op->optimize(
           "Entrar | PrintfBoard",
           "Painel Administrativo",
           BASE,
           BASE."/img/primary.jpg"
       )->render();

       include __DIR__."/../views/adminLogin.php";
    }
}
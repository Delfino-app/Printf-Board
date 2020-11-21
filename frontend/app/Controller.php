<?php

namespace App;



/**
 * Class Coffee MVC :: CONTROLLER
 * @package Test
 */
class Controller
{
    /**
     * Coffee constructor.
     */
    public function __construct()
    {
       # $url = BASE;

        #echo "<h1>Router @CoffeeCode</h1>";
        #echo "<nav>
            #<a href='{$url}'>Home</a>
            #<a href='{$url}/edit/" . rand(44, 244) . "'>Edit</a>
            #<a href='{$url}/error/'>Error</a>
       # </nav>";
    }

    /**
     * @param array $data
     */
    public function home(array $data): void
    {
        $linkServico = array(

            "frist" => BASE."/avaliacao-e-gestao-ambiental"
        );


        $op = new \CoffeeCode\Optimizer\Optimizer();

        echo $op->optimize(
            "PrintfBoard | Gestão de Projectos",
            "Descrição",
            BASE,
            BASE."/img/site/primary.jpg"
        )->render();

        include __DIR__."/../views/home.php";
       # echo "<h3>", __METHOD__, "::", $_SERVER["REQUEST_METHOD"], "</h3><hr>";
        #echo "<pre>", print_r($data, true), "</pre>";
    }
}
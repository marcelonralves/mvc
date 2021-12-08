<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private Engine $templates;

    public function __construct()
    {
        $this->templates = new Engine(__DIR__."/../../themes/web/");
    }

    public function home() : void
    {
        echo $this->templates->render("home");
    }

    public function name(array $data) : void
    {
       echo $this->templates->render("name", [
           "name" => $data['name'] ?? "no name"
       ]);
    }

    public function error(array $data) : void
    {
        echo "Ops.. Erro!: ". $data['errcode'];
    }
}
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo "Home index method called.";
        return "";
    }

    public function welcomePage()
    {
        echo "Welcome to the welcome page!";
    }
}

<?php


namespace App\Controllers\Front;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render("test");
    }
}

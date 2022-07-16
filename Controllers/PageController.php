<?php

namespace App\Controllers;

class PageController extends AppController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function home_handler() {
        $template = $this->twig->load('home.twig');
        echo $template->render(['page_title' => 'Home', 'a_variable' => 'You are here!!!']);
//        return 0;
    }

    public function about_handler() {
        $template = $this->twig->load('about.twig');
        echo $template->render(['page_title' => 'About', 'a_variable' => 'You are also here!!!']);
//        return 0;
    }

    public function page_handler($page) {
        switch ($page) {
            case '/':
                $title = "Home";
                $template = $this->twig->load('home.twig');
                break;
            case 'about':
                $title = "About";
                $template = $this->twig->load('about.twig');
                break;
        }

        return $template->render(['page_title' => $title, 'a_variable' => 'You are here!!!']);
    }

}
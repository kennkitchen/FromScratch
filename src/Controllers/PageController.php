<?php

namespace App\Controllers;

class PageController extends AppController {

    public function __construct() {
        parent::__construct();
    }

    public function pageHandler($page) {
        $template = $this->twig->load( strtolower($page) . '.twig');
        $title = ucwords($page);

        return $template->render(['page_title' => $title, 'a_variable' => 'You are here!!!']);
    }

}
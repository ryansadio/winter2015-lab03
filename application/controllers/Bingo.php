<?php
/**
 * Created by PhpStorm.
 * User: ryansadio
 * Date: 15-01-21
 * Time: 10:51
 */

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        // build data
        $source = $this->quotes->get(5);
        $this->data = array_merge($this->data, $source);

        // render page
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $this->render();
    }

    function wisdom($id = 6) {
        // build data
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);

        // render page
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $this->render();
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: ryansadio
 * Date: 15-01-21
 * Time: 10:28
 */

class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        // build data
        $source = $this->quotes->last();
        $this->data = array_merge($this->data, $source);

        // render page
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $this->render();
    }

}
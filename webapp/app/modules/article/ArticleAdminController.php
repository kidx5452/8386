<?php

/**
 * Created by PhpStorm.
 * User: ViviPro
 * Date: 7/31/2016
 * Time: 10:38 PM
 */
class ArticleAdminController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        //$this->layoutFile = "somefile";
        $this->activeModule(__DIR__,"admin");
    }
    public function indexAction(){
        // You can change layout in action level
        //$this->layoutFile = "somefile";
        //$this->switchLayout();
    }
}
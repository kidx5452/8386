<?php

/**
 * Created by PhpStorm.
 * User: ViviPro
 * Date: 7/31/2016
 * Time: 10:19 PM
 */
class AuthController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->layoutFile = "login";
        $this->activeModule(__DIR__);
    }

    public function loginAction()
    {
        $user = $this->request->get("username", "string");
        $password = $this->request->get("password", "string");
        $userObject = new stdClass();
        $userObject->username = $user;
        $userObject->password = $password;
        $this->setAuth($userObject);
    }


}
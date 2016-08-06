<?php

/**
 * Created by PhpStorm.
 * User: ViviPro
 * Date: 7/31/2016
 * Time: 10:19 PM
 */
class ControllerBase extends \Phalcon\Mvc\Controller
{
    public $moduleInformation; // Thông tin module khi người dùng truy cập
    public $layoutFile; // Default layout file
    public function initialize()
    {
        $this->layoutFile = "index";
    }

    /***
     * Hàm này dùng để switch view giữa client và admin + init Language + ...
     * @param $moduleDir
     * @param null $suffix_view
     */
    protected function activeModule($moduleDir,$suffix_view="views"){
        // init lang
        $lang = array();
        $culture = $this->getCulture();
        if(!empty($culture->lang)) $lang_key = $culture->lang;
        $lang_key = "vi_VN"; // fix test lang
        $lang_file = "$moduleDir/locale/lang/$lang_key.php";
        if(file_exists($lang_file)) require $lang_file;

        // Get module information by path
        $moduleName = basename($moduleDir);
        $this->moduleInformation = require "$moduleDir/$moduleName.php"; // include file infor of modules
        $this->moduleInformation['lang'] = $lang; // Set lang for variable use in controller
        $this->view->label = $lang; // Set lang to view volt file

        // Switch view - layout admin or client
        $actionName = $this->dispatcher->getActionName();
        $this->switchLayout();
        $this->view->pick("$moduleName/$suffix_view/$actionName");
    }

    protected function switchLayout($layout=null){
        if($layout==null) $this->view->setMainView("layout/{$this->layoutFile}");
        else $this->view->setMainView("layout/$layout");
    }

    // Sidebar Supporter
    protected function initSidebar($activeKey=""){
        global $activeSidebar;
        $this->view->sidebar = $this->recursiveSidebar($activeSidebar,0,$activeKey);
    }
    private function recursiveSidebar($sidebars,$firstTag,$activeKey){
        $strClassFirst = $firstTag==0?'id="main-menu" class="gui-controls"':'';
        $htmlx = "<ul {$strClassFirst}>";
        foreach($sidebars as $sidebar)
        {
            $htmlx .= '<li class="'.(count($sidebar['child'])>0?"gui-folder":"").'">';
            $htmlx .= '<a href="'.(strlen($sidebar['link'])>0?$sidebar['link']:"javascript:void(0)").'" class="'.($activeKey==$sidebar['key']?"active":"").'">';
            if(strlen($sidebar['icon'])>0 && $firstTag==0) $htmlx .= '<div class="gui-icon"><i class="'.$sidebar['icon'].'"></i></div>';
            $htmlx .= '<span class="title">'.$sidebar["name"].'</span>';
            $htmlx .= '</a>';
            if(count($sidebar['child'])>0) $htmlx .= $this->recursiveSidebar($sidebar['child'],1,$activeKey);
            $htmlx .= '</li>';
        }
        $htmlx .= "</ul>";
        return $htmlx;
    }

    // Permission
    /**
     * @return boolean
     */
    protected function hasPermission($key){

    }


    /**
     * @return mixed
     */
    protected function getAuth()
    {
        return $this->session->get("auth");
    }

    /**
     * @param mixed $auth
     */
    protected function setAuth($auth)
    {
        $this->session->set("auth",$auth);
    }


    /**
     * @return mixed
     */
    protected function getCulture()
    {
        return $this->session->get("culture");
    }

    /**
     * @param mixed culture
     */
    protected function setCulture($culture)
    {
        $this->session->set("culture",$culture);
    }

    public function debug(...$vars) {
        foreach ($vars as $var) {
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        }
        die;
    }


}
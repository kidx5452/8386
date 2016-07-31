<?php
return array(
    "module_name"=>"article",
    "version"=>"1.0.0",
    "permission"=> array(
        "admin" => array(
            "index/index" => "Truy cập trang chủ",
        ),
        "client" => array()
    ),
    // More Config
    "active_sidebar"=>array(
        array(
            "name"=>$lang['name'],"link"=>"","icon"=>"","key"=>"",
            "child"=>array("name"=>$lang['name'],"link"=>"","icon"=>"","key"=>"")
        ),
        array(
            "name"=>$lang['test'],"link"=>"","icon"=>"","key"=>"",
            "child"=>array(
                array("name"=>$lang['name'],"link"=>"","icon"=>"","key"=>""),
                array("name"=>$lang['name'],"link"=>"","icon"=>"","key"=>""),
            )
        )
    )
);

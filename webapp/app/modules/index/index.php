<?php
return array(
    "module_name" => "index",
    "version" => "1.0.0",
    "permission" => array(
        "admin" => array(
            "index/index" => "Truy cập trang chủ",
        ),
        "client" => array()
    ),
    "active_sidebar" => array(
        array(
            "name" => "Home",
            "link" => "",
            "icon" => "md md-home",
            "key" => "",
            "child" => array(
                array(
                    "name" => "Demo",
                    "link" => "/index/demo",
                    "key" => "/index/demo",
                    "child"=>array(
                        array(
                            "name" => "Child",
                            "link" => "/index/index",
                            "key" => "/index/index",
                        )
                    )
                )
            )
        )
    )
);

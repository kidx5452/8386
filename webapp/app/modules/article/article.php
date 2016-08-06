<?php
return array(
    "module_name" => "article",
    "version" => "1.0.0",
    "permission" => array(
        "admin" => array(
            "index/index" => "Truy cập trang chủ",
        ),
        "client" => array()
    ),
    "active_sidebar" => array(
        array(
            "name" => "Article",
            "link" => "",
            "icon" => "md md-list",
            "key" => "",
            "child" => array(
                array(
                    "name" => "List",
                    "link" => "/article/index",
                    "key" => "/article/index"
                ),
                array(
                    "name" => "Add new",
                    "link" => "/article/form",
                    "key" => "/article/form"
                ),
            )
        )
    )
);

<?php
    return [
        "module_name" => "article",
        "version" => "1.0.0",
        "permission" => [
            "admin" => [
                "index/index" => "Truy cập trang chủ",
            ],
            "client" => []
        ],
        // More Config
        "active_sidebar" => [
            [
                "name" => $lang['name'],
                "link" => "",
                "icon" => "",
                "key" => "",
                "child" => [
                    "name" => $lang['name'],
                    "link" => "",
                    "icon" => "",
                    "key" => ""
                ]
            ],
            [
                "name" => $lang['test'],
                "link" => "",
                "icon" => "",
                "key" => "",
                "child" => [
                    [
                        "name" => $lang['name'],
                        "link" => "",
                        "icon" => "",
                        "key" => ""
                    ],
                    [
                        "name" => $lang['name'],
                        "link" => "",
                        "icon" => "",
                        "key" => ""
                    ],
                ]
            ]
        ]
    ];

<?php

    /**
     * Created by PhpStorm.
     * User: ViviPro
     * Date: 8/1/2016
     * Time: 12:10 AM
     */
    class BaseModel extends \Phalcon\Mvc\Model {
        public function map_object($arr) {
            foreach ($arr as $key => $val) $this->{$key} = $val;

            return $this;
        }
    }
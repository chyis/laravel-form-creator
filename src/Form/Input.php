<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/21
 * Time: 11:28
 */

class Input
{

    public function __construct()
    {

    }

    public function setName() {

    }


    public function getName() {

    }


    public function setClass() {

    }


    public function getClass() {

    }


    public function setPlaceHolder() {

    }


    public function getPlaceHolder() {

    }


    public function setID() {

    }


    public function getID() {

    }


    public function setValidate() {

    }


    public function getValidate() {

    }


    public function setValue() {

    }


    public function getValue() {

    }

    public function setAttr() {

    }

    public function getAttr() {

    }

    public function create() {
        return <<<EOT
<input name="{$this->name}" id="{$this->id}" class="{$this->class}" type="text" placeholder="" value="" />;
EOT;
    }

}
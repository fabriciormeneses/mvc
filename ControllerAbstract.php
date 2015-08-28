<?php
abstract class ControllerAbstract
{
    public function view($name, array $dados = array())
    {
        extract($dados, EXTR_OVERWRITE);
        return include_once "views/".$name.".phtml";
    }
}
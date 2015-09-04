<?php
namespace MvCatho\Controller;
use MvCatho\System\ControllerAbstract;
use MvCatho\Model\Funcionario;

class TesteController extends ControllerAbstract
{
    
    public function comprimentar()
    {
        $funcionarios = new Funcionario();
        $dados['func'] = $funcionarios->getAll();
        //print get_class($funcionarios->getAll());
        
        $this->view('comprimentar', $dados);
    }
    
}
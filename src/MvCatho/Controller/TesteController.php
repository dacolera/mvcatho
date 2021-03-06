<?php

namespace MvCatho\Controller;

use MvCatho\System\ControllerAbstract;
use MvCatho\Model\Pessoas;

class TesteController extends ControllerAbstract
{
	public function comprimentar()
	{
		$model = new Pessoas();
		$dados['cargo'] = $model->getCargoPorPessoa('burgo');

		$this->view('comprimentar', $dados);
	}
}
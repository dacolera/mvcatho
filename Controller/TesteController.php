<?php

class TesteController extends ControllerAbstract
{
	public function comprimentar()
	{
		$model = new Pessoas();
		$dados['cargo'] = $model->getCargoPorPessoa('burgo');

		$this->view('comprimentar', $dados);
	}
}
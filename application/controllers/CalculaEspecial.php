<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalculaEspecial extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = 'Cálculo do Tempo de Contribuição Especial';
		$this->load->view('form_contribuicaoE', $dados);
	}

    public function contribuicao_especial(){

		$valores = array(
			'trabalho' => $_POST['trabalho'],
			'idade' => $_POST['idade'],
			'anos' => $_POST['anos'],
			'meses' => $_POST['meses']
		);

		switch($valores['trabalho']){

			case 1:
				$idade_contri = 60 - $valores['idade'];

				if($valores['meses'] == 0){
				$temp_anos = 25 - $valores['anos'];
				$dados['tempo_anos'] = $temp_anos;
				$dados['tempo_contribuicao_meses'] = $valores['meses'];

				}elseif($valores['meses'] >0 && $valores['meses'] < 12){
					$temp_anos = 25 - $valores['anos'];
					$temp_final = $temp_anos - 1;
					$temp_meses = 12 - $valores['meses'];
					$dados['tempo_contribuicao_anos'] = $temp_final;
					$dados['tempo_contribuicao_meses'] = $temp_meses;

				}elseif($valores['meses'] == 12){
						$anos_mais = $valores['anos']++;
						$temp_anos = 25 - $anos_mais;
						$dados['tempo_anos'] = $temp_anos;
						$dados['tempo_contribuicao_meses'] = $valores['meses'];
					}
				break;
			case 2:
				$idade_contri = 58 - $valores['idade'];

				if($valores['meses'] == 0){
					$temp_anos = 20 - $valores['anos'];
					$dados['tempo_anos'] = $temp_anos;
					$dados['tempo_contribuicao_meses'] = $valores['meses'];
	
					}elseif($valores['meses'] >0 && $valores['meses'] < 12){
						$temp_anos = 20 - $valores['anos'];
						$temp_final = $temp_anos - 1;
						$temp_meses = 12 - $valores['meses'];
						$dados['tempo_contribuicao_anos'] = $temp_final;
						$dados['tempo_contribuicao_meses'] = $temp_meses;

					}elseif($valores['meses'] == 12){
						$anos_mais = $valores['anos']++;
						$temp_anos = 20 - $anos_mais;
						$dados['tempo_anos'] = $temp_anos;
						$dados['tempo_contribuicao_meses'] = $valores['meses'];
					}
				break;
			case 3:
				$idade_contri = 55 - $valores['idade'];

				if($valores['meses'] == 0){
					$temp_anos = 15 - $valores['anos'];
					$dados['tempo_anos'] = $temp_anos;
					$dados['tempo_contribuicao_meses'] = $valores['meses'];
	
					}elseif($valores['meses'] >0 && $valores['meses'] < 12){
						$temp_anos = 15 - $valores['anos'];
						$temp_final = $temp_anos - 1;
						$temp_meses = 12 - $valores['meses'];
						$dados['tempo_contribuicao_anos'] = $temp_final;
						$dados['tempo_contribuicao_meses'] = $temp_meses;
					}elseif($valores['meses'] == 12){
						$anos_mais = $valores['anos']++;
						$temp_anos = 15 - $anos_mais;
						$dados['tempo_anos'] = $temp_anos;
						$dados['tempo_contribuicao_meses'] = $valores['meses'];
					}
				break;
		}

		$dados['titulo'] = 'Contribuição Especial';
		$dados['idade_contribuicao'] = $idade_contri;
		$this->load->view('tempo_contribuicao_especial',$dados);
	}
}
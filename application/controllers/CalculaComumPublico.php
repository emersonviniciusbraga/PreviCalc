<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalculaComumPublico extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = 'Cálculo do Tempo de Contribuição Serviço Público';
		$this->load->view('form_contribuicao_publico', $dados);
	}

	public function contribuicao_comum()
	{
		$valores = array(
			'trabalho' => $_POST['trabalho'],
			'sexo' => $_POST['sexo'],
			'idade' => $_POST['idade'],
			'anos' => $_POST['anos'],
			'meses' => $_POST['meses'],
            'anos2' => $_POST['anos2'],
			'meses2' => $_POST['meses2'],
            'anos3' => $_POST['anos3'],
			'meses3' => $_POST['meses3']
		);


		switch($valores['trabalho']){

			
		// TRABALHADOR SERVIDOR PÚBLICO
			case 2:
				if($valores['sexo'] == 2){

					$idade_contri = 62 - $valores['idade'];
					
					// TEMPO DE CONTRIBUIÇÃO

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
								$anos_mais = $valores['anos'] + 1;
								$temp_anos = 25 - $anos_mais;
								$dados['tempo_anos'] = $temp_anos;
								$dados['tempo_contribuicao_meses'] = $valores['meses'];
							}
					
                    // TEMPO DE SERVIÇO PÚBLICO 

					if($valores['meses2'] == 0){
						$temp_servico_anos = 10 - $valores['anos2'];
						$dados['tempo_servico_anos'] = $temp_servico_anos;
						$dados['tempo_servico_meses'] = $valores['meses2'];
		
						}elseif($valores['meses2'] >0 && $valores['meses2'] < 12){
							$temp_servico_anos = 10 - $valores['anos2'];
							$temp_servico_final = $temp_servico_anos - 1;
							$temp_servico_meses = 12 - $valores['meses2'];
							$dados['tempo_servico_final'] = $temp_servico_final;
							$dados['tempo_servico_meses'] = $temp_servico_meses;
		
						}elseif($valores['meses2'] == 12){
								$anos_mais = $valores['anos2'] + 1;
								$temp_servico_anos = 10 - $anos_mais;
								$dados['tempo_servico_anos'] = $temp_servico_anos;
								$dados['tempo_servico_meses'] = $valores['meses2'];
							}

                    // TEMPO NO CARGO
					
					if($valores['meses3'] == 0){
						$temp_cargo_anos = 5 - $valores['anos3'];
						$dados['tempo_cargo_anos'] = $temp_cargo_anos;
						$dados['tempo_cargo_meses'] = $valores['meses3'];
		
						}elseif($valores['meses3'] >0 && $valores['meses3'] < 12){
							$temp_cargo_anos = 5 - $valores['anos3'];
							$temp_cargo_final = $temp_cargo_anos - 1;
							$temp_cargo_meses = 12 - $valores['meses3'];
							$dados['tempo_cargo_final'] = $temp_cargo_final;
							$dados['tempo_cargo_meses'] = $temp_cargo_meses;
		
						}elseif($valores['meses3'] == 12){
								$anos_mais = $valores['anos3'] + 1;
								$temp_cargo_anos = 5 - $anos_mais;
								$dados['tempo_cargo_anos'] = $temp_cargo_anos;
								$dados['tempo_cargo_meses'] = $valores['meses3'];
							}
					
				

				}elseif($valores['sexo'] == 1){

					$idade_contri = 65 - $valores['idade'];

					// TEMPO DE CONTRIBUIÇÃO
					
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
								$anos_mais = $valores['anos'] + 1;
								$temp_anos = 25 - $anos_mais;
								$dados['tempo_anos'] = $temp_anos;
								$dados['tempo_contribuicao_meses'] = $valores['meses'];
							}
					
                    // TEMPO DE SERVIÇO PÚBLICO 

					if($valores['meses2'] == 0){
						$temp_servico_anos = 10 - $valores['anos2'];
						$dados['tempo_servico_anos'] = $temp_servico_anos;
						$dados['tempo_servico_meses'] = $valores['meses2'];
		
						}elseif($valores['meses2'] >0 && $valores['meses2'] < 12){
							$temp_servico_anos = 10 - $valores['anos2'];
							$temp_servico_final = $temp_servico_anos - 1;
							$temp_servico_meses = 12 - $valores['meses2'];
							$dados['tempo_servico_final'] = $temp_servico_final;
							$dados['tempo_servico_meses'] = $temp_servico_meses;
		
						}elseif($valores['meses2'] == 12){
								$anos_mais = $valores['anos2'] + 1;
								$temp_servico_anos = 10 - $anos_mais;
								$dados['tempo_servico_anos'] = $temp_servico_anos;
								$dados['tempo_servico_meses'] = $valores['meses2'];
							}

                    // TEMPO NO CARGO
					
					if($valores['meses3'] == 0){
						$temp_cargo_anos = 5 - $valores['anos3'];
						$dados['tempo_cargo_anos'] = $temp_cargo_anos;
						$dados['tempo_cargo_meses'] = $valores['meses3'];
		
						}elseif($valores['meses3'] >0 && $valores['meses3'] < 12){
							$temp_cargo_anos = 5 - $valores['anos3'];
							$temp_cargo_final = $temp_cargo_anos - 1;
							$temp_cargo_meses = 12 - $valores['meses3'];
							$dados['tempo_cargo_final'] = $temp_cargo_final;
							$dados['tempo_cargo_meses'] = $temp_cargo_meses;
		
						}elseif($valores['meses3'] == 12){
								$anos_mais = $valores['anos3'] + 1;
								$temp_cargo_anos = 5 - $anos_mais;
								$dados['tempo_cargo_anos'] = $temp_cargo_anos;
								$dados['tempo_cargo_meses'] = $valores['meses3'];
							}
				}
				break;

		// PROFESSOR SERVIDOR PÚBLICO	
			case 5:
                if($valores['sexo'] == 2){

					$idade_contri = 57 - $valores['idade'];

					// TEMPO DE CONTRIBUIÇÃO
					
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
					
                    // TEMPO DE SERVIÇO PÚBLICO 

					if($valores['meses2'] == 0){
						$temp_servico_anos = 10 - $valores['anos2'];
						$dados['tempo_servico_anos'] = $temp_servico_anos;
						$dados['tempo_servico_meses'] = $valores['meses2'];
		
						}elseif($valores['meses2'] >0 && $valores['meses2'] < 12){
							$temp_servico_anos = 10 - $valores['anos2'];
							$temp_servico_final = $temp_servico_anos - 1;
							$temp_servico_meses = 12 - $valores['meses2'];
							$dados['tempo_servico_final'] = $temp_servico_final;
							$dados['tempo_servico_meses'] = $temp_servico_meses;
		
						}elseif($valores['meses2'] == 12){
								$anos_mais = $valores['anos2']++;
								$temp_servico_anos = 10 - $anos_mais;
								$dados['tempo_servico_anos'] = $temp_servico_anos;
								$dados['tempo_servico_meses'] = $valores['meses2'];
							}

                    // TEMPO NO CARGO
					
					if($valores['meses3'] == 0){
						$temp_cargo_anos = 5 - $valores['anos3'];
						$dados['tempo_cargo_anos'] = $temp_cargo_anos;
						$dados['tempo_cargo_meses'] = $valores['meses3'];
		
						}elseif($valores['meses3'] >0 && $valores['meses3'] < 12){
							$temp_cargo_anos = 5 - $valores['anos3'];
							$temp_cargo_final = $temp_cargo_anos - 1;
							$temp_cargo_meses = 12 - $valores['meses3'];
							$dados['tempo_cargo_final'] = $temp_cargo_final;
							$dados['tempo_cargo_meses'] = $temp_cargo_meses;
		
						}elseif($valores['meses3'] == 12){
								$anos_mais = $valores['anos3']++;
								$temp_cargo_anos = 5 - $anos_mais;
								$dados['tempo_cargo_anos'] = $temp_cargo_anos;
								$dados['tempo_cargo_meses'] = $valores['meses3'];
							}
				

				}elseif($valores['sexo'] == 1){

					$idade_contri = 60 - $valores['idade'];

					// TEMPO DE CONTRIBUIÇÃO
					
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
					
                    // TEMPO DE SERVIÇO PÚBLICO 

					if($valores['meses2'] == 0){
						$temp_servico_anos = 10 - $valores['anos2'];
						$dados['tempo_servico_anos'] = $temp_servico_anos;
						$dados['tempo_servico_meses'] = $valores['meses2'];
		
						}elseif($valores['meses2'] >0 && $valores['meses2'] < 12){
							$temp_servico_anos = 10 - $valores['anos2'];
							$temp_servico_final = $temp_servico_anos - 1;
							$temp_servico_meses = 12 - $valores['meses2'];
							$dados['tempo_servico_final'] = $temp_servico_final;
							$dados['tempo_servico_meses'] = $temp_servico_meses;
		
						}elseif($valores['meses2'] == 12){
								$anos_mais = $valores['anos2']++;
								$temp_servico_anos = 10 - $anos_mais;
								$dados['tempo_servico_anos'] = $temp_servico_anos;
								$dados['tempo_servico_meses'] = $valores['meses2'];
							}

                    // TEMPO NO CARGO
					
					if($valores['meses3'] == 0){
						$temp_cargo_anos = 5 - $valores['anos3'];
						$dados['tempo_cargo_anos'] = $temp_cargo_anos;
						$dados['tempo_cargo_meses'] = $valores['meses3'];
		
						}elseif($valores['meses3'] >0 && $valores['meses3'] < 12){
							$temp_cargo_anos = 5 - $valores['anos3'];
							$temp_cargo_final = $temp_cargo_anos - 1;
							$temp_cargo_meses = 12 - $valores['meses3'];
							$dados['tempo_cargo_final'] = $temp_cargo_final;
							$dados['tempo_cargo_meses'] = $temp_cargo_meses;
		
						}elseif($valores['meses3'] == 12){
								$anos_mais = $valores['anos3']++;
								$temp_cargo_anos = 5 - $anos_mais;
								$dados['tempo_cargo_anos'] = $temp_cargo_anos;
								$dados['tempo_cargo_meses'] = $valores['meses3'];
							}
				}
				break;
		}
		$dados['titulo'] = 'Contribuição Serviço Público';
		$dados['idade_contribuicao'] = $idade_contri;
		$this->load->view('tempo_contribuicao_publico',$dados);
	}

	
}
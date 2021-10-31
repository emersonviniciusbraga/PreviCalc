<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultado extends CI_Controller {


	public function calcula(){
        $valores = array(
            'salario' => $_POST['salario']
        );
        
        if($valores['salario'] <= 1100){

            $aliquota = $valores['salario'] * 0.075;
            $salarioF = $valores['salario'] - $aliquota;

        }elseif($valores['salario'] > 1100 && $valores['salario'] <= 2203.48){

            $aliquota = $valores['salario'] * 0.09;
            $salarioF = $valores['salario'] - $aliquota;

        }elseif($valores['salario'] > 2203.48 && $valores['salario'] <= 3305.22){

            $aliquota = $valores['salario'] * 0.12;
            $salarioF = $valores['salario'] - $aliquota;

        }elseif($valores['salario'] > 3305.22 && $valores['salario'] <= 6433.57){

            $aliquota = $valores['salario'] * 0.14;
            $salarioF = $valores['salario'] - $aliquota;

        }elseif($valores['salario'] > 6433.57 && $valores['salario'] <= 11017.42){

            $aliquota = $valores['salario'] * 0.145;
            $salarioF = $valores['salario'] - $aliquota;

        }elseif($valores['salario'] > 11017.42 && $valores['salario'] <= 22034.83){

            $aliquota = $valores['salario'] * 0.165;
            $salarioF = $valores['salario'] - $aliquota;

        }elseif($valores['salario'] > 22034.83 && $valores['salario'] <= 42967.92){

            $aliquota = $valores['salario'] * 0.19;
            $salarioF = $valores['salario'] - $aliquota;

        }elseif($valores['salario'] > 42967.92){

            $aliquota = $valores['salario'] * 0.22;
            $salarioF = $valores['salario'] - $aliquota;
        }

        $dados['salario'] = $valores['salario'];
        $dados['desconto'] = $aliquota;
        $dados['salario_final'] = $salarioF;

        $dados['titulo'] = 'Contribuição Previdênciária Mensal';
        $this->load->view('desconto', $dados);
    }
}
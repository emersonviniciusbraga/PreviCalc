<html lang="en">
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<title><?= $titulo?></title>
<link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/vovo.svg')?>" />
</head>

<body  style="background-image: url('<?= base_url('assets/img/fundo1.svg')?>');">
  <!-- DataTales Example -->
  <div class="container"><br>
    <div class="row">
      <div class="col"><br>
        <div class="card shadow mb-4">
            <div class="card-body text-center"><br>
                <h3>Contribuição Previdenciária Mensal</h3><br>
                <p class="lead">A contribuição previdenciária é calculada de acordo com o seu salário, onde é descontado uma porcentagem do seu salário. Para isso, existe faixas de alíquotas determinadas equivalentes aos sálarios.</p><br><br>
                <h5 style="text-align: left;">Sua Contribuição:</h5><br>
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Seu Salário</th>
                            <th scope="col">Alíquota</th>
                            <th scope="col">Valor Descontado</th>
                            <th scope="col">Sálario Líquido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>R$ <?= $salario ?></td>
                            <?php if($salario <= 1100){?>
                            <td>7.5%</td>
                            <?php }elseif($salario > 1100 && $salario <= 2203.48){?>
                                <td>9%</td>
                            <?php }elseif($salario > 2203.48 && $salario <= 3305.22){?>
                                <td>12%</td>
                            <?php }elseif($salario > 3305.22 && $salario <= 6433.57){?>
                                <td>14%</td>
                            <?php }elseif($salario > 6433.57 && $salario <= 11017.42){?>
                                <td>14.5%</td>
                            <?php }elseif($salario > 11017.42 && $salario <= 22034.83){?>
                                <td>16.5%</td>
                            <?php }elseif($salario > 22034.83 && $salario <= 42967.92){?>
                                <td>19%</td>
                            <?php }elseif($salario > 42967.92){?>
                                <td>22%</td>
                            <?php } ?>
                            <td>R$ <?= $desconto?></td>
                            <td>R$ <?= $salario_final ?></td>
                            </tr>
                        </tbody>
                    </table><br><br><br>
                    
                    <div style="text-align: left;">  
                        <a class="btn btn-primary" href="<?= base_url('')?>" role="button">Início</a>
                        <a class="btn btn-primary" onclick="history.go(-1);" role="button">Voltar</a>
                    </div><br>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
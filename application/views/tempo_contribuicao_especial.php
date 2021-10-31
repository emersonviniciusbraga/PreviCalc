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
  <div class="container"><br><br><br><br><br>
    <div class="row">
      <div class="col-sm-8"><br>
        <div class="card shadow mb-4">
            <div class="card-body text-center">
              <h3><?= $titulo ?></h3><br>
              
            <table class="table text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tempo que Resta pela Idade</th>
                  <th scope="col">Tempo que Resta de Contribuição</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                  <th scope="row">1</th>
                  <td><?= $idade_contribuicao ?> anos</td>
                  <?php if($tempo_contribuicao_meses == 0){?>
                    <td><?= $tempo_anos ?> anos</td>
                  <?php }elseif($tempo_contribuicao_meses == 12){?>
                    <td><?= $tempo_anos ?> anos</td>
                  <?php }else{?>
                  <td><?= $tempo_contribuicao_anos ?> anos e <?= $tempo_contribuicao_meses ?> meses</td>
                  <?php }?>
                  </tr>
              </tbody>
              </table><br><br>
            <div style="text-align: left;">  
                        <a class="btn btn-primary" href="<?= base_url('')?>" role="button">Início</a>
                        <a class="btn btn-primary" onclick="history.go(-1);" role="button">Voltar</a>
            </div><br>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><br>
        <div class="card shadow mb-4">
          <div class="card-body text-center">
            
            <?php $this->load->view('form_desconto'); ?>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
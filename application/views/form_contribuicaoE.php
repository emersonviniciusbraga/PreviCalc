
<html lang="en">
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<title><?= $titulo?></title>
<link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/vovo.svg')?>" />

</head>

<body style="background-image: url('<?= base_url('assets/img/fundo1.svg')?>');">
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-6"><br><br><br>
      <div class="card shadow mb-4 text-center">
        <div class="card-body"><br>
        <h1 class="h3 mb-2 text-gray-900 text-center">Cálculo do Tempo de Contribuição</h1><br>
          <form action="<?= base_url('')?>index.php/calculaespecial/contribuicao_especial" method="post" class="user">
  
            <select class="form-select" name="trabalho" aria-label="Default select example">
              <option selected>---</option>
              <option value="1">Atividade Especial de Menor Risco</option>
              <option value='2'>Atividade Especial de Médio Risco</option>
              <option value="3">Atividade Especial de Maior Risco</option>
            </select><br>
                    
            <div class="form-group">

              <label>Tempo de Contribuição</label>
                <div class="container"><br>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="anos" placeholder="Anos" id="anos">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="meses" placeholder="Meses" id="meses">
                    </div>
                  </div>
                </div><br>

              <label>Idade</label>
                <div class="container"><br>
                  <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                      <input type="text" name="idade" class="form-control" id="idade">
                    </div>
                    <div class="col">
                    </div>
                  </div>
                </div><br>
            </div>

            <div>  
                <input class="btn btn-success" type="submit" value="Calcular" class="form-control">
            </div>
            
            
          </form>
        </div>
      </div>
    </div>
    <div class="col">
      
    </div>
  </div>
  
</body>

</html>
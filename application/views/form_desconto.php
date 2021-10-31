            
            <h3 >Deseja Calcular o Desconto?</h3><br>
            <form action="<?= base_url('')?>index.php/resultado/calcula" method="post" class="user">
            <div class="form-group">
                <label style="text-align: left;" for="exampleInputSalario">Salário</label>
                <input type="text" class="form-control" class="custom-file-input" name="salario" placeholder="Salário" id="salario"><br><br>
            </div>
                <div>  
                    <input class="btn btn-primary" type="submit" value="Calcular" class="form-control">
                </div>
            
            </form>
            
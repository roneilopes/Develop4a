<div id="main" class="container-fluid">
    
    <h3 class="page-header">Editar funcionário <?= $edit_func['nome']; ?></h3>
  
    <div class="row">
    <form action="<?= base_url('funcionarios/edit')?>" method="post">
          
                <div class="form-group col-md-4">
                      <label for="id">ID</label>
                      <input type="number" class="form-control" id="id" value="<?= $edit_func['id']; ?>" >
                </div>

                <div class="form-group col-md-4">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome" value="<?= $edit_func['nome']; ?>">
                </div>

                <div class="form-group col-md-4">
                      <label for="entrada">Entrada</label>
                      <input type="text" class="form-control" id="entrada" value="<?= $edit_func['entrada']; ?>">
                </div>

                <div class="form-group col-md-4">
                      <label for="telefone">Telefone</label>
                      <input type="number" class="form-control" id="telefone" value="<?= $edit_func['telefone']; ?>">
                </div>
        
                <div class="form-group col-md-4">
                    <label for="cargo">Cargo:</label>
                        <select class="form-control" name="cargo_id" id="cargo">
                            <?php $f = $edit_func['cargo_id'];
                                foreach ($dadosCar as $i) {                         
                                   if($i['id']== $f){
                                   echo"<option value='". $i['id']."' selected='selected'> Descrição:".$i['descricao']."Salário:".$i['salario']."</option>";
                                   }else{
                                     echo"<option value='". $i['id']."'> Descrição: ".$i['descricao']." Salário: ".$i['salario']."</option>";  
                                   } 
                             } ?>                    
                        </select>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="endereco">Endereço:</label>
                    <select class="form-control" name="endereco_id" id="endereco">
                        <?php $y = $edit_func['endereco_id'];
                            foreach ($dadosEnd as $i) {                         
                               if($i['id'] == $y){
                               echo"<option value='". $i['id']."' selected='selected'> Bairro:".$i['bairro']."CEP:".$i['cep']."</option>";

                               }else{
                                 echo"<option value='". $i['id']."'> Bairro:".$i['bairro']."CEP:".$i['cep']."</option>";  
                               } 

                         } ?>                    
                    </select>
                </div>
                
                <hr>
	
                    <div class="col-md-12">
                        <button name="submit" type="submit" class="btn btn-primary">Atualizar</button>
                        <a href="<?= base_url('funcionarios')?>" class="btn btn-default">Cancelar</a>
                    </div>

  </form>
 </div>
</div>


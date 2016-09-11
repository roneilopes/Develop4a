<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar fornecedor <?= $edit_forn['nome'] ?> </h3>
  
  <form action="<?= base_url('fornecedores/edit')?>" method="post">
      
  	<div class="row">
            
            <div class="form-group col-md-4">
                  <label for="id">ID</label>
                  <input type="number" class="form-control" name="id" id="id" value="<?= $edit_forn['id'] ?>">
            </div>
            
            <div class="form-group col-md-4">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nome" value="<?= $edit_forn['nome'] ?>">
            </div>
            
            <div class="form-group col-md-4">
                  <label for="cnpj">CNPJ</label>
                  <input type="number" class="form-control" name="cnpj" id="cnpj"  value="<?= $edit_forn['cnpj'] ?>">
            </div>
            
            <div class="form-group col-md-4">
                  <label for="telefone">Telefone</label>
                  <input type="number" class="form-control" name="telefone" id="telefone"  value="<?= $edit_forn['telefone'] ?>">
            </div>
          
            <div class="form-group col-md-4">
                <label for="endereco">Endereço</label>
                <select class="form-control" name="endereco_id" id="endereco">
                    <?php $y = $edit_forn['endereco_id'];
                    
                          foreach ($dadosEnd as $i) {                         
                          if ( $i['id'] == $y ) {
                            echo"<option value='". $i['id']."' selected='selected'> Logradouro: ".$i['logradouro'].", CEP: ".$i['cep']."</option>";                       
                          } else {
                            echo"<option value='". $i['id']."'> Bairro:".$i['bairro']."CEP:".$i['cep']."</option>";  
                          } 

                     } ?>                    
                </select>
            </div>
        </div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Salvar</button>
		<a href="<?= base_url('fornecedores')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>

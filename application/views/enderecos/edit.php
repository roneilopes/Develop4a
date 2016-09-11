<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Endereço</h3>
  
  <form action="<?= base_url('enderecos/add')?>" method="post">
  	<div class="row">
          <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="number" class="form-control" id="id" value="<?=$edit_end['id']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cep">Cep</label>
                <input type="number" class="form-control" id="cep" value="<?=$edit_end['cep']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" value="<?=$edit_end['logradouro']?>">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" value="<?=$edit_end['bairro']?>">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" value="<?=$edit_end['cidade']?>">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" value="<?=$edit_end['estado']?>">
  	  </div>
          <!-- data cadastro e endereço_id -->
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Salvar</button>
		<a href="<?= base_url('enderecos')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>

<div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Endereço</h3>
  
  <form action="<?= base_url('add')?>" method="post">
  	<div class="row">
	  <div class="form-group col-md-4">
  	  	<label for="cep">Cep</label>
                <input type="number" class="form-control" name="cep" placeholder="CEP">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" name="logradouro" placeholder="Logradouro">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" placeholder="Bairro">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" placeholder="Cidade">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" placeholder="Estado">
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

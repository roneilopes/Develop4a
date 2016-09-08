<div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Cargo</h3>
  
  <form action="<?= base_url('cargos/add')?>" method="post">
  	<div class="row">
	  <div class="form-group col-md-4">
  	  	<label for="descricao">Descrição</label>
  	  	<input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="salario">Salário</label>
                <input type="number" name="salario" class="form-control" id="salario" placeholder="Salário">
  	  </div>
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Salvar</button>
		<a href="<?= base_url('cargos')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>

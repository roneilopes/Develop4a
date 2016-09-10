<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Cargo</h3>
  
  <form action="<?= base_url('cargos/edit')?>" method="post">
  	<div class="row">
            
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="number" class="form-control" id="id" value="<?=$edit_user['id']?>">
  	  </div>
            
	  <div class="form-group col-md-4">
  	  	<label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" value="<?=$edit_user['descricao']?>">
  	  </div>
            
	  <div class="form-group col-md-4">
  	  	<label for="salario">Salário</label>
                <input type="number" class="form-control" id="salario" value="<?=$edit_user['salario']?>" >
  	  </div>
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Atualizar</button>
		<a href="<?= base_url('cargos')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>



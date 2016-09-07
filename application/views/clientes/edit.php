<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Categoria</h3>
  
  <form action="<?= base_url('edit')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="number" class="form-control" id="id" placeholder="Id">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">
  	  </div>
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Atualizar</button>
		<a href="<?= base_url('categorias')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>



<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Funcionários'</h3>
  
  <form action="<?= base_url('pedidos/edit')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="number" class="form-control" id="id" placeholder="Id">
  	  </div>
	   <div class="row">
            <div class="form-group col-md-4">
                <label for="funcionario">Funcionário</label>
                <select name="funcionario" id="funcionario" class="form-control">
                    <option value="gerente"> Gerente</option>
                    <option value="diretor"> Diretor</option>
                    <option value="tecnico"> Técnico</option>   
                </select>
            </div>
               
            <div class="row">
            <div class="form-group col-md-4">
                <label for="cliente">Cliente</label>
                <select name="cliente" id="cliente" class="form-control">
                    <option value="Ronei"> Ronei</option>
                </select>
            </div>
        </div>
          
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Atualizar</button>
		<a href="<?= base_url('funcionarios')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>



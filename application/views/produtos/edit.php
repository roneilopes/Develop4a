<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Produto <?=$edit_prod['descricao']?></h3>
  
  <form action="<?= base_url('produtos/edit')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="text" class="form-control" name="id" id="id"  value="<?=$edit_prod['id']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="<?=$edit_prod['descricao']?>">
  	  </div>
          
          <div class="form-group col-md-4">
  	  	<label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade"  value="<?=$edit_prod['quantidade']?>">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor"  value="<?=$edit_prod['valor']?>">
  	  </div>
	</div>
      
                <div class="form-group col-md-4">
                    <label for="categoria">Categoria:</label>
                    <select class="form-control" name="categoria_id" id="categoria">
                    <?php $c=$edit_prod['categoria_id'];
                        foreach ($dadosCateg as $i) {                         
                           if($i['id']==$c){
                           echo"<option value='". $i['id']."' selected='selected'>".$i['nome']."</option>";
//  
                           }else{
                             echo"<option value='". $i['id']."' selected='selected'>".$i['nome']."</option>";  
                           } 
//  
                     } ?>                    
                    </select>
                </div>
      
            
                <div class="form-group col-md-4">
                    <label for="forncedor">Fornecedor:</label>
                    <select class="form-control" name="fornecedor_id" id="fornecedor">
                    <?php $f=$edit_prod['fornecedor_id'];
                        foreach ($dadosForn as $i) {                         
                           if($i['id']==$f){
                           echo"<option value='". $i['id']."' selected='selected'>".$i['nome']."</option>";
//  
                           }else{
                             echo"<option value='". $i['id']."' selected='selected'>".$i['nome']."</option>";  
                           } 
//  
                     } ?>                    
                    </select>
                </div>
            
	<hr>
	
	
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Atualizar</button>
		<a href="<?= base_url('produtos')?>" class="btn btn-default">Cancelar</a>
	  </div>
	
</div>
  </form>
 </div>




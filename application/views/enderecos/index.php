 <div id="main" class="container-fluid" style="margin-top: 50px">
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Endereços</h2>
		</div>
            
                <!-- pesquisa -->
		<div class="col-sm-6">
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar endereço">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</div>
                <!-- pesquisa -->
                
		<div class="col-sm-3">
			<a href="<?= base_url('enderecos/add')?>" class="btn btn-primary pull-right h2">Novo Endereço</a>
		</div>
	</div> <!-- /#top -->


 	<hr />
 	<div id="list" class="row">

	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>CEP</th>
                                        <th>Logradouro</th>
					<th>Bairro</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th class="actions">Ações</th>
                                        
					
				</tr>
			</thead>
			<tbody>
                                    <?php 
                                        $i=0;
                                        while ($i <= count($valores[$i]['id'])){
                                            try {
                                                echo "<tr><td>{$valores[$i]['id']}</td>";
                                                echo "<td>{$valores[$i]['cep']}</td>";
                                                echo "<td>{$valores[$i]['logradouro']}</td>";
                                                echo "<td>{$valores[$i]['bairro']}</td>";
                                                echo "<td>{$valores[$i]['cidade']}</td>";
                                                echo "<td>{$valores[$i]['estado']}</td>"
                                                        . "<td class='actions'>
                                                        <a class='btn btn-warning btn-xs' href=". base_url('enderecos/edit').">Editar</a>
                                                        <a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Excluir</a></td>"
                                                        . "</tr>";
                                                $i++;
                                            } catch (Exception $ex) {
                                                return base_url('enderecos');
                                            }
                                        }
                                        ?>
			</tbody>
		</table>
	</div>

	</div> <!-- /#list -->

	<div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li class="disabled"><a>&lt; Anterior</a></li>
				<li class="disabled"><a>1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>




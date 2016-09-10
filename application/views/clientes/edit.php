<div id="main" class="container-fluid">
    <h3 class="page-header">Editar Cliente</h3>
    
    <form action="<?=base_url('clientes/edit')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome"  value="<?=$edit_user['nome']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">CPF</label>
                <input type="text" name="cpf" class="form-control" id="exampleInputEmail1"  value="<?=$edit_user['cpf']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="exampleInputEmail1"  value="<?=$edit_user['telefone']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="renda">Renda</label>
                <input type="number" name="renda" class="form-control" id="renda"  value="<?= $edit_user['renda'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="sel1">Endereço:</label>
                <select class="form-control" name="endereco_id" id="sel1">
                    <?php $y=$edit_user['endereco_id'];
                        foreach ($dadosEnd as $i) {                         
                           if($i['id']==$y){
                           echo"<option value='". $i['id']."' selected='selected'> Bairro:".$i['bairro']."CEP:".$i['cep']."</option>";
//                          echo $edit_user['endereco_id']."- id ->".$dadosEnd[$y]['id']."//////////";
//                          $y++;
                          
                           }else{
                             echo"<option value='". $i['id']."'> Bairro:".$i['bairro']."CEP:".$i['cep']."</option>";  
                           } 
//                           
//                        print_r($i);
//                        echo"segundo";
//                        print_r($dadosEnd);
                     } ?>                    
                </select>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <input type="hidden" name="id" value="<?=$edit_user['id']?>"/>
                <input type="hidden" name="submit"/>
                <a href="<?= base_url('clientes') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
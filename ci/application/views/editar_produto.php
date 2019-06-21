<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Editar Produto</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
</head>
<body>

<div class="container">

    <div class="d-flex justify-content-center mt-3">
          <a href="JavaScript: window.history.back();" class="btn btn-link">Voltar</a>
    </div>

    <!-- Form Contato -->
        <form method="post" action="../editar" class="text-center border border-light p-5">
          <p class="h4 mb-4">Editar Produto</p> 
          
          <!-- hidden do id_produto -->
          <input type="hidden" name="id_produto" value="<?php echo $produto[0]->id_produto; ?>">

          <!-- Select Categoria -->
          <select name="categoriacorrespondente" required="true" class="browser-default custom-select mb-4">
              <option value="" disabled>Categoria</option>
            <?php foreach ($listarCategoria as $listar):?>
              <!-- Lista a categoria correspondente -->
              <option value="<?php echo $listar->id_categoria; ?>" 
              <?php if($produto[0]->categoriacorrespondente == $listar->id_categoria){ echo 'selected'; } ?>>
              <?php echo $listar->categoria; ?></option>
            <?php endforeach;?>
          </select>

          <!-- Produto -->
          <input type="text" required="true" name="produto" id="defaultContactFormName" class="form-control mb-4" placeholder="Produto" value="<?php echo $produto[0]->produto; ?>" >

          <!-- Descrição -->
          <div class="form-group">
              <textarea required="true" name="descricao" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder=""><?php echo $produto[0]->descricao; ?></textarea>
          </div>
          
          <!-- Quantidade -->
          <input type="text" required="true" name="quantidade" id="defaultContactFormName" class="form-control mb-4" placeholder="Quantidade" value="<?php echo $produto[0]->quantidade; ?>" >

          <!-- Preço -->
          <input type="text" required="true" name="preco" id="defaultContactFormName" class="form-control mb-4" placeholder="Preço" value="<?php echo $produto[0]->preco; ?>">

          <!-- Botão Cadastrar -->
          <button class="btn btn-info btn-block" type="submit">Editar</button>
        </form>
    <!-- Form Contato -->

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
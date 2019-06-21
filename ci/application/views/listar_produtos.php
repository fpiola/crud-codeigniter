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
    <title>Produtos</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CCEAF4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="btn btn-info" href="<?php echo base_url();  ?>index.php/produtos/">ADMIN(IR PARA O CRUD) </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input name= "id" class="form-control mr-sm-2 " type="search" placeholder="Produto">
                <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        </nav>
    </div>
    <div class="container">
        <!-- Tabela -->
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Categoria(id)</th>
                <th scope="col">Categoria</th>
                <th scope="col">Produto(id)</th>
                <th scope="col">Produto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($produto as $produtos):?>
                <tr>
                <th scope="row"><?php echo $produtos->id_categoria; ?></th>
                <td><?php echo $produtos->categoria; ?></td>
                <td><?php echo $produtos->id_produto; ?></td>
                <td><?php echo $produtos->produto; ?></td>
                <td><?php echo $produtos->descricao; ?></td>
                <td><?php echo $produtos->quantidade; ?></td>
                <td><?php echo $produtos->preco; ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript"> 
      feather.replace();
    </script>
</body>
</html>
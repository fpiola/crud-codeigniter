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
    <title>Cadastrar Categoria</title>

    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-center mt-3">
        <a href="JavaScript: window.history.back();" class="btn btn-link">Voltar</a>
    </div>
     <?php if ($this->session->flashdata('success') == null): ?>
        <?php else: ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                    </div>
                </div>
            </div>
      <?php endif; ?>

    <!-- Form Contato -->
    <form method="post" action="../cadastrar_categoria" class="text-center border border-light p-5">
          <p class="h4 mb-4">Cadastrar Categoria</p>

          <!-- Categoria -->
          <input type="text" required="true" name="categoria" id="defaultContactFormName" class="form-control mb-4" placeholder="Categoria">

          <!-- button Cadastrar -->
          <button class="btn btn-info btn-block" type="submit">Cadastrar</button>
    </form>
    <!-- Form Contato -->

    <!-- Tabela -->
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($categoria as $categoriaListar):?>
                <tr>
                <th scope="row"><?php echo $categoriaListar->id_categoria; ?></th>
                <td><?php echo $categoriaListar->categoria; ?></td>
                <td><a href="<?php echo base_url();  ?>index.php/produtos/editar_categoria/<?php echo $categoriaListar->id_categoria; ?>" class="btn btn-info">Editar <i data-feather="edit"></a></td>
                <td><a href=" <?php  echo base_url(); ?>index.php/produtos/deletar_categoria/<?php echo $categoriaListar->id_categoria; ?>" class="btn btn-danger">Deletar <i data-feather="trash-2"></a></td>
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
        //Carregar a janela modal automaticamente
        $(document).ready(function(){
            $("#exampleModal").modal("show");
        });
        feather.replace();
    </script>
</body>
</html>
<?php include './scripts/conexao.php';
$retorno = $_GET['retorno']; ?>

<div class="row mx-auto">
    <!-- COLUNA PESQUISA E TABELA -->
    <div class="col" style="width: 100%">
        <div class="alert container alert-success" role="alert">
            <?php echo $retorno?>
        </div>
    </div>
</div>
<?php
include './scripts/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `ordens` INNER JOIN `clientes` ON os_cliente=id_cliente WHERE id_os = $id";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {
    $id_os = $array['id_os'];
    $os_cliente = $array['os_cliente'];
    $c_nome = $array['c_nome'];
    $c_doc = $array['c_doc'];
    $os_status = $array['os_status'];
    $os_tipo = $array['os_tipo'];
    $os_cep = $array['os_cep'];
    $os_rua = $array['os_rua'];
    $os_bairro = $array['os_bairro'];
    $os_cidade = $array['os_cidade'];
    $os_uf = $array['os_uf'];
    $os_comp = $array['os_comp'];
    $os_latitude = $array['os_latitude'];
    $os_longitude = $array['os_longitude'];
    $os_info = $array['os_info'];
    $os_cadastro = $array['os_cadastro'];
    $os_update = $array['os_update'];
}
?>
<div class="row mx-auto">
    <div class="col">
        <div class="card shadow p-3" style="max-width: 1000px">
            <div class="row">
                <div class="col">
                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Ordem de Serviço: #0<?php echo $id_os ?></label>
                </div>
                <div class="col-md-auto">
                    <a type="button" href="?pagina=ordens_edit&&id=<?php echo $id_os ?>" class="btn btn-outline-warning"><i class="bi bi-pen"></i></a>
                </div>
            </div>
            <form class="mt-3">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="country" class="form-label">Status:</label>
                        <input type="text" class="form-control" id="status" placeholder="" value="<?php if ($os_status == 1) : echo "Ativo";
                                                                                                    else : echo "Inativo";
                                                                                                    endif; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="cc-name" class="form-label">Abertura:</label>
                        <input type="text" class="form-control" id="dabertura" value="<?php echo $os_cadastro ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="cc-name" class="form-label">Atualização:</label>
                        <input type="text" class="form-control" id="dencerramento" value="<?php echo $os_update ?>" readonly>
                    </div>
                    <div class="col-sm-4">
                        <label for="country" class="form-label">CPF/CNPJ:</label>
                        <input type="text" class="form-control" id="cpfcnpj" placeholder="" value="<?php echo $c_doc ?>" readonly>
                    </div>
                    <div class="col-sm-8">
                        <label for="country" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="" value="<?php echo $c_nome ?>" readonly>
                    </div>

                    <div class="col-md-12">
                        <label for="country" class="form-label">Tipo:</label>
                        <input type="text" class="form-control" id="tipo" placeholder="" value="<?php echo $os_tipo ?>" readonly>
                    </div>
                    <hr class="mb-0">
                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endereço</label>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="zip" placeholder="" value="<?php echo $os_cep ?>" readonly>
                    </div>
                    <div class="col-6">
                        <label for="address" class="form-label">Rua:</label>
                        <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." value="<?php echo $os_rua ?>" readonly>
                    </div>
                    <div class="col-3">
                        <label for="address" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." value="<?php echo $os_bairro ?>" readonly>
                    </div>

                    <div class="col-5">
                        <label for="address" class="form-label">Complemento:</label>
                        <input type="text" class="form-control" id="address" placeholder="Apto, bloco, quadra..." value="<?php echo $os_comp ?>" readonly>
                    </div>
                    <div class="col-md-5">
                        <label for="country" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="address" placeholder="Cidade" value="<?php echo $os_cidade ?>" readonly>
                    </div>

                    <div class="col-md-2">
                        <label for="state" class="form-label">Estado:</label>
                        <input type="text" class="form-control" id="address" placeholder="UF" value="<?php echo $os_uf ?>" readonly>
                    </div>
                </div>

                <hr class="">
                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
                <div class="row gy-3">
                    <div class="col-md-12 my-3">
                        <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" readonly><?php echo $os_info ?></textarea>
                    </div>
                </div>
                <hr class="">
                <div class="row">
                    <div class="col">
                        <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Lista de Material</label>
                    </div>
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-outline-success"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="row px-3">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Responsável</th>
                                <th scope="col ">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01/01/2022</th>
                                <td>Rafael</td>
                                <td class="">
                                    <button type="button" class="btn btn-sm btn-outline-warning"><i class="bi bi-pen"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="">
                <div class="row">
                    <div class="col">
                        <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Ponto</label>
                    </div>
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-outline-success" onclick="getLocation()" data-bs-toggle="modal" data-bs-target="#modalPonto"><i class="bi bi-plus-lg"></i></button>
                        <button type="button" class="btn btn-outline-danger" onclick="getLocation()" data-bs-toggle="modal" data-bs-target="#modalSaida"><i class="bi bi-door-open"></i></button>
                    </div>
                </div>
                <div class="row px-3">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Chegada</th>
                                <th scope="col">Saída</th>
                                <th scope="col">Responsável</th>
                                <th scope="col ">Ação</th>
                            </tr>
                        </thead>
                        <tbody><?php
                                include './scripts/conexao.php';
                                $sql = "SELECT * FROM `pontos` INNER JOIN `usuarios` ON p_usuario=id_usuario WHERE p_ordem=$id_os ORDER BY p_chegada DESC";
                                $pontos = mysqli_query($conexao, $sql);
                                $contador = 0;
                                while ($array = mysqli_fetch_array($pontos)) {
                                    $contador = $contador + 1;
                                    $_ponto = $array['id_ponto'];
                                    $_ordem = $array['p_ordem'];
                                    $_usuario = $array['p_usuario'];
                                    $_latitude = $array['p_latitude'];
                                    $_longitude = $array['p_longitude'];
                                    $_funcionarios = $array['p_funcionarios'];
                                    $_chegada = $array['p_chegada'];
                                    $_saida = $array['p_saida'];
                                    $_reponsavel = $array['u_nome'];
                                ?>
                                <tr>
                                    <th scope="row"><?php echo date('d/m/Y H:i:s', strtotime($_chegada)); ?></th>
                                    <td scope="row"><?php if ($_saida == '') {
                                                        echo 'Ponto em aberto';
                                                    } else {
                                                        echo date('d/m/Y H:i:s', strtotime($_saida));
                                                    }; ?></td>
                                    <td><?php echo $_reponsavel ?></td>
                                    <td class="">
                                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#verModal<?php echo $_ponto ?>"><i class="bi bi-eye"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="verModal<?php echo $_ponto ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detalhes do ponto</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <strong>OS: </strong><?php echo $_ordem ?><br>
                                                <strong>Responsável: </strong><?php echo $_reponsavel ?><br>
                                                <strong>Entrada: </strong><?php echo date('d/m/Y H:i:s', strtotime($_chegada)); ?><br>
                                                <strong>Saída: </strong><?php if ($_saida == '') {
                                                                            echo 'Ponto em aberto';
                                                                        } else {
                                                                            echo date('d/m/Y H:i:s', strtotime($_saida));
                                                                        }; ?><br>
                                                <strong>Funcioários: </strong><?php echo $_funcionarios ?><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a type="button" href="?pagina=ordens" class="btn btn-primary">Voltar</a>
            </form>
        </div>
    </div>
</div>

<!-- Modal PONTO -->
<div class="modal fade" id="modalPonto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:green;">Marcar Entrada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./scripts/ponto_add.php" method="post">
                    <label for="funcionarios" class="form-label mt-2">OS:</label>
                    <input type="text" class="form-control" id="p_ordem" name="p_ordem" value="<?php echo $id_os ?>" readonly>
                    <label for="funcionarios" class="form-label mt-2">ID Usuario:</label>
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>" readonly>
                    <label for="funcionarios" class="form-label mt-2">Nome:</label>
                    <input type="text" class="form-control" id="u_nome" name="u_nome" value="<?php echo $logado ?>" readonly>
                    <label for="funcionarios" class="form-label mt-2">Funcionários:</label>
                    <textarea class="form-control" id="funcionarios" name="funcionarios" rows="3" required></textarea>
                    <input class="form-control" id="validacao" value="" readonly>
                    <input type="hidden" class="form-control" id="lat" name="lat" value="" required readonly>
                    <input type="hidden" class="form-control" id="lng" name="lng" value="" required readonly>
                    <p id="demo"></p>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal PONTO SAÍDA-->
<div class="modal fade" id="modalSaida" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:red">Marcar Saída</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./scripts/ponto_edit.php" method="post">
                    <label for="p_ordem" class="form-label mt-2">OS:</label>
                    <input type="text" class="form-control" id="p_ordem" name="p_ordem" value="<?php echo $id_os ?>" readonly>
                    <label for="entrada" class="form-label mt-2">Entrada:</label>
                    <select class="form-select" id="entrada" name="entrada" required>
                        <option value="">Selecione entrada...</option>
                        <?php
                        include './scripts/conexao.php';
                        $sqlordens = "SELECT * FROM `pontos` INNER JOIN `usuarios` ON p_usuario=id_usuario WHERE p_ordem=$id_os AND p_saida IS NULL ORDER BY p_chegada DESC";
                        $listaordens = mysqli_query($conexao, $sqlordens);
                        while ($array = mysqli_fetch_array($listaordens)) {
                            $_ponto = $array['id_ponto'];
                            $_ordem = $array['p_ordem'];
                            $_usuario = $array['p_usuario'];
                            $_latitude = $array['p_latitude'];
                            $_longitude = $array['p_longitude'];
                            $_funcionarios = $array['p_funcionarios'];
                            $_chegada = $array['p_chegada'];
                            $_saida = $array['p_saida'];
                            $_reponsavel = $array['u_nome'];
                        ?>
                            <option value="<?php echo $_ponto ?>"><?php echo date('d/m/Y H:i:s', strtotime($_chegada)); ?></option>
                        <?php } ?>
                    </select>
                    <label for="funcionarios" class="form-label mt-2">Funcionarios:</label>
                    <textarea class="form-control" id="funcionarios" name="funcionarios" rows="3" required><?php echo $_funcionarios ?></textarea>
                    <input class="form-control" id="validacao1" value="" readonly>
                    <input type="hidden" class="form-control" id="lat1" name="lat1" value="" required readonly>
                    <input type="hidden" class="form-control" id="lng1" name="lng1" value="" required readonly>
                    <p id="demo1"></p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    var x1 = document.getElementById("demo1");
    var lat1 = document.querySelector("#lat1");
    var lng1 = document.querySelector("#lng1");
    var validacao1 = document.querySelector("#validacao1");

    var x = document.getElementById("demo");
    var lat = document.querySelector("#lat");
    var lng = document.querySelector("#lng");
    var validacao = document.querySelector("#validacao");


    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            validacao.value = "O seu navegador não suporta Geolocalização.";
            validacao1.value = "O seu navegador não suporta Geolocalização.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
        lat.value = position.coords.latitude;
        lng.value = position.coords.longitude;
        validacao.value = "Localização Capturada!";

        x1.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
        lat1.value = position.coords.latitude;
        lng1.value = position.coords.longitude;
        validacao1.value = "Localização Capturada!";
    }
</script>
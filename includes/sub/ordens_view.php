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
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalLista"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="row px-3">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Alteração</th>
                                <th scope="col">Responsável</th>
                                <th scope="col ">Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './scripts/conexao.php';
                            $sqllista = "SELECT * FROM `listas` INNER JOIN `ordens` ON l_ordem=id_os INNER JOIN `usuarios` on id_usuario=l_usuario WHERE l_ordem=$id_os ORDER BY l_cadastro DESC";
                            $listas = mysqli_query($conexao, $sqllista);
                            while ($array = mysqli_fetch_array($listas)) {
                                $id_lista = $array['id_lista'];
                                $l_ordem = $array['l_ordem'];
                                $l_usuario = $array['l_usuario'];
                                $l_n_usuario = $array['u_nome'];
                                $l_lista = $array['l_lista'];
                                $l_cadastro = $array['l_cadastro'];
                                $l_update = $array['l_update'];
                            ?>
                                <tr>
                                    <th scope="row"><?php echo date('d/m/Y H:i', strtotime($l_cadastro)); ?></th>
                                    <td scope="row"><?php echo date('d/m/Y H:i', strtotime($l_update)); ?></td>
                                    <td><?php echo $l_n_usuario ?></td>
                                    <td class="">
                                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalLista<?php echo $id_lista?>"><i class="bi bi-eye"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modalLista<?php echo $id_lista?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Lista de Material</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Responsável: <strong><?php echo $l_n_usuario?></strong><br>
                                            Data: <strong><?php echo date('d/m/Y H:i', strtotime($l_cadastro)); ?></strong><br>
                                            Atualização: <strong><?php echo date('d/m/Y H:i', strtotime($l_update)); ?></strong><br>
                                            Lista: <br><strong><?php echo $l_lista?></strong><br>
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
                                <th scope="col">
                                    <p class="td-hide">Funcionário</p>
                                </th>
                                <th scope="col">Chegada</th>
                                <th scope="col">Saída</th>
                                <th scope="col ">Ação</th>
                            </tr>
                        </thead>
                        <tbody><?php
                                include './scripts/conexao.php';
                                $sql = "SELECT * FROM `pontos` INNER JOIN `usuarios` ON p_funcionario=id_usuario INNER JOIN `ordens` on id_os=p_ordem WHERE p_ordem=$id_os ORDER BY p_chegada DESC";
                                $pontos = mysqli_query($conexao, $sql);
                                $contador = 0;
                                while ($array = mysqli_fetch_array($pontos)) {
                                    $contador = $contador + 1;
                                    $_ponto = $array['id_ponto'];
                                    $_ordem = $array['p_ordem'];
                                    $_usuario = $array['p_usuario'];
                                    $_latitude = $array['p_latitude'];
                                    $_longitude = $array['p_longitude'];
                                    $s_latitude = $array['p_latitude_s'];
                                    $s_longitude = $array['p_longitude_s'];
                                    $_funcionario = $array['u_nome'];
                                    $_chegada = $array['p_chegada'];
                                    $_saida = $array['p_saida'];
                                ?>
                                <tr>
                                    <th>
                                        <p class="td-hide"><?php echo $_funcionario ?></p>
                                    </th>
                                    <td scope="row"><?php echo date('d/m/Y H:i', strtotime($_chegada)); ?></td>
                                    <td scope="row"><?php if ($_saida == '') {
                                                        echo 'Ponto em aberto';
                                                    } else {
                                                        echo date('d/m/Y H:i', strtotime($_saida));
                                                    }; ?></td>

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
                                                <strong>Funcionário: </strong><?php echo $_funcionario ?><br>
                                                <strong>Entrada: </strong><?php echo date('d/m/Y H:i:s', strtotime($_chegada)); ?><br>
                                                <?php echo "Latitude: " . $_latitude;
                                                echo " Longitude: " . $_longitude; ?><br>
                                                <strong>Saída: </strong><?php if ($_saida == '') {
                                                                            echo 'Ponto em aberto';
                                                                        } else {
                                                                            echo date('d/m/Y H:i:s', strtotime($_saida));
                                                                        }; ?><br>
                                                <?php echo "Latitude: " . $s_latitude;
                                                echo " Longitude: " . $s_longitude; ?><br>
                                                <strong style="margin-top: 20px;">Localização no Mapa: </strong><br>
                                                <div class="row">
                                                    <div class="col mx-auto">
                                                        <div id="map<?php echo $_ponto ?>" style="width: 100%; height: 350px;"></div>

                                                        <script type="text/javascript">
                                                            var locations = [
                                                                ['Local da Obra', <?php echo $os_latitude ?>, <?php echo $os_longitude ?>],
                                                                ['Ponto: Entrada', <?php echo $_latitude ?>, <?php echo $_longitude ?>],
                                                                ['Ponto: Saída', <?php echo $s_latitude ?>, <?php echo $s_longitude ?>],
                                                            ];

                                                            var map = new google.maps.Map(document.getElementById('map<?php echo $_ponto ?>'), {
                                                                zoom: 17,
                                                                center: new google.maps.LatLng(<?php echo $os_latitude ?>, <?php echo $os_longitude ?>),
                                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                                            });

                                                            var infowindow = new google.maps.InfoWindow();

                                                            var marker, i;

                                                            for (i = 0; i < locations.length; i++) {
                                                                marker = new google.maps.Marker({
                                                                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                                                    map: map
                                                                });

                                                                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                                                    return function() {
                                                                        infowindow.setContent(locations[i][0]);
                                                                        infowindow.open(map, marker);
                                                                    }
                                                                })(marker, i));
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
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
<!-- Modal Nova Lista -->
<div class="modal fade" id="modalLista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:green;">Preencher Lista</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./scripts/lista_add.php" method="post">
                    <label for="funcionarios" class="form-label mt-2">OS:</label>
                    <input type="text" class="form-control" id="l_ordem" name="l_ordem" value="<?php echo $id_os ?>" readonly>
                    <label for="funcionarios" class="form-label mt-2">ID Usuario:</label>
                    <input type="text" class="form-control" id="l_usuario" name="l_usuario" value="<?php echo $id_usuario ?>" readonly>
                    <label for="funcionarios" class="form-label mt-2">Nome:</label>
                    <input type="text" class="form-control" id="u_nome" name="u_nome" value="<?php echo $logado ?>" readonly>
                    <label for="funcionarios" class="form-label mt-2">Lista de material:</label>
                    <textarea class="form-control" id="l_lista" name="l_lista" rows="12" required></textarea>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
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
                    <label for="p_ordem" class="form-label mt-2">OS:</label>
                    <input type="text" class="form-control" id="p_ordem" name="p_ordem" value="<?php echo $id_os ?>" readonly>
                    <label for="id_usuario" class="form-label mt-2">ID Usuario:</label>
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>" hidden>
                    <label for="u_nome" class="form-label mt-2">Nome:</label>
                    <input type="text" class="form-control" id="u_nome" name="u_nome" value="<?php echo $logado ?>" hidden>
                    <label for="p_funcionario" class="form-label mt-2">Funcionário:</label>
                    <select class="form-select" id="p_funcionario" name="p_funcionario" required>
                        <option value="">Funcionário...</option>
                        <?php
                        include './scripts/conexao.php';
                        $sqlusuarios = "SELECT * FROM `usuarios` WHERE u_status=1 ORDER BY u_nome ASC";
                        $listausuarios = mysqli_query($conexao, $sqlusuarios);
                        while ($array = mysqli_fetch_array($listausuarios)) {
                            $_id_usuario = $array['id_usuario'];
                            $_u_nome = $array['u_nome'];
                        ?>
                            <option value="<?php echo $_id_usuario ?>"><?php echo $_u_nome; ?></option>
                        <?php } ?>
                    </select>
                    <input class="form-control" id="validacao" value="" readonly>
                    <input type="hidden" class="form-control" id="lat" name="lat" value="" required readonly>
                    <input type="hidden" class="form-control" id="lng" name="lng" value="" required readonly>
                    <p id="demo"></p>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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
                        <option value="">Selecione...</option>
                        <?php
                        include './scripts/conexao.php';
                        $sqlordens = "SELECT * FROM `pontos` INNER JOIN `usuarios` ON p_funcionario=id_usuario WHERE p_ordem=$id_os AND p_saida IS NULL ORDER BY p_chegada DESC";
                        $listaordens = mysqli_query($conexao, $sqlordens);
                        while ($array = mysqli_fetch_array($listaordens)) {
                            $_ponto = $array['id_ponto'];
                            $_ordem = $array['p_ordem'];
                            $_latitude = $array['p_latitude'];
                            $_longitude = $array['p_longitude'];
                            $_funcionario = $array['u_nome'];
                            $_chegada = $array['p_chegada'];
                            $_saida = $array['p_saida'];
                            $_reponsavel = $array['u_nome'];
                        ?>
                            <option value="<?php echo $_ponto ?>"><?php echo $_funcionario . " ";
                                                                    echo date('d/m/Y H:i:s', strtotime($_chegada)); ?></option>
                        <?php } ?>
                    </select>
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
<?php
error_reporting(0);
$filtro = $_GET['filtro'];
$fpesquisa = $_GET['pesquisa'];
$ftipopesquisa = $_GET['tipo'];
?>
<div class="row mx-auto">
    <!-- COLUNA PESQUISA E TABELA -->
    <div class="col" style="min-width: 375px; max-width: 1600px">
        <div class="row">
            <!-- CARD PESQUISA -->
            <div class="col-xl-4">
                <div class="card shadow mb-2" style="width: 100%; min-width:300px">
                    <div class="" style="padding: 3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" onclick="esconderCampos('pesquisa2','pesquisa1','pesquisa3', 'pesquisa4')" aria-controls="collapseExample">
                                <i class="bi bi-search"></i>
                            </a>
                            <span class="" style="font-size: 105%; font-weight:bold; margin-left:7px">Buscar...</span>

                            <div class="collapse" id="filtros">

                                <form class="mt-2" action="./scripts/cliente_filtro.php" method="post" style="padding: 0px 10px 10px;">
                                    <div class="form-group row mt-1">
                                        <div class="col-md-12">
                                            <select class="form-select" id="tipopesquisa" name="tipopesquisa" onchange="esconderCampo('pesquisa2','pesquisa1','pesquisa3','pesquisa4', this.id)" required>
                                                <option value="">Selecione...</option>
                                                <option value="CPF/CNPJ">CPF/CNPJ</option>
                                                <option value="Nome">Nome</option>
                                                <option value="Cidade">Cidade</option>
                                                <option value="UF">UF</option>
                                                <option value="Ramo">Ramo</option>
                                                <option value="Status">Status</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="pesquisa1" name="pesquisa1" placeholder="Pesquisa..." value="" maxlength="40">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="pesquisa2" name="pesquisa2" placeholder="CPF/CNPJ" value="" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="18">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <select class="form-select" id="pesquisa4" name="pesquisa4">
                                                    <?php
                                                    include './scripts/conexao.php';
                                                    $sqlcargo = "SELECT * FROM `ramos`";
                                                    $cargos = mysqli_query($conexao, $sqlcargo);
                                                    while ($array = mysqli_fetch_array($cargos)) {
                                                        $id_ramo = $array['id_ramo'];
                                                        $ramo = $array['ramo'];
                                                    ?>
                                                        <option value="<?php echo $id_ramo ?>"><?php echo $ramo ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <select class="form-select" id="pesquisa3" name="pesquisa3">
                                                    <option value="1">Ativo</option>
                                                    <option value="0">Inativo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-end mt-2">
                                        <button type="submit" href="#" class="btn btn-primary">Pesquisar</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM CARD PESQUISA -->
            <!-- CARD FILTROS -->
            <div class="col-xl-4">
                <div class="card shadow mb-2" style="width: 100%; min-width:300px">
                    <div class="" style="padding:3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" onclick="esconderCampos('pesquisa2','pesquisa1', 'pesquisa3', 'pesquisa4')" aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-filter"></i>
                            </a>

                            <span class="" style="font-size: 105%; font-weight:bold;margin-left:7px;">Filtros...</span>
                            <div class="collapse" id="filtros">
                                <form class="mt-2" action="./scripts/cliente_filtro.php" method="post" style="padding: 0px 10px 10px;">
                                    <div class="form-group row mt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="fpesquisa" name="fpesquisa" placeholder="Sem filtro aplicado..." value="<?php if ($fpesquisa == "") {
                                                                                                                                                                    echo "Sem filtro...";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $ftipopesquisa . ' ' . $fpesquisa;
                                                                                                                                                                } ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-end" style="margin-top:11.5px">
                                        <button type="submit" href="#" class="btn btn-secondary">Limpar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM CARD FILTROS -->
            <!-- CARD NOVA ORDEM -->
            <div class="col-xl-4">
                <div class="card shadow mb-2" style="width: 100%;">
                    <div class="" style="padding: 3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-plus-lg"></i>
                            </a>
                            <span class="" style="font-size: 105%; font-weight:bold; margin-left:7px">Novo...</span>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Nova Ordem</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Ordem de Servi??o</label>
                                                </div>
                                            </div>
                                            <form class="mt-3" action="./scripts/ordem_add.php" method="post">
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label for="country" class="form-label">Status:</label>
                                                        <select class="form-select" id="status" name="status">
                                                            <option value="1">Ativa</option>
                                                            <option value="2">Inativa</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="cc-name" class="form-label">Abertura:</label>
                                                        <input type="text" class="form-control" value="<?php echo date("Y-m-d H:i:s"); ?>" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="country" class="form-label">Tipo:</label>
                                                        <select class="form-select" id="tipo" name="tipo" required>
                                                            <option value="">Escolha...</option>
                                                            <option value="Obra">Obra</option>
                                                            <option value="Manuten????o">Manuten????o</option>
                                                            <option value="Visita t??cnica" >Visita t??cnica</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <div class="input-group-text bg-white"><a href="javascript:clientePopup()"><i class="bi bi-search"></i></a></div>
                                                            <select class="form-select" id="cliente" name="cliente" required>
                                                                <option value="">Escolha...</option>
                                                                <?php
                                                                include './scripts/conexao.php';
                                                                $sqlclientes = "SELECT * FROM `clientes` ORDER BY c_nome ASC";
                                                                $clientes = mysqli_query($conexao, $sqlclientes);
                                                                while ($array = mysqli_fetch_array($clientes)) {
                                                                    $idcliente = $array['id_cliente'];
                                                                    $cdoc = $array['c_doc'];
                                                                    $cnome = $array['c_nome'];
                                                                    $ccep = $array['c_cep'];
                                                                    $crua = $array['c_rua'];
                                                                    $cbairro = $array['c_bairro'];
                                                                    $ccidade = $array['c_cidade'];
                                                                    $ccidade = $array['c_uf'];
                                                                ?>
                                                                    <option value="<?php echo $idcliente ?>"><?php echo $cnome . " " . $cdoc;  ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <input type="hidden" class="form-control" id="cliente2" value="" readonly>
                                                    </div>
                                                    <hr class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endere??o</label>
                                                        </div>
                                                        <div class="col-md-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="checkNovoEnd" onclick="habilitaEnd()" value="1" checked>
                                                                <label class="form-check-label" for="exampleRadios1">
                                                                    Novo Endere??o
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="checkCadEnd" onclick="desabilitaEnd()" value="2">
                                                                <label class="form-check-label" for="exampleRadios2">
                                                                    Endere??o do Cadastro
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control" id="endereco" name="endereco" value="1" readonly>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="cep" class="form-label">CEP:</label>
                                                        <input type="text" class="form-control" id="cep" name="cep" onkeypress="mascara(this, '#####-###')" maxlength="9" value="" required>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="endereco" class="form-label">Rua:</label>
                                                        <input type="text" class="form-control" id="rua" name="rua" value="" placeholder="Rua/Av/Rod..." maxlength="60" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="address" class="form-label">Complemento:</label>
                                                        <input type="text" class="form-control" id="complemento" value="" name="complemento" placeholder="Apto, bloco, quadra...">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="bairro" class="form-label">Bairro:</label>
                                                        <input type="text" class="form-control" id="bairro" value="" name="bairro" placeholder="" maxlength="40" required>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="cidade" class="form-label">Cidade:</label>
                                                        <input type="text" class="form-control" id="cidade"   name="cidade" value="" placeholder="" maxlength="40" required>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label for="complemento" class="form-label">UF:</label>
                                                        <input type="text" class="form-control" id="uf" name="uf" value="" placeholder="" maxlength="2" required>
                                                    </div>
                                                </div>

                                                <hr class="">
                                                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informa????es</label>
                                                <div class="row gy-3">
                                                    <div class="col-md-12 my-3">
                                                        <textarea class="form-control mt-3" id="maisinfo" name="maisinfo" rows="3" ></textarea>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" href="#" class="btn btn-primary">Cadastrar</button>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIM CARD NOVA ORDEM -->
        </div>
        <!-- CARD TABELA -->
        <div class="card shadow mb-3">
            <div class="flex-row p-2">
                <table class="table table-hover table-responsive-md table-sm">
                    <thead>
                        <tr>
                            <th scope="col">O.S.</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Endere??o</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include './scripts/conexao.php';
                        if ($filtro == "") {
                            $sql = "SELECT * FROM `ordens` INNER JOIN `clientes` ON os_cliente=id_cliente ORDER BY id_os DESC";
                        } else {
                            $sql = $filtro;
                        }
                        $total_reg = "15"; // n??mero de registros por p??gina
                        $pag = $_GET['pag'];
                        if (!$pag) {
                            $pc = "1";
                        } else {
                            $pc = $pag;
                        }
                        $inicio = $pc - 1;
                        $inicio = $inicio * $total_reg;

                        $limite = mysqli_query($conexao, "$sql LIMIT $inicio, $total_reg");
                        $todos = mysqli_query($conexao, $sql);

                        $tr = mysqli_num_rows($todos); // verifica o n??mero total de registros
                        $tp = $tr / $total_reg; // verifica o n??mero total de p??ginas

                        $busca = mysqli_query($conexao, $sql);
                        $contador = 0;
                        while ($array = mysqli_fetch_array($limite)) {

                            $contador = $contador + 1;
                            $id_os = $array['id_os'];
                            $os_cliente = $array['os_cliente'];
                            $c_nome = $array['c_nome'];
                            $os_status = $array['os_status'];
                            $os_tipo = $array['os_tipo'];
                            $os_cep = $array['os_cep'];
                            $os_rua = $array['os_rua'];
                            $os_bairro = $array['os_bairro'];
                            $os_cidade = $array['os_cidade'];
                            $os_uf = $array['os_uf'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $id_os ?></th>
                                <td><?php echo $c_nome ?></td>
                                <td><?php echo $os_rua . ", " . $os_bairro . "-" .  $os_cidade . "/" .  $os_uf ?></td>
                                <td><?php echo $os_tipo ?></td>
                                <td><i class="bi bi-circle-fill" style="color:<?php if ($os_status == 1) {
                                                                                    echo 'green';
                                                                                } else {
                                                                                    echo 'red';
                                                                                } ?>;"></i></td>
                                <td><a href="?pagina=ordens_view&&id=<?php echo $id_os ?>" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
                            <?php } ?>
                            </tr>
                    </tbody>
                </table>
                <center><?php
                        $anterior = $pc - 1;
                        $proximo = $pc + 1;
                        if ($pc > 1) {
                            echo "
                      </style>
                      <a style='appearance: none;
                      text-decoration: none;
                      background-color: #FAFBFC;
                      border: 1px solid rgba(27, 31, 35, 0.15);
                      border-radius: 6px;
                      box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
                      box-sizing: border-box;
                      color: #24292E;
                      cursor: pointer;
                      display: inline-block;
                      font-family: -apple-system, system-ui, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
                      font-size: 14px;
                      font-weight: 500;
                      line-height: 20px;
                      list-style: none;
                      padding: 6px 16px;
                      position: relative;
                      transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
                      user-select: none;
                      -webkit-user-select: none;
                      touch-action: manipulation;
                      vertical-align: middle;
                      white-space: nowrap;
                      word-wrap: break-word;' href='?pagina=clientes&&pag=$anterior'>Anterior</a>";
                        }
                        echo "&nbsp | &nbsp";
                        if ($pc < $tp) {
                            echo "<a style='appearance: none;
                      text-decoration: none;
                      background-color: #FAFBFC;
                      border: 1px solid rgba(27, 31, 35, 0.15);
                      border-radius: 6px;
                      box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
                      box-sizing: border-box;
                      color: #24292E;
                      cursor: pointer;
                      display: inline-block;
                      font-family: -apple-system, system-ui, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
                      font-size: 14px;
                      font-weight: 500;
                      line-height: 20px;
                      list-style: none;
                      padding: 6px 16px;
                      position: relative;
                      transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
                      user-select: none;
                      -webkit-user-select: none;
                      touch-action: manipulation;
                      vertical-align: middle;
                      white-space: nowrap;
                      word-wrap: break-word;' href='?pagina=clientes&&pag=$proximo'>Pr??xima</a>";
                        }
                        ?></center>
            </div>
        </div>

        <!-- FIM CARD TABELA -->

        <!-- COLUNA CADASTRO -->
    </div>
</div>
<?php
error_reporting(0);
$filtro = $_GET['filtro'];
$fpesquisa = $_GET['pesquisa'];
$ftipopesquisa = $_GET['tipo'];
?>
<div class="row mx-auto">
    <!-- COLUNA PESQUISA E TABELA -->
    <div class="col" style="min-width: 375px; max-width: 1600px; width: 100%">
        <div class="row">
            <!-- CARD PESQUISA -->
            <div class="col-xl-4" style="min-width:300px;">
                <div class="card shadow mb-2" style="width: 100%; min-width:300px">
                    <div class="" style="padding: 3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" onclick="esconderCampos('pesquisa2','pesquisa1','pesquisa3', 'pesquisa4')" aria-controls="collapseExample">
                                <i class="bi bi-search"></i>
                            </a>
                            <span class="" style="font-size: 105%; font-weight:bold; margin-left:7px">Buscar...</span>

                            <div class="collapse" id="filtros">

                                <form class="mt-2" action="./scripts/usuario_filtro.php" method="post" style="padding: 0px 10px 10px;">
                                    <div class="form-group row mt-1">
                                        <div class="col-md-12">
                                            <select class="form-select" id="tipopesquisa" name="tipopesquisa" onchange="esconderCampo('pesquisa2','pesquisa1','pesquisa3','pesquisa4', this.id)" required>
                                                <option value="">Selecione...</option>
                                                <option value="Nome">Nome</option>
                                                <option value="CPF/CNPJ">CPF</option>
                                                <option value="Cargo">Cargo</option>
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
                                                <input type="text" class="form-control" id="pesquisa2" name="pesquisa2" placeholder="CPF" value="" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="14">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <select class="form-select" id="pesquisa4" name="pesquisa4">
                                                    <?php
                                                    include './scripts/conexao.php';
                                                    $sqlcargo = "SELECT * FROM `cargonivel`";
                                                    $cargos = mysqli_query($conexao, $sqlcargo);
                                                    while ($array = mysqli_fetch_array($cargos)) {
                                                        $id_cargo = $array['id_cargo'];
                                                        $cargo = $array['cargo'];
                                                    ?>
                                                        <option value="<?php echo $id_cargo ?>"><?php echo $cargo ?></option>
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
            <div class="col-xl-4" style="min-width:300px;">
                <div class="card shadow mb-2" style="width: 100%; min-width:300px">
                    <div class="" style="padding:3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" onclick="esconderCampos('pesquisa2','pesquisa1', 'pesquisa3', 'pesquisa4')" aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-filter"></i>
                            </a>

                            <span class="" style="font-size: 105%; font-weight:bold;margin-left:7px;">Filtros...</span>
                            <div class="collapse" id="filtros">
                                <form class="mt-2" action="./scripts/usuario_filtro.php" method="post" style="padding: 0px 10px 10px;">
                                    <div class="form-group row mt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="fpesquisa" name="fpesquisa" placeholder="Sem filtro aplicado..." value="<?php if ($fpesquisa == "") {
                                                                                                                                                                    echo "Sem filtro...";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $ftipopesquisa . ' ' . $fpesquisa;
                                                                                                                                                                } ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-end" style="margin-top: 11.5px;">
                                        <button type="submit" href="#" class="btn btn-secondary">Limpar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM CARD FILTROS -->
            <!-- CARD novo usuario -->
            <div class="col-xl-4" style="min-width:300px;">
                <div class="card shadow mb-2" style="width: 100%; min-width:300px">
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
                                            <span class="" style="font-weight:bold;"><i class="bi bi-person-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 5px; font-size:130%;"></i> <a style="font-size: 110%;">Cadastrar cliente...<a></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <form class="needs-validation" enctype="multipart/form-data" action="./scripts/usuario_add.php" method="post">
                                                <div class="" style="width: 100%; margin-left:auto; margin-right:auto">
                                                    Selecione uma foto: <input name="arquivo" type="file" />
                                                    <div class="row g-3">
                                                        <div class="col-md-2">
                                                            <label for="status" class="form-label">Status:</label>
                                                            <select class="form-select" id="status" name="status" required>
                                                                <option value="1">Ativo</option>
                                                                <option value="0">Inativo</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-5">
                                                            <label for="cpfcnpj" class="form-label">CPF:</label>
                                                            <input type="text" class="form-control " id="cpfcnpj" name="cpf" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="14" required>
                                                            <div id="retorno" class="form-text "></div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="cpfcnpj" class="form-label">RG:</label>
                                                            <input type="text" class="form-control " id="rg" name="rg" maxlength="20">
                                                            <div id="retorno" class="form-text "></div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="nome" class="form-label">Nome completo:</label>
                                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" maxlength="60" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="cep" class="form-label">CEP:</label>
                                                            <input type="text" class="form-control" id="cep" name="cep" onkeypress="mascara(this, '#####-###')" maxlength="9">
                                                        </div>
                                                        <div class="col-9">
                                                            <label for="endereco" class="form-label">Rua:</label>
                                                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av/Rod..." maxlength="60">
                                                        </div>
                                                        <div class="col-5">
                                                            <label for="bairro" class="form-label">Bairro:</label>
                                                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" maxlength="40">
                                                        </div>
                                                        <div class="col-5">
                                                            <label for="complemento" class="form-label">Cidade:</label>
                                                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" maxlength="40">
                                                        </div>
                                                        <div class="col-2">
                                                            <label for="complemento" class="form-label">UF:</label>
                                                            <input type="text" class="form-control" id="uf" name="uf" placeholder="" maxlength="2">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="complemento" class="form-label">Complemento:</label>
                                                            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto, bloco, quadra..." maxlength="40">
                                                        </div>

                                                        <div class="col-md-12 mt-3">
                                                            <label for="ramo" class="form-label">Cargo / Fun????o</label>
                                                            <select class="form-select" id="cargo" name="cargo" required>
                                                                <option value="">Escolha...</option>
                                                                <?php
                                                                include './scripts/conexao.php';
                                                                $sqlcargo = "SELECT * FROM `cargonivel`";
                                                                $cargos = mysqli_query($conexao, $sqlcargo);
                                                                while ($array = mysqli_fetch_array($cargos)) {
                                                                    $id_ramo = $array['id_cargo'];
                                                                    $cargo = $array['cargo'];
                                                                ?>
                                                                    <option value="<?php echo $id_cargo ?>"><?php echo $cargo ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <hr class="my-4">


                                                    <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-telephone text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contato...</p>
                                                    <div class="row gy-3">
                                                        <div class="col-md-6">
                                                            <label for="cc-number" class="form-label">Telefone:</label>
                                                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="cc-expiration" class="form-label">E-mail:</label>
                                                            <input type="text" class="form-control" id="email" name="email" placeholder="">
                                                            <small class="text-muted">(Separar multiplos e-mails com ponto e virgula ";")</small>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">


                                                    <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-person-check text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Credenciais de acesso...</p>

                                                    <div class="row gy-3">
                                                        <div class="col-md-12">
                                                            <label for="usuario" class="form-label">Usuario:</label>
                                                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usu??rio de acesso..." required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="senha" class="form-label">Senha:</label>
                                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha..." required>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="rsenha" class="form-label">Repita senha:</label>
                                                            <input type="password" class="form-control" id="rsenha" name="rsenha" placeholder="Repita a senha..." oninput='validaSenha(this)' required>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Mais Informa????es:</label>
                                                            <textarea class="form-control" id="info" name="info" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" href="#" id="btn-addcliente" class="btn btn-primary">Cadastrar</button>
                                                    </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIM CARD novo usuario -->
        </div>
        <!-- CARD TABELA -->
        <div class="row mx-auto">
        <div class="card shadow mb-3">
            <div class="flex-row p-2">
                <table class="table table-hover table-responsive-md table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col"><label class="td-hide">Email</label></th>
                            <th scope="col"><label class="td-hide">Telefone</label></th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Status</th>
                            <th scope="col">A????o</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include './scripts/conexao.php';
                        if ($filtro == "") {
                            $sql = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo ORDER BY u_nome ASC";
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
                            $id_usuario = $array['id_usuario'];
                            $u_nome = $array['u_nome'];
                            $u_cargo = $array['u_cargo'];
                            $cargo = $array['cargo'];
                            $u_user = $array['u_user'];
                            $u_mail = $array['u_mail'];
                            $u_tel = $array['u_tel'];
                            $u_status = $array['u_status'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $u_nome ?></th>
                                <td>
                                    <p class="td-hide"><?php echo $u_mail ?></p>
                                </td>
                                <td>
                                    <p class="td-hide"><?php echo $u_tel ?></p>
                                </td>
                                <td><?php echo $cargo ?></td>
                                <td><i class="bi bi-circle-fill" style="color:<?php if ($u_status == 1) {
                                                                                    echo 'green';
                                                                                } else {
                                                                                    echo 'red';
                                                                                } ?>;"></i></td>
                                <td><a href="?pagina=usuarios_view&&id=<?php echo $id_usuario ?>" style="font-size: 23px;"><i class="bi bi-eye"></i></i></i></a></td>
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
                      word-wrap: break-word;' href='?pagina=usuarios&&pag=$anterior'>Anterior</a>";
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
                      word-wrap: break-word;' href='?pagina=usuarios&&pag=$proximo'>Pr??xima</a>";
                        }
                        ?></center>
            </div>
        </div>
        <!-- FIM CARD TABELA -->
        </div>
    </div>
</div>
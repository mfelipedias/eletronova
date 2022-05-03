<?php
error_reporting(0);
$filtro = $_GET['filtro'];
$fpesquisa = $_GET['pesquisa'];
$ftipopesquisa = $_GET['tipo'];
?>
<div class="row mx-auto">
  <!-- COLUNA PESQUISA E TABELA -->
  <div class="col" style="min-width: 400px; max-width: 1600px; width: 100%">
    <div class="row">
      <!-- CARD PESQUISA -->
      <div class="col-xl-4" style="min-width:300px;">
        <div class="card shadow mb-2" style="width: 100%; min-width:300px">
          <div class="" style="padding: 3px;">
            <div class="flex-row p-1">
              <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" onclick="esconderCampos('pesquisa2','pesquisa1','pesquisa3')" aria-controls="collapseExample">
                <i class="bi bi-search"></i>
              </a>
              <span class="" style="font-size: 105%; font-weight:bold; margin-left:7px">Buscar...</span>

              <div class="collapse" id="filtros">

                <form class="mt-2" action="./scripts/cliente_filtro.php" method="post" style="padding: 0px 10px 10px;">
                  <div class="form-group row mt-1">
                    <div class="col-md-12">
                      <select class="form-select" id="tipopesquisa" name="tipopesquisa" onchange="esconderCampo('pesquisa2','pesquisa1','pesquisa3', this.id)" required>
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
                  <div class="form-group row mt-1">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="pesquisa1" name="pesquisa1" placeholder="Pesquisa..." value="" maxlength="40">
                    </div>
                  </div>
                  <div class="form-group row mt-1">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="pesquisa2" name="pesquisa2" placeholder="CPF/CNPJ" value="" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="18">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <select class="form-select" id="pesquisa3" name="pesquisa3">
                      <option value="1">Ativo</option>
                      <option value="0">Inativo</option>
                    </select>
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
              <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" onclick="esconderCampos('pesquisa2','pesquisa1', 'pesquisa3')" aria-expanded="false" aria-controls="collapseExample">
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
                  <div class="form-group d-flex justify-content-end mt-3">
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
                      <form class="needs-validation" action="./scripts/cliente_add.php" method="post">
                        <div class="" style="width: 100%; margin-left:auto; margin-right:auto">
                          <div class="row g-3">
                            <div class="col-md-3">
                              <label for="status" class="form-label">Status:</label>
                              <select class="form-select" id="status" name="status" required>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                              </select>
                            </div>

                            <div class="col-sm-9">
                              <label for="cpfcnpj" class="form-label">CPF / CNPJ:</label>
                              <input type="text" class="form-control " id="cpfcnpj" name="cpfcnpj" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="18" required>
                              <div id="retorno" class="form-text "></div>
                            </div>

                            <div class="col-12">
                              <label for="nome" class="form-label">Nome / Razão Social:</label>
                              <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" maxlength="60" required>
                            </div>
                            <div class="col-md-3">
                              <label for="cep" class="form-label">CEP:</label>
                              <input type="text" class="form-control" id="cep" name="cep" onkeypress="mascara(this, '#####-###')" maxlength="9" required>
                            </div>
                            <div class="col-9">
                              <label for="endereco" class="form-label">Rua:</label>
                              <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av/Rod..." maxlength="60" required>
                            </div>
                            <div class="col-5">
                              <label for="bairro" class="form-label">Bairro:</label>
                              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" maxlength="40" required>
                            </div>
                            <div class="col-5">
                              <label for="complemento" class="form-label">Cidade:</label>
                              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" maxlength="40" required>
                            </div>
                            <div class="col-2">
                              <label for="complemento" class="form-label">UF:</label>
                              <input type="text" class="form-control" id="uf" name="uf" placeholder="" maxlength="2" required>
                            </div>
                            <div class="col-12">
                              <label for="complemento" class="form-label">Complemento:</label>
                              <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto, bloco, quadra..." maxlength="40">
                            </div>

                            <div class="col-md-12 mt-3">
                              <label for="ramo" class="form-label">Ramo de Atividade:</label>
                              <select class="form-select" id="ramo" name="ramo" required>
                                <option value="">Escolha...</option>
                                <?php
                                include './scripts/conexao.php';
                                $sqlramos = "SELECT * FROM `ramos`";
                                $ramos = mysqli_query($conexao, $sqlramos);
                                while ($array = mysqli_fetch_array($ramos)) {
                                  $id_ramo = $array['id_ramo'];
                                  $ramo = $array['ramo'];
                                ?>
                                  <option value="<?php echo $id_ramo ?>"><?php echo $ramo ?></option>
                                <?php } ?>
                              </select>
                            </div>

                          </div>

                          <hr class="my-4">

                          <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-people text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contatos</p>

                          <div class="row gy-3">
                            <div class="col-md-6">
                              <label for="ctelefone" class="form-label">Nome:</label>
                              <input type="text" class="form-control" id="cnome" name="cnome" placeholder="" maxlength="200">
                            </div>

                            <div class="col-md-6">
                              <label for="ctelefone" class="form-label">Telefone:</label>
                              <input type="text" class="form-control" id="telefone" name="telefone" maxlength="200">
                            </div>

                            <div class="col-md-12">
                              <label for="cemail" class="form-label">E-mail:</label>
                              <input type="text" class="form-control" id="cemail" name="cemail" placeholder="" maxlength="200">
                              <small class="text-muted">(Separar multiplos e-mails com ponto e virgula ";")</small>
                            </div>
                          </div>
                          <hr class="my-4">
                          <div class="row">
                            <div class="col-md-12">
                              <label for="maisinfo" class="form-label">Mais Informações:</label>
                              <textarea class="form-control" rows="3" id="maisinfo" name="maisinfo" maxlength="400"></textarea>
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
      <!--FIM CARD NOVA ORDEM -->
    </div>
  </div>
  <div class="row mx-auto">
    <!-- CARD TABELA -->
    <div class="card shadow mb-3">
      <div class="flex-row p-2 ">
        <table class="table table-hover table-responsive-md table-sm">
          <thead>
            <tr>
              <th scope="col">CPF/CNPJ</th>
              <th scope="col">Nome</th>
              <th scope="col"><label class="td-hide">Endereço</label></th>
              <th scope="col">Status</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include './scripts/conexao.php';
            if ($filtro == "") {
              $sql = "SELECT * FROM `clientes` ORDER BY c_nome ASC";
            } else {
              $sql = $filtro;
            }
            $total_reg = "15"; // número de registros por página
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

            $tr = mysqli_num_rows($todos); // verifica o número total de registros
            $tp = $tr / $total_reg; // verifica o número total de páginas

            $busca = mysqli_query($conexao, $sql);
            $contador = 0;
            while ($array = mysqli_fetch_array($limite)) {

              $contador = $contador + 1;
              $id_cliente = $array['id_cliente'];
              $c_doc = $array['c_doc'];
              $c_nome = $array['c_nome'];
              $c_rua = $array['c_rua'];
              $c_cidade = $array['c_cidade'];
              $c_uf = $array['c_uf'];
              $c_bairro = $array['c_bairro'];
              $c_status = $array['c_status'];
            ?>
              <tr>

                <th><?php echo $c_doc ?></th>
                <td><?php echo $c_nome ?></td>
                <td><p class="td-hide"><?php echo $c_rua . ' , ' . $c_bairro . ' / ' . $c_cidade .  ' - ' . $c_uf ?></p></td>
                <td><i class="bi bi-circle-fill" style="color:<?php if ($c_status == 1) {
                                                                echo 'green';
                                                              } else {
                                                                echo 'red';
                                                              } ?>;"></i></td>
                <td><a href="?pagina=clientes_view&&id=<?php echo $id_cliente ?>" style="font-size: 23px;"><i class="bi bi-eye"></i></i></i></a></td>
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
                      word-wrap: break-word;' href='?pagina=clientes&&pag=$proximo'>Próxima</a>";
                }
                ?><certer>
      </div>
    </div>
    <!-- FIM CARD TABELA -->
  </div>
</div>
</div>
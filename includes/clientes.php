<div class="row mx-auto">
  <!-- COLUNA PESQUISA E TABELA -->
  <div class="col-md-7" style="min-width: 400px; max-width: 1366px; width: 100%">
    <div class="row">
      <!-- CARD PESQUISA -->
      <div class="col-md-4">
        <div class="card shadow mb-2" style="width: 100%; min-width:250px">
          <div class="" style="padding: 3px;">
            <div class="flex-row p-1">
              <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="bi bi-search"></i>
              </a>
              <span class="" style="font-size: 105%; font-weight:bold; margin-left:7px">Buscar...</span>

              <div class="collapse" id="filtros">

                <form class="mt-2" style="padding: 0px 10px 10px;">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="pcpfcnpj" name='pcpfcnpj' placeholder="CPF/CNPJ" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout();' maxlength="18">
                    </div>
                    </div>
                    <div class="form-group row mt-1">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="pnome" placeholder="Nome do Cliente" value="">
                    </div>
                  </div>
                  <div class="form-group row mt-1">
                    <div class="col-md-8 ">
                      <input type="text" class="form-control" id="pcidade" placeholder="Cidade" value="">
                    </div>

                    <div class="col-md-4">
                      <input type="text" class="form-control" id="pestado" placeholder="UF" value="">
                    </div>
                  </div>
                  <div class="form-group row mt-1">
                    <div class="col-md-8">
                      <select class="form-select" id="pramo">
                        <option value="">Ramo...</option>
                        <option>Alimentício</option>
                        <option>Escritório de Contabilidade</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <select class="form-select" id="pstatus">
                        <option value="">Status...</option>
                        <option value="1">Ativo</option>
                        <option value="2">Inativo</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group d-flex justify-content-end mt-3">
                    <button type="" href="#" class="btn btn-primary">Pesquisar</button>
                  </div>
                </form>

              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- FIM CARD PESQUISA -->
      <!-- CARD FILTROS -->
      <div class="col-md-4">
        <div class="card shadow mb-2" style="width: 100%; min-width:250px">
          <div class="" style="padding:3px;">
            <div class="flex-row p-1">
              <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="bi bi-filter"></i>
              </a>

              <span class="" style="font-size: 105%; font-weight:bold;margin-left:7px;">Filtros...</span>
              <div class="collapse" id="filtros">
                <div class="p-2">
                  <div class="row">
                    <div class="col-12">
                      <label><small>CPF/CNPJ:</small></label>
                      <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fcpfcnpj" readonly>
                      </div>
                      </div>
                      <div class="row">
                    <div class="col-12">
                      <label><small>Nome:</small></label>
                      <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fnome" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label><small>Estado:</small></label>
                      <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="festado" readonly>
                    </div>
                    <div class="col-6">
                      <label><small>Cidade:</small></label>
                      <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fcidade" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label><small>Atividade:</small></label>
                      <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fatividade" readonly>
                    </div>
                    <div class="col-6">
                      <label><small>Status:</small></label>
                      <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fstatus" readonly>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIM CARD FILTROS -->
      <!-- CARD NOVA ORDEM -->
      <div class="col-md-4">
        <div class="card shadow mb-2" style="width: 100%;min-width:250px">
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
                      <form action="./scripts/cliente_add.php" method="post">
                        <div class="" style="width: 100%; margin-left:auto; margin-right:auto">

                          <form class="needs-validation" novalidate>
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
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" maxlength="100" required>
                              </div>

                              <div class="col-12">
                                <label for="endereco" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua/Av/Rod..." maxlength="100" required>
                              </div>

                              <div class="col-12">
                                <label for="complemento" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto, bloco, quadra..." maxlength="50" required>
                              </div>


                              <div class="col-md-5">
                                <label for="cidade" class="form-label">Cidade:</label>
                                <select class="form-select" id="cidade" name="cidade">
                                </select>
                              </div>
                              <div class="col-md-4">
                                <label for="estado" class="form-label">Estado:</label>
                                <select class="form-select" id="estado" name="estado" onchange="buscaCidades(this.value)">
                                  <option value="">Selecione...</option>
                                  <option value="AC">Acre</option>
                                  <option value="AL">Alagoas</option>
                                  <option value="AM">Amazonas</option>
                                  <option value="AP">Amapá</option>
                                  <option value="BA">Bahia</option>
                                  <option value="CE">Ceará</option>
                                  <option value="DF">Distrito Federal</option>
                                  <option value="ES">Espírito Santo</option>
                                  <option value="GO">Goiás</option>
                                  <option value="MA">Maranhão</option>
                                  <option value="MG">Minas Gerais</option>
                                  <option value="MS">Mato Grosso do Sul</option>
                                  <option value="MT">Mato Grosso</option>
                                  <option value="PA">Pará</option>
                                  <option value="PB">Paraíba</option>
                                  <option value="PE">Pernambuco</option>
                                  <option value="PI">Piauí</option>
                                  <option value="PR">Paraná</option>
                                  <option value="RJ">Rio de Janeiro</option>
                                  <option value="RN">Rio Grande do Norte</option>
                                  <option value="RO">Rondônia</option>
                                  <option value="RR">Roraima</option>
                                  <option value="RS">Rio Grande do Sul</option>
                                  <option value="SC">Santa Catarina</option>
                                  <option value="SP">São Paulo</option>
                                  <option value="SE">Sergipe</option>
                                  <option value="TO">Tocantins</option>
                                </select>
                              </div>

                              <div class="col-md-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="" maxlength="9" required>
                              </div>

                              <div class="col-md-12 mt-3">
                                <label for="ramo" class="form-label">Ramo de Atividade:</label>
                                <select class="form-select" id="ramo" name="ramo" required>
                                  <option value="">Escolha...</option>
                                  <option>Construção</option>
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
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="maisinfo" name="maisinfo" maxlength="400"></textarea>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                              <button type="submit" href="#"  id="btn-addcliente" class="btn btn-primary">Cadastrar</button>
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
      <!-- CARD TABELA -->
      <div class="card shadow mb-3">
        <div class="flex-row p-2">
          <table class="table table-hover table-responsive-md table-sm">
            <thead>
              <tr>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include './scripts/conexao.php';
              $sql = "SELECT * FROM `clientes`";
              $busca = mysqli_query($conexao, $sql);
              $contador = 0;
              while ($array = mysqli_fetch_array($busca)) {

                $contador = $contador + 1;
                $id_cliente = $array['id_cliente'];
                $c_doc = $array['c_doc'];
                $c_nome = $array['c_nome'];
                $c_end = $array['c_end'];
                $c_status = $array['c_status'];
              ?>
                <tr>

                  <th><?php echo $c_doc ?></th>
                  <td><?php echo $c_nome ?></td>
                  <td><?php echo $c_end ?></td>
                  <td><?php echo $c_status ?></td>
                  <td><a href="?pagina=clientes_edit&&id=<?php echo $id_cliente ?>" style="font-size: 23px;"><i class="bi bi-pencil-square"></i></i></a></td>
                <?php } ?>
                </tr>

            </tbody>

          </table>
        </div>
      </div>
      <!-- FIM CARD TABELA -->

      <!-- COLUNA CADASTRO -->
    </div>
    <div class="col-md-5" style="min-width: 400px; max-width: 600px; width: 100%">

    </div>
    <!-- FIM COLUNA CADASTRO -->
  </div>
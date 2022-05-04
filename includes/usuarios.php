<div class="row mx-auto">
    <!-- COLUNA PESQUISA E TABELA -->
    <div class="col-xl-7" style="min-width: 375px; max-width: 1600px; width: 100%">
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
                                            <form class="needs-validation" action="./scripts/usuario_add.php" method="post">
                                                <div class="" style="width: 100%; margin-left:auto; margin-right:auto">
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
                                                            <input type="text" class="form-control " id="cpfcnpj" name="cpf" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="14">
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
                                                            <label for="ramo" class="form-label">Cargo / Função</label>
                                                            <select class="form-select" id="cargo" name="cargo" required>
                                                                <option value="">Escolha...</option>
                                                                <?php
                                                                include './scripts/conexao.php';
                                                                $sqlcargo = "SELECT * FROM `cargonivel`";
                                                                $cargos = mysqli_query($conexao, $sqlcargo);
                                                                while ($array = mysqli_fetch_array($cargos)) {
                                                                    $id_ramo = $array['id_cargo'];
                                                                    $ramo = $array['cargo'];
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
                                                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário de acesso...">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="senha" class="form-label">Senha:</label>
                                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha...">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="rsenha" class="form-label">Repita senha:</label>
                                                            <input type="password" class="form-control" id="rsenha" name="rsenha" placeholder="Repita a senha...">
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Mais Informações:</label>
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
            <!--FIM CARD NOVA ORDEM -->
        </div>
        <!-- CARD TABELA -->
        <div class="card shadow mb-3">
            <div class="flex-row p-2">
                <table class="table table-hover table-responsive-md table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Daniel Alberto</th>
                            <td>daniel@eletronovaengenharia.com.br</td>
                            <td>(11)9999-9999</td>
                            <td>Diretor</td>
                            <td>Ativo</td>
                            <td><a href="?pagina=usuarios_view" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- FIM CARD TABELA -->

    </div>
</div>
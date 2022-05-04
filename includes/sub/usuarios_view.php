<div class="row mx-auto">
    <div class="col">
        <div class="card shadow p-3" style="max-width: 1000px; width: 100%">
            <div class="row">
                <div class="col">
                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-info-lg text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Informações Gerais</label>
                </div>
                <!--EDITAR -->
                <div class="col-md-auto">
                    <a type="button" href="?pagina=usuarios_edit&&id=<?php echo $id ?>" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                </div>
                <form class="needs-validation" action="./scripts/usuario_add.php" method="post">
                    <div class="" style="width: 100%; margin-left:auto; margin-right:auto">
                        <div class="row g-3">
                            <div class="col-md-2">
                                <label for="status" class="form-label">Status:</label>
                                <input type="text" class="form-control " id="status" name="status" maxlength="10" readonly>
                            </div>

                            <div class="col-sm-5">
                                <label for="cpfcnpj" class="form-label">CPF:</label>
                                <input type="text" class="form-control " id="cpfcnpj" name="cpf" maxlength="14" readonly>
                                <div id="retorno" class="form-text "></div>
                            </div>
                            <div class="col-sm-5">
                                <label for="cpfcnpj" class="form-label">RG:</label>
                                <input type="text" class="form-control " id="rg" name="rg" maxlength="20" readonly>
                                <div id="retorno" class="form-text "></div>
                            </div>
                            <div class="col-12">
                                <label for="nome" class="form-label">Nome completo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" maxlength="60" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" name="cep" maxlength="9" readonly>
                            </div>
                            <div class="col-9">
                                <label for="endereco" class="form-label">Rua:</label>
                                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av/Rod..." maxlength="60" readonly>
                            </div>
                            <div class="col-5">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" maxlength="40" readonly>
                            </div>
                            <div class="col-5">
                                <label for="complemento" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" maxlength="40" readonly>
                            </div>
                            <div class="col-2">
                                <label for="complemento" class="form-label">UF:</label>
                                <input type="text" class="form-control" id="uf" name="uf" placeholder="" maxlength="2" readonly>
                            </div>
                            <div class="col-12">
                                <label for="complemento" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto, bloco, quadra..." maxlength="40" readonly>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="ramo" class="form-label">Cargo / Função</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" maxlength="20" readonly>
                            </div>

                        </div>
                        <hr class="my-4">


                        <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-telephone text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contato...</p>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" readonly>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-expiration" class="form-label">E-mail:</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="" readonly>
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
                        <hr class="my-4">
                        <a type="button" href="?pagina=usuarios" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</div>
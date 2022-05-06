<?php
include './scripts/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo WHERE id_usuario = $id";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {
    $id_usuario = $array['id_usuario'];
    $u_cpf = $array['u_cpf'];
    $u_rg = $array['u_rg'];
    $u_nome = $array['u_nome'];
    $u_cep = $array['u_cep'];
    $u_bairro = $array['u_bairro'];
    $u_rua = $array['u_rua'];
    $u_bairro = $array['u_bairro'];
    $u_cidade = $array['u_cidade'];
    $u_uf = $array['u_uf'];
    $u_comp = $array['u_comp'];
    $u_cargo = $array['u_cargo'];
    $cargo = $array['cargo'];
    $u_tel = $array['u_tel'];
    $u_status = $array['u_status'];
    $u_mail = $array['u_mail'];
    $u_user = $array['u_user'];
    $u_info = $array['u_info'];
    $u_cadastro = $array['u_cadastro'];
    $u_update = $array['u_update'];
}
?>
<div class="row mx-auto">
    <div class="col">
        <div class="card shadow p-3" style="max-width: 1000px; width: 100%">
            <div class="row">
                <div class="col">
                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-info-lg text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Informações Gerais</label>
                </div>
                <!--EXCLUIR -->
                <div class="col-md-auto">
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir"><i class="bi bi-trash"></i></button>
                    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="width: 380px; transition: bottom .75s ease-in-out">
                            <div class="modal-content rounded-6 shadow" style="border-radius: .75rem;">
                                <div class="modal-header border-bottom-0">
                                    <h5 class="modal-title">Exclusão</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body py-0">
                                    <p>Este cadastro está prestes a ser excluido. Essa ação não pode ser desfeita, deseja continuar?</p>
                                </div>
                                <div class="modal-footer flex-column border-top-0">
                                    <a type="button" class="btn btn-lg btn-danger w-100 mx-0 mb-2" href="./scripts/usuario_del.php?id=<?php echo $id_usuario ?>&&nome=<?php echo $u_nome; ?>">Sim</a>
                                    <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Não</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM EXCLUIR -->
            </div>
            <form class="needs-validation" action="./scripts/usuario_edit.php" method="post">
                <div class="" style="width: 100%; margin-left:auto; margin-right:auto">
                    <div class="row g-3">
                        <div class="col-md-2">
                            <label for="status" class="form-label">#ID:</label>
                            <input type="text" class="form-control " id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>" readonly>
                        </div>
                        <div class="col-md-2">
                            <label for="status" class="form-label">Status:</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="<?php echo $u_status ?>"><?php if ($u_status == 1) : echo "Ativo";
                                                                        else : echo "Inativo";
                                                                        endif; ?></option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="cc-name" class="form-label">Cadastro:</label>
                            <input type="text" class="form-control" id="cadastro" name="cadastro" placeholder="" value="<?php echo date('d/m/Y H:i:s', strtotime($u_cadastro)); ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="cc-name" class="form-label">Atualização:</label>
                            <input type="text" class="form-control" id="update" name="update" placeholder="" value="<?php echo date('d/m/Y H:i:s', strtotime($u_update)); ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label for="cpfcnpj" class="form-label">CPF:</label>
                            <input type="text" class="form-control " id="cpfcnpj" name="cpf" value="<?php echo $u_cpf ?>" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="14" readonly>
                            <div id="retorno" class="form-text "></div>
                        </div>
                        <div class="col-sm-6">
                            <label for="cpfcnpj" class="form-label">RG:</label>
                            <input type="text" class="form-control " id="rg" name="rg" maxlength="20" value="<?php echo $u_rg ?>">
                            <div id="retorno" class="form-text "></div>
                        </div>
                        <div class="col-12">
                            <label for="nome" class="form-label">Nome completo:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="<?php echo $u_nome ?>" maxlength="60">
                        </div>
                        <div class="col-3">
                            <label for="cep" class="form-label">CEP:</label>
                            <input type="text" class="form-control" id="cep" name="cep" onkeypress="mascara(this, '#####-###')" value="<?php echo $u_cep ?>" maxlength="9">
                        </div>
                        <div class="col-9">
                            <label for="endereco" class="form-label">Rua:</label>
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av/Rod..." value="<?php echo $u_rua ?>" maxlength="60">
                        </div>
                        <div class="col-5">
                            <label for="bairro" class="form-label">Bairro:</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" value="<?php echo $u_bairro ?>" maxlength="40">
                        </div>
                        <div class="col-5">
                            <label for="complemento" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" value="<?php echo $u_cidade ?>" maxlength="40">
                        </div>
                        <div class="col-2">
                            <label for="complemento" class="form-label">UF:</label>
                            <input type="text" class="form-control" id="uf" name="uf" placeholder="" value="<?php echo $u_uf ?>" maxlength="2">
                        </div>
                        <div class="col-12">
                            <label for="complemento" class="form-label">Complemento:</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto, bloco, quadra..." value="<?php echo $u_comp ?>" maxlength="40">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="ramo" class="form-label">Cargo / Função</label>
                            <select class="form-select" id="cargo" name="cargo" required>
                                <option value="<?php echo $u_cargo ?>"><?php echo $cargo ?></option>
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
                    <hr class="my-4">


                    <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-telephone text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contato...</p>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" value="<?php echo $u_tel ?>">
                        </div>

                        <div class="col-md-6">
                            <label for="cc-expiration" class="form-label">E-mail:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo $u_mail ?>">
                            <small class="text-muted">(Separar multiplos e-mails com ponto e virgula ";")</small>
                        </div>
                    </div>
                    <hr class="my-4">


                    <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-person-check text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Credenciais de acesso...</p>

                    <div class="row gy-3">
                        <div class="col">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário de acesso..." value="<?php echo $u_user ?>">
                        </div>
                        <div class="col">
                            <button type="button" style="margin-top: 30px" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSenha">
                                Mudar Senha
                            </button>
                        </div>
                    </div>


                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Mais Informações:</label>
                            <textarea class="form-control" id="info" name="info" rows="3"><?php echo $u_info ?></textarea>
                        </div>
                    </div>
                    <hr class="">
                    <a type="button" href="?pagina=usuarios_view&&id=<?php echo $id ?>" class="btn btn-primary">Voltar</a>
                    <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalSalvar">Salvar</a>
                    <div class="modal fade " tabindex="-1" role="dialog" id="modalSalvar">
                        <div class="modal-dialog" role="document" style="width: 380px; transition: bottom .75s ease-in-out">
                            <div class="modal-content rounded-6 shadow" style="border-radius: .75rem;">
                                <div class="modal-header border-bottom-0">
                                    <h5 class="modal-title">Alterações</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body py-0">
                                    <p>Este cadatrao está prestes a ser alterado, deseja continuar?</p>
                                </div>
                                <div class="modal-footer flex-column border-top-0">
                                    <button type="submit" class="btn btn-lg btn-primary w-100 mx-0 mb-2">Salvar</button>
                                    <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Voltar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalSenha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mudança de Senha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" action="./scripts/senha_edit.php" method="post">
                        <label for="status" class="form-label">#ID:</label>
                        <input type="text" class="form-control " id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>" readonly>

                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha..." maxlength="20" required>
                        <label for="rsenha" class="form-label">Repita senha:</label>
                        <input type="password" class="form-control" id="rsenha" name="rsenha" placeholder="Repita a senha..." maxlength="20" oninput='validaSenha(this)' required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="Submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
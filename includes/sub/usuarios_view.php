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
                <!--EDITAR -->
                <div class="col-md-auto">
                    <a type="button" href="?pagina=usuarios_edit&&id=<?php echo $id ?>" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                </div>
                
                <form class="needs-validation" action="./scripts/usuario_add.php" method="post">
                    <div class="" style="width: 100%; margin-left:auto; margin-right:auto">
                        <div class="row g-3">
                            <div class="col-md-2">
                                <label for="status" class="form-label">#ID:</label>
                                <input type="text" class="form-control " id="status" name="status" value="<?php echo $id_usuario?>" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="status" class="form-label">Status:</label>
                                <input type="text" class="form-control " id="status" name="status" maxlength="10" value="<?php if ($u_status == 1) : echo "Ativo";
                                                                                                                            else : echo "Inativo";
                                                                                                                            endif; ?>" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="cc-name" class="form-label">Cadastro:</label>
                                <input type="text" class="form-control" id="cadastro" name="cadastro" placeholder="" value="<?php echo date('d/m/Y H:i:s', strtotime($u_cadastro)); ?>" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="cc-name" class="form-label">Atualização:</label>
                                <input type="text" class="form-control" id="update" name="update" placeholder="" value="<?php echo date('d/m/Y H:i:s', strtotime($u_update)); ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="cpfcnpj" class="form-label">CPF:</label>
                                <input type="text" class="form-control " id="cpfcnpj" name="cpf" maxlength="14" value="<?php echo $u_cpf ?>" readonly>
                                <div id="retorno" class="form-text "></div>
                            </div>
                            <div class="col-md-6">
                                <label for="cpfcnpj" class="form-label">RG:</label>
                                <input type="text" class="form-control " id="rg" name="rg" maxlength="20" value="<?php echo $u_rg ?>" readonly>
                                <div id="retorno" class="form-text "></div>
                            </div>
                            <div class="col-12">
                                <label for="nome" class="form-label">Nome completo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="" maxlength="60" value="<?php echo $u_nome ?>" readonly>
                            </div>
                            <div class="col-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?php echo $u_cep ?>"readonly>
                            </div>
                            <div class="col-9">
                                <label for="endereco" class="form-label">Rua:</label>
                                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av/Rod..." maxlength="60" value="<?php echo $u_rua ?>"readonly>
                            </div>
                            <div class="col-5">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" maxlength="40" value="<?php echo $u_bairro ?>"readonly>
                            </div>
                            <div class="col-5">
                                <label for="complemento" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" maxlength="40" value="<?php echo $u_cidade ?>" readonly>
                            </div>
                            <div class="col-2">
                                <label for="complemento" class="form-label">UF:</label>
                                <input type="text" class="form-control" id="uf" name="uf" placeholder="" maxlength="2" value="<?php echo $u_uf ?>" readonly>
                            </div>
                            <div class="col-12">
                                <label for="complemento" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto, bloco, quadra..." maxlength="40" value="<?php echo $u_comp ?>" readonly>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="ramo" class="form-label">Cargo / Função</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" maxlength="20" value="<?php echo $cargo ?>" readonly>
                            </div>

                        </div>
                        <hr class="my-4">


                        <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-telephone text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contato...</p>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" value="<?php echo $u_tel ?>"readonly>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-expiration" class="form-label">E-mail:</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo $u_mail ?>"readonly>
                            </div>
                        </div>
                        <hr class="my-4">


                        <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-person-check text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Credenciais de acesso...</p>

                        <div class="row gy-3">
                            <div class="col-md-12">
                                <label for="usuario" class="form-label">Usuario:</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário de acesso..." value="<?php echo $u_user ?>" readonly>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Mais Informações:</label>
                                <textarea class="form-control" id="info" name="info" rows="3" readonly><?php echo $u_info ?></textarea>
                            </div>
                        </div>
                        <hr class="my-4">
                        <a type="button" href="?pagina=usuarios" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</div>
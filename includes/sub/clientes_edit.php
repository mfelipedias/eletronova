<?php
include './scripts/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM clientes INNER JOIN ramos ON c_ramo=id_ramo WHERE id_cliente = $id";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {
    $doc = $array['c_doc'];
    $nome = $array['c_nome'];
    $idramo = $array['c_ramo'];
    $ramo = $array['ramo'];
    $cep = $array['c_cep'];
    $rua = $array['c_rua'];
    $bairro = $array['c_bairro'];
    $comp = $array['c_comp'];
    $cidade = $array['c_cidade'];
    $uf = $array['c_uf'];
    $contato = $array['c_contato'];
    $tel = $array['c_tel'];
    $mail = $array['c_mail'];
    $info = $array['c_info'];
    $status = $array['c_status'];
    $c_cadastro = $array['c_cadastro'];
    $c_update = $array['c_update'];
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
                                    <a type="button" class="btn btn-lg btn-danger w-100 mx-0 mb-2" href="./scripts/cliente_del.php?id=<?php echo $id ?>&&nome=<?php echo $nome ?>">Sim</a>
                                    <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Não</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM EXCLUIR -->
            </div>
            <form class="mt-3" action="./scripts/cliente_edit.php" method="post">
                <div class="row g-3">
                    <div class="col-md-2">
                        <label for="cc-name" class="form-label">#ID:</label>
                        <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="" value="<?php echo $id; ?>" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="country" class="form-label">Status:</label>
                        <select class="form-select" id="status" name="status">
                            <option value="<?php echo $status ?>"><?php if ($status == 1) : echo "Ativo";
                                                                    else : echo "Inativo";
                                                                    endif; ?></option>
                            <?php if ($status == 1) : $__status = 0;
                            else : $__status = 1;
                            endif; ?>
                            <option value="<?php echo $__status ?>"><?php if ($status == 1) : echo "Inativo";
                                                                    else : echo "Ativo";
                                                                    endif; ?></option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="cc-name" class="form-label">Cadastro:</label>
                        <input type="text" class="form-control" id="cadastro" name="cadastro" placeholder="" value="<?php echo date('d/m/Y H:i:s', strtotime($c_cadastro)); ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="cc-name" class="form-label">Atualização:</label>
                        <input type="text" class="form-control" id="update" name="update" placeholder="" value="<?php echo date('d/m/Y H:i:s', strtotime($c_update)); ?>" readonly>
                    </div>

                    <div class="col-sm-4">
                        <label for="country" class="form-label">CPF/CNPJ:</label>
                        <input type="text" class="form-control" id="cpfcnpj" name="cpfcnpj" placeholder="Nome" value="<?php echo $doc ?>" readonly>
                    </div>
                    <div class="col-sm-8">
                        <label for="country" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome ?>">
                    </div>

                    <div class="col-md-12">
                        <label for="country" class="form-label">Ramo de Atividade:</label>
                        <select class="form-select" id="ramo" name="ramo" required>
                            <option value="<?php echo $idramo ?>"><?php echo $ramo ?></option>
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
                    <hr class="mb-0">
                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endereço</label>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="" onkeypress="mascara(this, '#####-###')" value="<?php echo $cep ?>" maxlength="9" required>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Rua:</label>
                        <input type="text" class="form-control" id="rua" name="rua" value="<?php echo $rua ?>" maxlength="60" placeholder="">
                    </div>
                    <div class="col-md-3">
                        <label for="cidade" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $bairro ?>" maxlength="40" placeholder="">
                    </div>
                    <div class="col-md-4">
                        <label for="address" class="form-label">Complemento:</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $comp ?>" maxlength="40" placeholder="Apto, bloco, quadra...">
                    </div>
                    <div class="col-md-4">
                        <label for="cidade" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade ?>" maxlength="40" placeholder="">
                    </div>
                    <div class="col-md-4">
                        <label for="estado" class="form-label">Estado:</label>
                        <input type="text" class="form-control" id="uf" name="uf" value="<?php echo $uf ?>" maxlength="2" placeholder="">
                    </div>
                </div>

                <hr class="my-4">

                <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-telephone text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contatos</p>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="contato" name="contato" value="<?php echo $contato ?>" placeholder="">
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $tel ?>" placeholder="">
                    </div>

                    <div class="col-md-12">
                        <label for="cc-expiration" class="form-label">E-mail:</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $mail ?>" placeholder="">
                        <small class="text-muted">(Separar multiplos e-mails com ponto e virgula ";")</small>
                    </div>
                </div>
                <hr class="">
                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
                <div class="row gy-3">
                    <div class="col-md-12 my-3">
                        <textarea class="form-control mt-3" rows="5" id="maisinfo" name="maisinfo" maxlength="400"><?php echo $info; ?></textarea>
                    </div>
                </div>
                <hr class="">
                <a type="button" href="?pagina=clientes_view&&id=<?php echo $id ?>" class="btn btn-primary">Voltar</a>
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
</div>
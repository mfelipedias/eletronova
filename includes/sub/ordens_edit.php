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
                                    <a type="button" class="btn btn-lg btn-danger w-100 mx-0 mb-2" href="./scripts/ordem_del.php?id=<?php echo $id_os ?>">Sim</a>
                                    <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Não</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM EXCLUIR -->
            </div>
            <form class="needs-validation" action="./scripts/ordem_edit.php" method="post">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="cc-name" class="form-label">OS:</label>
                        <input type="text" class="form-control" id="id_os" name="id_os" value="<?php echo $id_os ?>" readonly>
                    </div>
                    <div class="col-md-3">

                        <label for="country" class="form-label">Status:</label>
                        <select class="form-select" id="status" name="status">
                            <option value="<?php echo $os_status ?>"><?php if ($os_status == 1) : echo "Ativa";
                                                                        else : echo "Inativa";
                                                                        endif; ?></option>
                            <option value="1">Ativa</option>
                            <option value="2">Inativa</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="cc-name" class="form-label">Abertura:</label>
                        <input type="text" class="form-control" id="dabertura" value="<?php echo $os_cadastro ?>" readonly>
                    </div>
                    <div class="col-md-3">
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
                        <select class="form-select" id="tipo" name="tipo" required>
                            <option value="<?php echo $os_tipo ?>"><?php echo $os_tipo ?></option>
                            <option value="Obra">Obra</option>
                            <option value="Manutenção">Manutenção</option>
                            <option value="Visita técnica">Visita técnica</option>
                        </select>
                    </div>
                    <hr class="mb-0">
                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endereço</label>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="" value="<?php echo $os_cep ?>">
                    </div>
                    <div class="col-6">
                        <label for="address" class="form-label">Rua:</label>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av/Rod..." value="<?php echo $os_rua ?>">
                    </div>
                    <div class="col-3">
                        <label for="address" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." id="bairro" name="bairro" value="<?php echo $os_bairro ?>">
                    </div>

                    <div class="col-5">
                        <label for="address" class="form-label">Complemento:</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto, bloco, quadra..."  value="<?php echo $os_comp ?>">
                    </div>
                    <div class="col-md-5">
                        <label for="country" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="cidade"   name="cidade" placeholder="Cidade" value="<?php echo $os_cidade ?>">
                    </div>

                    <div class="col-md-2">
                        <label for="state" class="form-label">Estado:</label>
                        <input type="text" class="form-control" id="uf" name="uf" placeholder="UF" value="<?php echo $os_uf ?>">
                    </div>
                </div>

                <hr class="">
                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
                <div class="row gy-3">
                    <div class="col-md-12 my-3">
                        <textarea class="form-control mt-3" id="maisinfo" name="maisinfo" rows="3"><?php echo $os_info ?></textarea>
                    </div>
                </div>
                <hr class="">
                <a type="button" href="?pagina=ordens_view&&id=<?php echo $id_os ?>" class="btn btn-primary">Voltar</a>
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
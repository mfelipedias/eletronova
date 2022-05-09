<?php
include './scripts/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `ordens` INNER JOIN `clientes` ON os_cliente=id_cliente ORDER BY c_nome ASC";
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
                    <a type="button" href="?pagina=ordens_edit&&id=<?php echo $id_os?>" class="btn btn-outline-warning"><i class="bi bi-pen"></i></a>
                </div>
            </div>
            <form class="mt-3">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="country" class="form-label">Status:</label>
                        <input type="text" class="form-control" id="status" placeholder="" value="<?php if ($os_status == 1) : echo "Ativo";
                                                                                                    else : echo "Inativo";
                                                                                                    endif; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="cc-name" class="form-label">Abertura:</label>
                        <input type="text" class="form-control" id="dabertura" value="<?php echo $os_cadastro ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="cc-name" class="form-label">Encerramento:</label>
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
                        <input type="text" class="form-control" id="tipo" placeholder="" value="<?php echo $os_tipo ?>" readonly>
                    </div>
                    <hr class="mb-0">
                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endereço</label>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="zip" placeholder="" value="<?php echo $os_cep ?>" readonly>
                    </div>
                    <div class="col-6">
                        <label for="address" class="form-label">Rua:</label>
                        <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." value="<?php echo $os_rua ?>" readonly>
                    </div>
                    <div class="col-3">
                        <label for="address" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." value="<?php echo $os_bairro ?>" readonly>
                    </div>

                    <div class="col-5">
                        <label for="address" class="form-label">Complemento:</label>
                        <input type="text" class="form-control" id="address" placeholder="Apto, bloco, quadra..." value="<?php echo $os_comp ?>" readonly>
                    </div>
                    <div class="col-md-5">
                        <label for="country" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="address" placeholder="Cidade" value="<?php echo $os_cidade ?>" readonly>
                    </div>

                    <div class="col-md-2">
                        <label for="state" class="form-label">Estado:</label>
                        <input type="text" class="form-control" id="address" placeholder="UF" value="<?php echo $os_uf ?>" readonly>
                    </div>
                </div>

                <hr class="">
                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
                <div class="row gy-3">
                    <div class="col-md-12 my-3">
                        <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" readonly><?php echo $os_info ?></textarea>
                    </div>
                </div>
                <hr class="">
                <div class="row">
                    <div class="col">
                        <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Lista de Material</label>
                    </div>
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-outline-success"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="row px-3">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Responsável</th>
                                <th scope="col ">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01/01/2022</th>
                                <td>Rafael</td>
                                <td class="">
                                    <button type="button" class="btn btn-sm btn-outline-warning"><i class="bi bi-pen"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="">
                <div class="row">
                    <div class="col">
                        <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Ponto</label>
                    </div>
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-outline-success"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="row px-3">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Responsável</th>
                                <th scope="col ">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01/01/2022</th>
                                <td>Rafael</td>
                                <td class="">
                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-door-open"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a type="button" href="?pagina=ordens" class="btn btn-primary">Voltar</a>
            </form>
        </div>
    </div>
</div>
<div class="card shadow p-3" style="max-width: 1000px">
    <div class="row">
        <div class="col">
            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Ordem de Serviço: #001</label>
        </div>
        <div class="col-md-auto">
            <a type="button" href="?pagina=ordens_edit" class="btn btn-outline-warning"><i class="bi bi-pen"></i></a>
        </div>
    </div>
    <form class="mt-3">
        <div class="row g-3">
            <div class="col-md-4">
                <label for="country" class="form-label">Status:</label>
                <input type="text" class="form-control" id="status" placeholder="" readonly>
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Abertura:</label>
                <input type="date" class="form-control" id="dabertura" placeholder="" readonly>
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Encerramento:</label>
                <input type="date" class="form-control" id="dencerramento" placeholder="" readonly>
            </div>
            <div class="col-sm-4">
                <label for="country" class="form-label">CPF/CNPJ:</label>
                <input type="text" class="form-control" id="cpfcnpj" placeholder="" value="" readonly>
            </div>
            <div class="col-sm-8">
                <label for="country" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="" readonly>
            </div>

            <div class="col-md-12">
                <label for="country" class="form-label">Tipo:</label>
                <input type="text" class="form-control" id="tipo" placeholder="" value="" readonly>
            </div>
            <hr class="mb-0">
            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endereço</label>
            <div class="col-md-3">
                <label for="zip" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="zip" placeholder="" readonly>
            </div>
            <div class="col-9">
                <label for="address" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." readonly>
            </div>

            <div class="col-4">
                <label for="address" class="form-label">Complemento:</label>
                <input type="text" class="form-control" id="address" placeholder="Apto, bloco, quadra..." readonly>
            </div>
            <div class="col-md-4">
                <label for="country" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="address" placeholder="Cidade" readonly>
            </div>

            <div class="col-md-4">
                <label for="state" class="form-label">Estado:</label>
                <input type="text" class="form-control" id="address" placeholder="UF" readonly>
            </div>
        </div>

        <hr class="">
        <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
        <div class="row gy-3">
            <div class="col-md-12 my-3">
                <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
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
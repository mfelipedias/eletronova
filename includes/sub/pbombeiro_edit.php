<div class="card shadow p-3" style="max-width: 1000px">
    <div class="row">
        <div class="col">
            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Informações Gerais</label>
        </div>
        <div class="col-md-auto">
            <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
        </div>
    </div>
    <form class="mt-3">
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="country" class="form-label">CPF/CNPJ:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" value="" readonly>
            </div>
            <div class="col-sm-6">
                <label for="country" class="form-label">Cliente:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" value="" readonly>
            </div>
            <div class="col-md-6">
                <label for="country" class="form-label">Status:</label>
                <select class="form-select" id="country">
                    <option value="1">Em processo</option>
                    <option value="2">Concluído</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="country" class="form-label">Tipo:</label>
                <select class="form-select" id="country">
                    <option selected>Selecionar...</option>
                    <option value="1">CLCB</option>
                    <option value="2">AVCB</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Início:</label>
                <input type="date" class="form-control" id="cc-name" placeholder="">
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Conclusão:</label>
                <input type="date" class="form-control" id="cc-name" placeholder="">
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Vencimento:</label>
                <input type="date" class="form-control" id="cc-name" placeholder="">
            </div>

            <hr class="mb-0">
            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Local do Processo</label>
            <div class="col-md-3">
                <label for="zip" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
            </div>
            <div class="col-9">
                <label for="address" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod...">
            </div>

            <div class="col-4">
                <label for="address" class="form-label">Complemento:</label>
                <input type="text" class="form-control" id="address" placeholder="Apto, bloco, quadra...">
            </div>
            <div class="col-md-4">
                <label for="country" class="form-label">Cidade:</label>
                <select class="form-select" id="country">
                    <option value="">Escolha...</option>
                    <option>Cotia</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="state" class="form-label">Estado:</label>
                <select class="form-select" id="state">
                    <option value="">Escolha...</option>
                    <option>SP</option>
                </select>
            </div>

            <div class="col-md-12 mt-3">
                <label for="country" class="form-label">Ramo de Atividade:</label>
                <select class="form-select" id="country">
                    <option value="">Escolha...</option>
                    <option>Construção</option>
                </select>
            </div>

        </div>


        <hr class="">
        <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
        <div class="row gy-3">
            <div class="col-md-12 my-3">
                <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <hr class="">
        <div class="row">
            <div class="col">
                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Anexos</label>
            </div>
            <div class="col-md-auto">
                <button type="button" class="btn btn-outline-success"><i class="bi bi-plus-lg"></i></button>
            </div>
        </div>
        <div class="row px-3">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Arquivo</th>
                        <th scope="col ">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>protocolo.pdf</td>
                        <td class="">
                            <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-cloud-download"></i></button>
                            <button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>protocolo.pdf</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-cloud-download"></i></button>
                            <button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>protocolo.pdf</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-cloud-download"></i></button>
                            <button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr class="">
        <div class="row">
            <div class="col">
                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-card-checklist text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Check Lists</label>
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
                        <th scope="row">01/01/2020</th>
                        <td>Felipe Manso</td>
                        <td class="">
                        <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                            <button type="button" class="btn btn-sm btn-outline-warning"><i class="bi bi-pen"></i></button>
                            <button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a type="button" href="?pagina=pbombeiro" class="btn btn-primary">Voltar</a>
        <a type="button" href="?pagina=pbombeiro" class="btn btn-success">Salvar</a>
    </form>


</div>
<div class="card shadow p-3" style="max-width: 1000px">
    <div class="row">
        <div class="col">
            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Ordem de Serviço: #001</label>
        </div>
        <div class="col-md-auto">
            <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
        </div>
    </div>
    <form class="mt-3">
        <div class="row g-3">
            <div class="col-md-4">
                <label for="country" class="form-label">Status:</label>
                <select class="form-select" id="country" >
                    <option value="1">Ativa</option>
                    <option value="2">Concluída</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Abertura:</label>
                <input type="date" class="form-control" id="cc-name" placeholder="" readonly>
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Encerramento:</label>
                <input type="date" class="form-control" id="cc-name" placeholder="">
            </div>
            <div class="col-sm-4">
                <label for="country" class="form-label">CPF/CNPJ:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" value="" readonly>
            </div>
            <div class="col-sm-8">
                <label for="country" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" value="" readonly>
            </div>

            <div class="col-md-12">
                <label for="country" class="form-label">Tipo:</label>
                <select class="form-select" id="country" required>
                    <option value="">Escolha...</option>
                    <option>Obra</option>
                    <option>Manutenção</option>
                    <option>Visita técnica</option>
                </select>
            </div>
            <hr class="mb-0">
            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endereço</label>
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
        </div>

        <hr class="">
        <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
        <div class="row gy-3">
            <div class="col-md-12 my-3">
                <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <a type="button" href="?pagina=ordens_view" class="btn btn-primary">Voltar</a>
        <a type="button" href="#" class="btn btn-success">Salvar</a>
    </form>


</div>
<div class="card shadow p-3" style="max-width: 1000px; width: 100%" >
    <div class="row">
        <div class="col">
            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-info-lg text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Informações Gerais</label>
        </div>
        <!--EXCLUIR -->
        <div class="col-md-auto">
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir"><i class="bi bi-trash"></i></button>
            <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h4 style="color:red">Tem certeza que deseja excluir?</h4>
                            <p>(Se houver processos vinculados á este cliente a exclusão nao será feita, ao invés disso o cadastro será inativado.)</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <button type="button" class="btn btn-danger">Sim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIM EXCLUIR -->
    </div>
    <form class="mt-3">
        <div class="row g-3">
            <div class="col-md-4">
                <label for="country" class="form-label">Status:</label>
                <select class="form-select" id="country">
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Cadastro:</label>
                <input type="date" class="form-control" id="cc-name" placeholder="" readonly>
            </div>
            <div class="col-md-4">
                <label for="cc-name" class="form-label">Atualização:</label>
                <input type="date" class="form-control" id="cc-name" placeholder="" readonly>
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
                <label for="country" class="form-label">Ramo de Atividade:</label>
                <select class="form-select" id="country" required>
                    <option value="">Escolha...</option>
                    <option>Construção</option>
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
                <label for="cidade" class="form-label">Cidade:</label>
                <select class="form-select" id="cidade">
                </select>
            </div>

            <div class="col-md-4">
                <label for="estado" class="form-label">Estado:</label>
                <select class="form-select" id="estado" onchange="buscaCidades(this.value)">
                    <option value="">Selecione...</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AM">Amazonas</option>
                    <option value="AP">Amapá</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="PR">Paraná</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>

        <hr class="my-4">

        <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-people text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contatos</p>

        <div class="row gy-3">
            <div class="col-md-6">
                <label for="cc-name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="cc-name" placeholder="">
            </div>

            <div class="col-md-6">
                <label for="cc-number" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="cc-number" placeholder="">
            </div>

            <div class="col-md-12">
                <label for="cc-expiration" class="form-label">E-mail:</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="">
                <small class="text-muted">(Separar multiplos e-mails com ponto e virgula ";")</small>
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
                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-archive text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Anexos</label>
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
        <a type="button" href="?pagina=clientes" class="btn btn-primary">Voltar</a>
        <a type="button" href="#" class="btn btn-success">Salvar</a>
    </form>


</div>
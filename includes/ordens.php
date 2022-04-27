<div class="row mx-auto">
    <!-- COLUNA PESQUISA E TABELA -->
    <div class="col-md-12" style="min-width: 400px; max-width: 1366px">
        <div class="row">
            <!-- CARD PESQUISA -->
            <div class="col-md-4">
                <div class="card shadow mb-2" style="width: 100%;">
                    <div class="" style="padding: 3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-search"></i>
                            </a>
                            <span class="" style="font-size: 105%; font-weight:bold; margin-left:7px">Buscar...</span>

                            <div class="collapse" id="filtros">

                                <form class="" style="padding: 0px 10px 10px;">
                                    <div class="form-group row">
                                        <div class="col-sm-5 mt-2">
                                            <label for="firstName" class="form-label">OS:</label>
                                            <input type="text" class="form-control" id="pcpfcnpj" placeholder="" value="">
                                        </div>

                                        <div class="col-sm-7 mt-2">
                                            <label for="lastName" class="form-label">Nome / Razao Social:</label>
                                            <input type="text" class="form-control" id="pnome" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-7 mt-2">
                                            <label for="country" class="form-label">Cidade:</label>
                                            <select class="form-select" id="country">
                                                <option value="">Escolha...</option>
                                                <option>Cotia</option>
                                            </select>
                                        </div>

                                        <div class="col-md-5 mt-2">
                                            <label for="state" class="form-label">Estado:</label>
                                            <select class="form-select" id="state">
                                                <option value="">Escolha...</option>
                                                <option>SP</option>
                                            </select>
                                        </div>
                                    </div>
                               
                                    <div class="form-group d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM CARD PESQUISA -->
            <!-- CARD FILTROS -->
            <div class="col-md-4">
                <div class="card shadow mb-2" style="width: 100%;">
                    <div class="" style="padding:3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-filter"></i>
                            </a>

                            <span class="" style="font-size: 105%; font-weight:bold;margin-left:7px;">Filtros...</span>
                            <div class="collapse" id="filtros">
                                <div class="p-2">
                                    <label><small>CPF/CNPJ:</small></label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                    <label>Nome:</label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                    <label>Estado:</label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                    <label>Cidade:</label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                    <label>Status:</label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM CARD FILTROS -->
            <!-- CARD NOVA ORDEM -->
            <div class="col-md-4">
                <div class="card shadow mb-2" style="width: 100%;">
                    <div class="" style="padding: 3px;">
                        <div class="flex-row p-1">
                            <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-plus-lg"></i>
                            </a>
                            <span class="" style="font-size: 105%; font-weight:bold; margin-left:7px">Novo...</span>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Nova Ordem</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Ordem de Serviço</label>
                                                </div>
                                            </div>
                                            <form class="mt-3">
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label for="country" class="form-label">Status:</label>
                                                        <select class="form-select" id="country">
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
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <div class="input-group-text bg-white"><i class="bi bi-search"></i></div>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>Cliente...</option>
                                                                <option value="1">12.066.774/0001-02 ELETRONOVA ENGENHARIA E TECNOLOGIA LTDA</option>
                                                                <option value="2">32.790.717/0001-70 TEMPLO ZULAI</option>
                                                                <option value="3">07.675.438/0001-19 AUTO POSTO PEDRAS LTDA</option>
                                                            </select>
                                                        </div>
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
                                                    <hr class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Endereço</label>
                                                        </div>
                                                        <div class="col-md-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="checkNovoEnd" onclick="habilitaEnd()" value="1" checked>
                                                                <label class="form-check-label" for="exampleRadios1">
                                                                    Novo Endereço
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="checkCadEnd" onclick="desabilitaEnd()" value="2">
                                                                <label class="form-check-label" for="exampleRadios2">
                                                                    Endereço do Cadastro
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zip" class="form-label">CEP:</label>
                                                        <input type="text" class="form-control" id="cep" placeholder="" required>
                                                    </div>
                                                    <div class="col-9">
                                                        <label for="address" class="form-label">Endereço:</label>
                                                        <input type="text" class="form-control" id="endereco" placeholder="Rua/Av/Rod...">
                                                    </div>

                                                    <div class="col-4">
                                                        <label for="address" class="form-label">Complemento:</label>
                                                        <input type="text" class="form-control" id="complemento" placeholder="Apto, bloco, quadra...">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="cidade" class="form-label">Cidade:</label>
                                                        <select class="form-select" id="cidade">
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="estado" class="form-label">Estado:</label>
                                                        <select class="form-select" id="estado" onchange="buscaCidades(this.value)">
                                                            <option value="">Selecione o Estado</option>
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

                                                <hr class="">
                                                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Mais informações</label>
                                                <div class="row gy-3">
                                                    <div class="col-md-12 my-3">
                                                        <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" href="#" class="btn btn-primary">Cadastrar</button>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIM CARD NOVA ORDEM -->
        </div>
        <!-- CARD TABELA -->
        <div class="card shadow mb-3">
            <div class="flex-row p-2">
                <table class="table table-hover table-responsive-md table-sm">
                    <thead>
                        <tr>
                            <th scope="col">O.S.</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">01</th>
                            <td>Eletronova Engenharia e Tecnologia Ltda</td>
                            <td>Rua Miguel Calmon, 68</td>
                            <td>Manutenção</td>
                            <td><i class="bi bi-circle-fill" style="color:green;"></i></td>
                            <td><a href="?pagina=ordens_view" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FIM CARD TABELA -->

        <!-- COLUNA CADASTRO -->
    </div>
</div>
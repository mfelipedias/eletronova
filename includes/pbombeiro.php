<div class="col-md-12" style="min-width: 400px; max-width: 1280px;">
    <div class="row" style="padding-right: 5px;padding-left: 5px">
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

                                    <div class="col-sm-4 mt-2">
                                        <label for="firstName" class="form-label">Nº:</label>
                                        <input type="text" class="form-control" id="pcpfcnpj" placeholder="" value="">
                                    </div>
                                    <div class="col-sm-8 mt-2">
                                        <label for="firstName" class="form-label">CPF/CNPJ:</label>
                                        <input type="text" class="form-control" id="pcpfcnpj" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mt-2">
                                        <label for="lastName" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" id="pnome" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-5 mt-2">
                                        <label for="country" class="form-label ">Tipo:</label>
                                        <select class="form-select" id="country">
                                            <option value="">Escolha...</option>
                                            <option>AVCB</option>
                                            <option>CLCB</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7 mt-2">
                                        <label for="country" class="form-label ">Status:</label>
                                        <select class="form-select" id="country">
                                            <option value="">Todos...</option>
                                            <option>Concluído</option>
                                            <option>Em processo</option>
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
            <div class="card shadow mb-3" style="width: 100%;">
                <div class="" style="padding:3px;">
                    <div class="flex-row p-1">
                        <a class="btn btn-outline-primary" data-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-filter"></i>
                        </a>

                        <span class="" style="font-size: 105%; font-weight:bold;margin-left:7px;">Filtros...</span>
                        <div class="collapse" id="filtros">
                            <div class="p-2">
                                <label class="text-sm">Nº:</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                <label>CPF/CNPJ:</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                <label>Nome:</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                <label>Tipo:</label>
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
        <!-- CARD NOVO -->
        <div class="col-md-4">
            <div class="card shadow mb-3" style="width: 100%;">
                <div class="" style="padding:3px;">
                    <div class="flex-row p-1">
                        <a class="btn btn-outline-primary" data-toggle="modal" data-target="#modalNovo">
                            <i class="bi bi-plus-lg"></i>
                        </a>
                        <span class="" style="font-size: 105%; font-weight:bold;margin-left:7px;">Novo...</span>
                    </div>
                </div>
                <!-- Modal NOVO-->
                <div class="modal fade" id="modalNovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-file-earmark-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Novo processo</label>
                                <button type="button" class="btn-close" data-toggle="modal" data-target="#modalNovo" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <form class="needs-validation" novalidate>
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label for="cc-name" class="form-label">Início:</label>
                                                <input type="date" class="form-control" id="cc-name" placeholder="">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="country" class="form-label">Status:</label>
                                                <select class="form-select" id="country" required>
                                                    <option value="1">Em processo</option>
                                                    <option value="2">Concluído</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="country" class="form-label">Tipo:</label>
                                                <select class="form-select" id="country" required>
                                                    <option selected>Selecionar...</option>
                                                    <option value="1">CLCB</option>
                                                    <option value="2">AVCB</option>
                                                </select>
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

                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="nome" placeholder="Nome" value="" readonly>
                                            </div>
                                            <hr class="mb-0">
                                            <label class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-geo-alt text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Local do Processo</label>
                                            <div class="col-md-3">
                                                <label for="zip" class="form-label">CEP:</label>
                                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                            </div>
                                            <div class="col-9">
                                                <label for="address" class="form-label">Endereço:</label>
                                                <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." required>
                                            </div>

                                            <div class="col-4">
                                                <label for="address" class="form-label">Complemento:</label>
                                                <input type="text" class="form-control" id="address" placeholder="Apto, bloco, quadra..." required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="country" class="form-label">Cidade:</label>
                                                <select class="form-select" id="country" required>
                                                    <option value="">Escolha...</option>
                                                    <option>Cotia</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="state" class="form-label">Estado:</label>
                                                <select class="form-select" id="state" required>
                                                    <option value="">Escolha...</option>
                                                    <option>SP</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 mt-3">
                                                <label for="country" class="form-label">Ramo de Atividade:</label>
                                                <select class="form-select" id="country" required>
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNovo" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        </div>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM CARD NOVO -->

        </div>
        <!-- CARD TABELA -->
        <div class="col-md-12">
            <div class="card shadow mb-3">
                <div class="flex-row p-2">
                    <table class="table table-hover table-responsive-md table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nº</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Local</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Vencimento</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01</th>
                                <td>Templo Zulai</td>
                                <td>Estr. bla bla bla, 123</td>
                                <td>AVCB</td>
                                <td>01/01/2022</td>
                                <td>Concluído</td>
                                <td><a href="?pagina=pbombeiro_edit" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">02</th>
                                <td>Cooperativa Alpha</td>
                                <td>Rua Bla bla bla, 123</td>
                                <td>CLCB</td>
                                <td>01/01/2022</td>
                                <td>Em Processo</td>
                                <td><a href="" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- FIM CARD TABELA -->
        <!-- COLUNA CADASTRO -->
    </div>
</div>
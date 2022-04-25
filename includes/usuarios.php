<div class="row mx-auto">
    <!-- COLUNA PESQUISA E TABELA -->
    <div class="col-md-7" style="min-width: 400px; max-width: 1100px;">
        <div class="row">
            <!-- CARD PESQUISA -->
            <div class="col-md-8">
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
                                            <label for="firstName" class="form-label">CPF:</label>
                                            <input type="text" class="form-control" id="pcpfcnpj" placeholder="" value="">
                                        </div>

                                        <div class="col-sm-7 mt-2">
                                            <label for="lastName" class="form-label">Nome:</label>
                                            <input type="text" class="form-control" id="pnome" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-7 mt-2">
                                            <label for="country" class="form-label">Cargo:</label>
                                            <select class="form-select" id="country">
                                                <option value="">Escolha...</option>
                                                <option>Arquiteto</option>
                                                <option>Diretor</option>
                                                <option>Eletricista</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 " style="margin-top: 15px;">
                                            <label for="state" class="form-label">Status:</label><br>
                                            <div class="form-check mt-1 form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                <label class="form-check-label" for="inlineRadio1">Todos</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Ativo</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Inativo</label>
                                            </div>
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
                                    <label>CPF:</label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                    <label>Nome:</label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." readonly>
                                    <label>Cargo:</label>
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
        </div>
        <!-- CARD TABELA -->
        <div class="card shadow mb-3">
            <div class="flex-row p-2">
                <table class="table table-hover table-responsive-md table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Daniel Alberto</th>
                            <td>daniel@eletronovaengenharia.com.br</td>
                            <td>(11)9999-9999</td>
                            <td>Diretor</td>
                            <td>Ativo</td>
                            <td><a href="?pagina=usuarios_edit" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">Felipe de Padua</th>
                            <td>projetos@eletronovaengenharia.com.br</td>
                            <td>(11)9999-9999</td>
                            <td>Arquiteto</td>
                            <td>Ativo</td>
                            <td><a href="?pagina=usuarios_edit" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- FIM CARD TABELA -->

        <!-- COLUNA CADASTRO -->
    </div>
    <div class="col-md-5" style="min-width: 400px; max-width: 700px;">
        <form>
            <div class="card p-3 shadow" style="width: 95%; margin-left:auto; margin-right:auto">
                <span class="" style="margin-bottom:20px; font-weight:bold;"><i class="bi bi-person-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 5px; font-size:130%;"></i> <a style="font-size: 110%;">Cadastrar usuario...<a></span>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <label for="country" class="form-label">Status:</label>
                            <select class="form-select" id="country" required>
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>
                        </div>

                        <div class="col-sm-9">
                            <label for="cpfcnpj" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="cpfcnpj" placeholder="" value="" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="nome" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="nome" placeholder="" value="" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="nome" class="form-label">RG:</label>
                            <input type="text" class="form-control" id="nome" placeholder="" value="" required>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="address" placeholder="Rua/Av/Rod..." required>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Complemento:</label>
                            <input type="text" class="form-control" id="address" placeholder="Apto, bloco, quadra..." required>
                        </div>


                        <div class="col-md-5">
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

                        <div class="col-md-3">
                            <label for="zip" class="form-label">CEP:</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="country" class="form-label">Cargo:</label>
                            <select class="form-select" id="country" required>
                                <option value="">Escolha...</option>
                                <option>Arquiteto</option>
                                <option>Diretor</option>
                                <option>Técnico</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label for="cc-expiration" class="form-label">E-mail:</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="">
                            <small class="text-muted">(Separar multiplos e-mails com ponto e virgula ";")</small>
                        </div>

                    </div>

                    <hr class="my-4">

                    <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-person-check text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Acesso</p>

                    <div class="row gy-3">
                        <div class="col-md-12">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="text" class="form-control" id="senha" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label for="rsenha" class="form-label">Repita senha:</label>
                            <input type="text" class="form-control" id="rsenha" placeholder="">
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Mais Informações:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
                </form>
            </div>
            <!-- FIM COLUNA CADASTRO -->
    </div>
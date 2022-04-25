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
                      <label for="pcpfcnpj" class="form-label">CPF / CNPJ:</label>
                      <input type="text" class="form-control" id="cpfcnpj" name='cpfcnpj' onkeypress='mascaraCpfCnpj(this,cpfCnpj)' onblur='clearTimeout()' maxlength="18">
                    </div>

                    <div class="col-sm-7 mt-2">
                      <label for="pnome" class="form-label">Nome / Razao Social:</label>
                      <input type="text" class="form-control" id="pnome" placeholder="" value="">
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-7 mt-2">
                      <label for="pcidade" class="form-label">Cidade:</label>
                      <select class="form-select" id="pcidade">
                      </select>
                    </div>

                    <div class="col-md-5 mt-2">
                      <label for="estado" class="form-label">Estado:</label>
                      <select class="form-select" id="pestado" onchange="buscapCidades(this.value)">
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
                  <div class="form-group row mt-2">
                    <div class="col-md-8">
                      <label for="pramo" class="form-label">Ramo de Atividade</label>
                      <select class="form-select" id="pramo">
                        <option value="">Todos...</option>
                        <option>Alimentício</option>
                        <option>Escritório de Contabilidade</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="pstatus" class="form-label">Status</label>
                      <select class="form-select" id="pstatus">
                        <option value="">Todos...</option>
                        <option>Ativo</option>
                        <option>Inativo</option>
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
                  <label>CPF/CNPJ:</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fcpfcnpj" readonly>
                  <label>Nome:</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fnome" readonly>
                  <label>Estado:</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="festado" readonly>
                  <label>Cidade:</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fcidade" readonly>
                  <label>Atividade:</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fatividade" readonly>
                  <label>Status:</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Sem filtro..." id="fstatus" readonly>
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
              <th scope="col">CPF/CNPJ</th>
              <th scope="col">Nome</th>
              <th scope="col">Endereço</th>
              <th scope="col">Status</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">12.066.774/0001-02</th>
              <td>Eletronova Engenharia e Tecnologia Ltda</td>
              <td>Rua Miguel Calmon, 68 - Cotia - SP</td>
              <td>Ativo</td>
              <td><a href="?pagina=clientes_edit" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
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
        <span class="" style="margin-bottom:20px; font-weight:bold;"><i class="bi bi-person-plus text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 5px; font-size:130%;"></i> <a style="font-size: 110%;">Cadastrar cliente...<a></span>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-md-3">
              <label for="status" class="form-label">Status:</label>
              <select class="form-select" id="status" required>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
              </select>
            </div>

            <div class="col-sm-9">
              <label for="cpfcnpj" class="form-label">CPF / CNPJ:</label>
              <input type="text" class="form-control" id="cpfcnpj" name='cpfcnpj' onkeypress='mascaraCpfCnpj(this,cpfCnpj)' onblur='clearTimeout()' maxlength="18" required>
            </div>

            <div class="col-12">
              <label for="nome" class="form-label">Nome / Razão Social:</label>
              <input type="text" class="form-control" id="nome" placeholder="" value="" required>
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço:</label>
              <input type="text" class="form-control" id="endereco" placeholder="Rua/Av/Rod..." required>
            </div>

            <div class="col-12">
              <label for="complemento" class="form-label">Complemento:</label>
              <input type="text" class="form-control" id="complemento" placeholder="Apto, bloco, quadra..." required>
            </div>


            <div class="col-md-5">
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

            <div class="col-md-3">
              <label for="cep" class="form-label">CEP:</label>
              <input type="text" class="form-control" id="cep" placeholder="" required>
            </div>

            <div class="col-md-12 mt-3">
              <label for="ramo" class="form-label">Ramo de Atividade:</label>
              <select class="form-select" id="ramo" required>
                <option value="">Escolha...</option>
                <option>Construção</option>
              </select>
            </div>

          </div>

          <hr class="my-4">

          <p class="" style="font-weight:bold; font-family: 'Poppins', sans-serif;"><i class="bi bi-people text-primary rounded" style="border-style: solid;border-width: thin;padding:2px 10px;margin-right: 10px; font-size:130%;"></i>Contatos</p>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="ctelefone" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="cnome" placeholder="">
            </div>

            <div class="col-md-6">
              <label for="ctelefone" class="form-label">Telefone:</label>
              <input type="text" class="form-control" id="telefone">
            </div>

            <div class="col-md-12">
              <label for="cemail" class="form-label">E-mail:</label>
              <input type="text" class="form-control" id="cemail" placeholder="">
              <small class="text-muted">(Separar multiplos e-mails com ponto e virgula ";")</small>
            </div>
          </div>
          <hr class="my-4">
          <div class="row">
            <div class="col-md-12">
              <label for="maisinfo" class="form-label">Mais Informações:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="maisinfo"></textarea>
            </div>
          </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
        </form>
      </div>
      <!-- FIM COLUNA CADASTRO -->
  </div>
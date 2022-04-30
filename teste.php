<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/buscacep.js"></script>
</head>

<body>
  <form action="./scripts/cliente_add.php" method="post">
    <div class="container" style="max-width:500px; width: 100%; margin-left:auto; margin-right:auto">
      <form class="needs-validation" novalidate>
        <div class="row g-3">
          <div class="col-md-3">
            <label for="status" class="form-label">Status:</label>
            <select class="form-select" id="status" name="status" required>
              <option value="1">Ativo</option>
              <option value="0">Inativo</option>
            </select>
          </div>

          <div class="col-sm-9">
            <label for="cpfcnpj" class="form-label">CPF / CNPJ:</label>
            <input type="text" class="form-control " id="cpfcnpj" name="cpfcnpj" onkeypress='mascaraCpfCnpj(this,cpfCnpj);' onblur='clearTimeout(); verifica(this.value);' maxlength="18" required>
            <div id="retorno" class="form-text "></div>
          </div>

          <div class="col-12">
            <label for="nome" class="form-label">Nome / Razão Social:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" maxlength="100" required>
          </div>
          <div class="col-3">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" onkeypress="mascara(this, '#####-###')" maxlength="9" required>
          </div>
          <div class="col-9">
            <label for="endereco" class="form-label">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av/Rod..." maxlength="60" required>
          </div>

          <div class="col-12">
            <label for="bairro" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" maxlength="60" required>
          </div>
          <div class="col-6">
            <label for="complemento" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" maxlength="50" required>
          </div>
          <div class="col-6">
            <label for="complemento" class="form-label">UF:</label>
            <input type="text" class="form-control" id="uf" name="uf" placeholder="" maxlength="50" required>
          </div>
        </div>
        <hr class="my-4">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" href="#" id="btn-addcliente" class="btn btn-primary">Cadastrar</button>
      </form>

      <form method="get" action=".">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
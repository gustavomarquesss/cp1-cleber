<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Configurações da página -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulação de Financiamento</title>
  <!-- Estilos Bootstrap -->
  <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>

  <header id="header" class="text-center">
    <nav class="container">
      <ul class="navbar-nav ml-auto row justify-content-center"> 
          <a class="nav-link" href="#">Página Inicial</a>
        </li>
        <li class="nav-item col-auto"> 
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item col-auto"> 
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <h1 class="mt-5 mb-4 text-center">Simulação de Financiamento</h1>
    <!-- Seção de formulário -->
    <form action="process.php" method="POST" class="row g-3">
      <!-- Campos do formulário -->
      <div class="col-md-6">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="col-md-6">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" required>
      </div>
      <div class="col-md-6">
        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
      </div>
      <div class="col-md-6">
        <label for="valor_compra" class="form-label">Valor da Compra:</label>
        <input type="number" class="form-control" id="valor_compra" name="valor_compra" required>
      </div>
      <div class="col-md-6">
        <label for="taxa_juros" class="form-label">Taxa de Juros: (%)</label>
        <input type="number" class="form-control" id="taxa_juros" name="taxa_juros" required>
      </div>
      <div class="col-md-6">
        <label for="num_parcelas" class="form-label">Número de Parcelas:</label>
        <input type="number" class="form-control" id="num_parcelas" name="num_parcelas" required>
      </div>
      <div class="col-md-6">
        <label for="valor_entrada" class="form-label">Valor de Entrada:</label>
        <input type="number" class="form-control" id="valor_entrada" name="valor_entrada" required>
      </div>
      <div class="col-12 mt-3 btn-container">
        <button type="submit" class="btn btn-primary">Simular</button>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <span class="text-muted">© 2024 Meu Site. Todos os direitos reservados.</span>
    </div>
  </footer>
  <!-- Scripts Bootstrap -->
  <script src="./js/bootstrap/bootstrap.min.js"></script>
</body>

</html>
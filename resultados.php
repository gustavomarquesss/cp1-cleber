<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Configurações da página -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados da Simulação</title>
  <!-- Estilos Bootstrap -->
  <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/resultados.css">
</head>

<body>
  <div class="container">
    <h1 class="mt-5 mb-4">Resultados da Simulação</h1>

    <?php
    session_start();
    include 'functions.php';

    // Verificar se há resultados de simulação na sessão
    if (isset($_SESSION['simulacoes']) && !empty($_SESSION['simulacoes'])) {
      // Iterar sobre as simulações armazenadas na sessão
      foreach ($_SESSION['simulacoes'] as $simulacao) {
        // Exibir dados pessoais do cliente
        echo "<h2>Dados Pessoais</h2>";
        echo "<p><strong>Nome:</strong> " . $simulacao['dados_pessoais']['nome'] . "</p>";
        echo "<p><strong>CPF:</strong> " . $simulacao['dados_pessoais']['cpf'] . "</p>";
        echo "<p><strong>E-mail:</strong> " . $simulacao['dados_pessoais']['email'] . "</p>";
        echo "<p><strong>Telefone:</strong> " . $simulacao['dados_pessoais']['telefone'] . "</p>";
        echo "<p><strong>Data de Nascimento:</strong> " . $simulacao['dados_pessoais']['data_nascimento'] . "</p>";

        // Exibir dados financeiros e resultados de simulação
        echo "<h2>Dados Financeiros e Resultados</h2>";
        echo "<p><strong>Valor da Compra:</strong> R$ " . number_format($simulacao['dados_financeiros']['valor_compra'], 2, ',', '.') . "</p>";
        echo "<p><strong>Taxa de Juros:</strong> " . number_format($simulacao['dados_financeiros']['taxa_juros'], 2, ',', '.') . "</p>";
        echo "<p><strong>Número de Parcelas:</strong> " . $simulacao['dados_financeiros']['num_parcelas'] . "</p>";
        echo "<p><strong>Valor de Entrada:</strong> R$ " . number_format($simulacao['dados_financeiros']['valor_entrada'], 2, ',', '.') . "</p>";

        // Exibir resultados de simulação para cada cenário
        echo "<h3>Cenário 1</h3>";
        echo "<p><strong>Valor da Parcela:</strong> R$ " . number_format($simulacao['cenario_1']['PMT'], 2, ',', '.') . "</p>";
        echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($simulacao['cenario_1']['total_pagar'], 2, ',', '.') . "</p>";

        echo "<h3>Cenário 2</h3>";
        echo "<p><strong>Valor da Parcela:</strong> R$ " . number_format($simulacao['cenario_2']['PMT'], 2, ',', '.') . "</p>";
        echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($simulacao['cenario_2']['total_pagar'], 2, ',', '.') . "</p>";

        echo "<h3>Cenário 3</h3>";
        echo "<p><strong>Valor da Parcela:</strong> R$ " . number_format($simulacao['cenario_3']['PMT'], 2, ',', '.') . "</p>";
        echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($simulacao['cenario_3']['total_pagar'], 2, ',', '.') . "</p>";
      }
    } else {
      echo "<p>Não há resultados de simulação para exibir.</p>";
    }
    ?>

    <!-- Botão para voltar para o index -->
    <a href="index.php" class="btn btn-primary mt-3">Voltar para o Simulador</a>

  </div>
  <!-- Scripts Bootstrap -->
  <script src="./js/bootstrap/bootstrap.min.js"></script>
</body>

</html>
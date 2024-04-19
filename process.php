<?php
session_start();

// Incluir o arquivo functions.php para ter acesso às funções de cálculo
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar os dados do formulário e adicionar à sessão
  $dados_pessoais = [
    'nome' => $_POST['nome'],
    'cpf' => $_POST['cpf'],
    'email' => $_POST['email'],
    'telefone' => $_POST['telefone'],
    'data_nascimento' => $_POST['data_nascimento']
  ];

  $dados_financeiros = [
    'valor_compra' => $_POST['valor_compra'],
    'taxa_juros' => $_POST['taxa_juros'] / 100, // Convertendo para decimal
    'num_parcelas' => $_POST['num_parcelas'],
    'valor_entrada' => $_POST['valor_entrada']
  ];

  // Calcular os cenários de financiamento usando as funções do functions.php
  $cenario_1 = calcular_cenario_1($dados_financeiros);
  $cenario_2 = calcular_cenario_2($dados_financeiros);
  $cenario_3 = calcular_cenario_3($dados_financeiros);

  // Adicionar os resultados à sessão
  $_SESSION['simulacoes'][] = [
    'dados_pessoais' => $dados_pessoais,
    'dados_financeiros' => $dados_financeiros,
    'cenario_1' => $cenario_1,
    'cenario_2' => $cenario_2,
    'cenario_3' => $cenario_3
  ];

  // Redirecionar para a página de resultados
  header('Location: resultados.php');
  exit(); // Certifique-se de sair após o redirecionamento
}

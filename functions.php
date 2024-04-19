<?php

// Função para calcular o coeficiente de financiamento
function calcular_cf($taxa_juros, $num_parcelas)
{
  $i = $taxa_juros;
  $n = $num_parcelas;
  return $i / (1 - pow(1 + $i, -$n));
}

// Função para calcular o cenário 1
function calcular_cenario_1($dados_financeiros)
{
  $PV = $dados_financeiros['valor_compra'];
  $CF = calcular_cf($dados_financeiros['taxa_juros'], $dados_financeiros['num_parcelas']);
  $PMT = $PV * $CF;
  $total_pagar = $PMT * $dados_financeiros['num_parcelas'];
  return [
    'PMT' => $PMT,
    'total_pagar' => $total_pagar
  ];
}

// Função para calcular o cenário 2
function calcular_cenario_2($dados_financeiros)
{
  $PV = $dados_financeiros['valor_compra'] - $dados_financeiros['valor_entrada'];
  $CF = calcular_cf($dados_financeiros['taxa_juros'], $dados_financeiros['num_parcelas']);
  $PMT = $PV * $CF;
  $total_pagar = $dados_financeiros['valor_entrada'] + ($PMT * $dados_financeiros['num_parcelas']);
  return [
    'PMT' => $PMT,
    'total_pagar' => $total_pagar
  ];
}

// Função para calcular o cenário 3
function calcular_cenario_3($dados_financeiros)
{
  $PV = $dados_financeiros['valor_compra'] - $dados_financeiros['valor_entrada'];
  $CF = calcular_cf($dados_financeiros['taxa_juros'], $dados_financeiros['num_parcelas']);
  $PMT = ($PV * $CF) / (1 + $CF);
  $total_pagar = $dados_financeiros['valor_entrada'] + ($PMT * $dados_financeiros['num_parcelas']);
  return [
    'PMT' => $PMT,
    'total_pagar' => $total_pagar
  ];
}

// Função para formatar um número para duas casas decimais
function formatar_numero($numero)
{
  return number_format(round($numero, 2), 2, ',', '.');
}

<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <!-- título carregado dinamicamente-->
  <?php $sistema = info_header_footer();  ?>
  <title><?php echo $sistema->sistema_site_titulo. '&nbsp|&nbsp' .(isset($titulo) ? $titulo: 'Merchandising arte no ponto de venda' ); ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('public/restrita/assets/css/app.min.css'); ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('public/restrita/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/restrita/assets/css/components.css'); ?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url('public/restrita/assets/css/custom.css'); ?>">
  <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url('public/restrita/assets/img/favicon.ico'); ?>">

  <?php if (isset($styles)): ?> <!--Se existe uma variavel chamada Styles na pasta restrita, ele faz a busca e printa na tela-->
    <?php foreach ($styles as $estilo): ?> <!-- Carregamento de estilo dinamicamente-->
      <link rel="stylesheet" href="<?php echo base_url('public/restrita/' . $estilo); ?>">
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- O estilo abaixo é para corrigir o campo Categoria Principal do Editar Sub-Categorias --> 

  <style>
    .select2-container--default .select2-selection--single {
      border: 1px solid #e4e6fc !important;
    }
  </style>
  
</head>

<body>
  <div class="loader"></div>
  <div id="app">
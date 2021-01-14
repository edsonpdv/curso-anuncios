<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $sistema = info_header_footer();  ?>
    <title><?php echo $sistema->sistema_site_titulo. '&nbsp|&nbsp' .(isset($titulo) ? $titulo: 'Merchandising arte no ponto de venda' ); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/LineIcons-free.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/color-switcher.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/animate.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/main.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/web/assets/'); ?>css/responsive.css">

    <?php if (isset($styles)): ?> <!--Se existe uma variavel chamada Styles na pasta restrita, ele faz a busca e printa na tela-->
    <?php foreach ($styles as $estilo): ?> <!-- Carregamento de estilo dinamicamente-->
      <link rel="stylesheet" href="<?php echo base_url('public/restrita/' . $estilo); ?>">
    <?php endforeach; ?>
  <?php endif; ?>


</head>

<body>
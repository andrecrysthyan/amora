<?php

?>
<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="author" content="Nuvem Desenvolvimento Web"/>
      <meta name="robots" content="index,follow"/>
       <meta name="description" content="Amorà Desenvolvimento Humano" />

       <meta name="keywords" content="amora, coaching, desenvolvimento humano, treinamentos, testes, cursos, palestras, psicologa, psicologia, crescimento, crescer"/>
    <title> Amorá Desenvolvimento Humano</title>
    </title>

    <?= $this->Html->meta ( 'favicon.png', '/img/icone/favicon.png', array (
    'type' => 'icon' 
) ); ?>

    <?= $this->Html->script(array('jquery.min', 'jquery.gallery', 'modernizr.custom.53451','bootstrap-dropdownhover.min', 'aos', 'bootstrap')); ?>
    <?= $this->Html->css(array('base.css', 'bootstrap-theme', 'bootstrap', 'bootstrap.css.map', 'bootstrap-theme.css.map', 'fontawesome','fontawesome-all', 'style-fonts','animate', 'style-slider', 'demo','responsivo','bootstrap-dropdownhover.min', 'slider', 'aos')); ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
</head>
<body>
    <?php echo $this->Element('header'); ?>
   
    <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

    <?php echo $this->Element('front_footer'); ?>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
</body>
</html>

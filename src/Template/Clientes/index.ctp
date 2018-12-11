
<div class="col-md-6 col-xs-12 retira-padding joga-direita" data-aos="zoom-out">
	<div class="menu col-md-12 col-xs-12 menu">
		<nav class="navbar navbar-default">	 
	   		<div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	                <span class="sr-only"></span> 
	                <span class="icon-bar"></span>
	               	<span class="icon-bar"></span>
	                <span class="icon-bar"></span> 
	            </button>
	            	<!--<a class="navbar-brand visible-xs" href="<?php echo $this->request->base ?>"><img src="<?php echo $this->request->base ?>/img/logo.png" width="120" /></a>-->
	        </div>
	        <div class="collapse navbar-collapse" id="navbar">
	            <ul class="nav navbar-nav">
	                 <li class="azul"><?php echo $this->Html->link('Home', ['controller' => 'pages', 'action' => 'index']);?></li>
	                <li class="azul"><?php echo $this->Html->link('Sobre', ['controller' => 'empresa', 'action' => 'index']);?></li>
	                <li class="azul"><?php echo $this->Html->link('Serviços', ['controller' => 'servicos', 'action' => 'index']);?></li>
	                <li><?php echo $this->Html->link('Clientes', ['controller' => 'clientes', 'action' => 'index']);?></li>
	                <li><?php echo $this->Html->link('Blog', ['controller' => 'blog', 'action' => 'index']);?></li>
	                <li><?php echo $this->Html->link('Contato', ['controller' => 'contato', 'action' => 'index']);?></li>
	            </ul>
	        </div>	          
	    </nav>
	</div>
	<?php echo $this->Html->image('nuvem-header.png', ['title' => 'Nuvem Desenvolvimento Web', 'class' => 'img-responsive img-logo-header logo-header-internas']) ?>
</div>

<div class="col-md-6 col-xs-12">
	<div class="col-md-12 col-xs-12 marca">
		<a href="http://www.nuvemdesenvolvimentoweb.com.br">Nuvem Desenvolvimento Web</a>
	</div>
	<div class="col-md-12 col-xs-12 texto-header-internas " data-aos="fade-right">
		<div class="titulo">
			<h2>Nossos <span class="negrito">Clientes</span></h2>
			<p><hr/></p>
		</div>
		<div class="col-md-12 col-xs-12 retira-padding texto-header-2">
			<i class="fas fa-check-circle"></i>
			<div class="depoimento depoimento-internas">
				<p>"<span class="italico">Sabemos que resultados reais para nossos clientes são resultados reais para nossa empresa! </span>"</p>
				<span class="negrito">-André Cristian (Fundador da Nuvem)</span>
			</div>			
		</div>
		<a href="http://www.facebook.com/nuvemdesenvolvimentoweb" target="_blank"><?php echo $this->Html->image('face.png', ['title' => 'Facebook Nuvem', 'class' => 'icone-redes-sociais']) ?></a>
		<a href="http://www.instagram.com/nuvemdesenvolvimentoweb"><?php echo $this->Html->image('insta.png', ['title' => 'Instagram Nuvem', 'class' => 'icone-redes-sociais']) ?></a>
	</div>
</div>



<div class="col-md-12 col-xs-12 retira-padding barra-sub-footer-internas">
	<div class="container">
		<?php echo $this->Html->image('whatsapp-icone.png', ['title' => 'Whats App Nuvem', 'class' => 'icone-redes-sociais icone-whats-app']) ?> <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5534991068769"> (34) 9 9106-8769 <span class="negrito">Clique aqui</span> e envie uma mensagem direta no nosso Whats App!</a>
	</div>
</div>


<div class="col-md-12 col-xs-12 clientes-pag-conteudo" data-aos="fade-up"
     data-aos-duration="2000">
	<div class="container">
	<div class="titulo">
		<h2><span class="negrito">Alguns de nossos clientes!</span></h2>
		<p><hr/></p>
	</div>



<div class="row">
			 <?php $x = 0;?>
			<?php foreach($clientes as $cliente):?>

				<?php// debug($cliente);?>
				
				<?php if($x!=0 && $x%3==0){
				            echo "</div>\n<div class='row'>";
				          }
				          ?>

				<div class="col-md-4 col-xs-12 margin-clientes">
			<div class="col-md-12 col-xs-12 cliente-nuvem">
				<div class="col-md-12 col-xs-12 logo-cliente">

					<?php 
					
	 				echo $this->Html->image("/files/Clientes/image/{$cliente->image}", ['title' => $cliente->nome, 'class' => 'img-responsive col-md-8 col-xs-12 col-md-offset-2'])
					?>
					
				</div>
				<div class="titulo-cliente">
					<h2><?= h($cliente->nome) ?></h2>
					<h3><?= h($cliente->tipo) ?></h3>
				</div>
				<p><?= ($cliente->text) ?></p>
				<div class="visite-cliente">
					<?php if($cliente->linksite != ""){ ?>
					<p class="visite-site"><a href="<?php echo ($cliente->linksite) ?>">Visite o site</a></p>
					<?php } ?>
					<?php if($cliente->linkface != ""){ ?>
					<a href="<?php echo ($cliente->linkface) ?>"><?php echo $this->Html->image('face.png', ['title' => 'Facebook <?php echo ($cliente->nome) ?>', 'class' => 'icone-redes-sociais']) ?></a>
		<a href="<?php echo ($cliente->linkinsta) ?>"><?php echo $this->Html->image('insta.png', ['title' => 'Instagram <?php echo ($cliente->nome) ?>', 'class' => 'icone-redes-sociais']) ?></a>
		<?php } ?>
				</div>
			</div>
		</div>

<?php ++$x;//}?>
			<?php endforeach;?>

</div>

</div>

</div>


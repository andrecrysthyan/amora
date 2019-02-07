<div class="col-md-12 col-xs-12 retira-padding fundo-header-img">
<?php echo $this->Html->image('back2.png', ['title' => 'Amorá', 'class' => 'img-responsive']) ?>
</div>

<div class="descricao-header descricao-header-interna col-xs-12 col-md-4 col-md-offset-4" data-aos="fade-up"
     data-aos-duration="2000">
	<h2 class="tamanho-internas">Testes</h2>
	<hr/>
		
</div>

<div class="container">
	<div class="sobre col-md-12 col-xs-12 retira-padding" data-aos="fade-up"
     data-aos-duration="2000">
  
	<?php foreach($tests as $test) { ?>
		<div class="row">

			<div class="col-md-4 col-xs-12 ">
				<?php echo $this->Html->image('/files/Tests/image/'.$test->image, ['title' => 'Amorá', 'class' => 'img-responsive img-blog']); ?>
			</div>
			


			<div class="descricao-header-2 col-xs-12 col-md-8">
				<h2><?php echo $test->title ?></h2>
				<hr/>
				<p class="frase-principal"><?php echo $test->description ?></p>
				<div class="botao botao-dev">
					<?php echo $this->Html->link('fazer teste', ['controller' => 'Questions', 'action' => 'index', $test->id]);?>
				</div>
		
			</div>
		</div>
	<?php } ?>

	</div>

</div>



<div class="col-md-12 col-xs-12 retira-padding faixa-contato" data-aos="fade-up"
     data-aos-duration="2000">
	<div class="container">
		<h2 class="titulo2">Entre em contato</h2>
		<hr/>
		<p>Para que seus projetos  se tornem realidade é preciso dar o primeiro passo. Faça contato.</p>
		<div class="botao">
			<a href="http://www.amoradh.com.br/contato">contato</a>
		</div>
		<i class="fab fa-whatsapp"></i><h3><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5534999715088" target="_blank" class="faixa-contato-ref">(34) 9 9971-5088</a></h3>
	</div>
</div>
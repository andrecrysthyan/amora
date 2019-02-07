<div class="col-md-12 col-xs-12 retira-padding fundo-header-img fundo-header-img-int">
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
     	<div class="row">
			<div class="descricao-header-2 col-xs-12 col-md-12">
				<?php foreach($questions as $question) { 
					echo $question->test->description; 
					} 
				?>
			</div>
		</div>
	</div>

<!--
	<div class="row">
		<div class="descricao-header-2 col-xs-12 col-md-12" data-aos="fade-up" data-aos-duration="2000">
				
			<br/><br/><p>Cada um destes estilos tem suas características próprias, vantagens e desvantagens. Além disso, o líder pode usar qualquer um destes estilos, mas o ideal é que o líder tenha flexibilidade e habilidade para utilizar todos estes estilos identificando, de acordo com a situação apresentada e com a maturidade e perfil de cada membro da equipe, qual estilo deve ser utilizado. 
			</p>
			<p>E você, sabe qual é o seu estilo de liderança predominante?</p>
			<p>Se não sabe, faça o teste e identifique o seu estilo de liderança.</p>
			
			<p><span class ="negrito">Módulo 1 –</span> Tendências de liderança, Identificação do estilo e competências de liderança.</p>
			<p><span class ="negrito">Módulo 2 –</span> Comunicação & Feedback como instrumentos para desenvolver e melhorar o  resultado da equipe.</p>
			<p><span class ="negrito">Módulo 3 –</span> Como engajar equipe e maximizar resultados por meio de ferramentas de gestão de resultado e solução de problemas.</p>
			<p class="frase-principal"><span class ="negrito">Módulo 4 –</span> Líder Coach – Gerindo pessoas – Delegando de forma assertiva – Engajando - Gerando resultados.</p>
			<div class="col-md-6">
			<p class="negrito frase">Público Alvo</p>
			<p>Líderes, gestores, empreendedores ou profissionais que desejam  se preparar para uma promoção.</p>-->
			<!--<p>- Conquista de metas a curto, médio e longo prazo.</p>
			<p>- Alinhamento de expectativas pessoais e profissionais.</p>
			<p>- É um processo que produz mudanças positivas e duradouras.</p>
			<p>- Interconexão entre o pessoal e profissional.</p>
		</div>

	</div>
-->

	<div class="row">

		<div class="descricao-header-2 descricao-header-subs col-xs-12 col-md-12" data-aos="fade-up" data-aos-duration="2000">
			<h2 class="">Faça o teste e descubra qual é o seu Estilo de Liderança		</h2>
			<hr class="" />
			<p class="frase-principal">Nos grupos abaixo, avalie cada frase de 1 a 6 de acordo com o que poderia fazer você se sentir mais confortável na arte de liderar. O numero 6 representa o que você mais aprecia, o numero 1 representa o que você menos aprecia em cada grupo. Nenhum grupo individual pode ter o mesmo numero repetido.		</p>
			<form action="" method="POST">

				<?php $i = 0; foreach($questions as $question) { ?>
					<div class="col-md-12">
						<p class="negrito"><?= $question->description ?></p>
						<?php foreach($question->answers as $answers) { ?>
							<select class="col-md-1 teste-option" name="question<?= $i; ?>">
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							</select>
							<p class="col-md-11"><?= $answers->description ?></p>
						<?php $i++; } ?>

					</div> 
				<?php } ?>
				<button type="submit" name="btnSubmit">Enviar</button>
			</form>

		</div>

	</div>

</div>

<?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if(isset($_POST['btnSubmit'])){
			$soma = 0;
			for ($i=0; $i < 10; $i++) { 
				$soma = $soma + $_POST['question'.$i];
			}
			echo '<div class="col-md-12">'.$soma.'</div>';
		}
	}
?>

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
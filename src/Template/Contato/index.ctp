<div class="col-md-12 col-xs-12 retira-padding fundo-header-img fundo-header-img-int">
<?php echo $this->Html->image('back2.png', ['title' => 'Amorá', 'class' => 'img-responsive']) ?>
</div>

<div class="descricao-header descricao-header-interna col-xs-12 col-md-4 col-md-offset-4" data-aos="fade-up"
     data-aos-duration="2000">
		<h2 class="tamanho-internas">Contato</h2>
		<hr/>
		
	</div>

<div class="container">
	<div class="sobre col-md-12 col-xs-12 retira-padding" data-aos="fade-up"
     data-aos-duration="2000">
     <div class="row">
	<div class="descricao-header-2 col-xs-12 col-md-6">
		<h2>Contato</h2>
		<hr/>
		<p>Endereço: R. Padre Caldeira, 385 - Centro, Patos de Minas - MG, 38700-096
</p>
		
		<p>Celular: (34) 9 9971-5088</p>
		<p>Email: contato@amoradh.com.br</p>
		

	</div>
	<div class="col-md-6 col-xs-12">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.697587402633!2d-46.51443268569199!3d-18.587667787369924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ae8acdf68a2e87%3A0xd9eba3486662dd7!2sR.+Padre+Caldeira%2C+385+-+Centro%2C+Patos+de+Minas+-+MG%2C+38700-096!5e0!3m2!1spt-BR!2sbr!4v1542659939872" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

</div>
</div>


	<div class="col-md-4 col-md-offset-4 descricao-header-subs col-xs-12" data-aos="zoom-in">

		<?php echo $this->Form->create($contact);
echo $this->Form->input('nome');
echo $this->Form->input('email');
echo $this->Form->input('telefone');
echo $this->Form->input('mensagem');
echo $this->Form->button('Enviar');
echo $this->Form->end();?>
	
		<!--<input class="col-md-12 col-xs-12" type="text" name='data[Contato][nome]' id='ContatoNome' required='required' placeholder="Nome">	
			</input>
			<input class="col-md-12 col-xs-12" type="text" name='data[Contato][email]' id='ContatoEmail' required='required' placeholder="Email">	
			</input>
			<input class="col-md-12 col-xs-12" type="text" name='data[Contato][telefone]' id='ContatoTelefone' required='required' placeholder="Telefone">	
			</input>
			<textarea class="col-md-12 col-xs-12" name='data[Contato][mensagem]' id='ContatoMensagem' required='required' rows="13" placeholder="Mensagem"></textarea>
			<button type='submit'>Enviar</button>-->
	
	</div>

</div>

<div class="col-md-12 col-xs-12 retira-padding faixa-contato" data-aos="fade-up"
     data-aos-duration="2000">
	<div class="container">
	<h2 class="titulo2">Entre em contato</h2>
	<hr/>
	<p>Para que seus projetos  se tornem realidade é preciso dar o primeiro passo. Faça contato.</p>
	
	<i class="fab fa-whatsapp"></i><h3><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5534999715088" target="_blank" class="faixa-contato-ref">(34) 9 9971-5088</a></h3>
</div>
</div>
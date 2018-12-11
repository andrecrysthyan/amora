<div class="col-md-12 col-xs-12 menu retira-padding">



	<div class="col-md-2 col-xs-12">
		<a href="http://www.amoradh.com.br"><?php echo $this->Html->image('logoamora3.png', ['title' => 'Amorá', 'class' => 'img-responsive col-md-8 col-xs-6 logo-amora']) ?></a>
	</div>
	
	<div class="col-md-8 col-xs-12">
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
	                	<li><?php echo $this->Html->link('Home', ['controller' => 'pages', 'action' => 'index']);?></li>
	                	<!--<li><?php echo $this->Html->link('Quem somos', ['controller' => 'pages', 'action' => 'index']);?></li>-->
	                	<li><?php echo $this->Html->link('Sueli Lima', ['controller' => 'sobre', 'action' => 'index']);?></li>

	                	<li class="dropdown">

	                		<a class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" data-animations="rotateInDownRight" href="http://www.amoradh.com.br/servicos">Serviços<span class="caret"></span></a>
					    			<ul class="dropdown-menu">

					    				<li><?php echo $this->Html->link('Coaching', ['controller' => 'coaching', 'action' => 'index']);?></li>
					                	<li><?php echo $this->Html->link('Workshops', ['controller' => 'workshops', 'action' => 'index']);?></li>
					                	<li><?php echo $this->Html->link('Treinamentos', ['controller' => 'programas', 'action' => 'index']);?></li>
					                	<li><?php echo $this->Html->link('Programas de desenvolvimento', ['controller' => 'desenvolvimento', 'action' => 'index']);?></li>
					                	<li><?php echo $this->Html->link('Testes', ['controller' => 'testes', 'action' => 'index']);?></li>

					    			</ul>


	                	</li>



	                	


	                	<li><?php echo $this->Html->link('Blog', ['controller' => 'blog', 'action' => 'index']);?></li>
	                	<li><?php echo $this->Html->link('Contato', ['controller' => 'contato', 'action' => 'index']);?></li>
	            	</ul>
	        	</div>	  
	                  
	    	</nav>
	   </div>




	<div class="col-md-2 col-xs-12 redes-sociais">
		<a href="https://www.facebook.com/amoradh/" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<!--<i class="fab fa-instagram"></i>-->
		<a href="https://www.linkedin.com/in/sueli-lima-coaching-liderança/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
	</div>

</div>
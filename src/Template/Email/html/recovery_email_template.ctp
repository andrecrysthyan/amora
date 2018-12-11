<h1>Sistema de Login</h1>
<div>
<p>
	Olá <?php echo $nome;?>!
</p>
<p>Para que consiga fazer a alteração de sua senha, clique no link que se encontra logo abaixo e, na tela de alteração de senhas, digite sua nova senha.<br/>
	<?php
		$root = pathinfo($_SERVER['HTTP_REFERER']);
		$link = $root['dirname'] . DS . 'change-password?h=' . $hash . '&email=' . $email;
		echo $this->Html->link('Redefinir senha de usuário', $link);
	?>


</p>

</div>
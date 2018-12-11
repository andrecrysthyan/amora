<h2>Textos com links</h2>


<?php

	echo $this->Html->link('Texto com link', ['controller' => 'pages', 'action' => 'home'], ['target' => '_blank', 'class' => 'button']);

?>

<hr>

<?php

	echo $this->Html->link('Texto com confirmação', ['controller' => 'pages', 'action' => 'home'], ['target' => '_blank', 'class' => 'button','confirm' => 'Você quer ir para outra pagina?']);

?>

<hr>

<!--colocar texto no link -->

<?php

	echo $this->Html->link('Link com texto', ['controller' => 'pages', 'action' => 'view', 1, '?' => ['height' => '600', 'width' => '800']]);

?>
<h2>Imagens com link</h2>


<?php 

 echo $this->Html->image('cake.power.gif', ['title' => 'Imagem', 'url' => ['controller' => 'pages', 'action' => 'home']])

?>


<hr>

<?php 

$img = $this->Html->image('cake.power.gif', ['title' => 'Imagem']);

echo $this->Html->link ($img, ['controller' => 'pages', 'action' => 'home'], ['target' => '_blank', 'escape' => false, 'confirm' => 'Você quer ir para outra pagina'])

?>


<hr>

<?php 

	$img = $this->Html->image('cake.power.gif', ['title' => 'Imagem']);

	echo $this->Html->link($img, ['controller' => 'pages', 'action' => 'view', 1, '?' => ['height' => '600', 'width' =>'800']],['target' => '_blank', 'escape' => false]);

?>



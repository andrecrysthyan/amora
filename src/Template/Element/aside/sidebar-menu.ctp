<ul class="sidebar-menu">
	<li class="header"><span>Menu</span></li>
	
    <li><?= $this->Html->link("Clientes", ['controller'=>'clientes','action' => 'index']) ?></li>
    <li><?= $this->Html->link("Blog", ['controller'=>'blog','action' => 'index']) ?></li>
    <li><?= $this->Html->link("Usuarios", ['controller'=>'users','action' => 'index']) ?></li>
    <li><?= $this->Html->link("Testes", ['controller'=>'tests','action' => 'index']) ?></li>

</ul>
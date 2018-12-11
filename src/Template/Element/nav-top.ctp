
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="hidden-xs"><?=$user_auth['name']?></span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-footer"><a class="btn btn-default btn-flat" href="<?php echo $this->Url->build(['controller'=>'users','action'=>'logout']) ?>">Sair</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
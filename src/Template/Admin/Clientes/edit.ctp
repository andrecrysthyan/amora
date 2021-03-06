<?php echo $this->CKEditor->loadJs(); ?>
<section class="content-header">
  <h1>
   Clientes
    <small><?= __('Edit') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($clientes, array('role' => 'form','type'=>'file')) ?>
          <div class="box-body">
          <?php
           echo $this->Form->input('nome');
            
           echo $this->Form->input('image',['class' => 'form-control','type'=>'file']);
           echo $this->Form->input('tipo');
           echo $this->Form->input('tipocategoria');
           echo $this->Form->input('destaque');
           echo $this->Form->input('destaqueser');
           echo $this->Form->input('destaqueredes');
           echo $this->Form->input('linkface');
           echo $this->Form->input('linkinsta');
           echo $this->Form->input('linksite');
         echo $this->Form->input('text',['class' => 'form-control']);
            echo $this->CKEditor->replace('text');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>


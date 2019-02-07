<section class="content-header">
  <h1>
    Teste
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
        <?= $this->Form->create($test, array('role' => 'form', 'type'=>'file')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('title', ['label'=>'Nome']);
            echo $this->Form->input('description', ['label'=>'Descrição','type'=>'textarea']);
            echo $this->Form->input('result', ['label'=>'Descrição','type'=>'textarea']);
            echo $this->Form->input('image', ['label'=>'Imagem','type'=>'file']);
            echo $this->Html->image('/files/Tests/image/'.$test->image, ['alt' => 'image', 'width'=>'200']);
          ?>
            <div class="alert-warning alert col-md-12">Tamanho da imagem 360x250!</div>
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


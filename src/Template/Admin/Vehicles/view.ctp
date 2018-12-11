<section class="content-header">
  <h1>
    <?php echo __('Vehicle'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($vehicle->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Brand') ?></dt>
                                        <dd>
                                             <?= $vehicle->has('marca') ? $vehicle->marca->title : '' ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Model') ?></dt>
                                        <dd>
                                            <?= h($vehicle->model) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Category') ?></dt>
                                <dd>
                                    <?= $vehicle->has('category') ? $vehicle->category->title : '' ?>
                                </dd>
                               
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Value') ?></dt>
                                <dd>
                                    <?= $this->Number->format($vehicle->value) ?>
                                </dd>
                                                                                                                <dt><?= __('Year') ?></dt>
                                <dd>
                                    <?= $this->Number->format($vehicle->year) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Details') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($vehicle->details)); ?>
                            </dd>
                                                            </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Images Vehicle']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($vehicle->images_vehicle)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Image
                                    </th>
                                        
                                                                    
                                    <th>
                                    Vehicle Id
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($vehicle->images_vehicle as $imagesVehicle): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($imagesVehicle->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($imagesVehicle->image) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($imagesVehicle->vehicle_id) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ImagesVehicle', 'action' => 'view', $imagesVehicle->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ImagesVehicle', 'action' => 'edit', $imagesVehicle->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ImagesVehicle', 'action' => 'delete', $imagesVehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagesVehicle->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

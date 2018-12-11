<section class="content-header">
  <h1>
    <?php echo __('Category'); ?>
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
                                                                                                                <dt><?= __('Title') ?></dt>
                                        <dd>
                                            <?= h($category->title) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Vehicles']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($category->vehicles)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Value
                                    </th>
                                        
                                                                    
                                    <th>
                                    Brand
                                    </th>
                                        
                                                                    
                                    <th>
                                    Model
                                    </th>
                                        
                                                                    
                                    <th>
                                    Year
                                    </th>
                                        
                                                                    
                                    <th>
                                    Details
                                    </th>
                                        
                                                                    
                                    <th>
                                    Category Id
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($category->vehicles as $vehicles): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($vehicles->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vehicles->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vehicles->value) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vehicles->brand) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vehicles->model) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vehicles->year) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vehicles->details) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vehicles->category_id) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

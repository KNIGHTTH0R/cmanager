<section class="content-header">
  <h1>
    <?php echo __('Feedback'); ?>
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
                                                                                                        <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $feedback->has('user') ? $feedback->user->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Title') ?></dt>
                                        <dd>
                                            <?= h($feedback->title) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Reciever Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($feedback->reciever_id) ?>
                                </dd>
                                                                                                                <dt><?= __('Created By') ?></dt>
                                <dd>
                                    <?= $this->Number->format($feedback->created_by) ?>
                                </dd>
                                                                                                                <dt><?= __('Modified By') ?></dt>
                                <dd>
                                    <?= $this->Number->format($feedback->modified_by) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Content') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($feedback->content)); ?>
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

</section>

<?php echo $this->Form->create($MemoEntity, ['novalidate' => true, 'class' => 'form-horizontal', 'type' => 'post']); ?>

<div>
  <h2>メモ作成</h2><hr />
</div>
<div class="card mb-4 shadow rounded">
  <div class="card-body">
    <div class="form-group">
        <div class="col-md-12">
          <?php echo $this->Form->label('title', 'タイトル'); ?>
          <?php echo $this->Form->text('title',
            [
              'class' => 'form-control',
              'placeholder' => 'タイトル',
              'default' => $MemoEntity->get('title'),
            ]
          ); ?>
          <div class="text-danger">
            <?php echo $this->Form->error('title', null, ['class' => 'text-danger']); ?>
          </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
          <?php echo $this->Form->label('contents', '内容'); ?>
          <?php echo $this->Form->textarea('contents',
            [
              'class' => 'form-control',
              'placeholder' => 'メモの内容を記述してください',
              'default' => $MemoEntity->get('contents'),
            ]
          ); ?>
          <div class="text-danger">
            <?php echo $this->Form->error('contents', null, ['class' => 'text-danger']); ?>
          </div>
        </div>
    </div>

    <div class="form-group">
      <?php echo $this->Form->submit('登録', ['class' => 'btn btn-block btn-primary']); ?>
    </div>
<?php echo $this->Form->end(); ?>


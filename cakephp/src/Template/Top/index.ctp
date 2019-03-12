<div class="text-right">
  <a href="<?php echo $this->Url->build(['controller' => 'Memos', 'action' => 'detail']);?>" class="btn btn-success">
    メモを作成する
  </a>
</div>

<?php if (!empty($MemoPaginator)) : ?>
  <?php echo $this->Paginator->counter(['format' => 'range']); ?>
  <table class="table table-bordered mt-3">
    <thead class="thead-light">
      <tr>
        <th scope="col">日付</th>
        <th scope="col">タイトル</th>
        <th scope="col">詳細</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($MemoPaginator as $MemoEntity): ?>
        <tr>
          <th scope="row">
            <?php echo h(date('Y/m/d', strtotime($MemoEntity->get('created_at')))); ?>
          </th>
          <td>
            <?php echo h($MemoEntity->get('title')); ?>
          </td>
          <td>
            <a href="<?php echo $this->Url->build(['controller' => 'Memos', 'action' => 'detail', 'memo_id' => $MemoEntity->get('id')]); ?>">
              詳細
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php echo $this->element('paginator', ['Paginator' => $MemoPaginator]); ?>
<?php else : ?>
  <div class="alert alert-warning mt-3" role="alert">メモがありません </div>
<?php endif; ?>

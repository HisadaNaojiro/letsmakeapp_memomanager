<div class="text-right">
  <a href="<?php echo $this->Url->build(['controller' => 'Memos', 'action' => 'detail']);?>" class="btn btn-success">
    メモを作成する
  </a>
</div>

<table class="table table-bordered mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">日付</th>
      <th scope="col">タイトル</th>
      <th scope="col">詳細</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2019/02/03</th>
      <td>サンプル</td>
      <td><a href="#">詳細</a></td>
    </tr>
    <tr>
      <th scope="row">2019/02/02</th>
      <td>サンプル</td>
      <td><a href="#">詳細</a></td>
    </tr>
    <tr>
      <th scope="row">2019/02/01</th>
      <td>サンプル</td>
      <td><a href="#">詳細</a></td>
    </tr>
  </tbody>
</table>

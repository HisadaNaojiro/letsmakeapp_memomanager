<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Network\Exception\InternalErrorException;

class MemosController extends AppController
{
  public function detail()
  {
    if ($this->request->getParam('memo_id')) {
      $MemoEntity = $this->Memos->getEntityById($this->request->getParam('memo_id'));
      $this->Memos->patchEntity($MemoEntity, $this->request->getData());
    } else {
      $MemoEntity = $this->Memos->newEntity($this->request->getData());
    }

    $this->set('MemoEntity', $MemoEntity);

    if (!$this->request->is('post')) {
      return $this->render();
    }  

    if ($MemoEntity->errors()) {
      $this->Flash->error('入力情報に誤りがあります');
      return $this->render();
    }

    if  (!$this->Memos->save($MemoEntity)) {
      throw new InternalErrorException();
    }

    $this->Flash->success('メモを更新しました');
    $this->redirect(['controller' => 'Memos', 'action' => 'detail', 'memo_id' => $MemoEntity->get('id')]);
  }
}

<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class TopController extends AppController
{
  public function index()
  {
    $this->set('MemoPaginator' , $this->paginate(TableRegistry::get('Memos')->getPaginator() , ['limit' => 5]));
  }
}

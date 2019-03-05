<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Datasource\EntityInterface;

class AppTable extends Table
{
  public function save(EntityInterface $EntryRow, $options = array())
  {
    $date = date('Y-m-d H:i:s');

    if ($EntryRow->isNew()) {
      $EntryRow->accessible('created_at', true);
      $EntryRow->set('created_at', $date);
    }

    $EntryRow->accessible('updated_at', true);
    $EntryRow->set('updated_at', $date);
    parent::save($EntryRow, $options);
    return $this;
  }

  public function delete(EntityInterface $EntryRow, $options = array())
  {
    $EntryRow->accessible('valid', true);
    $EntryRow->set('valid', 0);
    parent::save($EntryRow,$options);
    return $this;
  }

}

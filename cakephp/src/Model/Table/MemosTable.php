<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class MemosTable extends AppTable
{

  public function initialize(array $config)
  {
    $this->setAlias('m');
  }

  public function getEntityById($id)
  {
    $query = $this->find('all')
      ->where(['m.id' => $id])
      ->where(['m.valid' => 1])
    ;
    return $query->first();
  }


  public function getPaginator()
  {
    return $query = $this->find('all')
      ->where(['m.valid' => 1])
      ->order(['m.created_at' => 'DESC'])
    ;
  }

  public function validationDefault(Validator $validator)
  {

    $validator
      ->notEmpty('title', 'タイトルを入力してください')
      ->add('title',[
          'isMaxlength' => [
            'rule' => ['maxLength' , 50],
            'message' => 'タイトルは50字以内で入力してください'
          ]
      ])
      ->notEmpty('contents', '内容を入力してください')
      ->add('contents',[
          'isMaxlength' => [
            'rule' => ['maxLength' , 200],
            'message' => '内容は200字以内で入力してください'
          ]
      ])
    ;
    return $validator;
  }

}

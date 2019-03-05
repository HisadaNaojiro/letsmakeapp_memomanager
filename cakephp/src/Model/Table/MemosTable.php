<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class MemosTable extends AppTable
{

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
            'rule' => ['maxLength' , 500],
            'message' => '内容は500字以内で入力してください'
          ]
      ])
    ;
    return $validator;
  }

}

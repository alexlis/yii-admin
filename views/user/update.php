<?php
use yii\bootstrap\ActiveForm;

$this->title = '更新用户: '. $model->username;
$this->params['breadcrumbs'][] = ['label' => '用户信息','url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username,'url'=>['view','id'=>$model->id]];
$this->params['breadcrumbs'][] = '更新';
?>

<div class ="user-update">
    <?=
          $this->render('_form',[
              'model' => $model,
          ])
    ?>
</div>

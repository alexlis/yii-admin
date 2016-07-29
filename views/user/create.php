<?php
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = '新增用户';
$this->params['breadcrumbs'][] = ['label' => '用户信息' , 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>


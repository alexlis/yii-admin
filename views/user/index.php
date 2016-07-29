<?php

use yii\helpers\Html;
use yii\grid\GridView;
use mdm\admin\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('rbac-admin', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <p>
        <?= Html::a('新增用户', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'username',
            'email:email',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status == 0 ? '禁用' : '正常';
                },
                'filter' => [
                    0 => '禁用',
                    1 => '正常'
                ]
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => Helper::filterActionColumn(['view', 'activate','update', 'delete']),
                'buttons' => [
                    'activate' => function($url, $model) {
                        if ($model->status == 1) {
                            $options = [
                                'title' => Yii::t('rbac-admin', 'Activate'),
                                'aria-label' => Yii::t('rbac-admin', 'Activate'),
                                'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                                'data-method' => 'post',
                                'data-pjax' => '0',
                            ];
                            return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, $options);

                        }else{
                             $options = [
                                'title' => Yii::t('rbac-admin', 'Activate'),
                                'aria-label' => Yii::t('rbac-admin', 'Activate'),
                                'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                                'data-method' => 'post',
                                'data-pjax' => '1',
                            ];
                            return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
                        }
                    }
                    ]
                ],
            ],
        ]);
        ?>
</div>

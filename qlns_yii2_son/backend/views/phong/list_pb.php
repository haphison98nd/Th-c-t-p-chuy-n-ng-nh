<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/12/2019
 * Time: 9:02 PM
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn',
            'header' => 'Stt',
        ],
        [
            'attribute' => 'if_pb',
            'headerOptions' => [
                'style' => 'text-align: center; width: 30px;'
            ],
            'contentOptions' => [
                'style' => 'text-align: center'
            ]
        ],
        [
            'attribute' => 'name_pb',
            'headerOptions' => [
                'style' => 'text-align: center; width: 200px;'
            ],
            'contentOptions' => [
                'style' => 'text-align: center'
            ]
        ],
        'email_pb:email',
        [
            'attribute' => 'tel_pb',
            'headerOptions' => [
                'style' => 'text-align: center; width: 200px;'
            ],
            'contentOptions' => [
                'style' => 'text-align: center'
            ]
        ],
        [ 'class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'view' => function($url,$model){
                    return Html::a('View',$url,['class' => 'btn btn-xs btn-primary']);
                },
                'update' => function($url,$model){
                    return Html::a('Update',$url,['class' => 'btn btn-xs btn-info']);
                },
                'delete' => function($url,$model){
                    return Html::a('Delete',$url,[
                        'class' => 'btn btn-xs btn-danger',
                        'data-method' => 'post',
                        'data-confirm' => 'Bạn có chắc muốn xóa'
                    ]);
                }
            ]
        ],
    ],

]); ?>


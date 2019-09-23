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
use yii\helpers\ArrayHelper;
use backend\models\Phong;
use backend\models\Club;


?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,

    'filterModel' => $searchModel,
    'showOnEmpty' => false,
    'summary'=>'',
    'columns' => [
        ['class' => 'yii\grid\SerialColumn',
            'header' => 'Stt',
        ],
        [
                'attribute' => 'id',
                'headerOptions' => [
                        'style' => 'text-align: center; width: 30px;'
                ],
                'contentOptions' => [
                        'style' => 'text-align: center'
                ]
        ],
        [
            'attribute' => 'username',
            'headerOptions' => [
                'style' => 'text-align: center; width: 200px;'
            ],
            'contentOptions' => [
                'style' => 'text-align: center'
            ]
        ],
        'email:email',

        [
            'attribute' => 'tel',
            'headerOptions' => [
                'style' => 'text-align: center; width: 200px;'
            ],
            'contentOptions' => [
                'style' => 'text-align: center'
            ]
        ],
        [
            'attribute' => 'phongId',
            'label' => 'Phong Ban',
            'value'=>function ($model) {
                    $data = Phong::find()->where(['id_p' => $model->phongId])->asArray()->all();
                    return $data[0]['name_p'];
            },

            // truyen vao id_p
            'filter' => Html::activeDropDownList($searchModel,'phongId',
                ArrayHelper::map(Phong::find()->asArray()->all(),'id_p' , 'name_p') ,
                ['class'=>'form-control','prompt' => 'Chon PBan']),
            'headerOptions' => [
                'style' => 'text-align: center;'
            ],
            'contentOptions' => [
                'style' => 'text-align: center'
            ]

        ],

        [
            'attribute' => 'idclub',
            'label' => 'CLB',
            // truyen vao name (not id)
            'filter' => Html::activeDropDownList($searchModel,'idclub',
                ArrayHelper::map(Club::find()->asArray()->all(),'name_cl' , 'name_cl') ,
                ['class'=>'form-control','prompt' => 'Chon CLB']),

            'headerOptions' => [
                'style' => 'text-align: center; width: 200px;'
            ],
            'contentOptions' => [
                'style' => 'text-align: center'
            ]

        ],

        ['class' => 'yii\grid\ActionColumn',
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
    'pager' =>[
        'maxButtonCount' => 3,
        'prevPageLabel' => '<span class="glyphicon glyphicon-chevron-left"></span>',
        'nextPageLabel' => '<span class="glyphicon glyphicon-chevron-right"></span>',
        'disableCurrentPageButton' => true
    ]
]); ?>


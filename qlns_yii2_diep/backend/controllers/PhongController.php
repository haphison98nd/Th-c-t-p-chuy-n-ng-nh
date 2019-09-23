<?php
namespace backend\controllers;
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/18/2019
 * Time: 10:58 AM
 */

use backend\models\Phong;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;



    class PhongController extends Controller{
    public function behaviors()
    {
        return [
            'as beforeRequest' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login',]
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function(){
                    return Yii::$app->response->redirect(['site/login']);
                },
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],

                ],
            ],
        ];
    }
    public function actionDelete($id_p)
    {
        $this->findModel($id_p)->delete();
        return $this->redirect(['index']);
    }


    public function actionIndex(){
           $query = $this->dsPb();
           return $this->render('index',[
               'query' => $query
           ]);

    }

    public function actionView($id_p)
    {
            $kt = Phong::checkIdPb($id_p);
            if($kt!=0){
                return $this->render('view', [
                    'model' => $this->findModel($id_p),
                ]);
            }else{
                return$this->render('err');
            }
    }

    public function actionCreate()
    {
            $model = new Phong();

            if($model->load(Yii::$app->request->post()) && $model->save()){
                return $this->redirect(['view', 'id_p' => $model->id_p]);

            }
            return $this->render('create', [
                'model' => $model,
            ]);
    }


    public function actionUpdate($id_p){

            $kt = Phong::checkIdPb($id_p);
            if($kt != 0){
                $model = $this->findModel($id_p);
                if($model->load(Yii::$app->request->post()) && $model->save()){
                    return $this->redirect(['view', 'id_p' => $model->id_p]);
                }
                return $this->render('update',[
                    'model' => $model
                ]);
            }else{
                return $this->render('err');
            }
    }


    protected function findModel($id)
    {
        if (($model = Phong::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function dsPb(){
        $model = Phong::find()->asArray()->all();
        if($model !== null){
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
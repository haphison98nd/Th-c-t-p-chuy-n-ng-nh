<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/21/2019
 * Time: 10:51 AM
 */
namespace backend\controllers;

use backend\models\Club;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ClubController extends Controller{

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

    public function actionDelete($id_cl){
        $this->findModel($id_cl)->delete();
        return $this->redirect(['index']);
    }

    public function actionIndex(){
            $query = $this->daClub();
            return $this->render('index', [
                'query' => $query,
            ]);

    }

    public function actionView($id_cl)
    {
            $kt = Club::checkIdCl($id_cl);
            if($kt !== 0){
                return $this->render('view', [
                    'model' => $this->findModel($id_cl),
                ]);
            }else{
                return $this->render('err');
            }

    }

    public function actionCreate(){
            $model = new Club();

            if($model->load(Yii::$app->request->post()) && $model->save()){
                return $this->redirect(['view' , 'id_cl' => $model->id_cl]);
            }
            return $this->render('create', [
                'model' => $model
            ]);
    }

    public function actionUpdate($id_cl){
            $kt = Club::checkIdCl($id_cl);
            if($kt !== 0){
                $model = $this->findModel($id_cl);
                if($model->load(Yii::$app->request->post()) && $model->save()){
                    return $this->redirect(['view' , 'id_cl' => $model->id_cl]);
                }
                return $this->render('update', [
                    'model' => $model
                ]);
            }else{
                return $this->render('err');
            }

    }

    public function findModel($id){
        if(($model = Club::findOne($id)) !== null){
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function daClub(){
        $model = Club::find()->asArray()->all();
        return $model;
    }
}
?>


<?php

namespace backend\controllers;

use Yii;
use backend\models\employees;
use backend\models\EmployeesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
/**
 * EmployeesController implements the CRUD actions for employees model.
 */
class EmployeesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'as beforeRequest' => [
                    'class' => 'yii\filters\AccessControl',
                    'rules' => [
//                    [
//                        'allow' => true,
//                        'actions' => ['login'],
//                    ],
//                    [
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
                    [
                        // phan quyen cho user id = 1
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function($rule,$action){
                            if(Yii::$app->user->can('manager-employees')){
                                return true;
                            }
                        }
                    ]
                ],
                'denyCallback' => function () {
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }


    /**
     * Lists all employees models.
     * @return mixed
     */
    public function actionIndex()
    {
            $searchModel = new EmployeesSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index',[
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
    }
    public function actionDelete($id)
    {
        if(!Yii::$app->user->isGuest){
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }else{
            echo 'Bạn cần đăng nhập Admin';
        }

    }

    /**
     * Displays a single employees model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
            $kt = employees::checkId($id);
            if($kt !== 0){
                return $this->render('view', [
                    'model' => $this->findModel($id),
                ]);
            }else{
                return$this->render('s9');
            }
    }

    /**
     * Creates a new employees model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionCreate()
    {
            $model = new employees();
            $model->auth_key = 'a';
            $model->status = '1';
            $model->created_at = time();
            $model->updated_at = time();

            if($model->load(Yii::$app->request->post())){
                $str = implode(',',$model->idclub);
                $model->idclub = $str;
                if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing employees model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
            $kt = employees::checkId($id);

            if($kt !==0 ){
                $model = $this->findModel($id);
                if ($model->load(Yii::$app->request->post()) ) {
                    $model->auth_key = "a";
                    $model->status =  '1';
                    $model->created_at = time();
                    $model->updated_at = time();
                    $model->idclub = implode(',',$model->idclub);

                    if($model->save()){
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
                return $this->render('update', [
                    'model' => $model,
                ]);
            }else{
                return $this->render('s9');
            }

    }

    /**
     * Deletes an existing employees model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    /**
     * Finds the employees model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return employees the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = employees::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }


}

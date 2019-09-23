<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="employees-index">
    <div class="row">
        <div class="col-sm-8">
            <h1 ><?= Html::encode($this->title) ?></h1>
            <label class="create_employees"> Tạo mới nhân viên</label>
            <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <h5 >Tìm kiếm nhân viên bằng tên </h5>
    <?php  echo $this->render('_search', ['model' => $searchModel]);?>
    <div class="row">
        <div class="col-xs-12">
            <?php
            echo $this->render('table_employees',['searchModel' => $searchModel,
                'dataProvider' => $dataProvider,]);
            ;?>
        </div>
    </div>

</div>

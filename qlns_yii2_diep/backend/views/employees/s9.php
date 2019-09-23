<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/15/2019
 * Time: 8:37 AM
 */
use yii\helpers\Html;
use backend\models\Employees;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <p>Không tồn tại Khách Hang</p>
            <?= html::a('Back' , ['/employees'],['class' => 'btn btn-info']) ?>
        </div>
    </div>
</div>

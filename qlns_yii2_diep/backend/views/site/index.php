<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="panel panel-primary">
    <div class="panel-body">
        <p>Quản lý nhân viên</p>
        <ul class="list-group">
            <li class="list-group-item">
                  <?php
                        echo Html::a('NhanVien',['/employees'],['class' => 'btn btn-info']) ?>
            </li>
        </ul>
    </div>
    <div class="panel-body">
        <p>Quản lý phòng ban</p>
        <ul class="list-group">
            <li class="list-group-item">
                <?php echo Html::a('PhongBan',['/phong'],['class' => 'btn btn-info']) ?>
            </li>
        </ul>
    </div>
    <div class="panel-body">
        <p>Quản lý Club</p>
        <ul class="list-group">
            <li class="list-group-item">
                <?php echo Html::a('Club',['/club'],['class' => 'btn btn-info']) ?>
            </li>
        </ul>
    </div>
</div>


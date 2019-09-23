<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/21/2019
 * Time: 11:11 AM
 */
use yii\helpers\Html;
$this->title = 'Đăng ký nhân Club';
$this->params['breadcrumbs'][] = ['label' => 'Club', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <h4><?= Html::encode($this->title)?></h4>
    <?=
        $this->render('form',[
            'model' => $model
        ])
    ?>
</div>

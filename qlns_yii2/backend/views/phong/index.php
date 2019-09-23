<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/18/2019
 * Time: 11:00 AM
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'PBan';
$this->params['breadcrumbs'][] = ['label' => 'PhongBan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h4>Tạo phòng ban</h4>
        </div>
        <div class="col-sm-6">
            <?= Html::a('Create_PB', ['create'] , ['class' => 'btn btn-info'])?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <h4>Danh Sach</h4>
            <?php
//                echo $this->render('list_pb', [
//                        'phong' => $phong,
//                        'dataProvider' => $dataProvider,
//                ])
            ?>
            <table border="1" class="table_emloyees ">
                <tr>
                    <td id="id">ID_PB</td>
                    <td id="name">Name_PB</td>
                    <td id="email">Email_PB</td>
                    <td id="tel">Tel_PB</td>
                    <td>Thao Tac</td>
                </tr>
                <?php
                for($i=0 ; $i < count($query) ; $i++){
                    ?>
                    <tr>
                        <td><?php echo $query[$i]['id_p']?></td>
                        <td><?php echo $query[$i]['name_p']?></td>
                        <td><?php echo $query[$i]['email_p']?></td>
                        <td><?php echo $query[$i]['tel_p']?></td>
                        <td> <?= Html::a('View', ['view', 'id_p' => $query[$i]['id_p']], ['class' => 'btn-xs btn-primary']) ?>
                            <?=Html::a('Update', ['update', 'id_p' => $query[$i]['id_p']], ['class' => 'btn-xs btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_p' => $query[$i]['id_p']], [
                                'class' => 'btn-xs btn-danger',
                                'data' => [
                                    'confirm' => 'Ban chac muon xoa',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </td>
                    </tr>
                <?php }?>
            </table>

        </div>

    </div>
</div>

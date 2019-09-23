<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/21/2019
 * Time: 10:54 AM
 */
use yii\helpers\Html;
$this->params['breadcrumbs'][] = ['label' => 'Club', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <h4>Đăng ký Club</h4>
        </div>
        <div class="col-sm-5">
            <?= Html::a('Create' , ['create'] , ['class' => 'btn btn-info'])?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h4 style="margin-top: 40px;">Danh sách Club</h4>
        </div>
    </div>
    <div class="row">
        <table border="1" class="table_emloyees ">
            <tr>
                <td id="id">ID_Club</td>
                <td id="name">Name_Club</td>
                <td id="email">InFo_PB</td>
                <td>Thao Tac</td>
            </tr>
            <?php
            for($i=0 ; $i < count($query) ; $i++){
                ?>
                <tr>
                    <td><?php echo $query[$i]['id_cl']?></td>
                    <td><?php echo $query[$i]['name_cl']?></td>
                    <td><?php echo $query[$i]['info_cl']?></td>
                    <td> <?= Html::a('View', ['view', 'id_cl' => $query[$i]['id_cl']], ['class' => 'btn-xs btn-primary']) ?>
                        <?=Html::a('Update', ['update', 'id_cl' => $query[$i]['id_cl']], ['class' => 'btn-xs btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id_cl' => $query[$i]['id_cl']], [
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

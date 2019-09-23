<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller{

    public function actionInit(){
        $auth = Yii::$app->authManager;

        $indexEmployees = $auth->createPermission('index-employees');
//        $indexEmployees->description = 'Xem danh sach Employees';
//        $auth->add($indexEmployees);

        $createEmployees = $auth->createPermission('create-employees');
//        $createEmployees->description = 'Tao Employees';
//        $auth->add($createEmployees);

        $updateEmployees = $auth->createPermission('update-employees');
//        $updateEmployees->description = 'Update Employees';
//        $auth->add($updateEmployees);

        $deleteEmployees = $auth->createPermission('delete-employees');
//        $deleteEmployees->description = 'Delete Employees';
//        $auth->add($deleteEmployees);

        $viewEmployees = $auth->createPermission('view-employees');
//        $viewEmployees->description = 'View Employees';
//        $auth->add($viewEmployees);

        // them nhom quyen

        $employeesManager = $auth->createRole('manager-employees');
//        $auth->add($employeesManager);


        // gan quuyen cho nhom

//        $auth->addChild($employeesManager,$indexEmployees);
//        $auth->addChild($employeesManager,$createEmployees);
//        $auth->addChild($employeesManager,$updateEmployees);
//        $auth->addChild($employeesManager,$deleteEmployees);
//        $auth->addChild($employeesManager,$viewEmployees );


        // gan quyen cho user co id = 1
        $auth->assign($employeesManager,1);
    }
}
?>
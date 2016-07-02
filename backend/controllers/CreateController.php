<?php
namespace backend\controllers;
use common\models\Posts;


use yii\rest\ActiveController;

class CreateController extends ActiveController
{
    public $modelClass = 'common\models\Posts';
    
 //    protected function verbs()
	// {
	//     return [
	//         'index' => ['GET', 'HEAD'],
	//         'view' => ['GET', 'HEAD'],
	//         'create' => ['POST'],
	//         'update' => ['PUT', 'PATCH'],
	//         'delete' => ['DELETE'],
	//     ];
	// }

}


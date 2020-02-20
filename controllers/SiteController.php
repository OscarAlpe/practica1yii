<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\models\Emple;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionConsulta1() {
        $query = Emple::find()->select("emple.*");
        
        $dataProvider = $dataProvider = new ActiveDataProvider([
                'query' => $query,
        ]);
        return $this->render('_index', [
            'titulo' => 'Consulta 1',
            'descripcion' => 'SELECT * FROM emple',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }
}

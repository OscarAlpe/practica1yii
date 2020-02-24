<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\models\Emple;
use \app\models\Depart;
use yii\data\SqlDataProvider;

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
        
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                  'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 1',
            'descripcion' => 'SELECT * FROM emple',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta2() {
        $query = Depart::find()->select("depart.*");
        
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                  'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 2',
            'descripcion' => 'SELECT * FROM depart',
            'dataProvider' => $dataProvider,
            'columnas' => ['dept_no', 'dnombre', 'loc'],
        ]);
    }
    
    public function actionConsulta3() {
        $query = Emple::find()->select("apellido, oficio");
        
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                  'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 3',
            'descripcion' => 'SELECT apellido, oficio FROM emple',
            'dataProvider' => $dataProvider,
            'columnas' => ['apellido', 'oficio'],
        ]);
    }

}
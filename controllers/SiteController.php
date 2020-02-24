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

    public function actionConsulta4() {
        $query = Depart::find()->select("loc, dept_no");
        
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                  'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 4',
            'descripcion' => 'SELECT loc, dept_no FROM depart',
            'dataProvider' => $dataProvider,
            'columnas' => ['loc', 'dept_no'],
        ]);
    }

    public function actionConsulta5() {
        $query = Depart::find()->select("dept_no, dnombre, loc");
        
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                  'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 5',
            'descripcion' => 'SELECT dept_no, dnombre, loc FROM depart',
            'dataProvider' => $dataProvider,
            'columnas' => ['dept_no', 'dnombre', 'loc'],
        ]);
    }
    
    public function actionConsulta6() {
        $provider = new SqlDataProvider([
            'sql' => 'SELECT COUNT(*) FROM emple',
        ]);
              
        return $this->render('_index', [
            'titulo' => 'Consulta 6',
            'descripcion' => 'SELECT COUNT(*) FROM emple',
            'dataProvider' => $provider,
            'columnas' => [],
        ]);
    }

    public function actionConsulta7() {
        $query = Emple::find()->select("emple.*")->orderBy(["apellido" => SORT_ASC]);
        
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                  'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 7',
            'descripcion' => 'SELECT * FROM emple ORDER BY apellido ASC',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

}
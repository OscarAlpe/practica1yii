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
    
    // formato por defecto del grid
    public $formatoGrid = "{summary}<br /><br />{items}{pager}";
    
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
    
    public function actionConsulta6a() {
        $provider = new ActiveDataProvider([
            'query' => Emple::find()->select("count(*) as total"),
            'totalCount'=>1,                
        ]);
        
        // Quita el texto que nos dice los registros activos y el número de registros.
        $this->formatoGrid = "{items}";
              
        return $this->render('_index', [
            'titulo' => 'Consulta 6a',
            'descripcion' => 'SELECT COUNT(*) FROM emple',
            'dataProvider' => $provider,
            'columnas' => ['total'],
            
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

    public function actionConsulta8() {
        $query = Emple::find()->select("emple.*")->orderBy(["apellido" => SORT_DESC]);
        
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                  'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 8',
            'descripcion' => 'SELECT * FROM emple ORDER BY apellido DESC',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta9() {
        $dataProvider = new SqlDataProvider([
                'sql' => 'SELECT COUNT(*) FROM depart',
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 9',
            'descripcion' => 'SELECT COUNT(*) FROM depart',
            'dataProvider' => $dataProvider,
            'columnas' => [],
        ]);
    }
    
    public function actionConsulta10() {
        $count = Yii::$app->db
                ->createCommand('SELECT COUNT(*) FROM emple')
                ->queryScalar();

        $dataProvider = new SqlDataProvider([
                'sql' => 'SELECT * FROM emple ORDER BY dept_no DESC',
                'totalCount' => $count,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 10',
            'descripcion' => 'SELECT * FROM depart ORDER BY dept_no DESC',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta11() {
        $count = Yii::$app->db
                ->createCommand('SELECT COUNT(*) FROM emple')
                ->queryScalar();

        $dataProvider = new SqlDataProvider([
                'sql' => 'SELECT * FROM emple ORDER BY dept_no DESC, oficio ASC',
                'totalCount' => $count,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 11',
            'descripcion' => 'SELECT * FROM emple ORDER BY dept_no DESC, oficio ASC',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta12() {
        $count = Yii::$app->db
                ->createCommand('SELECT COUNT(*) FROM emple')
                ->queryScalar();

        $dataProvider = new SqlDataProvider([
                'sql' => 'SELECT * FROM emple ORDER BY dept_no DESC, apellido ASC',
                'totalCount' => $count,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 12',
            'descripcion' => 'SELECT * FROM emple ORDER BY dept_no DESC, apellido ASC',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta13() {
        $query = Emple::find()->select("emp_no")->where([">","salario","2000"]);

        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 13',
            'descripcion' => 'SELECT emp_no FROM emple WHERE salario > 2000',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no'],
        ]);
    }

    public function actionConsulta14() {
        $query = Emple::find()->select(["emp_no", "apellido"])->where(["<","salario","2000"]);

        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 14',
            'descripcion' => 'SELECT emp_no, apellido FROM emple WHERE salario < 2000',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido'],
        ]);
    }

    public function actionConsulta15() {
        $query = Emple::find()->select(["emple.*"])->where(["BETWEEN","salario","1500","2500"]);

        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 15',
            'descripcion' => 'SELECT * FROM emple WHERE salario BETWEEN 1500 AND 2500',
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta16() {
        $query = Emple::find()->select(["emple.*"])->where(["=","oficio","ANALISTA"]);

        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 16',
            'descripcion' => "SELECT * FROM emple WHERE oficio = 'ANALISTA'",
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta17() {
        $query = Emple::find()->select(["emple.*"])->where(["=", "oficio", "ANALISTA"])->andWhere([">", "salario", "2000"]);

        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 17',
            'descripcion' => "SELECT * FROM emple WHERE oficio = 'ANALISTA' AND salario > 2000",
            'dataProvider' => $dataProvider,
            'columnas' => ['emp_no', 'apellido', 'oficio', 'dir', 'fecha_alt', 'salario', 'comision', 'dept_no'],
        ]);
    }

    public function actionConsulta22() {
        $count = Yii::$app->db
                ->createCommand('SELECT COUNT(apellido) FROM emple WHERE salario = (SELECT MAX(salario) FROM emple)')
                ->queryScalar();

        $dataProvider = new SqlDataProvider([
                'sql' => 'SELECT apellido FROM emple WHERE salario = (SELECT MAX(salario) FROM emple)',
                'totalCount' => $count,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 22',
            'descripcion' => "SELECT apellido FROM emple WHERE salario = (SELECT MAX(salario) FROM emple)",
            'dataProvider' => $dataProvider,
            'columnas' => ['apellido'],
        ]);
    }

    public function actionConsulta24() {
        $count = Yii::$app->db
                ->createCommand('SELECT COUNT(DISTINCT MONTH(fecha_alt)) FROM emple')
                ->queryScalar();

        $dataProvider = new SqlDataProvider([
                'sql' => 'SELECT DISTINCT MONTH(fecha_alt) as mes FROM emple',
                'totalCount' => $count,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 24',
            'descripcion' => "SELECT DISTINCT MONTH(fecha_alt) FROM emple",
            'dataProvider' => $dataProvider,
            'columnas' => ['mes:integer:Mes'],
        ]);
    }

    public function actionConsulta28() {
        $query = Emple::find()->select(["apellido", "dept_no"]);

        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 2,
                ],
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 28',
            'descripcion' => "SELECT apellido, dnombre FROM emple JOIN depart USING(dept_no)",
            'dataProvider' => $dataProvider,
            'columnas' => ['apellido', 'deptNo.dnombre'],
        ]);
    }

    public function actionConsulta30() {
        $query = Emple::find()->select(["dept_no", "COUNT(emp_no) as total"])->groupBy("dept_no");

        $dataProvider = new ActiveDataProvider([
                'query' => $query,
        ]);
        
        return $this->render('_index', [
            'titulo' => 'Consulta 30',
            'descripcion' => "SELECT dept_no, COUNT(emp_no) FROM emple GROUP BY dept_no",
            'dataProvider' => $dataProvider,
            'columnas' => ['dept_no', 'total:integer:NUMERO_DE_EMPLEADOS'],
        ]);
    }

}
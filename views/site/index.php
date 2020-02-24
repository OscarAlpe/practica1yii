<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

?>
<div class="container" style="width: 750px; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 1</h3>
            <p>Lista todos los Empleados</p>
            <p><?= Html::a('Consulta 1', ['/site/consulta1'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 2</h3>
            <p>Lista todos los Departamentos</p>
            <p><?= Html::a('Consulta 2', ['/site/consulta2'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 3</h3>
            <p>Mostrar el apellido y el oficio de cada empleado</p>
            <p><?= Html::a('Consulta 3', ['/site/consulta3'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 4</h3>
            <p>Mostrar localización y número de cada Departamento</p>
            <p><?= Html::a('Consulta 4', ['/site/consulta4'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 5</h3>
            <p>Mostrar número, nombre y localización de cada Departamento</p>
            <p><?= Html::a('Consulta 5', ['/site/consulta5'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 6</h3>
            <p>Indicar el número  de empleados que hay</p>
            <p><?= Html::a('Consulta 6', ['/site/consulta6'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 7</h3>
            <p>Mostar Datos de los empleados ordenados por apellidos de forma ascendente</p>
            <p><?= Html::a('Consulta 7', ['/site/consulta7'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 8</h3>
            <p>Mostar Datos de los empleados ordenados por apellidos de forma descendente</p>
            <p><?= Html::a('Consulta 8', ['/site/consulta8'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 9</h3>
            <p>Indicar el número  de departamentos que hay</p>
            <p><?= Html::a('Consulta 9', ['/site/consulta9'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 10</h3>
            <p>Datos de los empleados ordenados por número de departamento descendentemente</p>
            <p><?= Html::a('Consulta 10', ['/site/consulta10'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 11</h3>
            <p>Datos de los empleados ordenados por número de departamento descendentemente y por oficio ascendente</p>
            <p><?= Html::a('Consulta 11', ['/site/consulta11'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 12</h3>
            <p>Datos de los empleados ordenados por número de departamento descendentemente y por apellido ascendentemente</p>
            <p><?= Html::a('Consulta 12', ['/site/consulta12'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 13</h3>
            <p>Mostrar los códigos de los empleados cuyo salario sea mayor que 2000</p>
            <p><?= Html::a('Consulta 13', ['/site/consulta13'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 14</h3>
            <p>Mostrar los códigos y apellidos de los empleados cuyo salario sea menor que 2000</p>
            <p><?= Html::a('Consulta 14', ['/site/consulta14'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 15</h3>
            <p>Mostrar los datos de los empleados cuyo salario este entre 1500 y 2500</p>
            <p><?= Html::a('Consulta 15', ['/site/consulta15'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 16</h3>
            <p>Mostrar los datos de los empleados cuyo oficio sea 'ANALISTA'</p>
            <p><?= Html::a('Consulta 16', ['/site/consulta16'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 17</h3>
            <p>Mostrar los datos de los empleados cuyo oficio sea ANALISTA y ganen mas de 2000 €</p>
            <p><?= Html::a('Consulta 17', ['/site/consulta17'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 22</h3>
            <p>Mostrar los apellidos del empleado que mas gana</p>
            <p><?= Html::a('Consulta 22', ['/site/consulta22'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 24</h3>
            <p>Mostrar un listado de los distintos meses en que los empleados se han dado de alta</p>
            <p><?= Html::a('Consulta 24', ['/site/consulta24'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 28</h3>
            <p>Realizar un listado donde nos coloque el apellido del empleado y el nombre del departamento al que pertenece</p>
            <p><?= Html::a('Consulta 28', ['/site/consulta28'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 30</h3>
            <p>Listar el número de empleados por departamento</p>
            <p><?= Html::a('Consulta 30', ['/site/consulta30'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 31</h3>
            <p>Listar el número de empleados por departamento que salga el nombre del departamento</p>
            <p><?= Html::a('Consulta 31', ['/site/consulta31'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>Consulta 33</h3>
            <p>Seleccionar de la tabla EMPLE los empleados cuyo apellido empiece por 'A'. Listar el apellido de los empleados</p>
            <p><?= Html::a('Consulta 33', ['/site/consulta33'], ['class'=>'btn btn-primary grid-button']) ?></p>
          </div>
        </div>
      </div>
    </div>
</div>
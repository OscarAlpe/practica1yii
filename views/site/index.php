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
</div>
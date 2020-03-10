<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbuser */

//$this->title = 'Add User';
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbuser-create">
<h1 align="center">Add user</h1>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

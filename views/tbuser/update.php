<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbuser */

$this->title = 'Update User: ' . $model->cliduser;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cliduser, 'url' => ['view', 'id' => $model->cliduser]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

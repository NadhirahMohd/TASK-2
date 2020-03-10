<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbuser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


        <?php $gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],

                        'cliduser',
                        'clname',
                        'clemail:email',
                        'cldate',
            ['class' => 'yii\grid\ActionColumn'],
          ];

    ?>
    <?php echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns
    ]);
    ?>

    <?= GridView::widget([
        'dataProvider'=> $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'responsive'=>true,
        'hover'=>true,
        'bootstrap'=>true,
        'resizableColumns'=>true,
    ]); ?>


</div>

<?php
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use yii\jui\AutoComplete;
use yii\helpers\ArrayHelper;
use yii\web\JsExpression;
use app\models\Gred;//
use app\models\Unit;
use app\models\Program;
use app\models\Ptj;
use app\models\Jantina;
use app\models\Aktiviti;
use app\models\Tarafjawatan;
use kartik\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Tbuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbuser-form">

  <?php
   $form = ActiveForm::begin([
      'id' => 'login-form-horizontal',
      'type' => ActiveForm::TYPE_HORIZONTAL,
      'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_SMALL]
  ]);

  //$list = [0 => 'Morning', 1 => 'Noon', 2 => 'Evening'];

  ?>

    <?= $form->field($model, 'clname')->textInput(['maxlength' => true]) ?>


 <?= $form->field($model, 'clemail')->input('email', ['placeholder'=>'Enter a valid email...', 'options'=>['id'=>'new-email-1']]) ?>


               <?= $form->field($model, 'cldate')->widget(DatePicker::classname(), [
           'options' => ['placeholder' => 'Select date...'],
           'pluginOptions' => [
               'autoclose'=>true,
               'value' => '1982',
               'todayHighlight' => true,
             //  'todayBtn' => true,
               'format' => 'dd-M-yyyy',
           ]
           ]);?>

           <div style="overflow:auto;">
           <div style="float:right;">
             <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
               <?= Html::resetButton('Reset', ['class' => 'btn btn-secondary']) ?>
           </div>
           </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin([
        'action' => ['store'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

<?= $form->field($model, 'checkbox_price1')->checkbox(['label' => '$0-$100', 'uncheck' => NULL]) ?>
<?= $form->field($model, 'checkbox_price2')->checkbox(['label' => '$100-$200',  'uncheck' => NULL]) ?>
<?= $form->field($model, 'checkbox_price3')->checkbox(['label' => '$200-$300', 'uncheck' => NULL]) ?>
<?= $form->field($model, 'checkbox_price4')->checkbox(['label' => '$300-$400', 'uncheck' => NULL]) ?>
<?= $form->field($model, 'checkbox_price5')->checkbox(['label' => '$400-$500',  'uncheck' => NULL]) ?>
<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Judul')->textInput() ?>

    <?= $form->field($model, 'Konten')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'id',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>
    <?= $form->field($model, 'Status')->dropDownList(['1' => 'Draft', '2' => 'Publish', '3' => 'Pending'],['prompt'=>'Select Status']); ?>

    <?= $form->field($model, 'Tanggal_Pembuatan')->widget(DateTimePicker::className(), [
    'inline' => false,
    'language' => 'id',
    'size' => 'md',
    'template' => '{button}{reset}{input}',
    'pickButtonIcon' => 'glyphicon glyphicon-time',
    'clientOptions' => [
        //'startView' => 1,
        //'minView' => 0,
        //'maxView' => 1,
        'autoclose' => true,
        'format' => 'DD, dd MM yyyy - hh:ii:ss', // if inline = true
        // 'format' => 'HH:ii P', // if inline = false
        'todayBtn' => true,
        'todayHighlight' => TRUE,
    ]
]);?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

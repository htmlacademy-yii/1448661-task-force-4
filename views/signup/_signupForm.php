<?php
/** @var yii\web\View $this
 * @var $model SignupForm
 */

use app\models\SignupForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => $model->formName(),
    'enableAjaxValidation' => true,

    'fieldConfig' => [
        'inputOptions' => ['class' => null],
        'labelOptions' => ['class' => 'control-label'],
        'errorOptions' => ['tag' => 'span', 'class' => 'help-block'],
    ],
]);
?>

<h3 class="head-main head-task">Регистрация нового пользователя</h3>

<?= $form->field($model, 'name'); ?>
<div class="half-wrapper">
    <?= $form->field($model, 'email'); ?>

    <?= $form->field($model, 'city_id')->dropDownList($model->getCities()); ?>

</div>
<div class="half-wrapper">
    <?= $form->field($model, 'password')->passwordInput(); ?>
</div>
<div class="half-wrapper">
    <?= $form->field($model, 'password_repeat')->passwordInput(); ?>
</div>
<?= $form->field($model, 'is_executor')->checkbox(); ?>

<?= Html::submitInput('Создать аккаунт', ['class' => 'button button--blue']); ?>

<?php
ActiveForm::end(); ?>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-logo">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

            <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                ]); ?>

                <?= $form->field($model, 'username', [
                    'options' => ['class' => 'form-group has-feedback'],
                    'template' => "{label}\n{input}\n<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>\n{hint}\n{error}",
                    ])->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password', [
                    'options' => ['class' => 'form-group has-feedback'],
                    'template' => "{label}\n{input}\n<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>\n{hint}\n{error}",
                    ])->passwordInput() ?>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <?= $form->field($model, 'rememberMe')->checkbox([]) ?>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                    </div>
                    <!-- /.col -->
                </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>

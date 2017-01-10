<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use frontend\modules\MyUser;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="myuser-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
    <h1>myuser/index</h1>
    <h2><?//= // Yii::t('common', 'Example text') ?></h2>
</div>
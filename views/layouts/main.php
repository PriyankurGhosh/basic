<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<?php
$session = Yii::$app->session;
$session->open();
$user = $session->get('user');

//var_dump($user);
 //echo $user['user_name'];
 //die;
?>




<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<nav id="w0" class="navbar-inverse navbar-fixed-top navbar"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button><a class="navbar-brand" href="/basic/web/index.php">My Application</a></div><div id="w0-collapse" class="collapse navbar-collapse">
<ul id="w1" class="navbar-nav navbar-right nav">
<li class="active"><a href="/basic/web/index.php?r=site%2Findex">Home</a></li>
<li><a href="/basic/web/index.php/site/about">About</a></li>
<li><a href="/basic/web/index.php/employee-details/index">Employee Details</a></li>
<li><a href="/basic/web/index.php/contact-details/index">Contact</a></li>
<?php if($user['user_name']==Null){?>
<li><a href="/basic/web/index.php/site/login">Login</a></li>
<?php } else {?>
<!--<li><a href="<?php //echo Yii::$app->homeUrl . '/site/logout' ?>">Logout(<?php echo $user['user_name']?>)</a></li>-->
<li><a href="/basic/web/index.php/site/logout" data-method="post">Logout (<?php echo $user['user_name']?>)</a></li>
<?php }?>
</ul>
</div></div></nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
<?php //var_dump($user);?>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

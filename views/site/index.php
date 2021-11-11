<?php

/* @var $this yii\web\View */

$this->title = 'Надеждин HeadHunters';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Надеждин headhunters!</h1>

        <p class="lead">Добро пожаловать на сайт размещения резюме</p>
<?php if (Yii::$app->user->isGuest) :?>
        <p><a class="btn btn-lg btn-success" href="/site/signup">Зарегистрироваться</a></p>
        <?php else:?>
        <p><a class="btn btn-lg btn-success" href="/index.php?r=portfolio">Посмотреть резюме</a></p>
        <?php endif;?>
    </div>

</div>

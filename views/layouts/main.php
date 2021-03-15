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
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
      
        // hier worden de menu's en menu items bepaald
          'options' => ['class' => 'navbar-nav navbar-right'],
          'items' => [
              [ 'label' => 'Country',
                  'items' => [
                      ['label' => 'Overzicht', 'url' => ['/country/index', ''] ],
                      ['label' => 'Voeg toe', 'url' => ['/country/create', ''] ],

                      
                  ],
              ],

              [ 'label' => 'Continents',
                  'items' => [
                      ['label' => 'Africa', 'url' => ['/country/index', 'countrySearch[Continent]' => 'Africa'] ],
                      ['label' => 'Antarctica', 'url' => ['/country/index', 'countrySearch[Continent]' => 'Antarctica'] ],
                      ['label' => 'Asia', 'url' => ['/country/index', 'countrySearch[Continent]' => 'Asia'] ],
                      ['label' => 'Europa', 'url' => ['/country/index', 'countrySearch[Continent]' => 'Europe'] ],
                      ['label' => 'North America', 'url' => ['/country/index', 'countrySearch[Continent]' => 'North America'] ],
                      ['label' => 'South America', 'url' => ['/country/index', 'countrySearch[Continent]' => 'South America'] ],
                      ['label' => 'Oceania', 'url' => ['/country/index', 'countrySearch[Continent]' => 'Oceania'] ],
                      
                  ],
              ],

              [ 'label' => 'City',
                  'items' => [
                    ['label' => 'Overzicht', 'url' => ['/city/index', ''] ],
                    ['label' => 'Voeg toe', 'url' => ['/city/create', ''] ],
                  ],
              ],
          ],
      ]);
                    
     NavBar::end();
    ?>

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

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

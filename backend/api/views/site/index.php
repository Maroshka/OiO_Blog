<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
$this->title = 'OiO';

$photo = "pika.jpg";
//echo "<img src='/images/pika.jpg'/>";

//echo "<div align='center'><img src='../../web/images/pika.jpg'/></div>";
?>
<body class="indexconfig">
<div class="indexconfig">
<div class="site-index">
  <div align="center">
    <h1 color="gray" class="fontchars">OiO</h1>
  </br>
  </div>


  <div align="center" class="indexdesc">OiO is an Yii based blog application</div>
  <div align="center" class="indexdesc">developed by Muna Hamdan</div>
  <div align="center" class="indexdesc">under OpenSooq tech-team supervision</div>
</br>
</br>
<div align="center">

  <?php
//  var_dump(Yii::$app->user->isGuest);
 //die();

  if(Yii::$app->user->isGuest) {
  echo Html::a('Login', ['login'], ['class' => 'clkclr']);
  echo Html::a('Sign Up', ['signup'], ['class' => 'clkclr']);
} else {
  echo Html::a('Go to blog -->', ['/posts/index'], ['class' => 'clkclr']);

}


  ?>

</div>


</div>
</div>
</body>

<?php
use yii\helpers\Html;
?>
<p>Informasimu</p>

<ul>
    <li><label>Nama</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
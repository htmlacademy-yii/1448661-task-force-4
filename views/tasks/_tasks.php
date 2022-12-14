<?php
/** @var yii\web\View $this
 * @var object $model
 */

use yii\helpers\HtmlPurifier;
use yii\helpers\Url;

?>
        <div class="task-card">
            <div class="header-task">
                <a href="<?=Url::toRoute(['tasks/view/','id' => $model->id]); ?>" class="link link--block link--big"><?=HtmlPurifier::process($model->name); ?></a>
                <p class="price price--task"><?= HtmlPurifier::process($model->budget); ?> ₽</p>
            </div>
            <p class="info-text"><span class="current-time"><?= Yii::$app->formatter->format(HtmlPurifier::process($model->date_creation), 'relativeTime'); ?></span></p>
            <p class="task-text"><?= HtmlPurifier::process($model->description) ?></p>
            <div class="footer-task">
                <p class="info-text town-text"><?= HtmlPurifier::process(empty($model->city->name)? '' :$model->city->name); ?></p>
                <p class="info-text category-text"><?= HtmlPurifier::process($model->category->name); ?></p>
                <a href="<?=Url::toRoute(['tasks/view/','id' => $model->id]); ?>" class="button button--black">Смотреть Задание</a>
            </div>
        </div>

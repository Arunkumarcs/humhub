<?php $this->beginContent('application.modules_core.activity.views.activityLayout', array('activity' => $activity)); ?>

<?php echo Yii::t('LikeModule.base', '{userDisplayName} likes {contentTitle}', array(
    '{userDisplayName}' => '<strong>' . $user->displayName . '</strong>',
    '{contentTitle}' => $target->getContentTitle(),
)); ?>

<?php $this->endContent(); ?>

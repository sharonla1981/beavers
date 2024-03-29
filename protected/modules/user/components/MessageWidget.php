<?php
Yii::import('application.modules.user.UserModule');
Yii::import('zii.widgets.CPortlet');

class MessageWidget extends CPortlet
{
	public $decorationCssClass = 'portlet-decoration messages';

	public function init()
	{
		$this->title=Yum::t('New messages');
		parent::init();
	}

	protected function renderContent()
	{
		if(!Yii::app()->user->isGuest) {
			$messages = YumMessage::model()->unread()->limit(10)->findAll();

			$this->render('messages', array(
						'messages' => $messages
						));
		}
	}
} 
?>

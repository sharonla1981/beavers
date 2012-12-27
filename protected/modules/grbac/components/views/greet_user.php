<?php
if (Yii::app()->user->isGuest) {
    $this->greet_GuestUser(Yii::app()->user->name);
    echo $this->greeting;
}
else {
    $this->greet_User(Yii::app()->user->name);
    echo $this->greeting;
}
?>
<?php
class GreetUser extends CWidget {
    public $greeting = '';

    public function init() {
    }

    /**
     *
     * @param <type> $user
     * @return <type>
     */
    public function greet_GuestUser($name) {
        $this->get_WelcomeString();
        $this->greeting .= $name . ', ' .
                CHtml::link('<b>login</b>',  array('/grbac/authenticate/login')).' or ' .
                CHtml::link('<b>Register</b>', array('/grbac/registration/register'));
    }

    public function greet_User($name) {
        $this->get_WelcomeString();
        $this->greeting .= 'if you are not '.Yii::app()->user->username.', please '.
                CHtml::link('<b>logout</b>', array('/grbac/authenticate/logout')).' | ' .
                CHtml::link('<b>my account</b>',  array('/grbac/account/myaccount'));
    }

    private function get_WelcomeString() {
        $this->greeting = "Welcome!";   // Default greeting

        $numeric_date=date("G");        // Start conditionals based on military time
        if($numeric_date>=0&&$numeric_date<=11)
            $this->greeting="Good Morning! ";
        else if($numeric_date>=12&&$numeric_date<=17)
            $this->greeting="Good Afternoon! ";
        else if($numeric_date>=18&&$numeric_date<=23)
            $this->greeting="Good Evening! ";
    }

    public function run() {
        $this->render('greet_user');
    }
}
?>

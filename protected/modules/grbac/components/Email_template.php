<?php
class Email_template extends CWidget
{
  public $state     = 'good'; //fail/note/warn
  public $view      = 'header'; //footer
  public $title     = null;
  public $result    = 'Info!';
  public $short_msg = 'Default short message';

  public function init() {
  }

  public function run() {
    $this->render($this->view);
  }
}
?>

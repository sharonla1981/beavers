<?php
/**
 * GrbacModule module class file.
 * ------------------------------
 * Module for user authentication, authorization, registration, password recovery
 * and user management
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version    $Id$
 * @since 0.1
 */

class GrbacModule extends CWebModule {
//Module Class
  /* @const string
   * gRrbac version
   */
  const  GRBAC_VERSION = '0.1';

  /* @var string
   * Default role to assign to new registered user
   */
  public $defaultRole = 'User';

  /* @var string
   * enable or disable new registration
   */
  public $enableRegistration = false;
  public $registerForm       = 'short';
  public $passwordForgot     = 'temp_password';
  public $autoLogin          = false;

/* @var boolean
 * when true,  active := false, and user must verify registration email
 * when fasle, active := true
 */
  public $emailConfirmation = true;

  /* @var boolean
   * Enable or disable user cookie until explicitely user logs out
   */
  public $enableRemember = true;

  /* @var integer
   * Nos of days cookies can remember user authentication
   */
  public $durationRemember = 7;

  /* @var string
   * Email used when sending notices
   */
  public $emailFrom = 'no-reply@base.com';

  /* @var boolean
   * ??
   */
  public $enablePasswordReminder = true;

  /* @var string
   * email extention to use: email, mailer or screen
   */
  public $useEmailExtension      = 'screen';

  /* @var string
   * Default encrption algorith for hash function
   * if hash function is not available, it will us md5
   */
  public $hashAlgo            = 'sha256';



  public function init() {
  // import the module-level models, controllers and components
    $this->setImport(array(
        'grbac.models.*',
        'grbac.controllers.*',
        'grbac.components.*',
    ));

    $this->controllerMap = array(
        'auth'    => 'application.modules.grbac.controllers.AuthenticateController',
        'account' => 'application.modules.grbac.controllers.AccountController',
    );

    // publish css
    $cssDir  = Yii::getPathOfAlias("grbac.css");
    $cssFile = Yii::app()->assetManager->publish($cssDir).'/grbac.css';
    Yii::app()->clientScript->registerCssFile($cssFile);

    if ( ($this->autoLogin) && !($this->registerForm=='short') )
        die('Config Error :: autoLogin can be true when selecting short form only!');
  }

  public function beforeControllerAction($controller, $action) {
    if(parent::beforeControllerAction($controller, $action)) {
    // this method is called before any module controller action is performed
    // you may place customized code here
      return true;
    }
    else
      return false;
  }
}

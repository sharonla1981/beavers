<?php
/**
 * UserIdentity class file.
 * ------------------------
 * verify password in DB and set the user states
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {
  private $_uid;
  public  $handle;

  /**
   * Authenticates a user.
   * @return boolean whether authentication succeeds.
   * set add on varibales to user identity
   */
  public function authenticate() {
    switch ($this->handle) {
        // TO DO
        // handle can be UID, username or email
        // Find by Attribute as deemd to handle
    }

    $user = User::model()->findByAttributes(array('username'=>$this->username));

    if($user===null) {
      $this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
      return !$this->errorCode;
    }

    //if user is not active retirn with custom error code =9
    if(!$user->active) {
      $this->errorCode=9;
      return !$this->errorCode;
    }

    // make encryption password to compare
    $this->password = hash($user->algo, $this->password.$user->salt);
   
    // compare password
    if($user->password !== $this->password) {
      $this->errorCode=self::ERROR_PASSWORD_INVALID;
      return !$this->errorCode;
    }

    // Set add-ons to user and update last login date
    $this->_uid = $user->uid;
    $this->setState('username' ,$user->username);
    //$this->setState('namef'    ,$user->namef);
    //$this->setState('namem'    ,$user->namem);
    //$this->setState('namel'    ,$record->namel);
    //$this->setState('email'    ,$record->email);
    $this->setState('lastlogin',$user->lastlogin);
    $this->setState('active'   ,$user->active);
    $this->getRoles($user->uid);

    $user->lastlogin = new CDbExpression('NOW()');
    $user->saveAttributes(array('lastlogin'));
    $this->errorCode=self::ERROR_NONE;

    return !$this->errorCode;
  }

  public function getId() {
    return $this->_uid;
  }

  private function getRoles($id) {
    $roles=Assignments::model()->findAll('userid='.$id);
    foreach ($roles as $role) {
      $this->setState("{$role->itemname}", 1);
    }
  }
}

<?php

/**
 * Authentication Class
 * 
 * Authentication class is used to authenticate a user. 
 */

class Auth {

  /**
   * isLoggedIn function
   * 
   * Check whether a user is logged in or not, using session.
   *
   * @return boolean
   */
  public static function isLoggedIn() {
    return isset( $_SESSION['is_logged_in'] ) && $_SESSION['is_logged_in'];
  }

}
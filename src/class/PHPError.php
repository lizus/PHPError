<?php
namespace Lizus\Error;

/*
use sample:

use \Lizus\Error\PHPError;
use function \Lizus\Error\{is_error};

$err=new PHPError();
$err->add_error('email_error','please enter email address');
$err->add_error('email_error','must has `@` in email address');

$err->add_error('name_error','need more than 4 characters');

$err->remove_error('sex_error');

var_dump($err->get_all_errors());

*/

class PHPError
{
  /**
   * store error msgs
   * @since 0.0.1
   * @var [array]
   */
  protected $errors=[];
  /**
   * initialize error,
   * if not empty $label, than add error msg to $errors
   * else will ignore other params.
   * @since 0.0.1
   * @param string $label [the error label, for seprating from others]
   * @param string $msg   [the error message]
   */
  public function __construct($label='',$msg=''){
    if (empty($label)) return;
    $this->errors[$label][]=$msg;
  }

  /**
   * check if has error data;
   * @since 0.0.1
   * @return boolean [true if has, false if not]
   */
  public function has_errors(){
    return !empty($this->errors);
  }

  /**
   * check if has $label error data;
   * @since 0.0.1
   * @return boolean [true if has, false if not]
   */
  public function has_error($label){
    return isset($this->errors[$label]) ? (count($this->errors[$label]) > 0) : false;
  }

  /**
   * get the $label errors, whatever it exists, return an array
   * @since 0.0.1
   * @param  string $label [the error label which want to get]
   * @return array        [the error data array or empty array]
   */
  public function get_error($label){
    return $this->errors[$label] ?? [];
  }

  /**
   * get all errors
   * @since 0.0.1
   * @return array [errors, if not empty, it must has labels as key, and message arrays as value]
   */
  public function get_all_errors(){
    return $this->errors;
  }

  /**
   * add error to its label
   * @since 0.0.1
   * @param string $label [the error label]
   * @param string $msg   [the error message]
   */
  public function add_error($label,$msg){
    $this->errors[$label][]=$msg;
  }

  /**
   * remove the $label errors
   * @since 0.0.1
   * @param  string $label [the error label]
   * @return null
   */
  public function remove_error($label){
    unset($this->errors[$label]);
  }
}

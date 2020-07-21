<?php
namespace Lizus\Error;

/**
 * check $sth as a PHPError object
 * @since 0.0.1
 * @param  any  $sth [the val want to check]
 * @return boolean      [true if is a PHPError, false if not]
 */
function is_error($sth){
  return ($sth instanceof PHPError);
}

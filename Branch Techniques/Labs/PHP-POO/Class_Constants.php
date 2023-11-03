<?php

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

MY_CONSTANT = "New Value"; // This will result in a syntax error


$goodbye = new Goodbye();
$goodbye->byebye();








?>
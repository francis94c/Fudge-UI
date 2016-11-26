<?php
class InvalidInputTypeException extends Exception {
  public function message() {
    $errorMsg = "Invalid input type given on line " . $this->getLine() . " in " . $this->getFile() . "; <b>" . $this->getMessage() . "</b>";
    return $errorMsg;
  }
}
class InvalidArgsException extends Exception {
  public function message() {
    $errorMsg = "Invalid argument suplied on " . $this->getLine() . " in " . $this->getFile() . "; <b>" . $this->getMessage() . "</b>";
    return $errorMsg;
  }
}
?>
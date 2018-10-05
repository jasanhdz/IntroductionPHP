<?php

require_once 'BaseElement.php';

class Job extends BaseElement {
  public function __construct($title, $description, $months) {
    $this->setTitle($title);
    $this->description = $description;
    $this->months = $months;
  }
}
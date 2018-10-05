<?php

class BaseElement {
  protected $title;
  public $description;
  public $months;
  public $visible = true;

  public function getTitle() {
    return $this->title;
  }
  public function setTitle($title) {
    if($title == '') {
      $this->title = 'N/A';
    } else {
      $this->title = $title;
    }
  }
}
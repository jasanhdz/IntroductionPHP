<?php

require_once 'BaseElement.php';

class Project extends BaseElement {
  # También podemos crear constructores para inicializar valores desde antes.
  public function __construct($title, $description) {
    $this->setTitle($title);
    $this->description = $description;
  }
}
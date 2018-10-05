<?php
namespace App\Models;
require_once 'BaseElement.php';

class Project extends BaseElement {
  # También podemos crear constructores para inicializar valores desde antes.
  public function __construct($title, $description) {
    $this->setTitle($title);
    $this->description = $description;
  }

  function getDurationAsString() {
    $years = floor($this->months / 12);
    $meses =  $this->months % 12;
  
    if($years > 0) {
      if ($years == 1) {
        return "<strong>Total de Project:</strong> $years Year, $meses Months";
      } else {
        return "<strong>Total de Project:</strong> $years Years, $meses Months";
      }
    } else {
      return "<strong>Total de Project:</strong> $meses Months";
    }
  }

}
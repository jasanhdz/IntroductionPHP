<?php
namespace App\Models;

require_once 'Printable.php';

class BaseElement  implements Printable {
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

  function getDurationAsString() {
    $years = floor($this->months / 12);
    $meses =  $this->months % 12;
  
    if($years > 0) {
      if ($years == 1) {
        return "<strong>Total de Job:</strong> $years Year, $meses Months";
      } else {
        return "<strong>Total de Job:</strong> $years Years, $meses Months";
      }
    } else {
      return "<strong>Total de Job:</strong> $meses Months";
    }
  }

  public function getDescription() {
    return '<strong>Usando Polimorfismo:</strong> ' . $this->description;
  }
}
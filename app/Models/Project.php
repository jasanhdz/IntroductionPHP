<?php
namespace App\Models;
require_once 'BaseElement.php';
use Illuminate\Database\Eloquent\Model;

class Project extends Model {
  protected $table = 'projects';
  protected $months = 15;
  public function getDurationAsString() {
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
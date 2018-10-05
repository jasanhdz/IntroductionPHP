<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
  protected $table = 'jobs';
  public function getDescription() {
    return '<strong style="color:blue;">Implementando Interface:</strong> ' . $this->description;
  }
}
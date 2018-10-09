<?php

namespace App\Controllers;

class AdminController extends BaseController {
  public function getIndex() {
    return $this->renderHTML('admin.twig');
  }
}
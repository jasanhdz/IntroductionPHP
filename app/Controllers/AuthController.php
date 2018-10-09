<?php

namespace App\Controllers;
use App\Models\User;
use Zend\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController {
  public function getLogin() {
    return $this->renderHTML('login.twig');
  }
  public function postLogin($request) {
    $responseMessage = null;
    $postData = $request->getParsedBody();
    // Validation here
    $user = User::where('correo', $postData['email'])->first();
    if($user) {
      if(password_verify($postData['password'], $user->password)) {
        $_SESSION['userId'] = $user->id;
        return new RedirectResponse('/introductionPHP/admin');
      } else {
        $responseMessage = 'Bad Credentials';
      }
    } else {
      $responseMessage = 'Bad Credentials';
    }
    return $this->renderHTML('login.twig', [
      'responseMessage' => $responseMessage
    ]);
  }
  public function getLogout() {
    unset($_SESSION['userId']);
    return new RedirectResponse('/introductionPHP/login');
  }
}
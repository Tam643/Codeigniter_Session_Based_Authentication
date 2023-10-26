<?php
namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class AuthController extends BaseController
{

    public function signin(): RedirectResponse
    {
        $userModel = new \App\Models\UserModel();
        $RequestBody = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        if (!$this->validator->run($RequestBody, 'signin')) {
            session()->setFlashdata("error", $this->validator->getErrors());
        }

        $user = $userModel->where("email", $RequestBody['email'])->first();
        $errorMessage = ["Please try agian, The email address and password is incorrect."];
        if(!$user){
            session()->setFlashdata("error", $errorMessage);
            return redirect()->redirect("/");
        }else{
            ['password'=>$password, 'salt'=>$salt ] = $user;
            if(!password_verify($RequestBody['password'].$salt, $password)){
                session()->setFlashdata("error",  $errorMessage);
                return redirect()->redirect("/");
            }
            session()->setFlashdata("message", "Login is Successfuly");
            return redirect()->redirect("/home");
        }
    }

    public function signup(): RedirectResponse
    {
        $userModel = new \App\Models\UserModel();
        $RequestBody = [
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'password' => $this->request->getVar('password'),
            'confirmpassword' => $this->request->getVar('confirmpassword'),
        ];

        if (!$this->validator->run($RequestBody, 'signup')) {
            session()->setFlashdata("error", $this->validator->getErrors());
            return redirect()->redirect("/signup");
        } else {
            $salt = bin2hex(random_bytes(16));
            unset($RequestBody['confirmpassword']);
            $RequestBody['salt'] = $salt;
            $RequestBody['password'] = password_hash($RequestBody['password'] . $salt, PASSWORD_DEFAULT);
            if ($userModel->insert($RequestBody, false) === false) {
                session()->setFlashdata("error", $userModel->errors());
                return redirect()->redirect("/signup");
            }
            return redirect()->redirect("/");
        }
    }

}

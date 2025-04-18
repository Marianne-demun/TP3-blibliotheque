<?php

namespace App\Controllers;
class Connection extends BaseController
{
    public function index(): string
    {
        return view("login_form");
    }
    public function attemptLogin() 
    {
        $UserModel = new \app\Models\UserModel();

        $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN && $values['password'] == APP_ADMIN_PASSWORD) {
            return $this->LogginUser();
        }

       $rechercheAbonne = $abonneModel->getAbonneByMatricule($values['login']);

       if(isset($rechercheAbonne) && $rechercheAbonne['nom_abonne'] === $values['password']) {
        return redirect()->to("home");
       } else {
        return redirect()->to('login');
       }
    }
    private function LogginUser(?object $user=null)
	{
            $session = session();
            $session->set([
                'username' => isset($user) ? ($user['nom_abonne'] . strtoupper($user['nom_abonne'])) : 'admin',
                'loggedIn' => true
            ]);
            return redirect()->to("home");    
        }
        public function aboutus(): string
    {
        return view("aboutus");
    }
}

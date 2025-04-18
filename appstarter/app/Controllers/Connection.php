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
        $UserModel = new \App\Models\UserModel();

        $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN && $values['password'] == APP_ADMIN_PASSWORD) 
        {
            //session()->set('is_admin', true); 
            
            //return redirect()->to('/admin');
            return $this->LogginUser();
        }

       $userFetched = $UserModel->where('matricule_abonne',$this->request->getPost('login'))->first();

       if($this->request->getPost('password') == $userFetched['nom_abonne']) {
        return $this->LogginUser($userFetched);
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

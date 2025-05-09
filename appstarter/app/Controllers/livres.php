<?php

namespace App\Controllers;
use App\Models\LivreModel;

class Livre extends BaseController
{
    public function ajouter()
    {
        helper(['form']);

        return view('ajouter_livre');
    }

    public function enregistrer()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'code_catalogue' => 'required',
            'titre_livre' => 'required',
            'theme_livre' => 'required',
            'id_auteur' => 'required',
            'nom_auteur' => 'required',
            'cote_exemplaire' => 'required',
            'nom_editeur' => 'required',
            'code_usure' => 'required',
            'date_acquisition' => 'required',
            'emplacement_rayon' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('ajouter_livre', ['validation' => $validation]);
        }

        $model = new LivreModel();
        $model->save([
            'code_catalogue' => $this->request->getPost('code_catalogue'),
            'titre_livre' => $this->request->getPost('titre_livre'),
            'theme_livre' => $this->request->getPost('theme_livre'),
            'id_auteur' => $this->request->getPost('id_auteur'),
            'nom_auteur' => $this->request->getPost('nom_auteur'),
            'cote_exemplaire' => $this->request->getPost('exemplaire'),
            'nom_editeur' => $this->request->getPost('nom_editeur'),
            'code_usure' => $this->request->getPost('code_usure'),
            'date_acquisition' => $this->request->getPost('date_acquisition'),
            'emplacement_rayon' => $this->request->getPost('emplacement_rayon'),
        ]);

        return redirect()->to('/livre/ajouter')->with('success', 'Livre ajouté avec succès');
    }
}
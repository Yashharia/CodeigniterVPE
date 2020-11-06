<?php

namespace App\Controllers;

use App\Models\ModUsers;
use CodeIgniter\Controller;

class AuthenticationController extends Controller
{
    public function login()
    {
        return $this->response->setStatusCode(200)
            ->setContentType('text/pain')
            ->setBody('demo 1');
    }

    public function find()
    {
        return $this->response->setStatusCode(200)->setBody('text');
    }

    public function create()
    {
        $presentation = $this->request->getJSON();
        $presentationModel = new ModUsers();
        $presentationModel->insert($presentation);
        return $this->response->setStatusCode(200);
    }

    public function update()
    {
        $presentation = $this->request->getJSON();
        $presentationModel = new ModUsers();
        $presentationModel->update($presentation->p_id, $presentation);
        return $this->response->setStatusCode(200);
    }

    public function delete($id)
    {
        $presentationModel = new ModUsers();
        $presentationModel->delete($id);
        return $this->response->setStatusCode(200);
    }
}

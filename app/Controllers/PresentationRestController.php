<?php

namespace App\Controllers;

use App\Models\ModPresentation;
use CodeIgniter\Controller;

class PresentationRestController extends Controller
{
    public function findAll()
    {
        $presentationModel = new ModPresentation();
        return $this->response->setStatusCode(200)->setJSON($presentationModel->findAll());
    }

    public function find($id)
    {
        $presentationModel = new ModPresentation();
        return $this->response->setStatusCode(200)->setJSON($presentationModel->find($id));
    }

    public function create()
    {
        $presentation = $this->request->getJSON();
        $presentationModel = new ModPresentation();
        $presentationModel->insert($presentation);
        return $this->response->setStatusCode(200);
    }

    public function update()
    {
        $presentation = $this->request->getJSON();
        $presentationModel = new ModPresentation();
        $presentationModel->update($presentation->p_id, $presentation);
        return $this->response->setStatusCode(200);
    }

    public function delete($id)
    {
        $presentationModel = new ModPresentation();
        $presentationModel->delete($id);
        return $this->response->setStatusCode(200);
    }
}

<?php

namespace App\Controllers;

use App\Models\MejaModel;

class MejaController extends BaseController
{
    public function index()
    {
        $model = new MejaModel();
        $data['meja'] = $model->findAll();
        return view('meja/index', $data);
    }

    public function create()
    {
        return view('meja/create');
    }

    public function store()
    {
        $model = new MejaModel();
        $model->save([
            'nomor_meja' => $this->request->getPost('nomor_meja'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'status' => $this->request->getPost('status')
        ]);
        return redirect()->to('/meja');
    }

    public function edit($id)
    {
        $model = new MejaModel();
        $data['meja'] = $model->find($id);
        return view('meja/edit', $data);
    }

    public function update($id)
    {
        $model = new MejaModel();
        $model->update($id, [
            'nomor_meja' => $this->request->getPost('nomor_meja'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'status' => $this->request->getPost('status')
        ]);
        return redirect()->to('/meja');
    }

    public function delete($id)
    {
        $model = new MejaModel();
        $model->delete($id);
        return redirect()->to('/meja');
    }
}

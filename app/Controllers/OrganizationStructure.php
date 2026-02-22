<?php

namespace App\Controllers;

use App\Models\ProfileOrganizationStructureModel;

class OrganizationStructure extends BaseController
{
    public function index()
    {
        $model = new ProfileOrganizationStructureModel();

        $data['org_structures'] = $model
            ->orderBy('organization_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/profileOrganizationStructure', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ProfileOrganizationStructureModel();

        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/organization', $newName);

            $model->insert([
                'image' => $newName
            ]);
        }

        return redirect()->to(base_url('organization-structure'));
    }

    public function delete($id)
    {
        $model = new ProfileOrganizationStructureModel();

        $data = $model->find($id);
        if ($data) {
            $path = 'uploads/organization/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
            $model->delete($id);
        }

        return redirect()->to(base_url('organization-structure'));
    }

    public function edit($id)
{
    $model = new ProfileOrganizationStructureModel();
    $data  = $model->find($id);

    if (!$data) {
        return redirect()->to(base_url('organization-structure'));
    }

    $file = $this->request->getFile('image');
    $imageName = $data['image'];

    if ($file && $file->isValid() && !$file->hasMoved()) {
        // hapus file lama
        if ($imageName && file_exists('uploads/organization/' . $imageName)) {
            unlink('uploads/organization/' . $imageName);
        }
        $imageName = $file->getRandomName();
        $file->move('uploads/organization', $imageName);
    }

    $model->update($id, [
        'image' => $imageName
    ]);

    return redirect()->to(base_url('organization-structure'));
}
}

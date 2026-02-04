<?php

namespace App\Controllers;

use App\Models\ProfileOrganizationStructureModel;

class StrukturOrganisasi extends BaseController
{
    public function index()
    {
        $model = new ProfileOrganizationStructureModel();

        // biasanya cuma 1 gambar, ambil yang terbaru
        $data['struktur'] = $model
            ->orderBy('organization_id', 'DESC')
            ->first();

        return view('Layout/HomeHeader')
            . view('PageOut/strukturOrganisasi', $data)
            . view('Layout/HomeFooter');
    }
}

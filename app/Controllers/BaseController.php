<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\AgenPerubahanModel;
use App\Models\LayananPublicModel;
use App\Models\PpidModel;
use App\Models\LayananMadrasahModel;
use App\Models\EkstrakulikulerModel;
use App\Models\KeterampilanModel;
use App\Models\PtmtModel;


abstract class BaseController extends Controller
{
    protected $agen_perubahan;
    protected $layanan_madrasah;
    protected $ekstrakulikuler;
    protected $keterampilan;
    protected $ptmt;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $model = new AgenPerubahanModel();

        $this->agen_perubahan = $model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        // ✅ INI YANG BENAR
        service('renderer')->setVar('agen_perubahan', $this->agen_perubahan);

        $model = new LayananPublicModel();

        $this->layanan_public = $model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        // inject ke semua view
        service('renderer')->setVar('layanan_public', $this->layanan_public);

        $modelPpid = new PpidModel();

        $this->ppid = $modelPpid
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        service('renderer')->setVar('ppid', $this->ppid);

        $modelMadrasah = new LayananMadrasahModel();

        $this->layanan_madrasah = $modelMadrasah
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        service('renderer')->setVar('layanan_madrasah', $this->layanan_madrasah);

        $modelEkskul = new EkstrakulikulerModel();

        $this->ekstrakulikuler = $modelEkskul
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        service('renderer')->setVar('ekstrakulikuler', $this->ekstrakulikuler);


        $modelKeterampilan = new KeterampilanModel();

        $this->keterampilan = $modelKeterampilan
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        service('renderer')->setVar('keterampilan', $this->keterampilan);

        $modelPtmt = new PtmtModel();

        $this->ptmt = $modelPtmt
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        service('renderer')->setVar('ptmt', $this->ptmt);
    }
}
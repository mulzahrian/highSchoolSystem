<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\AgenPerubahanModel;

abstract class BaseController extends Controller
{
    protected $agen_perubahan;

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
    }
}
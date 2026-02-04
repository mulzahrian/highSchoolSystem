<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        helper('text');

        $model = new NewsModel();

        $data['types'] = ['highlight', 'normal'];

        $data['news'] = $model
            ->orderBy('news_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/news', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new NewsModel();
        $file  = $this->request->getFile('thumbnail');

        $thumbnail = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $thumbnail = $file->getRandomName();
            $file->move('uploads/news', $thumbnail);
        }

        $model->insert([
            'title'     => $this->request->getPost('title'),
            'type'      => $this->request->getPost('type'),
            'content'   => $this->request->getPost('content'),
            'thumbnail' => $thumbnail,
            'is_active' => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('news'));
    }

    public function delete($id)
    {
        $model = new NewsModel();
        $data  = $model->find($id);

        if ($data && $data['thumbnail']) {
            $path = 'uploads/news/' . $data['thumbnail'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);

        return redirect()->to(base_url('news'));
    }

    public function detail($id)
{
    $model = new NewsModel();
    $news = $model->find($id);

    if (!$news) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view('Layout/HomeHeader')
    . view('Page/news_detail', [
        'news' => $news
    ]);
}

}

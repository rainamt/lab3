<?php

namespace App\Controllers;

use App\Models\RequestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Request extends BaseController
{
    public function index()
    {
        $model = model(RequestModel::class);

        $data = [
            'request'  => $model->getRequest(),
            'title' => 'Request Form',
        ];

        return view('templates/header', $data)
            . view('visitors/index')
            . view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(RequestModel::class);

        $data['visitors'] = $model->getRequest($slug);

        if (empty($data['visitors'])) {
            throw new PageNotFoundException('Cannot find the Request entry: ' . $slug);
        }

        $data['title'] = $data['request']['title'];

        return view('templates/header', $data)
            . view('request/view')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Request Form'])
                . view('request/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Request Form'])
                . view('request/create')
                . view('templates/footer');
        }

        $model = model(RequestModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Request Form'])
            . view('request/success')
            . view('templates/footer');
    }
}
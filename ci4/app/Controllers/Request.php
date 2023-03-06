<?php

namespace App\Controllers;

use App\Models\RequestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Request extends BaseController
{
	@@ -10,24 +12,41 @@ public function index()
        $model = model(RequestModel::class);

        $data = [
            'request'  => $model->getrequest(),
            'title' => 'Visitor Entries',
        ];

        return view('templates/header', $data)
            . view('request/index')
            . view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(RequestModel::class);

        $data['request'] = $model->getRequest($slug);

        if (empty($data['request'])) {
            throw new PageNotFoundException('Cannot find the Request Form': ' . $slug);
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
            return view('templates/header', ['title' => 'Request Form''])
                . view('request/create')
                . view('templates/footer');
        }

	@@ -36,23 +55,24 @@ public function join()
        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'fname' => 'required|max_length[255]|min_length[3]',
            'message'  => 'required|max_length[1000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Request Form''])
                . view('request/create')
                . view('templates/footer');
        }

        $model = model(RequestModel::class);

        $model->save([
            'fname' => $post['fname'],
            'slug'  => url_title($post['fname'], '-', true),
            'message'  => $post['message'],
        ]);

        return view('templates/header', ['title' => 'Request Form'])
            . view('request/success')
            . view('templates/footer');
    }
}
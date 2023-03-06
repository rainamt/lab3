<?php

namespace App\Controllers;

use App\Models\RequestModel;

class Request extends BaseController
{
    public function index()
    {
        $model = model(RequestModel::class);

		$data = [
            'request'  => $model->getRequest(),
            'title' => 'Request',
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
            throw new PageNotFoundException('NO REQUEST ENTRY: ' . $slug);
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
            return view('templates/header', ['title' => 'REQUEST FORM'])
                . view('request/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['fname', 'email', 'payment', 'comment', 'style']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'fname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'payment' => 'required|max_length[255]|min_length[3]',			
            'comment'  => 'required|max_length[5000]|min_length[10]',
            'style' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'REQUEST FORM'])
                . view('request/create')
                . view('templates/footer');
        }

        $model = model(RequestModel::class);

        $model->save([
            'fname' => $post['fname'],
            'email'  => $post['email'],
            'payment'  => $post['payment'],
            'comment'  => $post['comment'],
            'style'  => $post['style'],
        ]);

        return view('templates/header', ['title' => 'REQUEST FORM'])
            . view('request/success')
            . view('templates/footer');
    }
}	
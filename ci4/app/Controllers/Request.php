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
	
	public function join()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Join the alliance'])
                . view('request/join')   
                . view('templates/footer');
        }

        $post = $this->request->getPost(['firstname', 'lastname', 'email', 'payment', 'comment', 'style']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'firstname' => 'required|max_length[255]|min_length[3]',
            'lastname' => 'required|max_length[255]|min_length[3]',
            'payment' => 'required|max_length[255]|min_length[3]',
            'comment' => 'required|max_length[255]|min_length[3]',			
            'style' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Request Form'])
                . view('request/join')
                . view('templates/footer');
        }

        $model = model(RequestModel::class);

        $model->save([
            'firstname' => $post['firstname'],
            'lastname' => $post['lastname'],
            'email'  => $post['email'],
            'payment'  => $post['payment'],
            'style'  => $post['style'],
        ]);

        return view('templates/header', ['title' => 'Request Form'])
            . view('request/success')
            . view('templates/footer');
    }
}	
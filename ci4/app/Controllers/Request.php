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
            'title' => 'Alliances',
        ];

        return view('templates/header', $data)
            . view('request/index')
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

        $post = $this->request->getPost(['fname', 'email', 'payment', 'comment', 'style']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'fname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'payment' => 'required|max_length[255]|min_length[3]',	
            'comment' => 'required|max_length[255]|min_length[3]',		
            'style' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Request Form'])
                . view('request/create')
                . view('templates/footer');
        }

        $model = model(RequestModel::class);

        $model->save([
            'fname' => $post['fname'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            'style'  => $post['style'],
        ]);

        return view('templates/header', ['title' => 'Request Form'])
            . view('request/success')
            . view('templates/footer');
    }
}	
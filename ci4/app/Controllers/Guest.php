<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

		$data = [
            'guest'  => $model->getGuest(),
            'title' => 'Requests',
        ];

        return view('templates/header', $data)
             . view('guest/index')
             . view('templates/footer');
    }
	
	public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'REQUEST FORM'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email', 'payment', 'comment', 'style']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'firstname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'payment' => 'required|max_length[255]|min_length[3]',			
            'comment'  => 'required|max_length[5000]|min_length[10]',
            'style' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'REQUEST FORM'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'firstname' => $post['name'],
            'email'  => $post['email'],
            'payment'  => $post['payment'],
            'comment'  => $post['comment'],
            'style'  => $post['style'],
        ]);

        return view('templates/header', ['title' => 'REQUEST FORM'])
            . view('guest/success')
            . view('templates/footer');
    }
}	
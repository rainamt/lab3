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
            'title' => 'Request Form',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }
	
	public function join()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Request Form'])
                . view('guest/join')   
                . view('templates/footer');
        }

        $post = $this->request->getPost(['firstname',  'email', 'payment', 'comment', 'style']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'firstname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'payment' => 'required|max_length[255]|min_length[3]',	
            'comment' => 'required|max_length[255]|min_length[3]',			
            'style' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Request Form'])
                . view('guest/join')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'firstname' => $post['firstname'],
            'email'  => $post['email'],
            'style'  => $post['style'],
            'comment'  => $post['comment'],
            'gender'  => $post['gender'],
        ]);

        return view('templates/header', ['title' => 'Request Form'])
            . view('guest/success')
            . view('templates/footer');
    }
}
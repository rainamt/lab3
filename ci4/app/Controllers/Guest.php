<?php
namespace App\Controllers;
use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guest Entries',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getGuest($slug);

        if (empty($data['guest'])) {
            throw new PageNotFoundException('Cannot find the Guest entry: ' . $slug);
        }

        $data['title'] = $data['guest']['title'];

        return view('templates/header', $data)
            . view('guest/view')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a guest entry'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['firstname', 'comment']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'firstname' => 'required|max_length[255]|min_length[3]',
            'comment'  => 'required|max_length[1000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a Guest entry'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'firstname' => $post['firstname'],
            'slug'  => url_title($post['firstname'], '-', true),
            'comment'  => $post['comment'],
        ]);

        return view('templates/header', ['title' => 'Create a Guest entry'])
            . view('guest/success')
            . view('templates/footer');
    }
}
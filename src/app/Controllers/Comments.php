<?php

namespace App\Controllers;

use App\Models\CommentModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Comments extends BaseController
{
    public function index(): string
    {
        $model = model(CommentModel::class);

        $data['comments'] = $model->getComments();
        $data['title'] = 'Comments Page';

        return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
    }

    public function show($id = null): string
    {
        $model = model(CommentModel::class);

        $data['comment'] = $model->getComments($id);

        if (empty($data['comment'])) {
            throw new PageNotFoundException('Cannot find the comment: ' . $id);
        }

        $data['title'] = $data['comment']['name'];

        return view('templates/header', $data)
            . view('comments/view')
            . view('templates/footer');
    }

    public function new(): string
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a comment'])
            . view('comments/create')
            . view('templates/footer');
    }

    public function create(): string
    {
        helper('form');

        $data = $this->request->getPost(['name', 'text', 'date']);

        if (!$this->validateData($data)) {
            return $this->new();
        }

        $comment = $this->validator->getValidated();

        $model = model(CommentModel::class);

        $model->save([
            'name' => $comment['name'],
            'text' => $comment['text'],
            'date' => $comment['date'],
        ]);

        return view('templates/header', ['title' => 'Create comment'])
            . view('comments/success')
            . view('templates/footer');
    }
}

<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\PostsModel;
use App\Models\RecipientsModel;

helper(['_format_date']);

class Detail extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $postModel = model(PostsModel::class);
        $recipientModel = model(RecipientsModel::class);

        $data = [
            'content' => $postModel->getPost('652485686a762b9939b8877b'),
            'related_posts' => $postModel->getPosts(3),
        ];

        foreach ($data['related_posts'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        $data['content']->authorDetails = $authorModel->getAuthor($data['content']->authorId);
        $data['content']->categoryDetails = $categoryModel->getCategory($data['content']->categoryId);
        $data['content']->recipientDetails = $recipientModel->getRecipient($data['content']->recipientId);

        $data['widget_related_posts'] = view('widgets/cards/related_posts', ['data' => $data['related_posts']]);

        return view('templates/header', $data)
            . view('pages/detail')
            . view('templates/footer');
    }
}

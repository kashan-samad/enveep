<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\PostsModel;
use App\Models\RecipientsModel;

helper(['_format_date']);

class Author extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $postModel = model(PostsModel::class);
        $recipientModel = model(RecipientsModel::class);

        $data = [
            'author' => $authorModel->getAuthor('6272d51763e31bec0e83dc79'),
            'recent_list' => $postModel->getPosts(5),
            'random_small' => $postModel->getPosts(4),
            'random_list' => $postModel->getPosts(3),
            'highlight_posts' => $postModel->getPosts(4),
        ];

        foreach ($data['recent_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['random_small'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['random_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['highlight_posts'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        $data['widget_recent_list'] = view('widgets/cards/list_view', ['data' => $data['recent_list']]);
        $data['widget_random_small'] = view('widgets/cards/small_view', ['data' => $data['random_small']]);
        $data['widget_random_list'] = view('widgets/cards/list_view', ['data' => $data['random_list']]);
        $data['widget_highlight_posts'] = view('widgets/sidebar/popular_list', ['data' => $data['highlight_posts']]);
        $data['widget_pagination'] = view('widgets/pagination', ['data' => $data['random_list']]);

        return view('templates/header', $data)
            . view('pages/author')
            . view('widgets/ad_2')
            . view('templates/footer');
    }
}

<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\PostsModel;
use App\Models\RecipientsModel;

helper(['_format_date']);

class Recipient extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $postModel = model(PostsModel::class);
        $recipientModel = model(RecipientsModel::class);

        $data = [
            'recipient' => $recipientModel->getRecipient('6272d65ee259f347af9d9e7a'),
            'recent_list' => $postModel->getPosts(9),
            'editor_pick_popular' => $postModel->getPosts(1), //, ['editorRating' => [ '$gte' => 5 ]], ['likeCount' => 1]),
        ];

        foreach ($data['recent_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['editor_pick_popular'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        $data['widget_editor_pick_popular'] = view('widgets/editors_pick/popular_rtl', ['data' => $data['editor_pick_popular']]);
        $data['widget_recent_list'] = view('widgets/cards/recipient_medium_view', ['data' => $data['recent_list']]);
        $data['widget_pagination'] = view('widgets/pagination', ['data' => $data['recent_list']]);

        return view('templates/header', $data)
            . view('pages/recipient')
            . view('widgets/ad_2')
            . view('templates/footer');
    }
}

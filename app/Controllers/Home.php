<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\PostsModel;
use App\Models\RecipientsModel;

helper(['_format_date']);

class Home extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $postModel = model(PostsModel::class);
        $recipientModel = model(RecipientsModel::class);

        $data = [
          'editor_pick_primary' => $postModel->getPosts(1), //, ['editorRating' => 1], ['likeCount' => -1]),
          'editor_pick_secondary' => $postModel->getPosts(3), //, ['editorRating' => [ '$gt' => 1 ] ]),
          'editor_pick_popular' => $postModel->getPosts(1), //, ['editorRating' => [ '$gte' => 5 ]], ['likeCount' => 1]),
          'random_medium' => $postModel->getPosts(4), //, ['dislikeCount' => [ '$gte' => 50 ] ]),
          'recent_list' => $postModel->getPosts(5),
          'random_small' => $postModel->getPosts(4),
          'random_list' => $postModel->getPosts(3),
          'trending_list' => $postModel->getPosts(4), //, ['likeCount' => [ '$gte' => 400 ] ]),
          'popular_list' => $postModel->getPosts(4), //, ['likeCount' => [ '$gte' => 400 ] ]),
        ];

        foreach ($data['editor_pick_primary'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['editor_pick_secondary'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['editor_pick_popular'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['random_medium'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

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

        foreach ($data['trending_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        foreach ($data['popular_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
            $letter->recipientDetails = $recipientModel->getRecipient($letter->recipientId);
        }

        $data['widget_banner_section'] = view('widgets/banner_section');
        $data['widget_editor_pick_primary'] = view('widgets/editors_pick/primary', ['data' => $data['editor_pick_primary']]);
        $data['widget_editor_pick_secondary'] = view('widgets/editors_pick/secondary', ['data' => $data['editor_pick_secondary']]);
        $data['widget_editor_pick_popular'] = view('widgets/editors_pick/popular', ['data' => $data['editor_pick_popular']]);
        $data['widget_random_medium'] = view('widgets/cards/medium_view', ['data' => $data['random_medium']]);
        $data['widget_recent_list'] = view('widgets/cards/list_view', ['data' => $data['recent_list']]);
        $data['widget_random_small'] = view('widgets/cards/small_view', ['data' => $data['random_small']]);
        $data['widget_random_list'] = view('widgets/cards/list_view', ['data' => $data['random_list']]);
        $data['widget_trending_list'] = view('widgets/sidebar/popular_list', ['data' => $data['trending_list']]);
        $data['widget_popular_list'] = view('widgets/sidebar/popular_list', ['data' => $data['popular_list']]);
        $data['widget_pagination'] = view('widgets/pagination', ['data' => $data['random_list']]);

        return view('templates/header', $data)
            . view('pages/home')
            . view('widgets/ad_2')
            . view('templates/footer');
    }
}

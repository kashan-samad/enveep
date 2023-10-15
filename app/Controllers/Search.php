<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\PostsModel;

helper(['_format_date']);

class Search extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $postModel = model(PostsModel::class);

        $data = [
            'category' => 'Culture',
            'search_list' => $postModel->getPosts(8),
            'popular_list' => $postModel->getPosts(4),
        ];

        foreach ($data['search_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
        }

        foreach ($data['popular_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->authorId);
            $letter->categoryDetails = $categoryModel->getCategory($letter->categoryId);
        }

        $data['widget_search_list'] = view('widgets/cards/list_view', ['data' => $data['search_list']]);
        $data['widget_popular_list'] = view('widgets/sidebar/popular_list', ['data' => $data['popular_list']]);
        $data['widget_pagination'] = view('widgets/pagination', ['data' => $data['search_list']]);

        return view('templates/header', $data)
            . view('pages/search')
            . view('widgets/ad_2')
            . view('templates/footer');
    }
}

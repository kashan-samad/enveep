<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\LettersModel;

helper(['_format_date']);

class Search extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $letterModel = model(LettersModel::class);

        $data = [
            'category' => 'Culture',
            'search_list' => $letterModel->getLetters(8),
            'popular_list' => $letterModel->getLetters(4),
        ];

        foreach ($data['search_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        foreach ($data['popular_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        $data['widget_search_list'] = view('widgets/cards/list_view', ['data' => $data['search_list']]);
        $data['widget_popular_list'] = view('widgets/sidebar/popular_list', ['data' => $data['popular_list']]);

        return view('templates/header', $data)
            . view('pages/search')
            . view('widgets/ad_2')
            . view('templates/footer');
    }
}

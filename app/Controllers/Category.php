<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\LettersModel;

helper(['_format_date']);

class Category extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $letterModel = model(LettersModel::class);

        $data = [
            'category' => 'Culture',
            'category_single' => $letterModel->getLetters(1),
            'recent_list' => $letterModel->getLetters(5),
            'random_small' => $letterModel->getLetters(4),
            'random_list' => $letterModel->getLetters(3),
            'popular_list' => $letterModel->getLetters(4),
        ];

        foreach ($data['category_single'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        foreach ($data['recent_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        foreach ($data['random_small'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        foreach ($data['random_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        foreach ($data['popular_list'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        $data['widget_category_single'] = view('widgets/cards/category_single', ['data' => $data['category_single']]);
        $data['widget_recent_list'] = view('widgets/cards/list_view', ['data' => $data['recent_list']]);
        $data['widget_random_small'] = view('widgets/cards/small_view', ['data' => $data['random_small']]);
        $data['widget_random_list'] = view('widgets/cards/list_view', ['data' => $data['random_list']]);
        $data['widget_popular_list'] = view('widgets/sidebar/popular_list', ['data' => $data['popular_list']]);

        return view('templates/header', $data)
            . view('pages/category')
            . view('widgets/ad_2')
            . view('templates/footer');
    }
}

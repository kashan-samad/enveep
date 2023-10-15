<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\LettersModel;

helper(['_format_date']);

class Error extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $letterModel = model(LettersModel::class);

        $data = [
            'categories_list' => $categoryModel->getCategories(),
            'trending_letters' => $letterModel->getLetters(3),
            'popular_categories' => $categoryModel->getCategories(),
        ];

        foreach ($data['trending_letters'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        // $data['widget_home_page_banner_section'] = view('widgets/home_page/banner_section');
        // $data['widget_home_page_trending_letters'] = view('widgets/home_page/trending_letters', $data);
        // $data['widget_right_panel_popular_categories'] = view('widgets/right_panel/popular_categories', $data);

        return view('templates/header', $data)
            . view('pages/error')
            . view('templates/footer');
    }
}

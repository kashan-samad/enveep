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
            'category_name' => 'Sports',
            'categories_list' => $categoryModel->getCategories(),
            'category_letters' => $letterModel->getLetters(3),
        ];

        foreach ($data['category_letters'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        $data['widget_category_page_category_letters'] = view('widgets/category_page/category_letters', $data);

        return view('templates/header', $data)
            . view('pages/category')
            . view('templates/footer');
    }
}

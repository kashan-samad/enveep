<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\LettersModel;

class SavedLetters extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $letterModel = model(LettersModel::class);

        $data = [
            'categories_list' => $categoryModel->getCategories(),
            'saved_letters' => $letterModel->getLetters(3),
        ];

        foreach ($data['saved_letters'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        return view('templates/header', $data)
            . view('pages/saved_letters')
            . view('templates/footer');
    }
}

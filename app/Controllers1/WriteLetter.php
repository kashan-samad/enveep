<?php

namespace App\Controllers;

use App\Models\CategoriesModel;

class WriteLetter extends BaseController
{
    public function index(): string
    {
        $categoryModel = model(CategoriesModel::class);

        $data = [
            'categories_list' => $categoryModel->getCategories(),
        ];

        return view('templates/header', $data)
            . view('pages/write_letter')
            . view('templates/footer');
    }
}

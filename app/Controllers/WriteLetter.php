<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\PostsModel;

helper(['_format_date']);

class WriteLetter extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $postModel = model(PostsModel::class);

        $data = [

        ];

        return view('templates/header', $data)
            . view('pages/write_letter')
            . view('widgets/ad_2')
            . view('templates/footer');
    }
}

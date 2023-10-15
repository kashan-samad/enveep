<?php

namespace App\Controllers;

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\LettersModel;

helper(['_format_date']);

class Detail extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $letterModel = model(LettersModel::class);

        $data = [
            'content' => $letterModel->getLetter('6272d74ed00fd2c54a0ffde7'),
            'related_posts' => $letterModel->getLetters(3),
        ];

        foreach ($data['related_posts'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        $data['content']->authorDetails = $authorModel->getAuthor($data['content']->author);
        $data['content']->categoryDetails = $categoryModel->getCategory($data['content']->category);

        $data['widget_related_posts'] = view('widgets/cards/related_posts', ['data' => $data['related_posts']]);

        return view('templates/header', $data)
            . view('pages/detail')
            . view('templates/footer');
    }
}

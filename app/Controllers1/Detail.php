<?php

namespace App\Controllers;

helper(['_format_date']);

use App\Models\AuthorsModel;
use App\Models\CategoriesModel;
use App\Models\LettersModel;

class Detail extends BaseController
{
    public function index(): string
    {
        $authorModel = model(AuthorsModel::class);
        $categoryModel = model(CategoriesModel::class);
        $letterModel = model(LettersModel::class);

        $data = [
            'categories_list' => $categoryModel->getCategories(),
            'popular_letters' => $letterModel->getLetters(3),
            'related_letters' => $letterModel->getLetters(3),
            'popular_categories' => $categoryModel->getCategories(),
            'data' => $letterModel->getLetter('6272d74ed00fd2c54a0ffde7'),
        ];

        $data['data']->authorDetails = $authorModel->getAuthor($data['data']->author);
        $data['data']->categoryDetails = $categoryModel->getCategory($data['data']->category);

        foreach ($data['popular_letters'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        foreach ($data['related_letters'] as $letter) {
            $letter->authorDetails = $authorModel->getAuthor($letter->author);
            $letter->categoryDetails = $categoryModel->getCategory($letter->category);
        }

        $data['widget_detail_page_post_comment'] = view('widgets/detail_page/post_comment');
        $data['widget_detail_page_letter_comments'] = view('widgets/detail_page/letter_comments', $data);
        $data['widget_right_panel_popular_letters'] = view('widgets/right_panel/popular_letters', $data);
        $data['widget_right_panel_related_letters'] = view('widgets/right_panel/related_letters', $data);
        $data['widget_right_panel_popular_categories'] = view('widgets/right_panel/popular_categories', $data);

        return view('templates/header', $data)
            . view('pages/detail')
            . view('templates/footer');
    }
}

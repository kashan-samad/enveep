<?php

function trending_letters()
{
    $data = [
        [
            'author_name' => 'John Doe',
            'title' => 'An Open Letter to Nasa',
            'image_url' => 'images/universe.jpg',
            'url' => 'detail',
            'date_posted' => '21 Oct 2022',
            'content' => 'When I was a teenager I read a lot of sci-fi. I enjoyed the stories about colonizing the Moon, or Mars, or even Venus (back when we thought it might be habitable). But',
            'comment_count' => 34,
            'category' => 'Technology',
        ],
        [
          'author_name' => 'John Doe',
          'title' => 'An Open Letter to Tesla Fans',
          'image_url' => 'images/trending_1.jpg',
          'url' => 'detail',
          'date_posted' => '21 Oct 2022',
          'content' => 'When I was a teenager I read a lot of sci-fi. I enjoyed the stories about colonizing the Moon, or Mars, or even Venus (back when we thought it might be habitable). But',
          'comment_count' => 64,
          'category' => 'Organization',
        ],
        [
          'author_name' => 'John Doe',
          'title' => 'An Open Letter to Messi',
          'image_url' => 'images/trending_2.jpg',
          'url' => 'detail',
          'date_posted' => '21 Oct 2022',
          'content' => 'When I was a teenager I read a lot of sci-fi. I enjoyed the stories about colonizing the Moon, or Mars, or even Venus (back when we thought it might be habitable). But',
          'comment_count' => 52,
          'category' => 'Sports',
        ],
    ];

    return $data;
}

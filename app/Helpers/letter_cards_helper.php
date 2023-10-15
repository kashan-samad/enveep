<?php

function letter_cards()
{
    $data = [
        [
            'author_name' => 'John Doe',
            'title' => 'An Open Letter to Tigerwood',
            'image_url' => 'images/sports_1.jpg',
            'url' => 'detail',
            'date_posted' => '21 Oct 2022',
            'content' => 'When I was a teenager I read a lot of sci-fi. I enjoyed the stories about colonizing the Moon, or Mars, or even Venus (back when we thought it might be habitable). But',
            'comment_count' => 34,
            'category' => 'Technology',
            'last_updated' => '3 mins',
        ],
        [
          'author_name' => 'John Doe',
          'title' => 'An Open Letter to organizers of Tour De France',
          'image_url' => 'images/sports_2.jpg',
          'url' => 'detail',
          'date_posted' => '21 Oct 2022',
          'content' => 'When I was a teenager I read a lot of sci-fi. I enjoyed the stories about colonizing the Moon, or Mars, or even Venus (back when we thought it might be habitable). But',
          'comment_count' => 64,
          'category' => 'Organization',
        ],
        [
          'author_name' => 'John Doe',
          'title' => 'An Open Letter to Swimm Champions',
          'image_url' => 'images/sports_3.jpg',
          'url' => 'detail',
          'date_posted' => '21 Oct 2022',
          'content' => 'When I was a teenager I read a lot of sci-fi. I enjoyed the stories about colonizing the Moon, or Mars, or even Venus (back when we thought it might be habitable). But',
          'comment_count' => 52,
          'category' => 'Sports',
        ],
    ];

    return $data;
}

<?php

function format_date($date = null)
{
    return date('d-M-Y', get_object_vars($date)['milliseconds']/1000);
}

function short_date($date = null)
{
    return date('M d, Y', get_object_vars($date)['milliseconds']/1000);
}

function format_count($count = 1)
{
    return str_pad($count, 2, '0', STR_PAD_LEFT);
}

function format_url($type = '', $url = null, $id = null) {
    $post_url = '';
    if ($id) {
        $post_url = '-' . $id;
    }
    return base_url($type . '/' . url_title($url, '-', true)) . $post_url;
}

function formulate_substr_words($text = NULL, $length = 30)
{
	if (strlen($text) > $length)
	{
		$text = substr($text, 0, $length);
		$text = strrev($text);
		$text = substr($text, strpos($text, ' '), strlen($text));
		$text = strrev($text) . '...';
	}

	return $text;
}

function format_read_time($time = null) {
    return $time ? $time . ' read' : '';
}

function format_post_link($title, $id = null) {
    return '<a class="letter-link" href="' . format_url('post', $title, $id) . '">' . $title . '</a>';
}

function format_author_link($name, $id = null) {
    return '<a class="author-link" href="' . format_url('author', $name, $id) . '">' . $name . '</a>';
}

function format_category_link($title) {
    return '<a class="category-link" href="' . format_url('category', $title) . '">' . $title . '</a>';
}

function format_post_image($title, $id = null, $imageUrl = null) {
    return '<a href="' . format_url('post', $title, $id) . '"><img src="' . base_url('images/' . $imageUrl) . '" alt="' . $title . '"></a>';
}

function format_read_icon() {
    return '<span class="svgIcon svgIcon--star">
        <svg class="svgIcon-use" width="15" height="15">
            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
        </svg>
    </span>';
}

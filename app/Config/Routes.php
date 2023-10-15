<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/post', 'Detail::index');
$routes->get('/post/:any', 'Detail::index');

$routes->get('/category', 'Category::index');
$routes->get('/category/:any', 'Category::index');

$routes->get('/author', 'Author::index');
$routes->get('/author/:any', 'Author::index');

$routes->get('/recipient', 'Recipient::index');
$routes->get('/recipient/:any', 'Recipient::index');

$routes->get('/search', 'Search::index');
$routes->get('/error', 'Error::index');

$routes->get('/write-letter', 'WriteLetter::index');
$routes->get('/saved-letters', 'SavedLetters::index');

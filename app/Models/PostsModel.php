<?php

namespace App\Models;

use App\Libraries\DatabaseConnector;

class PostsModel {
    private $collection;

    function __construct() {
        $connection = new DatabaseConnector();
        $database = $connection->getDatabase();
        $this->collection = $database->posts;
    }

    function getPosts($limit = 3, $query = [], $sort = null) {
        try {
            $options = ['limit' => $limit, 'sort' => $sort];
            $cursor = $this->collection->find($query, $options);
            $Posts = $cursor->toArray();

            return $Posts;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Posts: ' . $ex->getMessage(), 500);
        }
    }

    function getPost($id) {
        try {
            $Post = $this->collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            return $Post;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Post with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function insertPost($title, $author, $pages) {
        try {
            $insertOneResult = $this->collection->insertOne([
                'title' => $title,
                'author' => $author,
                'pages' => $pages,
                'pagesRead' => 0,
            ]);

            if($insertOneResult->getInsertedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while creating a Post: ' . $ex->getMessage(), 500);
        }
    }

    function updatePost($id, $title, $author, $pagesRead) {
        try {
            $result = $this->collection->updateOne(
                ['_id' => new \MongoDB\BSON\ObjectId($id)],
                ['$set' => [
                    'title' => $title,
                    'author' => $author,
                    'pagesRead' => $pagesRead,
                ]]
            );

            if($result->getModifiedCount()) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while updating a Post with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function deletePost($id) {
        try {
            $result = $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            if($result->getDeletedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while deleting a Post with ID: ' . $id . $ex->getMessage(), 500);
        }
    }
}
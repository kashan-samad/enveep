<?php

namespace App\Models;

use App\Libraries\DatabaseConnector;

class AuthorsModel {
    private $collection;

    function __construct() {
        $connection = new DatabaseConnector();
        $database = $connection->getDatabase();
        $this->collection = $database->authors;
    }

    function getAuthors($limit = 3) {
        try {
            $cursor = $this->collection->find([], ['limit' => $limit]);
            $Authors = $cursor->toArray();

            return $Authors;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Authors: ' . $ex->getMessage(), 500);
        }
    }

    function getAuthor($id) {
        try {
            $Author = $this->collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            return $Author;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Author with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function insertAuthor($title) {
        try {
            $insertOneResult = $this->collection->insertOne([
                'title' => $title,
            ]);

            if($insertOneResult->getInsertedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while creating a Author: ' . $ex->getMessage(), 500);
        }
    }

    function updateAuthor($id, $title) {
        try {
            $result = $this->collection->updateOne(
                ['_id' => new \MongoDB\BSON\ObjectId($id)],
                ['$set' => [
                    'title' => $title,
                ]]
            );

            if($result->getModifiedCount()) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while updating a Author with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function deleteAuthor($id) {
        try {
            $result = $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            if($result->getDeletedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while deleting a Author with ID: ' . $id . $ex->getMessage(), 500);
        }
    }
}
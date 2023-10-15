<?php

namespace App\Models;

use App\Libraries\DatabaseConnector;

class LettersModel {
    private $collection;

    function __construct() {
        $connection = new DatabaseConnector();
        $database = $connection->getDatabase();
        $this->collection = $database->letters;
    }

    function getLetters($limit = 3, $query = [], $sort = null) {
        try {
            $options = ['limit' => $limit, 'sort' => $sort];
            $cursor = $this->collection->find($query, $options);
            $Letters = $cursor->toArray();

            return $Letters;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Letters: ' . $ex->getMessage(), 500);
        }
    }

    function getLetter($id) {
        try {
            $Letter = $this->collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            return $Letter;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Letter with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function insertLetter($title, $author, $pages) {
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
            show_error('Error while creating a Letter: ' . $ex->getMessage(), 500);
        }
    }

    function updateLetter($id, $title, $author, $pagesRead) {
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
            show_error('Error while updating a Letter with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function deleteLetter($id) {
        try {
            $result = $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            if($result->getDeletedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while deleting a Letter with ID: ' . $id . $ex->getMessage(), 500);
        }
    }
}
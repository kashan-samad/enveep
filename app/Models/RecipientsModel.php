<?php

namespace App\Models;

use App\Libraries\DatabaseConnector;

class RecipientsModel {
    private $collection;

    function __construct() {
        $connection = new DatabaseConnector();
        $database = $connection->getDatabase();
        $this->collection = $database->recipients;
    }

    function getRecipients($limit = 3, $query = [], $sort = null) {
        try {
            $options = ['limit' => $limit, 'sort' => $sort];
            $cursor = $this->collection->find($query, $options);
            $Recipients = $cursor->toArray();

            return $Recipients;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Recipients: ' . $ex->getMessage(), 500);
        }
    }

    function getRecipient($id) {
        try {
            $Recipient = $this->collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            return $Recipient;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Recipient with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function insertRecipient($title, $author, $pages) {
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
            show_error('Error while creating a Recipient: ' . $ex->getMessage(), 500);
        }
    }

    function updateRecipient($id, $title, $author, $pagesRead) {
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
            show_error('Error while updating a Recipient with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function deleteRecipient($id) {
        try {
            $result = $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            if($result->getDeletedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while deleting a Recipient with ID: ' . $id . $ex->getMessage(), 500);
        }
    }
}
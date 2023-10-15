<?php

namespace App\Models;

use App\Libraries\DatabaseConnector;

class CategoriesModel {
    private $collection;

    function __construct() {
        $connection = new DatabaseConnector();
        $database = $connection->getDatabase();
        $this->collection = $database->categories;
    }

    function getCategories($limit = 3) {
        try {
            $cursor = $this->collection->find([], ['limit' => $limit]);
            $Categories = $cursor->toArray();

            return $Categories;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Categories: ' . $ex->getMessage(), 500);
        }
    }

    function getCategory($id) {
        try {
            $Category = $this->collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            return $Category;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while fetching Category with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function insertCategory($title) {
        try {
            $insertOneResult = $this->collection->insertOne([
                'title' => $title,
            ]);

            if($insertOneResult->getInsertedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while creating a Category: ' . $ex->getMessage(), 500);
        }
    }

    function updateCategory($id, $title) {
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
            show_error('Error while updating a Category with ID: ' . $id . $ex->getMessage(), 500);
        }
    }

    function deleteCategory($id) {
        try {
            $result = $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

            if($result->getDeletedCount() == 1) {
                return true;
            }

            return false;
        } catch(\MongoDB\Exception\RuntimeException $ex) {
            show_error('Error while deleting a Category with ID: ' . $id . $ex->getMessage(), 500);
        }
    }
}
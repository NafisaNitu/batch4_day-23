<?php


namespace App\classes;


class Category
{
    public function index()
    {
        return [
            0=> [
                'id' => 1,
                'name' => 'name'
            ],
            1=> [
                'id' => 2,
                'name' => 'File upload'
            ],
            2=> [
                'id' => 3,
                'name' => 'File write'
            ]

        ];
    }
}
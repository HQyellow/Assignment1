<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Forrest Gump',
            'sex' => 'man',
            'Country' => 'United States',
            'Hobby' => 'running、pingpong',
            'Favorite food' => 'chocolate',
            'Rank' => 'Soldier',
            'Life motto' => 'Life is like a box of chocolates, the results are often unexpected',
            'Character photos' => '',
            'image' => '1.jpg',
        ],
         '2' => [
            'id' => 2,
            'name' => 'Jenny Cullen',
            'sex' => 'girl',
            'Country' => 'United States',
            'Hobby' => 'singing',
            'Favorite food' => 'cake',
            'Rank' => 'civilian',
            'Life motto' => 'Everyone is equal before human rights',
            'Character photos' => '',
            'image' => '2.jpg',
        ],
          '3' => [
            'id' => 3,
            'name' => 'Deng Taylor',
            'sex' => 'man',
            'Country' => 'United States',
            'Hobby' => 'smokes',
            'Favorite food' => 'hamburger',
            'Rank' => 'Captain',
            'Life motto' => 'The greatest glory of a soldier is to die on the battlefield',
            'Character photos' => '',
            'image' => '3.jpg',
        ],
          '4' => [
            'id' => 4,
            'name' => 'Mrs. Gamp',
            'sex' => 'girl',
            'Country' => 'United States',
            'Hobby' => 'Reading',
            'Favorite food' => 'Steak',
            'Rank' => 'civilian',
            'Life motto' => 'you can do it',
            'Character photos' => '',
            'image' => '5.jpg',
        ],
         '5' => [
            'id' => 5,
            'name' => 'Bubba',
            'sex' => 'man',
            'Country' => 'United States',
            'Hobby' => 'Shrimp',
            'Favorite food' => 'shrimp',
            'Rank' => 'Soldier',
            'Life motto' => 'Let’s buy a shrimp boat',
            'Character photos' => '',
            'image' => '4.jpg',
        ],
            '6' => [
            'id' => 6,
            'name' => 'Little Forrest',
            'sex' => 'man',
            'Country' => 'United States',
            'Hobby' => 'running、pingpong',
            'Favorite food' => 'chocolate',
            'Rank' => 'civilian',
            'Life motto' => 'Life is like a box of chocolates, the results are often unexpected',
            'Character photos' => '',
            'image' => '6.jpg',
        ],
     
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}

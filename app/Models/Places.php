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
            'name' => 'batman',
             'sex' => 'male',
             'adress' => 'DC universe',
           'height' => '180cm',
            'weight' => '80kg',
             'weapon' => 'fist',
           'skill' => 'money',
            
          
            'image' => 'batman.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'flashman',
            'sex' => 'male',
             'adress' => 'DC universe',
           'height' => '180cm',
            'weight' => '75kg',
             'weapon' => 'fist',
           'skill' => 'fast',
            'image' => 'flashman.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'haiwang',
           'sex' => 'male',
             'adress' => 'DC universe',
           'height' => '180cm',
            'weight' => '90kg',
             'weapon' => 'fox',
           'skill' => 'sea',
            'image' => 'haiwang.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'lvdeng',
         'sex' => 'male',
             'adress' => 'DC universe',
           'height' => '188cm',
            'weight' => '78kg',
             'weapon' => 'light',
           'skill' => 'green',
            'image' => 'lvdeng.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'lvjian',
           'sex' => 'male',
             'adress' => 'DC universe',
           'height' => '178cm',
            'weight' => '80kg',
             'weapon' => 'arrow',
           'skill' => 'arrow',
          'image' => 'lvjian.jpg',
        ],
         '6' => [
            'id' => 6,
            'name' => 'nvxia',
           'sex' => 'female',
             'adress' => 'DC universe',
           'height' => '170cm',
            'weight' => '650kg',
             'weapon' => 'fist',
           'skill' => 'sheld',
          'image' => 'nvxia.jpg',
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

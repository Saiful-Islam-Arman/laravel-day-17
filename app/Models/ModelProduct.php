<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id' => '0111',
                'name' => 'Black Watch',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch.jpg'
            ],
            1 => [
                'id' => '0112',
                'name' => 'Smart Watch',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch1.jpg'
            ],
            2 => [
                'id' => '0113',
                'name' => 'Pink Smart',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch2.jpg'
            ],
            3 => [
                'id' => '0114',
                'name' => 'Swiston',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch11.jpg'
            ],
            4 => [
                'id' => '0115',
                'name' => 'Samsung',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch4.jpg'
            ],
            5 => [
                'id' => '0116',
                'name' => 'Swiston',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch5.jpg'
            ],
            6 => [
                'id' => '0117',
                'name' => 'Rolex',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch6.jpg'
            ],
            7 => [
                'id' => '0118',
                'name' => 'Ksio',
                'price' => '987',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, corrupti!',
                'image' => 'watch2.jpg'
            ]
        ];
    }
}

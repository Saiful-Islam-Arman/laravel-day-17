<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;

    public static function getBloginfo()
    {
        return [
            0 => [
                'id'             => '01',
                'name'           => 'This is awesome watch',
                'made by'        => 'Bangladesh',
                'description'    => 'This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by BangladeshThis is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh',
                'image'          => 'watch9.jpg',
                'price'          => '4878'
            ],
            1 => [
                'id'             => '011',
                'name'           => 'This is awesome watch',
                'made by'        => 'Bangladesh',
                'description'    => 'This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by BangladeshThis is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh',
                'image'          => 'watch1.jpg',
                'price'          => '4878'
            ],
            2 => [
                'id'             => '02',
                'name'           => 'This is awesome watch',
                'made by'        => 'Bangladesh',
                'description'    => 'This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by BangladeshThis is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh',
                'image'          => 'watch2.jpg',
                'price'          => '4878'
            ],
            3 => [
                'id'             => '03',
                'name'           => 'This is awesome watch',
                'made by'        => 'Bangladesh',
                'description'    => 'This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by BangladeshThis is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh',
                'image'          => 'watch3.jpg',
                'price'          => '4878'
            ],
            4 => [
                'id'             => '04',
                'name'           => 'This is awesome watch',
                'made by'        => 'Bangladesh',
                'description'    => 'This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by BangladeshThis is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh',
                'image'          => 'watch6.jpg',
                'price'          => '4878'
            ],
            5 => [
                'id'             => '05',
                'name'           => 'This is awesome watch',
                'made by'        => 'Bangladesh',
                'description'    => 'This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by BangladeshThis is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh
                                        This is awesome watch in made by Bangladesh This is awesome watch in made by Bangladesh',
                'image'          => 'watch11.jpg',
                'price'          => '4878'
            ],
        ];


    }

}

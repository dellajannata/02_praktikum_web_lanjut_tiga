<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbeledugames(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games</a>';
    }
    public function marbelandfriendskidsgames(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a>';
    }
    public function riristorybooks(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a>';
    }
    public function kolakkidssongs(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a>';
    }

}

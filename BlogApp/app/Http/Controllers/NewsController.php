<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function showNews(){
        $news = [
            ['text' => 'news1', 'ctg' => 'a', 'id' => '1'],
            ['text' => 'news2', 'ctg' => 'b', 'id' => '2'],
            ['text' => 'news3', 'ctg' => 'c', 'id' => '3'],
            ['text' => 'news4', 'ctg' => 'd', 'id' => '4'],
            ['text' => 'news5', 'ctg' => 'e', 'id' => '5'],
            ['text' => 'news6', 'ctg' => 'f', 'id' => '6'],
            ['text' => 'news7', 'ctg' => 'g', 'id' => '7'],
            ['text' => 'news8', 'ctg' => 'h', 'id' => '8'],
            ['text' => 'news9', 'ctg' => 'i', 'id' => '9'],
            ['text' => 'news10', 'ctg' => 'j', 'id' => '10'],
        ];

        return response()->json($news);
    }

    function showNewsByCtg($category){
        $news = [
            ['text' => 'news1', 'ctg' => 'a', 'id' => '1'],
            ['text' => 'news2', 'ctg' => 'b', 'id' => '2'],
            ['text' => 'news3', 'ctg' => 'c', 'id' => '3'],
            ['text' => 'news4', 'ctg' => 'd', 'id' => '4'],
            ['text' => 'news5', 'ctg' => 'e', 'id' => '5'],
            ['text' => 'news6', 'ctg' => 'b', 'id' => '6'],
            ['text' => 'news7', 'ctg' => 'a', 'id' => '7'],
            ['text' => 'news8', 'ctg' => 'h', 'id' => '8'],
            ['text' => 'news9', 'ctg' => 'i', 'id' => '9'],
            ['text' => 'news10','ctg' => 'j', 'id' => '10'],
        ];

        $newToshow = [];

        foreach($news as $new){
            if($new['ctg'] == $category){
                $newToshow[] = $new['text']; 
            }
        }

        return view('show', ['news' => $newToshow]);
    }

    function showNewsByCtgAndId($category, $id){
        $news = [
            ['text' => 'news1', 'ctg' => 'a', 'id' => '1'],
            ['text' => 'news2', 'ctg' => 'b', 'id' => '2'],
            ['text' => 'news3', 'ctg' => 'd', 'id' => '3'],
            ['text' => 'news4', 'ctg' => 'd', 'id' => '4'],
            ['text' => 'news5', 'ctg' => 'e', 'id' => '5'],
            ['text' => 'news6', 'ctg' => 'a', 'id' => '6'],
            ['text' => 'news7', 'ctg' => 'g', 'id' => '7'],
            ['text' => 'news8', 'ctg' => 'h', 'id' => '8'],
            ['text' => 'news9', 'ctg' => 'i', 'id' => '9'],
            ['text' => 'news10', 'ctg' => 'j', 'id' => '10'],
        ];

        $newToshow = [];

        foreach($news as $new){
            if($new['ctg'] == $category && $new['id'] == $id){
                $newToshow[] = $new['text'];
            }
        }

        return view('show', ['news' => $newToshow]);
    }   
}

<?php

namespace App\Http\Controllers;


class ShowBlog extends Controller
{
    function getBlog(){
        return '
            <h1>Blogs</h1>
            <ul>
                <li>1st blog</li>
                <li>2nd blog</li>
            </ul>
        ';
    }

    function showUser($name='Piyush'){
        $favMovie = ['Avengers','Kalki'];
        return view('home',['name'=>$name,'movies'=>$favMovie]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function scrollToAbout() {
        $date = date('Y-m-d');
        $news = News::where('date', '=', $date)->paginate(10);
        $page_data = array(
            'news' => $news
        );
        return View::make('news', $page_data);
    }
}

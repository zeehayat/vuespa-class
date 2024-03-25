<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    public function __invoke(){
        // Get Count by Articles by User...
        $group_by_data=Post::groupBy('user_id')->selectRaw('user_id, count(*) as article_count')->get();
        return $group_by_data;
    }
}

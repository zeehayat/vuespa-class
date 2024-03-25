<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Faker\Provider\zh_CN\Company;
use Illuminate\Http\Request;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    //
    public Faker $faker;
    public function __construct(Faker $faker)
    {
        $this->faker=$faker;
    }

    public function index(){
        return Post::all();
    }

    public function get($id){
        return Post::find($id);
    }
    public function create(){

//        for($i=0;$i<100;$i++){
//            Post::create([
//            'post_title'=>$this->faker->sentence(),
//                'slugs'=>'bs,mf',//$this->faker->words(),
//                'content'=>$this->faker->text(1000),
//                'user_id'=>$this->faker->numberBetween(2,5)
//            ]);
//        }
        return Post::all();
    }
    public function edit($id){
        $post=Post::find($id);
        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }

    }
    public function add(){
        if(!Gate::allows('add-post')){
            dd(Auth::user());
        }

        return "Free to Add";
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $jsonable=['slugs'];

    /**
     * @return HasOne
     */
    public function users():HasOne{
        return $this->hasOne(User::class);
    }
}

<?php

namespace Blog;

use Blog\Tag;
use Blog\User;
use Blog\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function archives()
    {
        return DB::table('posts')
            ->select(DB::raw("extract(Y FROM created_at) as year, extract(M FROM created_at) as month, count(*) as posts"))
            ->groupBy('created_at')
            ->orderBy('created_at')            
            // ->orderByRaw('min(created_at desc')
            ->get()
            ->toArray();
    
    }
    public function tags()
    {
        $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {

        // if($month = $filters['month']) {
        //     $query->whereMonth('created_at', $month);
        // }

        // if ($year = $filters['year']) {
        //     $query->whereYear('created_at', $year);
        // }
    }
}

<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $guarded = [];

   /**
     * タグでフィルタリング
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $word
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchTitle($query,$word)
    {
        if (!is_null($word)) {
            return $query->where('title', 'like', '%' . $word . '%');
        }
        return $query;
   }
}

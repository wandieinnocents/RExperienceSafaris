<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  /**
   * The rates that belong to the tour.
   */
  public function rates()
  {
      return $this->belongsToMany('App\Models\Rate');
  }

  /**
   * The category to which tours belong
   */
  public function category()
  {
      return $this->belongsTo('App\Category');
  }

  public function bookings()
  {
    return $this->hasMany('App\Models\Book');
  }

  /**
   * The tags that belong to the article.
   */
  public function tags()
  {
      return $this->belongsToMany('App\Tag');
  }

  public function getRouteKeyName()
  {
      return 'slug';
  }
}

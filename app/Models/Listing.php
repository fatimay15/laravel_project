<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $guarded = [];
     //_____________________________________________________________________________________________
     //to resource we create we cann add it to protected fillables if we create more form 
      //or theres another way that is in appservice
     // protected $fillable =['title','company','email','website','location','description','tags'];
    // ______________________________________________________________________________________________


    public function scopeFilter($query, array $filters) //scopefilter define function ha 
    {
    //   dd($filters['tag']);
      if($filters['tag1'] ?? false) //if filtered tag is not false then do it what is in here 
      //agr url ma  query parameter tag1 ma value ha 
      {
        $query->where('tag','like','%'. request('tag1').'%');
      }
      if($filters['searching'] ?? false) //if filtered tag is not false then do it what is in here
      {
        $query->where('title','like','%'. request('searching').'%')
        ->orwhere('tag','like','%'. request('searching').'%')
        ->orwhere('company','like','%'. request('searching').'%');
      }
    }
}

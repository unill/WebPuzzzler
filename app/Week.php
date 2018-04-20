<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable =[
        'week_name',
        'week_description',
        'question_id',
        'puzzle_id',
        'card_id',
        'is_complete'];

    //
}

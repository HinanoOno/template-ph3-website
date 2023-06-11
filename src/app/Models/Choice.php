<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choice extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $fillable=[
        'question_id',
        'name',
        'valid',
    ];
    public function question(){
        return $this->belongsTo(Question::class)->withTrashed();
        #論理削除したものも含める
    }
}

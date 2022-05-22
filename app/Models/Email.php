<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Email extends Model
{
    use HasFactory;
    protected $fillable = [
      'email'
    ];
    public static function getEmails(){
        $records = DB::table('emails')->select('id','email','created_at')->toArray();
        return $records;
    }
}

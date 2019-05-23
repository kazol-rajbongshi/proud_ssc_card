<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCardInformation extends Model
{
    use SoftDeletes;
    protected $table = 'user_information';
    protected $fillable = ['name','ssc_roll', 'ssc_registartion','ssc_board','address','photo','facebook_name','facebook_email','card_number','validity_period'];
    protected $dates = ['deleted_at'];
}

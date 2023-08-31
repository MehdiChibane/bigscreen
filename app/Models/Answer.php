<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $fillable = [
        'mail_address',
        'age',
        'sex',
        'nb_ppl',
        'job',
        'headset_type',
        'store_name',
        'future_headset_buy',
        'nb_ppl_using_headset',
        'headset_usage',
        'headset_image_rating',
        'headset_interface_rating',
        'headset_network_rating',
        'headset_graphics_rating',
        'headset_audio_rating',
        'notification_setting',
        'join_via_phone',
        'save_tv_shows',
        'exclusive_games',
        'new_functionnality',
        'customer_id',
    ];
}

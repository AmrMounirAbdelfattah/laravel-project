<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact_id', 'contact_name', 'contact_email','contact_image','contact_subject','contact_message',
    ];

}

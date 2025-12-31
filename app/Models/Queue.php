<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = [
        'queue_number',
        'status',
        'admin_id',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}

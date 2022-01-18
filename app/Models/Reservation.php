<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "reservations";

    protected $fillable = [
        'id_user', 'id_type_terrain', 'debut', 'fin', 'prix',
    ];

    public function user()
    {
        return $this->hasOne("App\Model\User", "id", "user_id")->withTrashed();
    }
}

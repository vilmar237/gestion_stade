<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "reservations";

    protected $fillable = [
        'id_user', 'id_type_terrain', 'day', 'debut', 'fin', 'prix', 'statut'
    ];

    public function user()
    {
        return $this->hasOne("App\Models\User", "id", "user_id");
    }

    function customer(){
        return $this->belongsTo(User::class);
    }
}

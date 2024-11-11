<?php

namespace App\Models;
use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    //part of the bootcamp,con esto solo permitimos que se modifique el campo del mensaje y ningun campo más
    //Nos protegemos de la vulnerabilidad por asignación masiva
    protected $fillable = [
        'message',
    ];
    //

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    //Bootcamp, crea relacion con usuarios
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

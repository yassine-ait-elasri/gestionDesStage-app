<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cd extends Model
{
    protected $table = "cds";
    use HasFactory;
    public $timestamps = false;
    protected $guarded=[];
     
        /**
         * Get the service that owns the cd
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function departement(): BelongsTo
        {
            return $this->belongsTo(service::class,'deparetement');
        }    
     
}


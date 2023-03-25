<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $user_id
 * @property $date_time
 * @property $created_at
 * @property $updated_at
 *
 * @property DetailsSale[] $detailsSales
 * @property Ticket[] $tickets
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'date_time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','date_time'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailsSales()
    {
        return $this->hasMany('App\Models\DetailsSale', 'sale_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'sale_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}

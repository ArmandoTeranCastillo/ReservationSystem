<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 *
 * @property $id
 * @property $concert_id
 * @property $sale_id
 * @property $place
 * @property $row
 * @property $seat
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Concert $concert
 * @property DetailsSale[] $detailsSales
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ticket extends Model
{
    
    static $rules = [
		'concert_id' => 'required',
		'sale_id' => 'required',
		'place' => 'required',
		'row' => 'required',
		'seat' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['concert_id','sale_id','place','row','seat','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function concert()
    {
        return $this->hasOne('App\Models\Concert', 'id', 'concert_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailsSales()
    {
        return $this->hasMany('App\Models\DetailsSale', 'ticket_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'sale_id');
    }
    

}

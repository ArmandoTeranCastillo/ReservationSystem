<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Concert
 *
 * @property $id
 * @property $title
 * @property $date_time
 * @property $description
 * @property $avalaible_seats
 * @property $general_price
 * @property $created_at
 * @property $updated_at
 *
 * @property Ticket[] $tickets
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Concert extends Model
{
    
    static $rules = [
		'title' => 'required',
		'date_time' => 'required',
		'description' => 'required',
		'avalaible_seats' => 'required',
		'general_price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','date_time','description','avalaible_seats','general_price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'concert_id', 'id');
    }
    

}

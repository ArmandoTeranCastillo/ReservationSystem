<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailsSale
 *
 * @property $id
 * @property $sale_id
 * @property $ticket_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Sale $sale
 * @property Ticket $ticket
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailsSale extends Model
{
    
    static $rules = [
		'sale_id' => 'required',
		'ticket_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sale_id','ticket_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'sale_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ticket()
    {
        return $this->hasOne('App\Models\Ticket', 'id', 'ticket_id');
    }
    

}

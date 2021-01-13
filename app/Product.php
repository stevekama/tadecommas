<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    // define table name associated to the model
    
    protected $table = 'products';

    // get the primay key
    protected $primaryKey = 'id';

    // set the timestamps to be true
    public $timestamps = true;

    // set fields that are edible
    protected $fillable = [
        'name',
        'description',
        'image',
        'size',
        'color',
        'type',
        'amount',
    ];

    // add currency sign on the amount 
    public function getAmountAttribute($value)
    {
        $curr = "{$this->currency}";

        switch ($curr) {
            case "":
                $newForm = 'Kshs' . ' ' . $value;
                break;
            default:
                $newForm = $curr . ' ' . $value;
        }

        return $newForm;
    }
}

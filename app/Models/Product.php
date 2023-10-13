<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */
    protected $table = 'products'; // Specify the table name if it's different from the model name
    protected $primaryKey = 'id'; // Specify the primary key field name (default is 'id')
    protected $fillable = ['name', 'description', 'price', 'image_url']; // Specify fields that can be mass-assigned

}

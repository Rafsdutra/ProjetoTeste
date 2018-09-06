<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Cota extends Model

{

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = ['credito', 'entrada', 'parcelas', 'detalhes'];



}
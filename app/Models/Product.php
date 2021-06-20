<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * ID do Usuário
     * @var integer
     */
    public $id;

    /**
     * Nomee do usuário
     * @var string
     */
    public $nameProduct;

    /**
     * E-mail do usuário
     * @var string
     */
    public $price;

    /**
     * Senha do usuário
     * @var string
     */
    public $color;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $fillable = ['categoria','nombre','descripcion','marca','cantidad','precio'];
    public $timestamps = false;

    /**
     * Lista de pedidos (ventas) del cliente
     */
    public function ventas() {
        return $this->hasMany('App\Models\Venta','venta_producto','idVenta','idProducto');
    }
}

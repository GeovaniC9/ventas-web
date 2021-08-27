<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticable;
use Illuminate\Notifications\Notifiable;


class Cliente extends Authenticable
{
    use Notifiable;

    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = ['nombre','email','telefono','pass','direccion','colonia','ciudad','municipio','estado'];
    protected $hidden = ['pass','api_token'];
    public $primaryKey = 'usuario';
    public $KeyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Lista de pedidos (ventas) del cliente
     */
    public function ventas() {
        return $this->hasMany('App\Models\Venta','cliente');
    }

    public function getAuthPassword(){
        return $this->attributes['pass'];
    }
}
  
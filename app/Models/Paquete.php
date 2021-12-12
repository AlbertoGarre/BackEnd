<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory; 
    protected $fillable = [

        'g_email',
        'g_remitente',
        'g_telefono',
        'g_nif',
        'g_bultos',
        'r_pais',
        'r_cp',
        'r_poblacion',
        'r_direccion',
        'r_atencion',
        'r_telefono',
        'r_contacto',
        'r_observaciones',
        'e_pais',
        'e_cp',
        'e_provincia',
        'e_poblacion',
        'e_direccion',
        'e_numero',
        'e_escalera',
        'e_planta',
        'e_puerta',
        'e_destinatario',
        'e_telefono',
        'e_atencion',
        'e_observaciones',
        'tarifa',
        'terminado',
        'tipo_servicio',

    ];

}

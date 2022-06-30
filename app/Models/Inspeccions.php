<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspeccions extends Model
{
    protected $table = 'inspeccions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nro',
        'fecha',
        'tipo',
        'acceso',
        'lat',
        'long',
        'nombreposeedor',
        'telefonoposeedor',
        'emailposeedor',
        'replegalposeedor',
        'nit',
        'registrocomercio',
        'rai',
        'psst',
        'licenciambiental',
        'medidorcre',
        'medidorsaguapac',
        'propietaria',
        'condicionposeedor',
        'nombredelpersonal',
        'telefonopersonal',
        'actividadindustrial',
        'tipoactividadterreno',
        'tamanoempresa',
        'cantidadempleados',
        'hombres',
        'mujeres',
        'productoselaborados',
        'infraestructura',
        'tipoinfraestructura',
        'etapainfraestructura',
        'cerramiento',
        'tipocerramiento',
        'invasionretiros',
        'tipodeinvasion',
        'retirofeverificado',
        'retirofoverificado',
        'retirolaizqverificado',
        'retiroladerverificado',
        'viasdeacceso',
        'agua',
        'luz',
        'alcantarillado',
        'gas',
        'pozo',
        'internet',
        'numautorizacionpozo',
        'recojobasura',
        'empresacontratobasura',
        'residuossolidos',
        'residuosliquidos',
        'residuosgaseosos',
        'nombreencargadodehse',
        'sustanciaspeligrosasverificadas',
        'comerciodeenvases ',
        'emisiondegases',
        'archivo',
        'obs',
    ];

    public $timestamps = true;
}

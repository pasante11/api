<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspeccions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nro',50);
            $table->time('fecha');
            $table->String('tipo',100);
            $table->String('acceso',100);
            $table->floatval('lat');
            $table->String('long');
            $table->String('nombreposeedor',150);
            $table->String('telefonoposeedor',60);
            $table->String('emailposeedor',60);
            $table->String('replegalposeedor',60);
            $table->String('nit',100);
            $table->String('registrocomercio',100);
            $table->String('rai',100);
            $table->String('psst',100);
            $table->String('licenciambiental',100);
            $table->String('medidorcre',60);
            $table->String('medidorsaguapac',60);
            $table->String('propietaria',2);
            $table->String('condicionposeedor',60);
            $table->String('nombredelpersonal',60);
            $table->String('telefonopersonal',60);
            $table->String('actividadindustrial',2);
            $table->String('tipoactividadterreno',150);
            $table->String('tamanoempresa',150);
            $table->integer('cantidadempleados',11);
            $table->integer('hombres',11);
            $table->integer('mujeres',11);
            $table->String('productoselaborados',150);
            $table->String('infraestructura',2);
            $table->String('tipoinfraestructura',200);
            $table->String('etapainfraestructura',200);
            $table->String('cerramiento',2);
            $table->String('tipocerramiento',25);
            $table->String('invasionretiros',2);
            $table->String('tipodeinvasion',200);
            $table->floatval('retirofeverificado');
            $table->floatval('retirofoverificado');
            $table->floatval('retirolaizqverificado');
            $table->floatval('retiroladerverificado');
            $table->String('viasdeacceso',200);
            $table->String('agua',2);
            $table->String('luz',2);
            $table->String('alcantarillado',2);
            $table->String('gas',2);
            $table->String('pozo',2);
            $table->String('internet',2);
            $table->String('numautorizacionpozo',150);
            $table->String('recojobasura',2);
            $table->String('empresacontratobasura',150);
            $table->String('residuossolidos',300);
            $table->String('residuosliquidos',300);
            $table->String('residuosgaseosos',300);
            $table->String('nombreencargadodehse',150);
            $table->String('sustanciaspeligrosasverificadas',255);
            $table->String('comerciodeenvases ',255);
            $table->String('emisiondegases',200);
            $table->String('archivo',100);
            $table->String('obs',600);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspeccions');
    }
};

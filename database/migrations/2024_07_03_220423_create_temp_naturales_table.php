<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('temp_naturales', function (Blueprint $table) {
            $table->integer('CodAut',8,0);
            $table->string('n_tramite',8);
            $table->decimal('f_19',6,0)->unique();
            $table->string('cod_acti',8)->unique();
            $table->decimal('cod_sector',2,0)->unique();
            $table->string('nom_acti',400);
            $table->string('descrip',200);
            $table->decimal('suerficie',9,2);
            $table->string('horario',20);
            $table->string('a_paterno',20);
            $table->string('a_materno',20);
            $table->string('a_esposo',20);
            $table->string('nomres',20);
            $table->decimal('c_i',15);//deberia ser cadena?
            $table->decimal('nit',15);
            $table->string('pmc',15);
            $table->string('zona_dom',20);
            $table->string('calle_dom',50);
            $table->string('n_dom',15);
            $table->decimal('fono_dom',8);
            $table->decimal('fono_ofi',8);
            $table->decimal('casilla',7,0);
            $table->decimal('fax',8,0);
            $table->set('extrangero',['F','T']);
            $table->decimal('cert_ext',20);

            $table->decimal('n_dni',20);
            $table->string('act_zona',20);
            $table->string('act_barrio',30);
            $table->string('act_c_av',50);
            $table->string('act_e_ca',50);
            $table->string('act_piso',10);
            $table->decimal('act_fono',8);
            $table->decimal('n_medidor_a',10);
            $table->decimal('n_medidor_e',10);
            $table->set('fachada',['F','T']);
            $table->set('acera',['F','T']);
            $table->set('luz',['F','V']);
            $table->set('letreros',['F','T']);
            $table->string('obs',100);
            $table->decimal('establec',1,0);
            $table->decimal('t_requi',1,0);
            $table->set('re1_1',['F','T']);
            $table->set('re1_2',['F','T']);
            $table->set('re1_3',['F','T']);
            $table->set('re1_4',['F','T']);
            $table->set('re1_5',['F','T']);
            $table->set('re1_6',['F','T']);
            $table->set('re1_7',['F','T']);
            $table->set('re1_8',['F','T']);
            $table->set('re1_9',['F','T']);
            $table->decimal('f_22',6,0);
            $table->decimal('comp',10,0);
            $table->decimal('zona_trib',1,0);
            $table->dateTime('fecha_iniac');
            $table->decimal('in_ge_trib',4,0);
            $table->string('n_pmc_for',6);
            $table->string('n_res_fec',8);
            $table->string('padron',50);
            




            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_naturales');
    }
};

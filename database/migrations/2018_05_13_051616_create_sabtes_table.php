<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSabtesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sabtes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('saat_khab');
            $table->string('saat_bidari');
            $table->string('neshat_dar_sahar');
            $table->string('barname_sobhgahi_sobhane');
            $table->string('tedad_goldan_tabiee');
            $table->string('tedad_derakhtan');
            $table->string('masahat_tolid_sabzijat');
            $table->string('darsad_nezafat_dar_class');
            $table->string('rozhaye_nezafat');
            $table->string('saat_kar_ketabkhune');
            $table->string('darsad_nazm');
            $table->string('darsad_nezafat');
            $table->string('tedad_mehmanan_in_mah');
            $table->string('darsad_rezayat_mehmanan');
            $table->string('name_masoul_khabgah');
            $table->string('tedad_jalasat_in_mah_khabgah');
            $table->string('tell_khabgah');
            $table->string('name_masoul_motahel');
            $table->string('tedad_jalasat_motahel');
            $table->string('tell_motahel');
            $table->string('ayad_dakhel');
            $table->string('ayad_kharej');
            $table->string('basirat');
            $table->string('name_semmat_madou');
            $table->string('sham_tolab');
            $table->string('tedad_ruzhaye_anjam_shode');
            $table->string('mozo_in_mah');
            $table->string('mozo_hafte1');
            $table->string('name_tell_ostade1');
            $table->string('mozo_hafte2');
            $table->string('name_tell_ostade2');
            $table->string('mozo_hafte3');
            $table->string('name_tell_ostade3');
            $table->string('mozo_hafte4');
            $table->string('name_tell_ostade4');
            $table->string('mozo_hafte5');
            $table->string('name_tell_ostade5');
            $table->string('nazere_shab');
            $table->string('tedad_ghari_dar_ruz');
            $table->string('tedade_safhate_gharat_shode');
            $table->string('tedad_bargozari_shena');
            $table->string('name_varzesh_umumi');
            $table->string('tedad_saat_dar_hafte');
            $table->string('noe_maraseme_manavi');
            $table->string('aslahe');
            $table->string('tedad_haftehaye_ejra_shode');
            $table->string('tedade_hafezin');
            $table->string('tedade_tolidate_farhangi');
            $table->string('ons');
            $table->string('tarikh_bargozari_jalase1');
            $table->string('ba_hozore1');
            $table->string('tarikh_bargozari_jalase2');
            $table->string('ba_hozore2');
            $table->string('madrese_elmiye');
            $table->string('shahr');
            $table->string('ostan');
            $table->string('tarikh_bargozari_nimsale_aval');
            $table->string('tarikh_sabt');
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
        Schema::dropIfExists('sabtes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarineMammalsObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marine_mammals_observations', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->comment('計畫/案件名稱	');
            $table->integer('year')->comment('西元年');
            $table->integer('month')->comment('月');
            $table->integer('day')->comment('日');
            $table->string('survey_method')->comment('調查方法');
            $table->double('longitude')->comment('經度');
            $table->double('latitude')->comment('緯度');
            $table->string('administrative_region')->comment('直轄市或省轄縣市');
            $table->string('identification_level')->comment('鑑定層級');
            $table->string('common_species_name', 100)->comment('物種俗名');
            $table->string('original_species_name', 100)->comment('原始物種名稱');
            $table->string('original_species_scientific_name', 100)->nullable()->comment('原始物種學名');
            $table->string('verified_species_code', 50)->nullable()->comment('校定物種識別編碼（若有）');
            $table->string('quantity', 50)->nullable()->comment('觀察到的個體數量或範圍');
            $table->string('quantity_unit', 50)->nullable()->comment('數量的單位（如「隻」）');
            $table->string('kingdom', 50)->comment('物種的界分類（如「Animalia」）');
            $table->string('kingdom_chinese_name', 50)->nullable()->comment('物種界的中文名稱');
            $table->string('phylum', 50)->nullable()->comment('物種的門分類');
            $table->string('phylum_chinese_name', 50)->nullable()->comment('物種門的中文名稱');
            $table->string('class', 50)->nullable()->comment('物種的綱分類');
            $table->string('class_chinese_name', 50)->nullable()->comment('物種綱的中文名稱');
            $table->string('order', 50)->nullable()->comment('物種的目分類');
            $table->string('order_chinese_name', 50)->nullable()->comment('物種目的中文名稱');
            $table->string('family', 50)->nullable()->comment('物種的科分類');
            $table->string('family_chinese_name', 50)->nullable()->comment('物種科的中文名稱');
            $table->string('genus', 50)->nullable()->comment('物種的屬分類');
            $table->string('genus_chinese_name', 50)->nullable()->comment('物種屬的中文名稱');
            $table->timestamps(); // includes created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marine_mammals_observations');
    }
}

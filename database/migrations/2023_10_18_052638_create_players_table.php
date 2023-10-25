<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string('name')->comment('球員姓名');
            $table->foreignId('tid')->comment('球隊編號(外部鍵)');
            $table->foreign('tid')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('cascade');
            $table->date('birthdate')->nullable()->default('1946-01-01')->comment('生日');
            $table->date('onboarddate')->nullable()->comment('到職日');
            $table->string('position')->comment('位置');
            $table->double('height')->unsigned()->default(165)->comment('身高');
            $table->double('weight')->unsigned()->default(80)->comment('體重');
            $table->tinyInteger('year')->unsigned()->comment('年資');
            $table->string('nationality')->default('美國')->comment('國籍');
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
        Schema::dropIfExists('players');
    }
}

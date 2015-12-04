<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * input table
         */
        Schema::create('input_table', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('select_input_id',false,11);
            $table->string('name', 64)->unique();
            $table->string('address', 64)->nullable();
            $table->string('parent', 64)->nullable();            
            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('input_table');

    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudFileLocalTextPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('crud_file_local_text')) {
            Schema::create('crud_file_local_text', function (Blueprint $table) {
            $table->integer('local_text_id')->unsigned()->index();
            $table->integer('crud_file_id')->unsigned()->index();
            $table->primary(['local_text_id', 'crud_file_id']);
            });
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('crud_file_local_text');
    }
}

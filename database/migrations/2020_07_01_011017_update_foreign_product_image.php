<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignProductImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update Foreign key table product_image
         Schema::table('product_image', function (Blueprint $table) {
        $table->dropForeign(['product_id']);       
        $table->foreign('product_id')
            ->references('id')
            ->on('product')
            ->onUpdate('cascade')
            ->onDelete('cascade');
      });      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

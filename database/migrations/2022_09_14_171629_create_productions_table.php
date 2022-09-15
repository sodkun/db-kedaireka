<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string("FPPP_number")->nullable();
            $table->string("project_name")->nullable();
            $table->string("applicator_name")->nullable();
            $table->string("file_bom_alumunium")->nullable();
            $table->string("file_bom_aksesoris")->nullable();
            $table->string("file_wo_alumunium")->nullable();
            $table->string("file_wo_kaca")->nullable();
            $table->string("production_phase")->nullable();
            $table->string("user_name")->nullable();
            $table->string("production_time")->nullable();
            $table->string("color")->nullable();
            $table->string("glass_type")->nullable();
            $table->text("note")->nullable();
            $table->integer("quotation_id")->nullable();
            $table->enum("status_order", [])->nullable();
            $table->enum("glass", [])->nullable();
            $table->enum("box_usage", [])->nullable();
            $table->enum("sealant_usage", [])->nullable();
            $table->enum("delivery_to_expedition", [])->nullable();
            $table->date("retrieval_deadline")->nullable();
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
        Schema::dropIfExists('productions');
    }
};

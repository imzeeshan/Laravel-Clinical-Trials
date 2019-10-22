<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nct_id');
            $table->text('brief_title');
            $table->text('official_title');
            $table->json('sponsors')->nullable();
            $table->string('source')->nullable();
            $table->json('oversight_info')->nullable();
            $table->text('brief_summary')->nullable();
            $table->text('detailed_description')->nullable();
            $table->string('status')->nullable();
            $table->date('start_date')->nullable();
            $table->date('completion_date')->nullable();
            $table->string('phase')->nullable();
            $table->string('study_type')->nullable();
            $table->boolean('has_expanded_access')->nullable();
            $table->json('study_design_info')->nullable();
            $table->json('primary_outcomes')->nullable();
            $table->json('secondary_outcomes')->nullable();
            $table->json('intervention')->nullable();
            $table->json('eligibility')->nullable();
            $table->json('location')->nullable();
            $table->json('urls')->nullable();
            $table->json('references')->nullable();
            $table->json('keywords')->nullable();
            $table->json('intervention_browse')->nullable();
            $table->json('provided_documents')->nullable();
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
        Schema::dropIfExists('studies');
    }
}

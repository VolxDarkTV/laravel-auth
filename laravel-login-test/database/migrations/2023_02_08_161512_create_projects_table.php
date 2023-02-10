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
        Schema::create('projects', function (Blueprint $table) {
            $table -> id();

            $table -> string('name', 64);
            $table -> string('code_type', 32);
            $table -> date('date');
            $table -> string('project_img') -> default('404_not_found.jpg');
            $table -> text('project_description') -> nullable(true);
            $table -> string('repo_link');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};

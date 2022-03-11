<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });
        DB::table('tags')->insert([
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'Lumen', 'slug' => 'lumen'],
            ['name' => 'Spark', 'slug' => 'spark'],
            ['name' => 'Forge', 'slug' => 'Forge'],
            ['name' => 'Envoyer', 'slug' => 'envoyer'],
            ['name' => 'Homestead', 'slug' => 'homestead'],
            ['name' => 'Valet', 'slug' => 'valet'],
            ['name' => 'Socialite', 'slug' => 'socialite'],
            ['name' => 'Mix', 'slug' => 'mix'],
            ['name' => 'Dusk', 'slug' => 'dusk'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
};

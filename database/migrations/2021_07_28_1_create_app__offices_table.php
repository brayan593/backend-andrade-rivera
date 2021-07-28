<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('offices', function (Blueprint $table) {
            $table->id();

            $table->date('date')
            ->comment('my coment');
            

            $table->text('description')
            ->nullable()
            ->comment('my coment');

            $table->string('title')
            ->comment('my coment');

            $table->softDeletes();
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('offices');
    }
}
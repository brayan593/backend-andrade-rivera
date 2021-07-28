<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
/*     protected $connection = env('DB_CONNECTION_APP');
 */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained('app.offices');
            $table->string('email');
            $table->string('identification');
            $table->integer('age')
            ->undigned();
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('employees');
    }
}

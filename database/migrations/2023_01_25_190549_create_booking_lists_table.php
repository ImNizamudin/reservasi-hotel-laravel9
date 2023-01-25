<?php

use App\Models\TipeKamar;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_lists', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->integer('no_hp');
            $table->string('email');
            $table->foreignIdFor(TipeKamar::class);
            $table->integer('jml_kamar');
            $table->timestamp('tgl_checkin');
            $table->timestamp('tgl_checkout')->nullable();
            $table->string('PayBay');
            $table->boolean('PayEnd');
            $table->string('status');
            $table->string('kode_booking');
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
        Schema::dropIfExists('booking_lists');
    }
}

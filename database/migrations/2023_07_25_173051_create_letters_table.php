<?php

use App\Models\Letter;
use App\Models\LetterForce;
use App\Models\LetterType;
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
        Schema::create('letters', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('subject');
            $table->string('abstract')->nullable();
            $table->string('letterBody');
            $table->string('letterNumber');
            $table->string('createDate');
            $table->unsignedBigInteger('createdUser');
            $table->unsignedBigInteger('signedUser');
            $table->foreign('createdUser')->references('id')->on('users');
            $table->foreign('signedUser')->references('id')->on('users');
            $table->foreignIdFor(LetterType::class);
            $table->foreignIdFor(LetterForce::class);
            $table->boolean('attachments')->nullable();
            $table->foreignIdFor(Letter::class);
            $table->boolean('draft');
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
        Schema::dropIfExists('letters');
    }
};

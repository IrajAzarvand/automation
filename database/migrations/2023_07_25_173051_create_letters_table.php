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
            $table->binary('id');
            $table->tinyText('subject');//max 255 char
            $table->text('abstract')->nullable();//max 65,535 char
            $table->longText('letterBody');
            $table->string('letterNumber');
            $table->string('createDate')->nullable();
            $table->unsignedBigInteger('createdUser')->nullable();
            $table->unsignedBigInteger('signedUser')->nullable();
            $table->foreign('createdUser')->references('id')->on('users');
            $table->foreign('signedUser')->references('id')->on('users');
            $table->foreignIdFor(LetterType::class);
            $table->foreignIdFor(LetterForce::class);
            $table->boolean('attachments')->nullable();
            $table->foreignIdFor(Letter::class)->nullable();
            $table->boolean('draft')->nullable();
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

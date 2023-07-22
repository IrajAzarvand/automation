<?php

use App\Models\Branch;
use App\Models\Post;
use App\Models\Unit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fName');
            $table->string('lName');
            $table->string('birthDate')->nullable();
            $table->boolean('gender')->default(true);
            $table->string('personnelCode'); //**** login to system with this field ****
            $table->string('mobileNumber')->nullable();
            $table->string('localNumber')->nullable();
            $table->foreignIdFor(Branch::class); //شعبه
            $table->foreignIdFor(Unit::class); //واحد
            $table->foreignIdFor(Post::class); //سمت
            $table->string('email')->nullable();
            $table->string('telegramNumber')->nullable();
            $table->string('whatsappNumber')->nullable();
            $table->boolean('status')->default(false); //آنلاین آفلاین
            $table->boolean('active')->default(true); // کاربر فعال یا غیرفعال
            $table->string('password')->default(Hash::make('123456'));
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

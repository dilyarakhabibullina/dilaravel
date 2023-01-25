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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id');
            $table->string('title')->comment('Заголовок новости');
            $table->text('inform');
            $table->boolean('isPrivate')->default(false);

            // 'categories_id' => 1,
            // 'title' => 'Новость первая',
            // 'inform' => 'Первая новость - хорошая новость про спорт',
            // 'isPrivate'=>false,

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
        Schema::dropIfExists('news');
    }
};

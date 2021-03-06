<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title')->comment('标题');
            $table->string('slug')->comment('slug');
            $table->string('thumb')->default('')->comment('封面');
            $table->integer('view_num')->default(0)->comment('浏览次数');
            $table->integer('charge')->default(0)->comment('价格');
            $table->string('short_description')->default('')->comment('简短介绍');
            $table->text('description')->comment('详细介绍');
            $table->string('seo_keywords')->default('')->comment('SEO关键字');
            $table->string('seo_description')->default('')->comment('SEO描述');
            $table->timestamp('published_at')->comment('上线时间');
            $table->tinyInteger('is_show')->comment('1显示,-1隐藏');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

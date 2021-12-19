<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN')->unique();
            $table->string('title');
            $table->text('description')->nullable();
            $table->year('year')->nullable();
            $table->string('language');
            $table->integer('num_of_pages')->nullable();
            $table->foreignId('author_id')->index()->nullable()->constrained()->onDelete('SET NULL');
            $table->foreignId('subject_id')->nullable()->index()->constrained()->onDelete('SET NULL');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}

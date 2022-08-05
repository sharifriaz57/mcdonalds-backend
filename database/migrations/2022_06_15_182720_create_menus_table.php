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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->default('default.jpg');
            $table->integer('level')->default(1);
            $table->integer('sort_id')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=active,0=inactive');
            $table->timestamps();
        });

        DB::table('products')->insert([
            [
                "id"=> 1,
                "name"=> "Breakfast",
                "image"=> "sneaker.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 2,
                "name"=> "Burgers",
                "image"=> "mcd-big-tasty-uae-new.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 3,
                "name"=> "Chickens & Sandwitches",
                "image"=> "mcd-mcchicken-uae-new.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 4,
                "name"=> "Extra Values Meals",
                "image"=> "mcd-big-mac-uae-new.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 5,
                "name"=> "Signature Collection",
                "image"=> "default.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 6,
                "name"=> "Snacks & Sides",
                "image"=> "default.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 7,
                "name"=> "Desserts",
                "image"=> "default.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 8,
                "name"=> "Beverages",
                "image"=> "default.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 9,
                "name"=> "McCafe",
                "image"=> "McCafe-uae-new.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 10,
                "name"=> "Happy Meals",
                "image"=> "default.jpg",
                "level"=> 1,
                "sort_id"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};

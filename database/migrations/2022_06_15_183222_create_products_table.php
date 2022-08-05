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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('menu_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->default('default.jpg');
            $table->string('price', 4, 2);
            $table->decimal('vat', 4, 2)->default('5.00');
            $table->decimal('calories', 5, 2)->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=active,0=inactive');
            $table->timestamps();
        });

        DB::table('products')->insert([
            [
                "id"=> 1,
                "menu_id"=> 1,
                "name"=> "Big Breakfast",
                "description"=> "Wake up with a warm McMuffin, fluffy scrambled eggs, savory hot Halal sausage, and crispy golden hash browns.",
                "image"=> "sneaker.jpg",
                "price"=> "15",
                "vat"=> "5.00",
                "calories"=> "386.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 2,
                "menu_id"=> 1,
                "name"=> "Hotcakes 3-Pieces",
                "description"=> "Three golden brown, melt-in-your-mouth hotcakes with a side of real butter and the sweet flavor of maple.",
                "image"=> "mcd-hotcakes-uae-new.jpg",
                "price"=> "14",
                "vat"=> "5.00",
                "calories"=> "315.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 3,
                "menu_id"=> 1,
                "name"=> "Egg McMuffin",
                "description"=> "An excellent source of protein and oh so delicious. We place a freshly-cracked Grade A egg on a toasted English Muffin topped with real butter and add chicken roll and melty American cheese. And all that for 290 calories.",
                "image"=> "mcd-egg-muffin-uae-new.jpg",
                "price"=> "12",
                "vat"=> "5.00",
                "calories"=> "288.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 4,
                "menu_id"=> 2,
                "name"=> "Big Tasty",
                "description"=> "A big and tasty Halal beef patty smothered in our one of a kind Big Tasty Sauce and 3 slices of emmental cheese, dressed with 2 slices of tomato, a handful of crispy shredded lettuce and slivered onions.",
                "image"=> "mcd-big-tasty-uae-new.jpg",
                "price"=> "22",
                "vat"=> "5.00",
                "calories"=> "922.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 5,
                "menu_id"=> 2,
                "name"=> "McRoyale",
                "description"=> "The McRoyale™ has it all! A juicy Halal beef patty accompanied by cheese, crispy lettuce, fresh tomatoes, onions, zesty pickles, and spread with mayonnaise, ketchup and mustard.",
                "image"=> "mcd-McRoyale-uae-new.jpg",
                "price"=> "19",
                "vat"=> "5.00",
                "calories"=> "583.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 6,
                "menu_id"=> 2,
                "name"=> "Quarter Pounder with Cheese",
                "description"=> "A quarter pound* of 100% pure halal beef with absolutely no fillers, additives or preservatives. Just a pinch of salt and pepper, and seared on our grill so it’s thick and juicy. Layered with two slices of melty cheese, slivered onions and tangy pickles on a sesame seed bun. *Weight before cooking at least 110 g.",
                "image"=> "mcd-quarter-pounder-with-cheese-uae-new.jpg",
                "price"=> "18",
                "vat"=> "5.00",
                "calories"=> "586.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 7,
                "menu_id"=> 2,
                "name"=> "Big Mac",
                "description"=> "Mouthwatering perfection starts with two sear-sizzled 100% pure Halal beef patties and Big Mac™ sauce, sandwiched between a sesame seed bun. American cheese, shredded lettuce, onions and pickles top it off.",
                "image"=> "mcd-bigmac-uae-new.jpg",
                "price"=> "18",
                "vat"=> "5.00",
                "calories"=> "597.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 8,
                "menu_id"=> 3,
                "name"=> "3 pcs Chicken McWings",
                "description"=> "Mildly Spicy",
                "image"=> "mcd-3pcs-chicken-mcwing-uae-new.jpg",
                "price"=> "5",
                "vat"=> "5.00",
                "calories"=> "326.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 9,
                "menu_id"=> 3,
                "name"=> "Grand Chicken Special",
                "description"=> "A thick, crispy Halal chicken patty topped with a handful of crispy lettuce, rocca, juicy tomato slices, two slices of Emmental cheese and a slice of chicken roll, accompanied by a grainy, gourmet dressing sauce - all held together by a soft, water split bun.",
                "image"=> "mcd-grand-chicken-special-uae-new.jpg",
                "price"=> "21",
                "vat"=> "5.00",
                "calories"=> "790.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 10,
                "menu_id"=> 4,
                "name"=> "",
                "description"=> null,
                "image"=> "default.jpg",
                "price"=> "",
                "vat"=> "5.00",
                "calories"=> null,
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 11,
                "menu_id"=> 1,
                "name"=> "Chicken Sausage McMuffin",
                "description"=> "Features a warm, freshly toasted English muffin, topped with savory hot Halal sausage and a slice of melty American cheese.",
                "image"=> "mcd-cknsausage-muffin-uae-new.jpg",
                "price"=> "11",
                "vat"=> "5.00",
                "calories"=> "276.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 12,
                "menu_id"=> 1,
                "name"=> "Hash Browns",
                "description"=> "Deliciously tasty hash browns. Fluffy on the inside, crispy and toasty on the outside.",
                "image"=> "mcd-hash-browns-uae-new.jpg",
                "price"=> "10",
                "vat"=> "5.00",
                "calories"=> "179.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 13,
                "menu_id"=> 2,
                "name"=> "Smoky BBQ",
                "description"=> "Juicy 100% halal beef topped with crispy chicken strips, crispy onion, fresh Boston lettuce, melty Emmental cheese, and a smoky barbeque sauce, all nestled in a double water split artisan bun.",
                "image"=> "mcd-smoky-bbq-uae-new.jpg",
                "price"=> "23",
                "vat"=> "5.00",
                "calories"=> "688.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 14,
                "menu_id"=> 2,
                "name"=> "Double Cheeseburger",
                "description"=> "Two 100% pure halal beef patties with absolutely no fillers, additives or preservatives, seasoned with a pinch of salt and pepper, and topped with tangy pickles, chopped onions, ketchup, mustard and two slices of melty American cheese.",
                "image"=> "mcd-double-cheese-burger-uae-new.jpg",
                "price"=> "8.5",
                "vat"=> "5.00",
                "calories"=> "486.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 15,
                "menu_id"=> 3,
                "name"=> "McArabia™ Chicken",
                "description"=> "Another way to enjoy our delicious chicken! Two Halal grilled chicken patties with lettuce, tomatoes, onions and flavorful garlic sauce held together by Arabic bread.",
                "image"=> "mcd-mcarabia-uae-new.jpg",
                "price"=> "20",
                "vat"=> "5.00",
                "calories"=> "553.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 16,
                "menu_id"=> 4,
                "name"=> "Big Mac Meal",
                "description"=> "The one and only McDonald’s Big Mac® Meal. Big Mac Ingredients include a classic sesame hamburger bun, Big Mac Sauce, American cheese and sliced pickles. The Big Mac Meal is served with our World Famous Fries® and your choice of an icy Coca-Cola fountain drink.",
                "image"=> "mcd-big-mac-uae-new.jpg",
                "price"=> "42",
                "vat"=> "5.00",
                "calories"=> "999.99",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 17,
                "menu_id"=> 4,
                "name"=> "McChicken Meal",
                "description"=> "Deliciously Halal crispy chicken topped with mayonnaise, shredded lettuce, and served on a perfectly toasty bun. Served with our World Famous Fries® and your choice of a Medium McDonald’s soft drink.",
                "image"=> "mcd-mcchicken-meal-uae-new.jpg",
                "price"=> "38",
                "vat"=> "5.00",
                "calories"=> "999.99",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 18,
                "menu_id"=> 4,
                "name"=> "9 Pcs Chicken McNuggets Meal",
                "description"=> "Enjoy 9 tender and delicious Chicken McNuggets® made with all white meat chicken—plus our World Famous Fries® and your choice of a Medium McDonald’s drink.",
                "image"=> "mcd-9pc-nuggets-uae-new.jpg",
                "price"=> "30",
                "vat"=> "5.00",
                "calories"=> "999.99",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 19,
                "menu_id"=> 9,
                "name"=> "Hot Chocolate",
                "description"=> "Warm up with chocolaty flavor.Hot Chocolate. made with steamed milk and rich chocolate syrup, is everything you love in a cup.",
                "image"=> "mcd-hot-chocolate-uae-v1-2022.jpg",
                "price"=> "12",
                "vat"=> "5.00",
                "calories"=> "343.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 20,
                "menu_id"=> 9,
                "name"=> "Cappuccino",
                "description"=> "Made with 100% sustainable Arabica coffee beans, blended with steamed milk. Topped lightly with coco-dusted powder for the finishing touch!",
                "image"=> "mcd-cappuccino-uae-v1-2022.jpg",
                "price"=> "13",
                "vat"=> "5.00",
                "calories"=> "143.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 21,
                "menu_id"=> 9,
                "name"=> "Latte",
                "description"=> "Warm up with a rich Latte, made from Rainforest Alliance Certified espresso.",
                "image"=> "mcd-latte-uae-v1-2022.jpg",
                "price"=> "11",
                "vat"=> "5.00",
                "calories"=> "164.00",
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
        Schema::dropIfExists('products');
    }
};

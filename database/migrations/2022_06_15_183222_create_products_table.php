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
            ],
            [
                "menu_id"=> 3,
                "name"=> "Chicken Mac",
                "description"=> "An unbelievable sandwich made with 2 breaded Halal chicken patties, cheese, lettuce, creamy mayo and a bun in the middle!",
                "image"=> "chicken-mac-uae_1-4-product-tile-desktop.jpg",
                "price"=> "19",
                "vat"=> "5.00",
                "calories"=> "332.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 3,
                "name"=> "Grand Chicken Classic",
                "description"=> "A juicy marinated Halal chicken covered with a soft bun, topped with crispy lettuce and smothered in a zing of garlic mayo sauce.",
                "image"=> "mcd-grand-chicken-classic-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "21",
                "vat"=> "5.00",
                "calories"=> "405.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 3,
                "name"=> "Spicy Crunchy Chicken",
                "description"=> "A fluffy sesame seed artisan bun packed with a golden-brown halal buttermilk chicken breast, jalepenos, crispy lettuce, tomatoes, melty Emmental cheese, and a rich tomato sauce.",
                "image"=> "mcd-spicy-crunchy-chicken-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "26",
                "vat"=> "5.00",
                "calories"=> "59.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 3,
                "name"=> "Chicken McNuggets",
                "description"=> "Our tender, juicy Halal Chicken McNuggets are made with 100% white meat chicken and no artificial colors, flavors and now no artificial preservatives. Available in 4, 6 or 9 pieces.",
                "image"=> "mcd-4Ps-Nuggets-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "15",
                "vat"=> "5.00",
                "calories"=> "210.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 4,
                "name"=> "Quarter Pounder with Cheese Meal",
                "description"=> "Refuel with a Quarter Pounder® with Cheese made with fresh beef** that’s cooked when you order. The Quarter Pounder® with Cheese Meal is served with our World Famous Fries® and your choice of an icy medium fountain drink.",
                "image"=> "mcd-QPC-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "20.75",
                "vat"=> "5.00",
                "calories"=> "1081.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 4,
                "name"=> "McArabia Chicken Meal",
                "description"=> "Another way to enjoy our delicious chicken! Two Halal grilled chicken patties with lettuce, tomatoes, onions and flavorful garlic sauce held together by Arabic bread. Served with our World Famous Fries® and your choice of a Medium McDonald’s soft drink.",
                "image"=> "mcd-mcarabia-uae-meal-new_1-4-product-tile-desktop.jpg",
                "price"=> "45",
                "vat"=> "5.00",
                "calories"=> "1232.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 5,
                "name"=> "The Mushroom Beef",
                "description"=> "A perfectly toasted fluffy sesame seed artisan split bun packed with a 100% Halal Beef Patty, savory cheddar cheese, seasoned grilled mushroom and fresh onions, all smothered by a rich grilled black pepper mayonnaise.",
                "image"=> "mushroom-beef-uae-v1_1-4-product-tile-desktop.jpg",
                "price"=> "33",
                "vat"=> "5.00",
                "calories"=> "732.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 5,
                "name"=> "Smoky BBQ",
                "description"=> "Juicy 100% halal beef topped with crispy chicken strips, crispy onion, fresh Boston lettuce, melty Emmental cheese, and a smoky barbeque sauce, all nestled in a double water split artisan bun.",
                "image"=> "mcd-smoky-bbq-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "23",
                "vat"=> "5.00",
                "calories"=> "260.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 6,
                "name"=> "Pineapple Stick",
                "description"=> "A delicious and refreshing new addition to our menu, the pineapple stick is the perfect natural treat to accompany your kid’s Happy Meal.",
                "image"=> "mcd-pineapple-sticks-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "4",
                "vat"=> "5.00",
                "calories"=> "89.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 6,
                "name"=> "Banana",
                "description"=> "A healthy fruit for breakfast",
                "image"=> "mcd-banana-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "4",
                "vat"=> "5.00",
                "calories"=> "68.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 7,
                "name"=> "McFlurry™ Oreo",
                "description"=> "Vanilla soft serve with OREO® Cookies mixed in.",
                "image"=> "mcd-oreo-mcflurry-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "8",
                "vat"=> "5.00",
                "calories"=> "399.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 7,
                "name"=> "Kitkat McFlurry™",
                "description"=> "Vanilla soft serve with Kit-Kat® biscuits mixed in.",
                "image"=> "mcd-kitkat-mcflurry-uae-new.jpg",
                "price"=> "8",
                "vat"=> "5.00",
                "calories"=> "437.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 7,
                "name"=> "Strawberry Sundae",
                "description"=> "Sweet, tart and oh so creamy. STRAWBERRY SUNDAE. Creamy vanilla soft serve topped with sliced strawberries in a sweet and tart strawberry sauce.",
                "image"=> "mcd-kitkat-mcflurry-uae-new.jpg",
                "price"=> "7",
                "vat"=> "5.00",
                "calories"=> "295.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 7,
                "name"=> "Apple Pie",
                "description"=> "Crispy on the outside, deliciously hot and sweet on the inside, our Apple Pie is a McDonald's classic.",
                "image"=> "mcd-apple-pie-uae-new.jpg",
                "price"=> "7",
                "vat"=> "5.00",
                "calories"=> "231.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 9,
                "name"=> "Chocolate Ball",
                "description"=> "A smooth and fluffy donut iced with chocolate – making it the perfect pick-me-up.",
                "image"=> "mcd-chocolate-ball-donut-uae-new.jpg",
                "price"=> "6",
                "vat"=> "5.00",
                "calories"=> "",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 9,
                "name"=> "Choco Oreo Frappe",
                "description"=> "Blended iced drink with delectable Oreo® bits, skimmed milk and rich chocolate flavour.",
                "image"=> "mcd-choco-oreo-frappe-uae-v1-2022_1-4-product-tile-desktop.jpg",
                "price"=> "14",
                "vat"=> "5.00",
                "calories"=> "",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 9,
                "name"=> "Cheese Croissant",
                "description"=> "Fresh golden-baked croissant which is crispy in the outside and delicious on the inside.",
                "image"=> "mcd-cheese-croissant-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "8",
                "vat"=> "5.00",
                "calories"=> "301",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 9,
                "name"=> "Plain Croissant",
                "description"=> "Flaky, buttery, and deliciously authentic plain croissant",
                "image"=> "mcd-plain-croissant-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "8",
                "vat"=> "5.00",
                "calories"=> "333.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 10,
                "name"=> "Happy Meal Beefburger with Pineapple Stick",
                "description"=> "A juicy beefburger with Pineapple Stick and an Orange Juice Drink.",
                "image"=> "mcd-hm-beef-burger-pineapple-uae-new_product-header-mobile.jpg",
                "price"=> "14",
                "vat"=> "5.00",
                "calories"=> "464.98",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 10,
                "name"=> "Happy Meal Chicken McNuggets with Banana",
                "description"=> "Four tender Chicken McNuggets made with white meat with Banana and an Orange Juice Drink.",
                "image"=> "mcd-hm-nuggets-banana-uae-new_1-4-product-tile-desktop.jpg",
                "price"=> "15",
                "vat"=> "5.00",
                "calories"=> "415.98",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 8,
                "name"=> "Fanta",
                "description"=> "Go for it! Available in Small, Medium, and Large.",
                "image"=> "mcd-fanta-uae-v1-2022.jpg",
                "price"=> "7",
                "vat"=> "5.00",
                "calories"=> "206.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 8,
                "name"=> "Sprite",
                "description"=> "SPRITE® Delicious lemon-lime taste with no caffeine. Available in Small, Medium, and Large.",
                "image"=> "mcd-sprite-uae-v1-2022.jpg",
                "price"=> "7",
                "vat"=> "5.00",
                "calories"=> "167.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "menu_id"=> 6,
                "name"=> "Fries",
                "description"=> "Our French fries are born from premium potatoes such as the Russet Burbank and the Shepody. With zero grams of trans fat per labeled serving, these epic fries are crispy and golden on the outside and fluffy on the inside. Available in sizes small, regular, meduim and large.",
                "image"=> "mcd-small-fries-uae-new.jpg",
                "price"=> "12",
                "vat"=> "5.00",
                "calories"=> "167.00",
                "status"=> 1,
                "created_at"=> null,
                "updated_at"=> null
            ],
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

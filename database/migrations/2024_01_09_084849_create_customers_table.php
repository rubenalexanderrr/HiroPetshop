<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('name', 100);
            $table->string('address', 100);
            $table->string('number', 30);
            $table->string('payment', 100);
            $table->string('delivery', 100);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('customers')->insert(
            [
                [
                    'email' => 'dinda@email.com',
                    'name' => 'Dinda',
                    'address' => 'Palembang',
                    'number' => '081212334567',
                    'payment' => 'Cash',
                    'delivery' => 'In-Store Pick Up'
                ],
                [
                    'email' => 'dandi@email.com',
                    'name' => 'Dandi',
                    'address' => 'Pekanbaru',
                    'number' => '089755641233',
                    'payment' => 'Bank',
                    'delivery' => 'Home Delivery'
                ]
            ]
        );
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};

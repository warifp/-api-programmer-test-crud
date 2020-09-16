<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function rand()
    {
        $rand_sn = substr(str_shuffle("ABCDEFGHIJKLMNOVQRSTUVWXYZ1234567890"), 0, 16);
        return $rand_sn;
    }

    public function up()
    {
        $book = [
            [
                'name' => 'Nanti Kita Cerita Tentang Hari Ini',
                'serial_number' => self::rand(),
                'publisher_year' => '2020',
                'price' => '100000',
            ],
            [
                'name' => 'B-Leadership In War Hardcover',
                'serial_number' => self::rand(),
                'publisher_year' => '2020',
                'price' => '120000',
            ],
            [
                'name' => 'Proverbs From Around The World',
                'serial_number' => self::rand(),
                'publisher_year' => '2020',
                'price' => '249000',
            ],
            [
                'name' => 'Le Mariage: Lose or Love Her Again',
                'serial_number' => self::rand(),
                'publisher_year' => '2020',
                'price' => '399000',
            ],
            [
                'name' => '5cm : Aku, Kamu, Samudera, dan Bintang Bintang',
                'serial_number' => self::rand(),
                'publisher_year' => '2020',
                'price' => '149000',
            ],
            [
                'name' => 'Stardom Syndrome',
                'serial_number' => self::rand(),
                'publisher_year' => '2020',
                'price' => '80000',
            ],
        ];

        DB::table('book')->insert($book);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

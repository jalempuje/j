<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;


class Poetscircle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP TABLE IF EXISTS customers");
        DB::statement("CREATE TABLE `customers` (
            `customer_code` INT(11) NOT NULL,
            `first_name` VARCHAR(30) NULL DEFAULT NULL,
            `surname` VARCHAR(40) NULL DEFAULT NULL,
            `address` VARCHAR(100) NULL DEFAULT NULL,
            `postcode` VARCHAR(40) NULL DEFAULT NULL,
            `telephone_number` VARCHAR(30) NULL DEFAULT NULL,
            PRIMARY KEY (`customer_code`)
        )");

        DB::statement("DROP TABLE IF EXISTS poems");
        DB::statement("CREATE TABLE `poems` (
            `poem_code` INT(11) NOT NULL,
            `title` VARCHAR(50) NULL DEFAULT NULL,
            `contents` TEXT NULL,
            `poet_code` INT(11) NOT NULL,
            PRIMARY KEY (`poem_code`)  
        )");

        DB::statement("DROP TABLE IF EXISTS poems_publications");
        DB::statement("CREATE TABLE `poems_publications` (
            `poem_code` INT(11) NOT NULL,
            `publication_code` INT(11) NOT NULL,
            PRIMARY KEY (`poem_code`, `publication_code`)
            )");
        
        DB::statement("DROP TABLE IF EXISTS poets");
        DB::statement("CREATE TABLE `poets` (
            `poet_code` INT(11) NOT NULL,
            `first_name` VARCHAR(30) NULL DEFAULT NULL,
            `surname` VARCHAR(40) NULL DEFAULT NULL,
            `address` VARCHAR(100) NULL DEFAULT NULL,
            `postcode` VARCHAR(20) NULL DEFAULT NULL,
            `telephone_number` VARCHAR(30) NULL DEFAULT NULL,
            PRIMARY KEY (`poet_code`)
            )");

        DB::statement("DROP TABLE IF EXISTS publications");
        DB::statement("CREATE TABLE `publications` (
            `publication_code` INT(11) NOT NULL,
            `title` VARCHAR(100) NULL DEFAULT NULL,
            `price` MEDIUMINT(8) UNSIGNED NULL DEFAULT NULL,
            PRIMARY KEY (`publication_code`)
            )");

        DB::statement("DROP TABLE IF EXISTS sales");
        DB::statement("CREATE TABLE `sales` (
            `sale_code` INT(11) NOT NULL,
            `sale_date` DATE NULL DEFAULT NULL,
            `amount` INT(11) NULL DEFAULT NULL,
            `customer_code` INT(11) NULL DEFAULT NULL,
            PRIMARY KEY (`sale_code`)
            )");

        DB::statement("DROP TABLE IF EXISTS sales_publications");
        DB::statement("CREATE TABLE `sales_publications` (
            `sales_code` INT(11) NOT NULL,
            `publication_code` INT(11) NOT NULL,
            PRIMARY KEY (`sales_code`, `publication_code`)
            )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE IF EXISTS poets");
        DB::statement("CREATE TABLE `poets` (
            `poet_code` INT(11) NOT NULL,
            `first_name` VARCHAR(30) NULL DEFAULT NULL,
            `surname` VARCHAR(40) NULL DEFAULT NULL,
            `address` VARCHAR(100) NULL DEFAULT NULL,
            `postcode` VARCHAR(20) NULL DEFAULT NULL,
            `telephone_number` VARCHAR(30) NULL DEFAULT NULL,
            PRIMARY KEY (`poet_code`)
            )");
    }
}

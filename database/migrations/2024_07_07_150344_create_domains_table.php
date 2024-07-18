<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenant_id'); // Ensure tenant_id is a string
            $table->string('domain');
            $table->timestamps();

            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('domains');
    }
}


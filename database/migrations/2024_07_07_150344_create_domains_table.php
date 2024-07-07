<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->string('domain');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('domains');
    }
}

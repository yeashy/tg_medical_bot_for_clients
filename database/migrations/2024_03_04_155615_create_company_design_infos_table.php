<?php

use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDesignInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_design_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->unique()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('primary_color')->default('white');
            $table->string('secondary_color')->default('black');
            $table->string('font')->default('Arial');
            $table->string('font_color')->default('black');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_design_infos');
    }
}

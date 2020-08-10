<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('الإسم');
            $table->date('تاريخ_التأسيس');
            $table->string('الهاتف');  
            $table->string('العنوان');  
            $table->string('البريد_الإلكتروني');
            $table->text('الوصف');
            $table->string('الشعار');
            $table->string('القانون_الأساسي');
            $table->string('الرئيس');
            $table->string('نائب_الرئيس');
            $table->string('الكاتب_العام');
            $table->string('نائب_الكاتب_العام');
            $table->string('أمين_المال');
            $table->string('نائب_أمين_المال');
            $table->string('المستشار_الأول');
            $table->string('المستشار_الثاني');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associations');
    }
}

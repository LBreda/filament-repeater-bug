<?php

use App\Models\Test;
use App\Models\TestItem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_test_item', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Test::class, 'test_id')->constrained('tests');
            $table->foreignIdFor(TestItem::class, 'test_item_id')->constrained('test_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('test_test_item', function (Blueprint $table) {
            $table->dropConstrainedForeignId('test_id');
            $table->dropConstrainedForeignId('test_item_id');
        });
        Schema::dropIfExists('test_test_item');
    }
};

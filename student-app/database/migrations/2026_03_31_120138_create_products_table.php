<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Chạy migration để tạo bảng products.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Tên sản phẩm
            $table->decimal('price', 10, 2);  // Giá bán (tối đa 10 số, 2 số thập phân)
            $table->integer('quantity');      // Số lượng kho
            $table->string('category')->nullable(); // Danh mục (có thể để trống)
            
            // Nếu Model Product của bạn ĐANG TẮT timestamps (public $timestamps = false)
            // thì KHÔNG CẦN dòng $table->timestamps() dưới đây.
            // $table->timestamps(); 
        });
    }

    /**
     * Đảo ngược migration (Xóa bảng).
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
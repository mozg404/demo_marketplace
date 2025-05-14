<?php

namespace App\Models;

use App\QueryBuilders\ProductQueryBuilder;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property float $price
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static ProductQueryBuilder|Product query()
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'image',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'float',
        ];
    }

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function newEloquentBuilder($query): ProductQueryBuilder
    {
        return new ProductQueryBuilder($query);
    }

    protected static function newFactory(): ProductFactory|\Illuminate\Database\Eloquent\Factories\Factory
    {
        return ProductFactory::new();
    }
}

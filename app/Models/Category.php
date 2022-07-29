<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
    use HasFactory,SoftDeletes,Sluggable,InteractsWithMedia;

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $appends=[
        'photo'
    ];
    protected $fillable=[
        'name',
        'slug',
        'description',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts=[
        'created_at'=>'datetime',
        'updated_at'=>'datetime',
        'deleted_at'=>'datetime',
    ];

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 250, 250);
        $this->addMediaConversion('preview')->fit('crop', 900, 900);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'name'
            ]
        ];
    }

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }
}

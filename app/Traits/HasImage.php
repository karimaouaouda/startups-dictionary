<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Http\UploadedFile;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
*/
trait HasImage
{
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function storeImage(UploadedFile $file){
        //TODO implement the store picture logics
    }
}

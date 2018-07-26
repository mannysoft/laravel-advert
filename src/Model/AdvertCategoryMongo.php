<?php

namespace Adumskis\LaravelAdvert\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class AdvertCategoryMongo extends Eloquent
{
    protected $fillable = ['type', 'width', 'height'];
    
    protected $collection = 'advert_categories';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function adverts(){
        return $this->hasMany(Advert::class);
    }

    /**
     *
     */
    public function delete(){
        foreach($this->adverts as $advert){
            $advert->delete();
        }
    }
}

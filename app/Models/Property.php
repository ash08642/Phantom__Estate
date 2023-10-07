<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'photo',
        'street',
        'city',
        'state',
        'country',
        'plz',
        'bedrooms',
        'bathrooms',
        'size',
        'price',
        'propertytype',
        'purchasetype',
        'description',
        'agentfirstname',
        'agentlastname',
        'agentemail',
        'user_id'
    ];

    public function scopeFilter($query, array $filters){
        if($filters['propertytype'] ?? false){
            if(request('search') === null){
                //dd(request('search'));
                if(!(request('propertytype') === "All" && request('purchasetype') === "All")){
                    if(request('propertytype') === "All" && request('purchasetype') !== "All"){
                        $query->where('purchasetype', request('purchasetype'));
                    }else if(request('purchasetype') === "All" && request('propertytype') !== "All"){
                        $query->where('propertytype', request('propertytype'));
                    }else{
                        $query->where('propertytype', request('propertytype'))
                            ->where('purchasetype', request('purchasetype'));
                    };
                }
            }else{

                if(!(request('propertytype') === "All" && request('purchasetype') === "All")){
                    if(request('propertytype') === "All" && request('purchasetype') !== "All"){
                        $query->where('purchasetype', request('purchasetype'))
                            ->where('title', 'like', '%'. request('search') . '%');
                    }else if(request('purchasetype') === "All" && request('propertytype') !== "All"){
                        $query->where('propertytype', request('propertytype'))
                            ->where('title', 'like', '%'. request('search') . '%');
                    }else{
                        $query->where('propertytype', request('propertytype'))
                            ->where('purchasetype', request('purchasetype'))
                            ->where('title', 'like', '%'. request('search') . '%');
                    };
                }else{
                    $query->where('title', 'like', '%'. request('search') . '%');
                }
            };
            
        };
    }

    //Relatiionship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

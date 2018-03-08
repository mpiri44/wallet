<?php
namespace payamava\wallet;

use App\BaseModel;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Wallet extends Model{
    
    protected $table = 'wallet';
    
    protected $fillable = ['user_id','amount'];

    public function user()
    {
        $this->hasOne(User::class);
    }
    public function setCreatedAtAttribute()
    {
        $this->attributes['created_at'] = verta();
    }
    public function setUpdatedAtAttribute()
    {
        $this->attributes['updated_at'] = verta();
    }
}
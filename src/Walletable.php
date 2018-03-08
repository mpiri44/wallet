<?php
/**
 * Created by PhpStorm.
 * User: meysam
 * Date: 2/15/18
 * Time: 12:09 PM
 */

namespace payamava\wallet;


trait Walletable
{
    /**
     * @return mixed
     */
    public function wallet()
    {
        return $this->hasMany(Wallet::class);
    }

    /**
     * @param $amount
     * @return mixed
     */
    public function cash($amount,$type)
    {
        return Wallet::create([
            'user_id'   =>  $this->id,
            'amount'    =>  $amount,
	    'type'	=>  $type	
        ]);
    }

    /**
     * @return mixed
     */
    public function totalCash()
    {
        return optional($this->wallet())->sum('amount');
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return optional($this->wallet()->first());

    }

    /**
     * @return mixed
     */
    public function last()
    {
        return optional($this->wallet()->orderBy('id','desc')->first());

    }
}

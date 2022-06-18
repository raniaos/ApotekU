<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function medicines() {
        return $this->belongsToMany('App\Medicine', 'medicine_transaction', 'transaction_id', 'medicine_id')->withPivot('quantity', 'price');
    }

    public function insertMedicines($cart, $user) {
        $total = 0;
        foreach($cart as $id=>$detail) {
            $total += $detail['price'] * $detail['quantity'];
            $this->medicines()->attach($id, ['quantity' => $detail['quantity'], 'price' => $detail['price']]);
        }
        return $total;
    }
}

<?php

// IS BAD
public function getStatusPayment($cart) {
    if(isset($cart->status)) {
        if($cart->status === 0) {
            return 'Pending';
        } else if($cart->status === 1) {
            return 'Paid';
        } else if($cart->status === 2) {
            return 'Delivered';
        } else if($cart->status === 3) {
            return 'Shipped';
        } else if($cart->status === 4) {
            return 'Canceled';
        }
    }
}

// ID GOOD
enum StatusPayment: int {
    case Pending   = 0;
    case Paid      = 1;
    case Delivered = 2;
    case Shipped   = 3;
    case Canceled  = 4;

    public static function getState($code) {
        $values = array_column(self::cases(), 'value');
		$index	= array_search($code, $values);

		if($index === false) {
			return 'Status is not exist';
		}

		return self::cases()[$index]->name;
    }
}

public function getStatusPayment($cart) {
    if(!isset($cart->state)) {
        return 'state not defined';
    }

    return StatusPayment::getState($cart->state)
}
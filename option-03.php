<?php

// IS BAD
public function payment($payment) {
    if(!isset($payment->method)) {
        return 'payment not defined';
    }

    if($payment->method === 'credit_card') {
        # implements logic
    }

    if($payment->method === 'ticket') {
        # implements logic
    }

    if($payment->method === 'debit_card') {
        # implements logic
    }

    if($payment->method === 'pix') {
        # implements logic
    }
}

// IS GOOD
public function payment($payment) {
    if(!isset($payment->method)) {
        return 'payment not defined';
    }

    switch ($payment->method) {
        case 'credit_card':
            # implements logic
            break;

        case 'ticket':
            # implements logic
            break;

        case 'debit_card':
            # implements logic
            break;

        case 'pix':
            # implements logic
            break;
        
        default:
            return 'payment method not supported';
            break;
    }
}

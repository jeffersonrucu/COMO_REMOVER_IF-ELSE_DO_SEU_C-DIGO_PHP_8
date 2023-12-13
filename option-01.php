<?php

// IS BAD
public function isAdmin($user) {
    if(isset($user->role)) {
        if($user->role === 'admin') {
            return 'user is not an administrator';
        } else {
            return 'user is not an administrator';
        }
    } else {
        return 'role does not exist';
    }
}

// IS GOOD
public function isAdmin($user) {
    if(!isset($user->role)) {
        return 'role does not exist';
    }

    if($user->role !== 'admin') {
        return 'user is not an administrator';
    }

    return 'user is an administrator';
}
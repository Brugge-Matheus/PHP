<?php

function validate(array $fields) {

    $request = request();

    $validate = [];
    foreach ($fields as $key => $type) {

        switch ($type) {
            case 'str':
                $validate[$key] =  filter_var( $request[$key], FILTER_SANITIZE_SPECIAL_CHARS);
                break;
            
            case 'int':
                $validate[$key] =  filter_var( $request[$key], FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'mail':
                $validate[$key] =  filter_var( $request[$key], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}

function isEmpty() {
    $request = request();
    $empty = false;

    foreach($request as $key => $value) {
        if(empty($request[$key])) {

            $empty = true;

        }
    }
    
    return $empty;
    
}
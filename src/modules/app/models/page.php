<?php namespace AlexAntonides\ViriCMS\Models;

class Page {

    public function __construct( $data ) {
        foreach ( $data as $key => $value ) {
            $this->$key = $value;
        }
    }

    public function SetMeta ( $meta ) {
        $len = count( $meta );
        for ( $i = 0; $i < $len; $i++ ) {
            $key = $meta[$i]->meta_key;
            $value = $meta[$i]->meta_value;

            $this->$key = $value;
         }
    }
}
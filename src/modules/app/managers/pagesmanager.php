<?php namespace AlexAntonides\ViriCMS\Managers;

use DB;
use AlexAntonides\ViriCMS\Models\Page;

class PagesManager {
    
    public function __construct() {
        $query = "SELECT * FROM `vcms_pages`";  
        $raw = DB::select($query);

        $this->pages = $this->_parse_data( $raw );
    }

    public function Build ( $page ) {
        $theme_path = $page->theme . ".views.";

        $query = "SELECT * FROM `vcms_pagesmeta` WHERE `page_id` = ?";
        $raw = DB::select($query, [ $page->id ]);

        $page->SetMeta($raw);
    }   

    private function _parse_data( $data ) {
        $result = [];

        $len = count($data);
        for( $i = 0; $i < $len; $i++ ) {
            $current = $data[ $i ];
            $translation = new Page( $current );

            array_push( $result, $translation );
        }

        return $result;
    }
}
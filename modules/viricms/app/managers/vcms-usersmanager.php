<?php namespace App\Managers;

use DB;

class UsersManager {
    
    public function __construct() {
        $query = "SELECT * FROM `vcms_users`";  
        $raw = DB::select($query);

        $this->users = $raw;
    }

    public function GetUserById( $id ) {
        $result;

        for ( $i = 0; $i < count( $this->users ); $i++ ) {
            if ( $this->users[$i]->id == $id ) {
                $result = $this->users[$i];
                break;
            }
        }

        return $result;
    }

    public function Build ( $user ) {
        $query = "SELECT * FROM `vcms_usersmeta` WHERE `user_id` = ?";
        $raw = DB::select($query, [ $user->id ]);

        $len = count( $raw );
        for ( $i = 0; $i < $len; $i++ ) {
            $key = $raw[$i]->meta_key;
            $value = $raw[$i]->meta_value;

            $user->$key = $value;
         }
    }
}
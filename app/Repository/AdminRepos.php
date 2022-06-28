<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin() {
        $sql = 'select a.username, a.contact, a.email ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.username';

        return DB::select ($sql);
    }

    public static function getAdminById($username){
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.username = ? ';

        return DB::select($sql, [$username]);
    }


    public static function update(object $admin){
        $sql = 'update admin ';
        $sql .= 'set contact = ?, email = ? ';
        $sql .= 'where username = ? ';

        DB::update($sql, [$admin->contact, $admin->email, $admin->username]);

    }
}


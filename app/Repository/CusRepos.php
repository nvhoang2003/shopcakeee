<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;
class CusRepos
{

    public static function getAllCus()
    {
        $sql = 'select c.* ';
        $sql .= 'from CUSTOMER as c ';
        $sql .= 'order by c.cusname';

        return DB::select ($sql);
    }

    public static function getCusById($cusid){
        $sql = 'select c.* ';
        $sql .= 'from CUSTOMER as c ';
        $sql .= 'where c.cusid = ? ';

        return DB::select($sql, [$cusid]);
    }

    public static function update(object $cus){
        $sql = 'update customer ';
        $sql .= 'set cusname = ?, dob = ?, gender = ?, contact = ?, email = ?, address = ? ';
        $sql .= 'where cusid = ? ';

        DB::update($sql, [$cus->cusname, $cus->dob, $cus->gender, $cus->contact, $cus->email, $cus->address, $cus->cusid]);

    }


}

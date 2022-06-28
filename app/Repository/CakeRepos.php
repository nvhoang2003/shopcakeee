<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CakeRepos
{
    public static function getAllCake()
    {
        $sql='select c.* ';
        $sql.='from cake as c ';
        $sql.='order by c.cakeid';
        return DB::select ($sql);
    }

    public static function getAllCakeWithevent()
    {
        $sql = 'select c.*, e.eventname as event ';
        $sql.= 'from cake as c ';
        $sql.='join event as e on c.event = e.eventid ';
        $sql.='order by c.cakeid';
        return DB::select($sql);
    }

    public static function getCakeById($cakeid)
    {
        $sql='select c.* ';
        $sql.='from cake as c ';
        $sql.='where c.cakeid = ? ';
        return DB :: select ($sql,[$cakeid]);
    }

    public static function insert(object $cake)
    {
        $sql = 'insert into cake ';
        $sql .= '(cakename, flavor, price, expiry, image, size, event) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$cake->cakename, $cake->flavor, $cake->price, $cake->expiry, $cake->image,
            $cake->size, $cake->event]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


    public static function update(object $cake)
    {
        $sql = 'update cake ';
        $sql .= 'set cakename = ?, flavor = ?, price = ?, expiry = ?, image = ?, size = ?, event = ? ';
        $sql .= 'where cakeid = ? ';

        DB::update($sql, [$cake->cakename, $cake->flavor, $cake->price, $cake->expiry, $cake->image, $cake->size, $cake->event, $cake->cakeid]);
    }

    public static function delete($cakeid)
    {
        $sql = 'delete from cake ';
        $sql .= 'where cakeid = ? ';

        DB::delete($sql, [$cakeid]);
    }
    public static function update_cake(object $cake)
    {
        $sql = 'update cake ';
        $sql .= 'set cakename = ?, flavor = ?, price = ?, expiry = ?, size = ?, event = ? ';
        $sql .= 'where cakeid = ? ';

        DB::update($sql, [$cake->cakename, $cake->flavor, $cake->price, $cake->expiry, $cake->size, $cake->event, $cake->cakeid]);
    }
}

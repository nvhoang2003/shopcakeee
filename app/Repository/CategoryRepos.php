<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategory()
    {
        $sql='select e.* ';
        $sql.='from EVENT as e ';
        $sql.='order by e.eventname';
        return DB::select ($sql);
    }

    public static function insert(object $event)
    {
        $sql = 'insert into event ';
        $sql .= '(eventname, image, description) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$event->eventname, $event->image, $event->description]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function getEventById($eventid)
    {
        $sql='select c.* ';
        $sql.='from event as c ';
        $sql.='where c.eventid = ? ';
        return DB :: select ($sql,[$eventid]);
    }

    public static function delete($eventid)
    {
        $sql = 'delete from event ';
        $sql .= 'where eventid = ? ';

        DB::delete($sql, [$eventid]);
    }

    public static function getEventByCakeId($cakeid)
    {
        $sql= 'select e.* ';
        $sql .= 'from event as e ';
        $sql .= 'join cake as c on e.eventid= c.event ';
        $sql .= 'where c.cakeid = ?';
        return DB::select($sql, [$cakeid]);
    }
    public static function update_category(object $event)
    {
        $sql = 'update event ';
        $sql .= 'set eventname = ?, description = ? ';
        $sql .= 'where eventid = ? ';

        DB::update($sql, [$event->eventname, $event->description, $event->eventid]);
    }
    public static function update(object $event)
    {
        $sql = 'update event ';
        $sql .= 'set eventname = ?, image = ?, description = ? ';
        $sql .= 'where eventid = ? ';

        DB::update($sql, [$event->eventname, $event->image, $event->description, $event->eventid]);
    }
}

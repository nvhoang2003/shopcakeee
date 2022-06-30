<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ClassroomRepos
{
    public static function getAllClass(){
        $sql='select c.* ';
        $sql.='from class as c ';
        $sql.='order by c.Name';
        return DB::select ($sql);
    }

    public static function getClassById($id){
        $sql='select c.* ';
        $sql.='from class as c ';
        $sql.='where c.id = ? ';
        return DB :: select ($sql,[$id]);
    }

    public static function insert($class){
        $sql = 'insert into class ';
        $sql .= '(Name, StartDate, Size) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$class->Name, $class->StartDate, $class->Size]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($class){
        $sql = 'update class ';
        $sql .= 'set Name = ?, StartDate = ?, Size = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$class->Name, $class->StartDate, $class->Size, $class->id]);

    }

    public static function delete($id){
        $sql = 'delete from class ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }


}

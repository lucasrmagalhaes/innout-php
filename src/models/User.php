<?php

class User extends Model {
    protected static $tableName = 'users';
    
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin'
    ];  

    public static function getActiveUsersCount() {
        return static::getCount(['raw' => 'end_date IS NULL']);
    }

    public function insert() {
        $this->is_admin = $this->is_admin ? 1 : 0;
        
        if (!$this->end_date) $this->end_date = null;
        
        return parent::insert();
    }
}
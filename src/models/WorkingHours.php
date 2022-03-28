<?php

class WorkingHours extends Model {
    protected static $tableName = 'working_hours';
    protected static $columns = [
        'id',
        'user_id',
        'work_date',
        'time1',
        'time2',
        'time4',
        'time4',
        'worked_time'
    ];
}
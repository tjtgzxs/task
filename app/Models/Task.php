<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Boolean;

class Task extends Model
{
    use HasFactory;
    public function project(){
        return $this->belongsTo(Project::class);
    }

    /**
     * change task priority
     * @param int $project_id
     * @param array $tasks
     * @return bool
     */
    public static function ChangePriority(int $project_id,array $tasks):int
    {
        $case_sql="";
        foreach ($tasks as $value){
            $case_sql.=" WHEN {$value['id']} THEN {$value['priority']} ";
        }
        $sql="UPDATE `tasks` set priority= CASE id {$case_sql} END WHERE project_id={$project_id} ";

        $affected=DB::update($sql);
        return  $affected;
    }
}

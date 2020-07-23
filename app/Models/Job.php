<?php
namespace App\Models;

//cuando tu utilizas un ORM heredas del ORM para hacerlo homogeneo con la bd
use Illuminate\Database\Eloquent\Model;

class Job extends Model{

    protected $table = 'jobs';

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
    }
}
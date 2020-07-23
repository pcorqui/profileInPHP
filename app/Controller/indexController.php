<?php

namespace App\Controller;

use App\Models\Job;
use App\Models\Project;

class IndexController extends BaseController {
    public function indexAction(){
        $jobs = Job::all();
        $project1 = project::all();
          
        
        $projects = [
            $project1
        ];
        
        $name = 'Hector Benitez';
        $limitMonths = 2000;
        
       return $this->renderHTML('index.twig',[
        'name' => $name,
        'jobs' => $jobs
       ]);
    }
}

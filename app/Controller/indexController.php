<?php

namespace App\Controller;

use App\Models\{Job, Project};

class IndexController extends BaseController {
    public function indexAction(){
        $jobs = Job::all();
        $project1 = Project::all();
          
        
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

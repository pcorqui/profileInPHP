<?php
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Project;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'curso',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

if(!empty($_POST)){
    $project = new Project();
    $project->name_project = $_POST['name'];
    $project->desc_project = $_POST['description'];
    $project->save();
}



/*var_dump($_GET);
var_dump($_POST);*/
?>
<html>
    <head>
        <title>Add project</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Add project</h1>
        <form action="addProjects.php" method="post">
            <label for="">Name:</label>
            <input type="text" name="name"><br>
            <label for="">description:</label>
            <input type="text" name="description"><br>
            <button type="submit">Save</button>
        
        </form>
    </body>
</html>
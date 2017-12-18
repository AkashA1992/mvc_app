<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{    
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        /*session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        */
        self::getTemplate('all_tasks', $records);

    }
    
    public static function getAllTask()
    {        
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        //print($temp);
        //$_SESSION["userID"];
        //print_r($_SESSION["userID"]);
        $records = todos::findTask($_SESSION["userID"]);
        
        //print_r($records);
        /*session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        */
        self::getTemplate('all_tasks', $records);
        //return $records;
    }
        
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        print_r($_POST);
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);

    }

    public static function insertTask() {
       self::getTemplate('insert_task');

    }
    
    public static function getIfSet(&$value, $default = null){
        return isset($value) ? $value : $default;
    }
    
    public static function save() {
               
        $user = new todo();

        $id = tasksController::getIfSet($_REQUEST['id']);
        if(!is_null($id)){
            $user = todos::findOne($_REQUEST['id']);
        }        

        $user->owneremail = $_POST['owneremail'];
        $user->ownerid = $_POST['ownerid'];
        $user->createddate = $_POST['createddate'];
        $user->duedate = $_POST['duedate'];
        $user->message = $_POST['message'];
        $user->isdone = $_POST['isdone'];
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        //print_r($_SESSION["userID"]);
        $user->userid = $_SESSION["userID"];
        $user->save();
        self::getAllTask();
        //header("Location: index.php?page=tasks&action=all");

    }
    

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=getAllTask");
        

    }

}
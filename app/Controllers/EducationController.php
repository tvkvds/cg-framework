<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\MySql;
use App\Models\EducationModel;
use App\Libraries\View;
use App\Models\RoleModel;

class EducationController extends Controller
{
    
    /**
     * Show's a list of educations
     */
    public function index()
    {
        
        $education = new EducationModel();
        $id = Helper::getUserIdFromSession(); //set user id 

        View::render('educations/index.view', [
            
            'educations' => $education->getUserEducations($id)
           
        ]);
    }

    /**
     * Show education record
     */
    public function show()
    {
        $educationId = Helper::getIdFromUrl('education');
        
        $education = EducationModel::load()->get($educationId);

        View::render('educations/show.view', [
            'education' => $education, 
        ]);
    }


    /**
     * Show a form to create a new education
     */
    public function create()
    {
        return View::render('educations/create.view', [
            'method'    => 'POST', // set method for form
            'action' => '/education/store', //set destination for form
            'roles'     => RoleModel::load()->all(), //get roles for permission middleware
        ]);
    }

    //store new education from create()
    public function store()
    {

        $education = $_POST;  //set vars from user

        $education['user_id'] = Helper::getUserIdFromSession(); //set id of user

        $education['created_by'] = Helper::getUserIdFromSession(); //add id of creator
        $education['created'] = date('Y-m-d'); // add timestamp

        EducationModel::load()->store($education);  //send to database

        View::redirect("educations"); //redirect to index page educations

    }

    /**
     * Show a form to edit a education record
     */
    public function edit()
    {
        $education = new EducationModel;

        $education->id = Helper::getIdFromUrl('education'); //gets id of requested education
        
        $education = EducationModel::load()->get($education->id); //gets one education record

        return View::render('educations/edit.view', [
            'method'    => 'POST',  //set method for the form
            'action'    => '/education/' . $education->id . '/update', //set where the form must be submitted to
            'education' => $education, //set data being passed to page
            'roles'     => RoleModel::load()->all(), //load roles for permission middleware
        ]);
    }

    public function update()
    {
        $education = $_POST;

        $user_id = Helper::getUserIdFromSession(); //set id of user

        if ($education['user_id'] === $user_id){
        
        //find specific education in database, get user_id, compare it to session id, 
        //if they don't compare, redirect back
        //is circumvented on the front end by not showing educations that aren't of the user
       

        EducationModel::load()->update($education, $education['user_id']); //send to database

        View::redirect('education');
        }

        else {

        View::redirect('education');
        //add flash message?
        }
    }


}
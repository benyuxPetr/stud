<?php

namespace Src\Core\Controller;

use Src\Core\Controller;
use Src\Core\Helper\Validation;
use Src\Core\DI;

class StudentsController extends Controller
{
    public function __construct(DI $di)
    {
        parent::__construct($di);
    }

    public function add(){
        $val = new Validation;

        $name = $this->request->post['name'];
        $lastName = $this->request->post['lastName'];
        $sex = $this->request->post['sex'];
        $group = $this->request->post['group'];
        $email = $this->request->post['email'];
        $exam = $this->request->post['exam'];
        $inputDate = $this->request->post['inputDate'];
        $resident = $this->request->post['resident'];

        $val->name('name')->value($name)->pattern('words');
        $val->name('lastName')->value($lastName)->pattern('words');
        $val->name('sex')->value($sex)->sex();
        $val->name('group')->value($group)->pattern('group');
        $val->name('email')->value($email)->pattern('email');
        $val->name('exam')->value($exam)->exam();
        $val->name('inputDate')->value($inputDate)->pattern('date');
        $val->name('resident')->value($resident)->resident();


        if(!$val->getErrors()){
            if($resident == ""){
                $resident = "FALSE";
            }elseif ($resident == "resident"){
                $resident = "TRUE";
            }
            $sql = 'INSERT INTO students (student_id, `name`, last_name, sex, group_number, email, exam_score, birth_date, resident) values (NULL , "'.$name.'", "'.$lastName.'",  "'.$sex.'", "'.$group.'", "'.$email.'", "'.$exam.'", "'.$inputDate.'", '.$resident.');';
            $this->db->query($sql);
        }

        header("HTTP/1.1 301 Moved Permanently");
        header("Location: http://student.list");
    }
}
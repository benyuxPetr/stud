<?php

namespace Src\Core\Controller;

use Src\Core\Controller;
use Src\Core\DI;

class HomeController extends Controller
{
    public function __construct(DI $di)
    {
        parent::__construct($di);
    }

    public function index(){


        $studentsCount = $this->getStudentCount();

        if($this->request->get['page']){
            $perPage = 50;
            $curentPage = (int) $this->request->get['page'];
            $offset = $perPage * ($curentPage-1);
            $students = $this->getStudents('student_id',$perPage, $offset);
        }else{
            $students = $this->getStudents();
        }

        $data = [
            'pageName' => 'Students',
            'studentTable' => $students,
            'studentTableCount' => $studentsCount
        ];
        $this->view->render('home', $data);
    }

    private function getStudents($order = 'student_id', $limit = '50', $offset = '0'){
        return $this->db->query("SELECT * FROM students ORDER BY $order LIMIT $limit OFFSET $offset");
    }

    private function getStudentCount(){
        return $this->db->query("SELECT COUNT(*) FROM students")[0]['COUNT(*)'];
    }
}
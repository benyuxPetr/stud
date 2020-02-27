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

        $perPage = 50;
        $studentsCount = $this->getStudentCount();
        $allPages = ceil($studentsCount/$perPage);

        $pagination = [
            'allPages' => $allPages
        ];

        if($this->request->get['page']){
            $currentPage = (int) $this->request->get['page'];
            if($currentPage > $allPages){
                $currentPage = $allPages;
            }
            $offset = $perPage * ($currentPage-1);
            $students = $this->getStudents('student_id',$perPage, $offset);
            $pagination['currentPage'] = $currentPage;
        }else{
            $students = $this->getStudents();
            $pagination['currentPage'] = 1;
        }
        $data = [
            'pageName' => 'Students',
            'studentTable' => $students,
            'studentTableCount' => $studentsCount,
            'pagination' => $pagination
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
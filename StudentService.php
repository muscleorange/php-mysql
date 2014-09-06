<?php
require_once 'StudentDao.php';

class StudentService{

    public function add($values_arr){
        $studao = new StudentDao();
        $studao->add($values_arr);
    }

    //分页查找
    public function findByPage($page, $pageSize){
        $studao = new StudentDao();
        return $studao->findByPage($page, $pageSize);
    }

    //查找记录数
    public function getCount(){
        $studao = new StudentDao();
        return $studao->getCount();
    }
}


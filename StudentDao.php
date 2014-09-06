<?php
require_once 'BaseDao.php';

class StudentDao extends BaseDao {

    //插入数据库
    public function add($values_arr){
        $sql = "INSERT INTO student(Name,Sex,Age) VALUES(?,?,?)";
        $this->execSql($sql, $values_arr);
    }

    //分页查找
    public function findByPage($page, $pageSize){
        $sql = "SELECT * FROM student LIMIT ?,?";
        $start = ($page - 1) * $pageSize;
        $params = array($start, $pageSize);
        return $this->select($sql, $params);
    }

    //查找总记录数
    public function getCount(){
        $sql = "SELECT COUNT(*) AS cn FROM student";
        $res = $this->select($sql, null);
        if($res && count($res) > 0)
            return $res[0]['cn'];
        return 0;
    }
}

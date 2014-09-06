<?php
require_once 'StudentService.php';

$funcMap = array(
    'gs' => 'getStudents',
);

$fname = $_GET['f'];
$fname = $funcMap[$fname];
$data = call_user_func($fname, $_GET);
header('Content-type: application/json');
echo json_encode($data);

//分页查询记录
function getStudents($params){
    $page = $params['page'];
    $rows = $params['rows'];
    $stuService = new StudentService();
    $res = $stuService->findByPage($page, $rows);
    $count = $stuService->getCount();
    $data = array(
        'rows' => $res,
        'total' => $count
    );
    return $data;
}




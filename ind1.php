<?

// $deal_data = $_REQUEST['data']['ID'];


// $name_group = $deal_data['params']['select']['NAME'];
//  $second_method = executeREST('calendar.event.add', array('type' => 'user', 'ownerId' => '56', 'from' => '2024-02-13', 'to' => '2024-02-14', section => '896', name => 'result'));
// $startBp = executeREST('bizproc.workflow.start', array('TEMPLATE_ID' => '176', 'DOCUMENT_ID' => array('lists', 'BizprocDocument', '506'), 'PARAMETERS' => array('Parameter1' => $_REQUEST['data']['id'])));
file_put_contents('./dump1.txt', print_r($_REQUEST, 1));// получить дамп
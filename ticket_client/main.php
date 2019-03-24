<?php

/****************************************/
/* purpose: client.php */
/* author:  xiti  */
/* date:    2019-03-09 */
/****************************************/

require_once("get_access_token.php");
require_once("req_order_ticket.php");
require_once("query_ticket_result.php");
require_once("cancel_order.php");
require_once("cancel_order_v2.php");
require_once("upload_image.php");

function main()
{
    // 获取token
    $access_token = get_access_token();
    print_r($access_token."\n");
    $type = 1;
    if ($type == 1) {
        // 申请订票
        req_order_ticket($access_token);
    } else if ($type == 2) {
        // 查询订单
        query_ticket_result($access_token);
    } else if ($type == 3) {
        // 订单退单
        cancel_order($access_token);
    } else if ($type == 4) {
        // 订单撤单
        cancel_order_v2($access_token);
    } else if ($type == 5) {
        // 订单撤单
        upload_IdImg($access_token);
    } 


}

main();

?>

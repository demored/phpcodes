<?php

//tcp client

//请求文件
set_time_limit(0);
//IP
$host = "39.100.145.198";
//端口
$port = 9502;
//发送内容
$send_data = [
    "req_type" => "open_single_door",
    "door_num" => 100
];

$send_msg = json_encode($send_data);


function send_tcp_message($host, $port, $message)
{
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    if(empty($socket)){
        die("Could not create  socket\n");
    }
    @socket_connect($socket, $host, $port);

    $num = 0;
    $length = strlen($message);
    do
    {
        $buffer = substr($message, $num);
        $ret = @socket_write($socket, $buffer);
        $num += $ret;
    } while ($num < $length);

    $ret = '';
    do
    {
        $buffer = @socket_read($socket, 1024, PHP_BINARY_READ);
        $ret .= $buffer;
    } while (strlen($buffer) == 1024);

    socket_close($socket);

    return $ret;
}

$ret = send_tcp_message($host, $port, $send_msg);
print_r($ret);
//$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)or die("Could not create  socket\n"); // 创建一个Socket
////设置$socket 发送超时1秒，接收超时3秒：
//socket_set_option($socket,SOL_SOCKET,SO_RCVTIMEO,array("sec"=>10, "usec"=>0 ) );
//socket_set_option($socket,SOL_SOCKET,SO_SNDTIMEO,array("sec"=>3, "usec"=>0 ) );
//
//$connection = socket_connect($socket, $host, $port) or die("Could not connet server\n");  // 连接
//socket_set_nonblock($socket);
//
////socket_write($socket_create, $aa = "abcdef我", 10);
//socket_write($socket, $send_msg, strlen($send_msg));
//sleep(5);	//机器运算要比网络传输快几百倍，服务器还没有返回数据呢就已经开始运行了，当然就收的是空值了
//
//$response_msg = "";
//
//while ($buff = @socket_read($socket, 1024, PHP_NORMAL_READ)) {
//    echo("收到返回:" . $buff . "\n");
//    $response_msg .= $buff;
//}
//
//echo $response_msg;
//socket_close($socket);


<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Content-Type: application/x-www-form-urlencoded");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 86400");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Access-Control-Allow-Credentials: true');

foreach (getallheaders() as $name => $value) {
  LogsW::write("$name: $value");
}
LogsW::write(json_encode($_SERVER['REQUEST_METHOD']));
LogsW::write($_SERVER['REQUEST_URI']);
LogsW::write(($_POST));

$data = json_decode(file_get_contents("php://input"));

$price = $data->price;
LogsW::write(json_encode($data)   );
LogsW::write( $price  );

<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Key, Authorization');
header('Access-Control-Allow-Credentials: true');

foreach (getallheaders() as $name => $value) {
  LogsW::write("$name: $value");
}
LogsW::write(json_encode($_SERVER));
LogsW::write(json_encode($_SERVER['REQUEST_METHOD']));
LogsW::write($_SERVER['REQUEST_URI']);
LogsW::write(json_encode($_REQUEST));

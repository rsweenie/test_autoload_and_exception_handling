<?php
require_once 'vendor/autoload.php';

use Monolog\Logger;

print "<p>Hello World!<p>";
$fooObject = new Foo();
$variables = ['foo' => 'bar'];


set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    if (error_reporting()) {
        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
    }
});

// Otherwise you get a big ugly PHP Exception box generated even though your exception handling works.
// See https://www.hostingadvice.com/how-to/php-show-errors/
//error_reporting(~E_NOTICE); // OR WRITE YOUR OWN ERROR HANDLER FUNCTION!
try {
    if ($variables['node'] instanceof Foo) {
        $node = $variable['node'];
    } else {
        throw new \Exception("I don't think so.");
    }
} catch (Exception $e) {
    // print '<p>Caught Exception: ' . $e->getMessage() . '</p>'; // or generate a log
    $log = new Logger('Creighton');
    $log->addNotice($e->getMessage());
}

// THIS IS OLD WAY
//if ($variables['node'] && $variables['node'] instanceof Foo ) {
//    print "<p>yes</p>";
//} else {
//    print "<p>no</p>";
//}
<?php

for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
}






//https://www.w3schools.com/php/php_looping.asp

//https://www.w3schools.com/php/php_switch.asp

//https://www.w3schools.com/php/php_if_else.asp

//https://www.w3schools.com/php/php_operators.asp


/**

define("GREETINGd", "Welcome to W3Schools.com!");
echo GREETINGd;

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

define("GREETINGf", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETINGf;
}

myTest();

**/



/**
echo(pi()); // returns 3.1415926535898

echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

echo(abs(-6.7));  // returns 6.7

echo(sqrt(64));  // returns 8

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

echo(rand());

echo(rand(10, 100));
***/


/**
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);



$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
**/

/**
echo strlen("Hello world!"); // outputs 12

echo str_word_count("Hello world!"); // outputs 2

echo strrev("Hello world!"); // outputs !dlrow olleH

echo strpos("Hello world!", "world"); // outputs 6

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
**/

/**
$s = "Hello world!";
echo $s;

$x = 5985;
var_dump($x);

$y = 10.365;
var_dump($y);



$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

class Car {

    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }

}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();


$x = "Hello world!";
$x = null;
var_dump($x);

/*/


/**
$datas = ['Aminul','Ariful','Furkan'];
$name = '';
foreach ($datas as $data){
    $name .= $data.'<br/>';
}
echo $name;
 **/

//phpinfo();




/*****

$_COOKIE = {string[15]} ["GA1.1.588285388...", "yes", "yes", "yes", "yes", +10 more]
_ga = "GA1.1.588285388.1661835608"
cookielawinfo-checkbox-necessary = "yes"
cookielawinfo-checkbox-functional = "yes"
cookielawinfo-checkbox-performance = "yes"
cookielawinfo-checkbox-analytics = "yes"
cookielawinfo-checkbox-advertisement = "yes"
cookielawinfo-checkbox-others = "yes"
CookieLawInfoConsent = "eyJuZWNlc3NhcnkiOnRydWUsImZ1bmN0aW9uYWwiOnRydWUsInBlcmZvcm1hbmNlIjp0cnVlLCJhbmFseXRpY3MiOnRydWUsImFkdmVydGlzZW1lbnQiOnRydWUsIm90aGVycyI6dHJ1ZX0="
viewed_cookie_policy = "yes"
_scid = "0dfee50d-3e8c-489f-ac5e-8c838c86ff64"
_sctr = "1|1663005600000"
_ga_HS1VLW7ZRR = "GS1.1.1663063389.1.1.1663063532.60.0.0"
_ga_WMGBWZ5ZP8 = "GS1.1.1664610297.1.1.1664611054.0.0.0"
XDEBUG_SESSION = "PHPSTORM"
_ga_LQMX3PY15T = "GS1.1.1667816543.12.1.1667824526.0.0.0"
$_SERVER = {array[39]}





$_SERVER = {array[39]}
HTTP_HOST = "localhost"
HTTP_CONNECTION = "keep-alive"
HTTP_CACHE_CONTROL = "max-age=0"
HTTP_SEC_CH_UA = ""Google Chrome";v="105", "Not)A;Brand";v="8", "Chromium";v="105""
HTTP_SEC_CH_UA_MOBILE = "?0"
HTTP_SEC_CH_UA_PLATFORM = ""Linux""
HTTP_UPGRADE_INSECURE_REQUESTS = "1"
HTTP_USER_AGENT = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36"
HTTP_ACCEPT = "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng;q=0.8,application/signed-exchange;v=b3;q=0.9"
 HTTP_SEC_FETCH_SITE = "none"
 HTTP_SEC_FETCH_MODE = "navigate"
 HTTP_SEC_FETCH_USER = "?1"
 HTTP_SEC_FETCH_DEST = "document"
 HTTP_ACCEPT_ENCODING = "gzip, deflate, br"
 HTTP_ACCEPT_LANGUAGE = "en"
 HTTP_COOKIE = "_ga=GA1.1.588285388.1661835608; cookielawinfo-checkbox-necessary=yes; cookielawinfo-checkbox-functional=yes; cookielawinfo-checkbox-performance=yes; cookielawinfo-checkbox-analytics=yes; cookielawinfo-checkbox-advertisement=yes; cookielawinfo-checkbox-others=yes; CookieLawInfoConsent=eyJuZWNlc3NhcnkiOnRydWUsImZ1bmN0aW9uYWwiOnRydWUsInBlcmZvcm1hbmNlIjp0cnVlLCJhbmFseXRpY3MiOnRydWUsImFkdmVydGlzZW1lbnQiOnRydWUsIm90aGVycyI6dHJ1ZX0=; viewed_cookie_policy=yes; _scid=0dfee50d-3e8c-489f-ac5e-8c838c86ff64; _sctr=1|1663005600000; _ga_HS1VLW7ZRR=GS1.1.1663063389.1.1.1663063532.60.0.0; _ga_WMGBWZ5ZP8=GS1.1.1664610297.1.1.1664611054.0.0.0; XDEBUG_SESSION=PHPSTORM; _ga_LQMX3PY15T=GS1.1.1667816543.12.1.1667824526.0.0.0"
 PATH = "/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/snap/bin"
 SERVER_SIGNATURE = "<address>Apache/2.4.41 (Ubuntu) Server at localhost Port 80</address>\n"
 SERVER_SOFTWARE = "Apache/2.4.41 (Ubuntu)"
 SERVER_NAME = "localhost"
 SERVER_ADDR = "::1"
 SERVER_PORT = "80"
 REMOTE_ADDR = "::1"
 DOCUMENT_ROOT = "/var/www/html"
 REQUEST_SCHEME = "http"
 CONTEXT_PREFIX = ""
 CONTEXT_DOCUMENT_ROOT = "/var/www/html"
 SERVER_ADMIN = "webmaster@localhost"
 SCRIPT_FILENAME = "/var/www/html/php/index.php"
 REMOTE_PORT = "51170"
 GATEWAY_INTERFACE = "CGI/1.1"
 SERVER_PROTOCOL = "HTTP/1.1"
 REQUEST_METHOD = "GET"
 QUERY_STRING = ""
 REQUEST_URI = "/php/"
 SCRIPT_NAME = "/php/index.php"
 PHP_SELF = "/php/index.php"
 REQUEST_TIME_FLOAT = {float} 1668425508.8429
 REQUEST_TIME = {int} 1668425508

 ***/
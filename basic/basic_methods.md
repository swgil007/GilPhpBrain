
# 🙆‍♂️ import 🙇‍♂️

[php.net](https://www.php.net/manual/en/function.array-key-exists)

[]()

[]()

[]()

[]()

[]()

<br>

---

## `array_key_exists( string|int $key, array $array ) : bool`

버전 : PHP 4 >= 4.0.7, PHP 5, PHP 7

매개인자의 $key가 $array에 포함되면 true를 return한다.

array index의 어떤 값이든 $key에 올 수 있다.

```php
<?php
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
?>
```


## `count( Countable|array $value [, int $mode = COUNT_NORMAL ] ) : int`

버전 : PHP 4, PHP 5, PHP 7

$value로 주어진 배열이나 객체의 모든 요소를 카운팅하여 return 한다.





## `chr( int $codepoint ) : string`

버전 : PHP 4, PHP 5, PHP 7

정수형 $codepoint를 사용해 해당하는 1글자의 문자열을 return 한다.


## `date( string $format [, int|null $timestamp = null ] ) : string`

버전 : PHP 4, PHP 5, PHP 7

$timestamp를 사용하여 지정된 형식 $format에 따라 포맷된 문자열 또는 타임스탬프가 없는 경우 현재 시간을 반환한다. 

즉, $timestamp는 선택 사항이며 기본값은 time()이다.

```php
<?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');


// Prints something like: Monday
echo date("l");

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822);

// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>
```



## `explode( string $separator , string $string [, int $limit = PHP_INT_MAX ] ) : array`

버전 : PHP 4, PHP 5, PHP 7

문자열을 분할하여 문자열 배열로 return 한다.

return된 각 문자열은 $separator로 $string을 분할하여 형성된 하위 문자열이다.

```php
<?php
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?>
```







## `fopen( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] ) : resource`

버전 : PHP 4, PHP 5, PHP 7

`fopen`은 파일 이름으로 지정된 명명된 리소스를 스트림에 바인딩한다.


$filename이 "scheme://" 형식인 경우, URL로 가정하고 PHP는 해당 스키마에 대한 프로토콜 핸들러(랩퍼라고도 함)를 검색한다.



$mode에는 아래와 같은 키워드를 사용할 수 있다.

|mode|설명|
|:----:|:--:|
|'r'|읽기 전용으로 연다. <br> 파일 포인터를 파일 시작 부분에 놓는다.|
|'r+'|읽기 및 쓰기모드로 연다. <br> 파일 포인터를 파일 시작 부분에 놓는다.|
|'w'|쓰기 전용으로 연다. <br> 파일 시작 부분에 파일 포인터를 놓고 파일을 0 길이로 잘라낸다. <br> 파일이 없는 경우 파일을 생성한 후 시도해야 한다.
|'w+'|읽기 및 쓰기모드로 연다. <br> 파일 시작 부분에 파일 포인터를 놓고 파일을 0 길이로 잘라낸다. <br> 파일이 없는 경우 파일을 생성한 후 시도해야 한다.|
|'a'|쓰기 전용으로 연다. <br>파일 포인터를 파일 끝에 놓는다. <br> 파일이 없는 경우 파일을 생성한 후 시도해야 한다. <br> 이 모드에서는 fseek()에 아무런 영향이 없으며 쓰기가 항상 추가된다.|
|'a+'|읽기 및 쓰기모드로 연다. <br> 파일 포인터를 파일 끝에 놓는다. <br> 파일이 없는 경우 파일을 생성한 후 시도해야 한다. <br> 이 모드에서는 fseek()가 읽기 위치에만 영향을 주며, 쓰기는 항상 추가된다.|
|'x'|쓰기 전용으로 파일을 생성한 후 연다. <br> 파일 포인터를 파일 시작 부분에 놓는다. <br> 파일이 이미 있는 경우 false를 반환하고 E_WARNING 수준의 오류를 생성하여 fopen() 호출이 실패한다. <br> 파일이 없는 경우 파일을 생성한 후 시도해야 한다. <br> underlying open(2) system 호출에 O_EXCL l O_CREATE 플래그를 지정하는 것과 같다.|
|'x+'|읽기 및 쓰기모드로 파일을 생성한 후 연다. <br>  'x'와 같은 동작을 한다.|
|'c'|쓰기 전용으로 파일을 연다. <br>파일이 없으면 파일이 생성된다.<br> 이 기능이 있는 경우 'w'가 아니라 잘리지 않거나 이 기능에 대한 호출이 실패한다._'x'의 경우처럼_. <br>파일 포인터는 파일 시작 부분에 있다. <br>이 기능은 'w'를 사용하면 잠금이 획득되기 전에 파일이 잘릴 수 있으므로 파일을 수정하기 전에 자문 잠금을 가져오려는 경우(잠금이 요청되면 ftruncate()를 사용할 수 있으므로) 유용할 수 있다.|
|'c+'|읽기 및 쓰기를 위해 파일을 연다. <br> 'c'와 같은 동작을 한다.|
|'e'|열려 있는 파일 설명자에 근접 실행 플래그를 설정한다. <br> POSIX.1-2008 호환 시스템에서 컴파일된 PHP에서만 사용할 수 있다.|


## `fwrite( resource $handle , string $string [, int $length ] ) : int`

버전 : PHP 4, PHP 5, PHP 7

`fopen()`을 통해 hadle이 가르키는 file stream $handle에 $string 내용을 작성한다.


## `fclose( resource $stream ) : bool`

버전 : PHP 4, PHP 5, PHP 7

`fopen`을 통해 hadle이 가르키는 file stream $stream을 닫는다.



## `hexdec( string $hex_string ) : int|float`

버전 : PHP 4, PHP 5, PHP 7


$hex_string 인수가 나타내는 16 진수에 해당하는 문자열을 10진수 숫자형으로 return한다. 

hexdec()는 16 진수가 아닌 문자를 무시한다. 

```php
<?php
var_dump(hexdec("See"));
var_dump(hexdec("ee"));
// both print "int(238)"

var_dump(hexdec("that")); // print "int(10)"
var_dump(hexdec("a0")); // print "int(160)"
?>
```

PHP 7.4.0부터 유효하지 않은 문자를 제공하는 것은 deprecated 되었다.


## `is_array( mixed $value ) : bool`

버전 : PHP 4, PHP 5, PHP 7

$value가 array인 경우 true를 return한다.

```php
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
# Array
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';
# not an Array


```


## `isset( mixed $var , mixed ...$vars ) : bool`

버전 : PHP 4, PHP 5, PHP 7


변수가 선언되었고 null이 아닐 경우 true를 return한다.

변수가 unset() 함수로 설정 해제된 경우 더 이상 설정된 것으로 간주되지 않는다.

null에 할당된 변수를 확인할 때 false를 반환한다.

또한 null 문자("\0")는 PHP null 상수와 같지 않다.

여러 개의 파라미터가 제공되는 경우, 모든 파라미터가 설정된 것으로 간주되는 경우에만 isset()가 true를 반환한다. 

왼쪽에서 오른쪽으로 진행되며 설정되지 않은 변수가 발견되면 즉시 중지된다.


```php
<?php

$var = '';

// This will evaluate to TRUE so the text will be printed.
if (isset($var)) {
    echo "This var is set so I will print.";
}

// In the next examples we'll use var_dump to output
// the return value of isset().

$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE

?>
```

## `list( mixed $var [, mixed ...$vars ] ) : array`

버전 : PHP 4, PHP 5, PHP 7

array() method 같이 함수가 아니라 PHP 언어 구조로, 
list($var1, $var2, ...)와 같이 한번에 변수 목록을 할당 할 때 사용한다.

```php
<?php

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL
?>
```


## `microtime([ bool $as_float = false ] ) : string|float`

버전 : PHP 4, PHP 5, PHP 7

microtime()은 현재 Unix 타임스탬프(마이크로초)를 반환한다.

이 기능은 하루 중 시스템 호출을 받는 운영 체제에서만 사용할 수 있다.

성능 측정의 경우 hrtime()을 사용하는 것이 권장된다.

```php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

```

## `mktime ( int $hour [, int|null $minute = null [, int|null $second = null [, int|null $month = null [, int|null $day = null [, int|null $year = null ]]]]] ) : int|false`

버전 : PHP 4, PHP 5, PHP 7

지정된 인수에 해당하는 Unix 타임스탬프를 반환한다.

생략된 인수는 로컬 날짜 및 시간에 따라 현재 값으로 설정된다.

인수 없이 mktime()을 호출하는 것은 deprecated 되었다.

```php
// Set the default timezone to use. Available as of PHP 5.1
date_default_timezone_set('UTC');

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// Prints something like: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));

```



## `str_replace( array|string $search , array|string $replace , string|array $subject [, int &$count = null ] ) : string|array`

버전 : (PHP 4, PHP 5, PHP 7)

$subject에서 $search의 값을 $replace의 변수로 바꾼 후 string이나 array로 return한다.

preg_replace()와 비교하여 복잡한 정규표현식이 필요 없다는 특징이 있다.

```php
<?php
// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Provides: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

// Provides: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
?>
```

## `strtotime( string $datetime [, int|null $baseTimestamp = null ] ) : int|false`

버전 : PHP 4, PHP 5, PHP 7

문자열 타입의 $datetime을 Unix timestamp로 변환한다.

날짜가 주어지지 않고 변화량만 주어지면 로컬 타임이 사용된다.

+1 day, +1 week 등이 사용될 수 있고, 음수값도 사용 가능하다.


```php
$timestamp = strtotime("+1 week"); 
echo date("Y-m-d", $timestamp), "<br/>"; 
# 2021-01-11


$timestamp = strtotime("2020-12-01 +1 week"); 
echo date("Y-m-d", $timestamp), "<br/>";
# 2020-12-08
```


## `unset ( mixed $var , mixed ...$vars ) : void`

버전 : PHP 4, PHP 5, PHP 7

unset()은 지정된 변수 $var를 제거한다.

함수 내에서 unset()은 제거하려는 변수 유형에 따라 달라질 수 있다.

전역 변수가 함수 내에서 설정되지 않은 경우 로컬 변수만 제거 된다.

호출 환경의 변수는 unset()이 호출되기 전과 동일한 값을 유지한다.


## `var_dump( mixed $value , mixed ...$values ) : void`

버전 : PHP 4, PHP 5, PHP 7

$value에 대한 정보를 덤프한다.

이 함수는 해당 유형 및 값을 포함하는 하나 이상의 식에 대한 구조화된 정보를 표시한다. 

배열 및 개체는 구조를 표시하기 위해 들여써진 값으로 반복적으로 탐색된다.

객체가 `__debugInfo()` 메서드를 구현하지 않는 한 객체의 모든 공용, 개인 및 보호 속성은 출력에서 반환된다.
_PHP 5.6.0에서 구현됨_

```php
<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>

/*
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  array(3) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
  }
}
*/
```


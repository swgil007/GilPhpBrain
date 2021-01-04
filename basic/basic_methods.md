
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



## `chr( int $codepoint ) : string`

버전 : PHP 4, PHP 5, PHP 7

정수형 $codepoint를 사용해 해당하는 1글자의 문자열을 return 한다.



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

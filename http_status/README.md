# HTTP Status code for Node

Utility to interact with HTTP status code.


### Developers

- [Anatoly Cherkasov](https://github.com/avcherkasov)


## Usage

Once you require this class, you may call it with either an HTTP code or a message name. With an HTTP code, you will get the message name while with a message name you will get an HTTP code. Simple.


### Sample

This class is very simple. 

```php
include_once "HttpStatus.php"

/*** @var HttpStatus $httpStatus **/
$httpStatus = HttpStatus::valueOf("301");
// or
$httpStatus = HttpStatus::valueOf(301);
// or
$httpStatus = HttpStatus::valueOf(HttpStatus::SC_MOVED_PERMANENTLY);


// Print int(301)
var_dump(HttpStatus::SC_MOVED_PERMANENTLY);

// Print string(21) "301 Moved Permanently"
var_dump($httpStatus->getCodeWithReasonPhrase());

// Print int(301)
var_dump($httpStatus->getStatusCode());

// Print string(17) "Moved Permanently"
var_dump($httpStatus->getReasonPhrase());

// Print bool(false)
var_dump($httpStatus->is1xxInformational());

// Print bool(false)
var_dump($httpStatus->is2xxSuccessful());

// Print bool(true)
var_dump($httpStatus->is3xxRedirection());

// Print bool(false)
var_dump($httpStatus->is4xxClientError());

// Print bool(false)
var_dump($httpStatus->is5xxServerError());

// Print bool(false)
var_dump($httpStatus->isError());
```

### Other sample

```php
include_once "HttpStatus.php"

/*** @var HttpStatus $httpStatus **/
$httpStatus = HttpStatus::valueOf(301)->getReasonPhrase();
// Print string(17) "Moved Permanently"
```

```php
include_once "HttpStatus.php"

/*** @var HttpStatus $httpStatus **/
$httpStatus = HttpStatus::valueOf(404)->isError();
// Print bool(true)
```
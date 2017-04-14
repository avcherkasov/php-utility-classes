<?php

/**
 * Constants enumerating the HTTP status codes.
 *
 * @author Anatoly Cherkasov
 *
 * @link http://www.iana.org/assignments/http-status-codes HTTP Status Code Registry
 * @link http://en.wikipedia.org/wiki/List_of_SC_status_codes List of HTTP status codes - Wikipedia
 * @link http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html Status Code Definitions
 */
class HttpStatus
{
    // ------------------------------------------------------------------------
    // Status Code Definitions
    // ------------------------------------------------------------------------

    // ------------------------------------------------------------------------
    // Status series
    // ------------------------------------------------------------------------

    const INFORMATIONAL = 1;
    const SUCCESSFUL = 2;
    const REDIRECTION = 3;
    const CLIENT_ERROR = 4;
    const SERVER_ERROR = 5;

    /**
     * Status series. Ranges from 1 to 5
     * @var array $_series
     */
    private static $_series = [
        self::INFORMATIONAL,
        self::SUCCESSFUL,
        self::REDIRECTION,
        self::CLIENT_ERROR,
        self::SERVER_ERROR,
    ];


    // ------------------------------------------------------------------------
    // [Informational 1xx]
    // ------------------------------------------------------------------------

    /**
     * 100 Continue
     * @link http://tools.ietf.org/html/rfc7231#section-6.2.1 HTTP/1.1: Semantics and Content, section 6.2.1
     */
    const SC_CONTINUE = 100;

    /**
     * 101 Switching Protocols
     * @link http://tools.ietf.org/html/rfc7231#section-6.2.2 HTTP/1.1: Semantics and Content, section 6.2.2
     */
    const SC_SWITCHING_PROTOCOLS = 101;

    /**
     * 102 Processing
     * @link http://tools.ietf.org/html/rfc2518#section-10.1 WebDAV
     */
    const SC_PROCESSING = 102;

    /**
     * 103 Checkpoint
     * @link http://code.google.com/p/gears/wiki/ResumableHttpRequestsProposal A proposal for supporting resumable POST/PUT HTTP requests in HTTP/1.0
     */
    const SC_CHECKPOINT = 103;


    // ------------------------------------------------------------------------
    // [Successful 2xx]
    // ------------------------------------------------------------------------

    /**
     * 200 OK
     * @link http://tools.ietf.org/html/rfc7231#section-6.3.1 HTTP/1.1: Semantics and Content, section 6.3.1
     */
    const SC_OK = 200;

    /**
     * 201 Created
     * @link http://tools.ietf.org/html/rfc7231#section-6.3.2 HTTP/1.1: Semantics and Content, section 6.3.2
     */
    const SC_CREATED = 201;

    /**
     * 202 Accepted
     * @link http://tools.ietf.org/html/rfc7231#section-6.3.3 HTTP/1.1: Semantics and Content, section 6.3.3
     */
    const SC_ACCEPTED = 202;

    /**
     * 203 Non-Authoritative Information
     * @link http://tools.ietf.org/html/rfc7231#section-6.3.4 HTTP/1.1: Semantics and Content, section 6.3.4
     */
    const SC_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * 204 No Content
     * @link http://tools.ietf.org/html/rfc7231#section-6.3.5 HTTP/1.1: Semantics and Content, section 6.3.5
     */
    const SC_NO_CONTENT = 204;

    /**
     * 205 Reset Content
     * @link http://tools.ietf.org/html/rfc7231#section-6.3.6 HTTP/1.1: Semantics and Content, section 6.3.6
     */
    const SC_RESET_CONTENT = 205;

    /**
     * 206 Partial Content
     * @link http://tools.ietf.org/html/rfc7233#section-4.1 HTTP/1.1: Range Requests, section 4.1
     */
    const SC_PARTIAL_CONTENT = 206;

    /**
     * 207 Multi-Status
     * @link http://tools.ietf.org/html/rfc4918#section-13 WebDAV
     */
    const SC_MULTI_STATUS = 207;

    /**
     * 208 Already Reported
     * @link http://tools.ietf.org/html/rfc5842#section-7.1 WebDAV Binding Extensions
     */
    const SC_ALREADY_REPORTED = 208;

    /**
     * 226 IM Used
     * @link http://tools.ietf.org/html/rfc3229#section-10.4.1 Delta encoding in HTTP
     */
    const SC_IM_USED = 226;


    // ------------------------------------------------------------------------
    // [Redirection 3xx]
    // ------------------------------------------------------------------------

    /**
     * 300 Multiple Choices
     * @link http://tools.ietf.org/html/rfc7231#section-6.4.1 HTTP/1.1: Semantics and Content, section 6.4.1
     */
    const SC_MULTIPLE_CHOICES = 300;

    /**
     * 301 Moved Permanently
     * @link http://tools.ietf.org/html/rfc7231#section-6.4.2 HTTP/1.1: Semantics and Content, section 6.4.2
     */
    const SC_MOVED_PERMANENTLY = 301;

    /**
     * 302 Found
     * @link http://tools.ietf.org/html/rfc7231#section-6.4.3 HTTP/1.1: Semantics and Content, section 6.4.3
     */
    const SC_FOUND = 302;

    /**
     * 303 See Other
     * @link http://tools.ietf.org/html/rfc7231#section-6.4.4 HTTP/1.1: Semantics and Content, section 6.4.4
     */
    const SC_SEE_OTHER = 303;

    /**
     * 304 Not Modified
     * @link http://tools.ietf.org/html/rfc7232#section-4.1 HTTP/1.1: Conditional Requests, section 4.1
     */
    const SC_NOT_MODIFIED = 304;

    /**
     * 305 Use Proxy
     * @link http://tools.ietf.org/html/rfc7231#section-6.4.5 HTTP/1.1: Semantics and Content, section 6.4.5
     * @deprecated due to security concerns regarding in-band configuration of a proxy
     */
    const SC_USE_PROXY = 305;

    /**
     * 306 Unused
     * @link https://tools.ietf.org/html/rfc7231#section-6.4.6 HTTP/1.1: Semantics and Content, section 6.4.6
     */
    const SC_UNUSED = 306;

    /**
     * 307 Temporary Redirect
     * @link http://tools.ietf.org/html/rfc7231#section-6.4.7 HTTP/1.1: Semantics and Content, section 6.4.7
     */
    const SC_TEMPORARY_REDIRECT = 307;

    /**
     * 308 Permanent Redirect
     * @link http://tools.ietf.org/html/rfc7238 RFC 7238
     */
    const SC_PERMANENT_REDIRECT = 308;


    // ------------------------------------------------------------------------
    // [Client Error 4xx]
    // ------------------------------------------------------------------------

    /**
     * 400 Bad Request
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.1 HTTP/1.1: Semantics and Content, section 6.5.1
     */
    const SC_BAD_REQUEST = 400;

    /**
     * 401 Unauthorized
     * @link http://tools.ietf.org/html/rfc7235#section-3.1 HTTP/1.1: Authentication, section 3.1
     */
    const SC_UNAUTHORIZED = 401;

    /**
     * 402 Payment Required
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.2 HTTP/1.1: Semantics and Content, section 6.5.2
     */
    const SC_PAYMENT_REQUIRED = 402;

    /**
     * 403 Forbidden
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.3 HTTP/1.1: Semantics and Content, section 6.5.3
     */
    const SC_FORBIDDEN = 403;

    /**
     * 404 Not Found
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.4 HTTP/1.1: Semantics and Content, section 6.5.4
     */
    const SC_NOT_FOUND = 404;

    /**
     * 405 Method Not Allowed
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.5 HTTP/1.1: Semantics and Content, section 6.5.5
     */
    const SC_METHOD_NOT_ALLOWED = 405;

    /**
     * 406 Not Acceptable
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.6 HTTP/1.1: Semantics and Content, section 6.5.6
     */
    const SC_NOT_ACCEPTABLE = 406;

    /**
     * 407 Proxy Authentication Required
     * @link http://tools.ietf.org/html/rfc7235#section-3.2 HTTP/1.1: Authentication, section 3.2
     */
    const SC_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * 408 Request Timeout
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.7 HTTP/1.1: Semantics and Content, section 6.5.7
     */
    const SC_REQUEST_TIMEOUT = 408;

    /**
     * 409 Conflict
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.8 HTTP/1.1: Semantics and Content, section 6.5.8
     */
    const SC_CONFLICT = 409;

    /**
     * 410 Gone
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.9 HTTP/1.1: Semantics and Content, section 6.5.9
     */
    const SC_GONE = 410;

    /**
     * 411 Length Required
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.10 HTTP/1.1: Semantics and Content, section 6.5.10
     */
    const SC_LENGTH_REQUIRED = 411;

    /**
     * 412 Precondition failed
     * @link http://tools.ietf.org/html/rfc7232#section-4.2 HTTP/1.1: Conditional Requests, section 4.2
     */
    const SC_PRECONDITION_FAILED = 412;

    /**
     * 413 Payload Too Large
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.11 HTTP/1.1: Semantics and Content, section 6.5.11
     */
    const SC_REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * 414 URI Too Long
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.12 HTTP/1.1: Semantics and Content, section 6.5.12
     */
    const SC_REQUEST_URI_TOO_LONG = 414;

    /**
     * 415 Unsupported Media Type
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.13 HTTP/1.1: Semantics and Content, section 6.5.13
     */
    const SC_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * 416 Requested Range Not Satisfiable
     * @link http://tools.ietf.org/html/rfc7233#section-4.4 HTTP/1.1: Range Requests, section 4.4
     */
    const SC_REQUESTED_RANGE_NOT_SATISFIABLE = 416;

    /**
     * 417 Expectation Failed
     * @link http://tools.ietf.org/html/rfc7231#section-6.5.14 HTTP/1.1: Semantics and Content, section 6.5.14
     */
    const SC_EXPECTATION_FAILED = 417;

    /**
     * 418 I'm a teapot
     * @link http://tools.ietf.org/html/rfc2324#section-2.3.2 HTCPCP/1.0
     */
    const SC_I_AM_A_TEAPOT = 418;

    /**
     * 420 Method Failure
     * @link http://tools.ietf.org/rfcdiff?difftype=--hwdiff&url2=draft-ietf-webdav-protocol-06.txt WebDAV Draft Changes
     * @deprecated
     */
    const METHOD_FAILURE = 420;

    /**
     * 420 Destination Locked
     * @link http://tools.ietf.org/rfcdiff?difftype=--hwdiff&url2=draft-ietf-webdav-protocol-06.txt WebDAV Draft Changes
     * @deprecated
     */
    const DESTINATION_LOCKED = 421;

    /**
     * 422 Unprocessable Entity
     * @link http://tools.ietf.org/html/rfc4918#section-11.2 WebDAV
     */
    const SC_UNPROCESSABLE_ENTITY = 422;

    /**
     * 423 Locked
     * @link http://tools.ietf.org/html/rfc4918#section-11.3 WebDAV
     */
    const SC_LOCKED = 423;

    /**
     * 424 Failed Dependency
     * @link http://tools.ietf.org/html/rfc4918#section-11.4 WebDAV
     */
    const SC_FAILED_DEPENDENCY = 424;

    /**
     * 425 Unordered Collection
     */
    const SC_UNORDERED_COLLECTION = 425;

    /**
     * 426 Upgrade Required
     * @link http://tools.ietf.org/html/rfc2817#section-6 Upgrading to TLS Within HTTP/1.1
     */
    const SC_UPGRADE_REQUIRED = 426;

    /**
     * 428 Precondition Required
     * @link http://tools.ietf.org/html/rfc6585#section-3 Additional HTTP Status Codes
     */
    const SC_PRECONDITION_REQUIRED = 428;

    /**
     * 429 Too Many Requests
     * @link http://tools.ietf.org/html/rfc6585#section-4 Additional HTTP Status Codes
     */
    const SC_TOO_MANY_REQUESTS = 429;

    /**
     * 431 Request Header Fields Too Large
     * @link http://tools.ietf.org/html/rfc6585#section-5 Additional HTTP Status Codes
     */
    const SC_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * 434 Requested host unavailable
     */
    const SC_REQUESTED_HOST_UNAVAILABLE = 434;

    /**
     * 444 No response
     */
    const SC_NO_RESPONSE = 444;

    /**
     * 449 Retry With
     */
    const SC_RETRY_WITH = 449;

    /**
     * 451 Unavailable For Legal Reasons
     * @link https://tools.ietf.org/html/draft-ietf-httpbis-legally-restricted-status-04
     * An HTTP Status Code to Report Legal Obstacles
     */
    const SC_UNAVAILABLE_FOR_LEGAL_REASONS = 451;


    // ------------------------------------------------------------------------
    // [Server Error 5xx]
    // ------------------------------------------------------------------------

    /**
     * 500 Internal Server Error
     * @link http://tools.ietf.org/html/rfc7231#section-6.6.1 HTTP/1.1: Semantics and Content, section 6.6.1
     */
    const SC_INTERNAL_SERVER_ERROR = 500;

    /**
     * 501 Not Implemented
     * @link http://tools.ietf.org/html/rfc7231#section-6.6.2 HTTP/1.1: Semantics and Content, section 6.6.2
     */
    const SC_NOT_IMPLEMENTED = 501;

    /**
     * 502 Bad Gateway
     * @link http://tools.ietf.org/html/rfc7231#section-6.6.3 HTTP/1.1: Semantics and Content, section 6.6.3
     */
    const SC_BAD_GATEWAY = 502;

    /**
     * 503 Service Unavailable
     * @link http://tools.ietf.org/html/rfc7231#section-6.6.4 HTTP/1.1: Semantics and Content, section 6.6.4
     */
    const SC_SERVICE_UNAVAILABLE = 503;

    /**
     * 504 Gateway Timeout
     * @link http://tools.ietf.org/html/rfc7231#section-6.6.5 HTTP/1.1: Semantics and Content, section 6.6.5
     */
    const SC_GATEWAY_TIMEOUT = 504;

    /**
     * 505 HTTP Version Not Supported
     * @link http://tools.ietf.org/html/rfc7231#section-6.6.6 HTTP/1.1: Semantics and Content, section 6.6.6
     */
    const SC_VERSION_NOT_SUPPORTED = 505;

    /**
     * 506 Variant Also Negotiates
     * @link http://tools.ietf.org/html/rfc2295#section-8.1 Transparent Content Negotiation
     */
    const SC_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * 507 Insufficient Storage
     * @link http://tools.ietf.org/html/rfc4918#section-11.5 WebDAV
     */
    const SC_INSUFFICIENT_STORAGE = 507;

    /**
     * 508 Loop Detected
     * @link http://tools.ietf.org/html/rfc5842#section-7.2 WebDAV Binding Extensions
     */
    const SC_LOOP_DETECTED = 508;

    /**
     * 509 Bandwidth Limit Exceeded
     */
    const SC_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * 510 Not Extended
     * @link http://tools.ietf.org/html/rfc2774#section-7 HTTP Extension Framework
     */
    const SC_NOT_EXTENDED = 510;

    /**
     * 511 Network Authentication Required
     * @link http://tools.ietf.org/html/rfc6585#section-6 Additional HTTP Status Codes
     */
    const SC_NETWORK_AUTHENTICATION_REQUIRED = 511;


    /**
     * Status codes translation table.
     *
     * @var array $_reasons
     */
    private static $_reasons = [
        // [Informational 1xx]
        self::SC_CONTINUE => 'Continue',
        self::SC_SWITCHING_PROTOCOLS => 'Switching Protocols',
        self::SC_PROCESSING => 'Processing',
        self::SC_CHECKPOINT => 'Checkpoint',

        // [Successful 2xx]
        self::SC_OK => 'OK',
        self::SC_CREATED => 'Created',
        self::SC_ACCEPTED => 'Accepted',
        self::SC_NON_AUTHORITATIVE_INFORMATION => 'Non-Authoritative Information',
        self::SC_NO_CONTENT => 'No Content',
        self::SC_RESET_CONTENT => 'Reset Content',
        self::SC_PARTIAL_CONTENT => 'Partial Content',
        self::SC_MULTI_STATUS => 'Multi-Status',
        self::SC_ALREADY_REPORTED => 'Already Reported',
        self::SC_IM_USED => 'IM Used',

        // [Redirection 3xx]
        self::SC_MULTIPLE_CHOICES => 'Multiple Choices',
        self::SC_MOVED_PERMANENTLY => 'Moved Permanently',
        self::SC_FOUND => 'Found',
        self::SC_SEE_OTHER => 'See Other',
        self::SC_NOT_MODIFIED => 'Not Modified',
        self::SC_USE_PROXY => 'Use Proxy',
        self::SC_UNUSED => 'Unused',
        self::SC_TEMPORARY_REDIRECT => 'Temporary Redirect',
        self::SC_PERMANENT_REDIRECT => 'Permanent Redirect',

        // [Client Error 4xx]
        self::SC_BAD_REQUEST => 'Bad Request',
        self::SC_UNAUTHORIZED => 'Unauthorized',
        self::SC_PAYMENT_REQUIRED => 'Payment Required',
        self::SC_FORBIDDEN => 'Forbidden',
        self::SC_NOT_FOUND => 'Not Found',
        self::SC_METHOD_NOT_ALLOWED => 'Method Not Allowed',
        self::SC_NOT_ACCEPTABLE => 'Not Acceptable',
        self::SC_PROXY_AUTHENTICATION_REQUIRED => 'Proxy Authentication Required',
        self::SC_REQUEST_TIMEOUT => 'Request Timeout',
        self::SC_CONFLICT => 'Conflict',
        self::SC_GONE => 'Gone',
        self::SC_LENGTH_REQUIRED => 'Length Required',
        self::SC_PRECONDITION_FAILED => 'Precondition Failed',
        self::SC_REQUEST_ENTITY_TOO_LARGE => 'Request Entity Too Large',
        self::SC_REQUEST_URI_TOO_LONG => 'Request-URI Too Long',
        self::SC_UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
        self::SC_REQUESTED_RANGE_NOT_SATISFIABLE => 'Requested Range Not Satisfiable',
        self::SC_EXPECTATION_FAILED => 'Expectation Failed',
        self::SC_I_AM_A_TEAPOT => 'I\'m a teapot',
        self::METHOD_FAILURE => 'Method Failure',
        self::DESTINATION_LOCKED => 'Destination Locked',
        self::SC_UNPROCESSABLE_ENTITY => 'Unprocessable Entity',
        self::SC_LOCKED => 'Locked',
        self::SC_FAILED_DEPENDENCY => 'Failed Dependency',
        self::SC_UNORDERED_COLLECTION => 'Unordered Collection',
        self::SC_UPGRADE_REQUIRED => 'Upgrade Required',
        self::SC_PRECONDITION_REQUIRED => 'Precondition Required',
        self::SC_TOO_MANY_REQUESTS => 'Too Many Requests',
        self::SC_REQUEST_HEADER_FIELDS_TOO_LARGE => 'Request Header Fields Too Large',
        self::SC_REQUESTED_HOST_UNAVAILABLE => 'Requested host unavailable',
        self::SC_NO_RESPONSE => 'No response',
        self::SC_RETRY_WITH => 'Retry With',
        self::SC_UNAVAILABLE_FOR_LEGAL_REASONS => 'Unavailable For Legal Reasons',

        // [Server Error 5xx]
        self::SC_INTERNAL_SERVER_ERROR => 'Internal Server Error',
        self::SC_NOT_IMPLEMENTED => 'Not Implemented',
        self::SC_BAD_GATEWAY => 'Bad Gateway',
        self::SC_SERVICE_UNAVAILABLE => 'Service Unavailable',
        self::SC_GATEWAY_TIMEOUT => 'Gateway Timeout',
        self::SC_VERSION_NOT_SUPPORTED => 'HTTP Version Not Supported',
        self::SC_VARIANT_ALSO_NEGOTIATES => 'Variant Also Negotiates',
        self::SC_INSUFFICIENT_STORAGE => 'Insufficient Storage',
        self::SC_LOOP_DETECTED => 'Loop Detected',
        self::SC_BANDWIDTH_LIMIT_EXCEEDED => 'Bandwidth Limit Exceeded',
        self::SC_NOT_EXTENDED => 'Not Extended',
        self::SC_NETWORK_AUTHENTICATION_REQUIRED => 'Network Authentication Required',
    ];

    /**
     * The reference to *HttpStatus* instance of this class
     *
     * @var HttpStatus $_instance
     */
    private static $_instance = null;

    /**
     * HTTP status code
     *
     * @var int $_code
     */
    private static $_code = 0;

    /**
     * The private constructor to prevent creating a new instance with the given initial parameters of the *HttpStatus*
     * via the `new` operator from outside of this class.
     *
     * @param $code int
     */
    private function __construct($code)
    {
        static::$_code = (int)$code;
    }

    /**
     * Returns the *HttpStatus* instance of this class.
     *
     * @param $code int
     *
     * @return HttpStatus The *HttpStatus* instance.
     * @throws Exception
     */
    public static function valueOf($code)
    {
        if (is_null(static::$_instance)) {
            static::$_instance = new self($code);
        }
        return static::$_instance;
    }

    /**
     * Return the status code.
     * e.g. 301
     */
    public function getStatusCode()
    {
        return static::$_code;
    }

    /**
     * Return the reason phrase of this status code.
     * e.g. 301 -> Moved Permanently
     */
    public function getReasonPhrase()
    {
        if (is_null($reasonPhrase = static::$_reasons[static::$_code])) {
            throw new Exception(sprintf('The HTTP status code "%s" is not valid.', static::$_code));
        }
        return $reasonPhrase;
    }

    /**
     * Return the reason phrase with this status code.
     * e.g. 301 Moved Permanently
     */
    public function getCodeWithReasonPhrase()
    {
        return static::$_code . ' ' . $this->getReasonPhrase();
    }

    /**
     * Is a informational?
     *
     * @return bool
     */
    public function is1xxInformational()
    {
        return (static::series() === static::INFORMATIONAL);
    }

    /**
     * Is a successful?
     *
     * @return bool
     */
    public function is2xxSuccessful()
    {
        return (static::series() === static::SUCCESSFUL);
    }

    /**
     * Is a redirection?
     *
     * @return bool
     */
    public function is3xxRedirection()
    {
        return (static::series() === static::REDIRECTION);
    }

    /**
     * Is a client error?
     *
     * @return bool
     */
    public function is4xxClientError()
    {
        return (static::series() === static::CLIENT_ERROR);
    }

    /**
     * Is a server side error?
     *
     * @return bool
     */
    public function is5xxServerError()
    {
        return (static::series() === static::SERVER_ERROR);
    }

    /**
     * Is a server side error or a client error?
     *
     * @return bool
     */
    public function isError()
    {
        $seriesCode = static::series();
        return ($seriesCode === static::SERVER_ERROR || $seriesCode === static::CLIENT_ERROR);
    }

    /**
     * Return the integer value of this status series. Ranges from 1 to 5
     *
     * @return int
     * @throws Exception
     */
    private static function series()
    {
        $seriesCode = (int)(static::$_code / 100);
        foreach (static::$_series as $value) {
            if ($seriesCode === $value) {
                return (int)$value;
            }
        }
        throw new Exception("No matching constant for [" + static::$_code + "]");
    }

    /**
     * Private clone method to prevent cloning of the instance of the *HttpStatus* instance.
     */
    private function __clone()
    {
        // Restricts the cloning of an object
    }

    /**
     * Private unserialize method to prevent unserializing of the *HttpStatus* instance.
     */
    private function __wakeup()
    {
        // Restricts the wakeup of an object
    }

}

?>

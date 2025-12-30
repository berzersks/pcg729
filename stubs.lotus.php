<?php

function swoole_exec(string $command, &$output, &$returnVar) {
}

function swoole_shell_exec(string $cmd) {
}

/**
 * @throws Exception
 */
function swoole\coroutine\http\request(string $url, string $method, $data, array $options, array $headers, array $cookies): Swoole\Coroutine\Http\ClientProxy {
}

/**
 * @throws Exception
 */
function swoole\coroutine\http\request_with_http_client(string $url, string $method, $data, array $options, array $headers, array $cookies): Swoole\Coroutine\Http\ClientProxy {
}

/**
 * @throws Exception
 */
function swoole\coroutine\http\request_with_curl(string $url, string $method, $data, array $options, array $headers, array $cookies): Swoole\Coroutine\Http\ClientProxy {
}

/**
 * @throws Exception
 */
function swoole\coroutine\http\request_with_stream(string $url, string $method, $data, array $options, array $headers, array $cookies): Swoole\Coroutine\Http\ClientProxy {
}

/**
 * @throws Exception
 */
function swoole\coroutine\http\post(string $url, $data, array $options, array $headers, array $cookies): Swoole\Coroutine\Http\ClientProxy {
}

/**
 * @throws Exception
 */
function swoole\coroutine\http\get(string $url, array $options, array $headers, array $cookies): Swoole\Coroutine\Http\ClientProxy {
}

function swoole\coroutine\run(callable $fn, $args) {
}

function swoole\coroutine\go(callable $fn, $args) {
}

function swoole\coroutine\defer(callable $fn) {
}

function swoole\coroutine\batch(array $tasks, float $timeout = -1.0): array {
}

function swoole\coroutine\parallel(int $n, callable $fn) {
}

/**
 * Applies the callback to the elements of the given list.
 *
 * The callback function takes on two parameters. The list parameter's value being the first, and the key/index second.
 * Each callback runs in a new coroutine, allowing the list to be processed in parallel.
 *
 * @param array $list A list of key/value paired input data.
 * @param callable $fn The callback function to apply to each item on the list. The callback takes on two parameters.
 *                     The list parameter's value being the first, and the key/index second.
 * @param float $timeout > 0 means waiting for the specified number of seconds. other means no waiting.
 * @return array Returns an array containing the results of applying the callback function to the corresponding value
 *               and key of the list (used as arguments for the callback). The returned array will preserve the keys of
 *               the list.
 */
function swoole\coroutine\map(array $list, callable $fn, float $timeout = -1.0): array {
}

function swoole\coroutine\deadlock_check() {
}

function swoole_curl_init(string $url = ''): Swoole\Curl\Handler {
}

function swoole_curl_setopt(Swoole\Curl\Handler $obj, int $opt, $value): bool {
    return false;
}

function swoole_curl_setopt_array(Swoole\Curl\Handler $obj, $array): bool {
    return false;
}

function swoole_curl_exec(Swoole\Curl\Handler $obj) {
}

function swoole_curl_getinfo(Swoole\Curl\Handler $obj, int $opt = 0) {
}

function swoole_curl_errno(Swoole\Curl\Handler $obj): int {
    return 0;
}

function swoole_curl_error(Swoole\Curl\Handler $obj): string {
    return "";
}

function swoole_curl_reset(Swoole\Curl\Handler $obj) {
}

function swoole_curl_close(Swoole\Curl\Handler $obj) {
}

function swoole_curl_multi_getcontent(Swoole\Curl\Handler $obj) {
}

function swoole_socket_create(int $domain, int $type, int $protocol) {
}

function swoole_socket_connect(Swoole\Coroutine\Socket $socket, string $address, int $port = 0) {
}

function swoole_socket_read(Swoole\Coroutine\Socket $socket, int $length, int $type = 2) {
}

function swoole_socket_write(Swoole\Coroutine\Socket $socket, string $buffer, int $length = 0) {
}

function swoole_socket_send(Swoole\Coroutine\Socket $socket, string $buffer, int $length, int $flags) {
}

function swoole_socket_recv(Swoole\Coroutine\Socket $socket, &$buffer, int $length, int $flags) {
}

function swoole_socket_sendto(Swoole\Coroutine\Socket $socket, string $buffer, int $length, int $flags, string $addr, int $port = 0) {
}

function swoole_socket_recvfrom(Swoole\Coroutine\Socket $socket, &$buffer, int $length, int $flags, &$name, &$port) {
}

function swoole_socket_bind(Swoole\Coroutine\Socket $socket, string $address, int $port = 0): bool {
    return false;
}

function swoole_socket_listen(Swoole\Coroutine\Socket $socket, int $backlog = 0): bool {
    return false;
}

function swoole_socket_create_listen(int $port, int $backlog = 128) {
}

function swoole_socket_accept(Swoole\Coroutine\Socket $socket) {
}

function swoole_socket_getpeername(Swoole\Coroutine\Socket $socket, &$address, &$port) {
}

function swoole_socket_getsockname(Swoole\Coroutine\Socket $socket, &$address, &$port) {
}

function swoole_socket_set_option(Swoole\Coroutine\Socket $socket, int $level, int $optname, $optval): bool {
    return false;
}

function swoole_socket_setopt(Swoole\Coroutine\Socket $socket, int $level, int $optname, $optval): bool {
    return false;
}

function swoole_socket_get_option(Swoole\Coroutine\Socket $socket, int $level, int $optname) {
}

function swoole_socket_getopt(Swoole\Coroutine\Socket $socket, int $level, int $optname) {
}

function swoole_socket_shutdown(Swoole\Coroutine\Socket $socket, int $how = 2): bool {
    return false;
}

function swoole_socket_close(Swoole\Coroutine\Socket $socket) {
}

function swoole_socket_clear_error(Swoole\Coroutine\Socket $socket) {
}

function swoole_socket_last_error(Swoole\Coroutine\Socket $socket): int {
    return 0;
}

function swoole_socket_set_block(Swoole\Coroutine\Socket $socket) {
}

function swoole_socket_set_nonblock(Swoole\Coroutine\Socket $socket) {
}

function swoole_socket_create_pair(int $domain, int $type, int $protocol, array &$pair) {
}

/**
 * @since 5.0.0
 */
function swoole_socket_import_stream($stream) {
}

/**
 * @param array<string, mixed> $options
 */
function swoole_library_set_options(array $options) {
}

function swoole_library_get_options(): array {
}

function swoole_library_set_option(string $key, $value) {
}

function swoole_library_get_option(string $key) {
}

function swoole_string(string $string = ''): Swoole\StringObject {
}

function swoole_mbstring(string $string = ''): Swoole\MultibyteStringObject {
}

function swoole_array(array $array = array (
)): Swoole\ArrayObject {
}

function swoole_table(int $size, string $fields): Swoole\Table {
}

function swoole_array_list($arrray): Swoole\ArrayObject {
}

function swoole_array_default_value(array $array, $key, $default_value) {
}

function swoole_is_in_container() {
}

function swoole_container_cpu_num() {
}

function _string(string $string = ''): Swoole\StringObject {
}

function _mbstring(string $string = ''): Swoole\MultibyteStringObject {
}

function _array(array $array = array (
)): Swoole\ArrayObject {
}

function co\run(callable $fn, $args) {
}

function co\go(callable $fn, $args) {
}

function co\defer(callable $fn) {
}

class bcg729Channel {
    public function __construct() {
    }

    public function decode(string $input): string {
        return "";
    }

    public function encode(string $input): string {
        return "";
    }

    public function info() {
    }

    public function close() {
    }

}

class opusChannel {
    public function __construct(int $sample_rate, int $channels) {
    }

    public function encode(string $pcm_data, int $pcm_rate): string {
        return "";
    }

    public function decode(string $encoded_data, int $pcm_rate_out): string {
        return "";
    }

    public function resample(string $pcm_data, int $src_rate, int $dst_rate): string {
        return "";
    }

    public function setBitrate(int $value) {
    }

    public function setVBR(bool $enable) {
    }

    public function setComplexity(int $value) {
    }

    public function setDTX(bool $enable) {
    }

    public function setSignalVoice(bool $enable) {
    }

    public function reset() {
    }

    public function enhanceVoiceClarity(string $pcm_data, float $intensity): string {
        return "";
    }

    public function spatialStereoEnhance(string $pcm_data, float $width, float $depth): string {
        return "";
    }

    public function destroy() {
    }

}


<?php 

namespace IconicCodes\LightHttp\LResponse;
use IconicCodes\LightHttp\Interfaces\IResponse;

class LRedirectReponse implements IResponse {
    public $url;
    public $code;
    function __construct($url, $code = 301) {
        $this->__url = $url;
        $this->__code = $code;
    }

    public function handle() {
        if (!headers_sent()) {
            header("Location: $this->__url", true, $this->__code);
        } else {
            echo '<script>window.location.href="' . $this->__url . '";</script>';
        }
    }
}

<?php
namespace IconicCodes\LightHttp;

use Exception;

class LFile {
    public function store ($where = "assets", $newname="", $check_mime = FALSE) {
        if ($newname == "") {
            $newname = time() . uniqid() . "." . pathinfo($this->name,  PATHINFO_EXTENSION);
        }

        if ($check_mime && count($this->expected_mimes) > 0) {
            if (!in_array($this->mime, $this->expected_mimes)) {
                throw new Exception('MIME DOES NOT MATCH EXPECTED');
            }
        }
        if (move_uploaded_file($this->tmp_name, "$where/$newname")) {
            return $newname;
        } else  {
            return false;
        }
    }
}
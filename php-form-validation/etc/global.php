<?php
function old($key, $default=null) {
    $result = $default;
    if (isset($_SESSION["form-data"])) {
        $data = $_SESSION["form-data"];
        if (is_array($data) && array_key_exists($key, $data)) {
            $result = $data[$key];
        }
    }
    return $result;
}
  
function error($key) {
    $result = null;
    if (isset($_SESSION["form-errors"])) {
        $errors = $_SESSION["form-errors"];
        if (is_array($errors) && array_key_exists($key, $errors)) {
            $result = $errors[$key];
        }
    }
    return $result;
}

function chosen($key, $search, $default=null) {
    $result = FALSE;
    if (isset($_SESSION["form-data"])) {
        $data = $_SESSION["form-data"];
        if (is_array($data) && array_key_exists($key, $data)) {
            $value = $data[$key];
            if (is_array($value)) {
                $result = in_array($search, $value);
            }
            else {
                $result = strcmp($value, $search) === 0;
            }
        }
    }
    else if ($default !== null) {
        if (is_array($default)) {
            $result = in_array($search, $default);
        }
        else {
            $result = strcmp($default, $search) === 0;
        }
    }
    return $result;
}
?>
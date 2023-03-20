<?php

// json_select(): A function that selects specific properties from a JSON object and returns them as a new object, with the option to rename or exclude properties as needed.
function json_select($json, $properties) {
    $result = new stdClass();
    foreach ($properties as $property => $alias) {
        if (is_int($property)) {
            $property = $alias;
        }
        if (isset($json->$property)) {
            $result->$alias = $json->$property;
        }
    }
    return $result;
}

// json_filter(): A function that filters a JSON object based on a specified set of criteria, returning only the matching properties and values.
function json_filter($json, $criteria) {
    $result = new stdClass();
    foreach ($criteria as $property => $value) {
        if (isset($json->$property) && $json->$property == $value) {
            $result->$property = $json->$property;
        }
    }
    return $result;
}

// json_has_key($json_string, $key) - A function that checks if a given JSON string has a specified key.
// function json_has_key($json_string, $key) {
//     $json = json_decode($json_string);
//     return isset($json->$key);
// }
function json_has_key($json_string, $key) {
    $decoded = json_decode($json_string, true);
    if (is_array($decoded)) {
        return array_key_exists($key, $decoded);
    } else {
        return false;
    }
}

// json_get_value($json_string, $key) - A function that returns the value of a specified key in a JSON string.
// function json_get_value($json_string, $key) {
//     $json = json_decode($json_string);
//     return $json->$key;
// }
/*
This function takes in a JSON string and a key, decodes the JSON string into an associative array using json_decode(), and then checks if the specified key exists in the array using isset(). If the key exists, the function returns its corresponding value, otherwise it returns null.
Note that the second argument of json_decode() is set to true, which tells the function to return an associative array instead of an object. This makes it easier to access the values of the JSON data using keys.
*/
function json_get_value($json_string, $key) {
    $data = json_decode($json_string, true);
    $value = null;
  
    if (isset($data[$key])) {
      $value = $data[$key];
    }
  
    return $value;
  }
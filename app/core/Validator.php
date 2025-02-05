<?php
namespace App\Core;

class Validator
{
    public function validate($data, $rules)
    {
        foreach ($rules as $field => $rule) {
            if ($rule == 'required' && empty($data[$field])) {
                return false;
            }
        }
        return true;
    }
}

<?php

namespace App\Services;


class Tool
{
    /**
     * 过滤表单XSS，直接修改指
     *
     * @param $data
     *
     */
    public static function filterXss(&$data)
    {
        foreach ($data as $key => $value) {

            if (!is_scalar($value)) {
                continue;
            }

            $data[$key] = trim(strip_tags($value));

            $data[$key] = preg_replace(['/[on][a-zA-Z]+(\s*)=(\s*)?[\'"]?[^\'"]+[\'"&gt;]?/i', '/>/'], '', $data[$key]);
        }
    }

}
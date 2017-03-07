<?php

namespace App\Services;


class Tool
{
    /**
     * 过滤表单XSS，直接修改指
     *
     * @param $data
     *
     * @return mixed
     */
    public static function filterXss(&$data)
    {
        if (is_array($data) and $data) foreach ($data as $key => $value) {

            if (!is_scalar($value)) {
                continue;
            }

            $data[$key] = trim(strip_tags($value));

            $data[$key] = preg_replace(['/[on][a-zA-Z]+(\s*)=(\s*)?[\'"]?[^\'"]+[\'"&gt;]?/i', '/>/'], '', $data[$key]);
        }

        return $data;
    }

}
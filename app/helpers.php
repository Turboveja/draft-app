<?php

if (!function_exists('wrap_success_api_response_v1')) {
    /**
     * Custom response with internal codes and info msgs.
     *
     * @param $data
     * @param $status
     * @param $msg
     * @param $dev_msg
     * @param $headers
     * @return array
     */
    function wrap_success_api_response_v1($success = true, $data = [], $status = 200, $msg = '', $dev_msg = '', $headers = [])
    {
        $wrap = [
            'custom_wrapper' => [
                'success' => $success,
                'data' => $data,
                'msg' => $msg,
                'dev_msg' => $dev_msg,
//                'internal_code' => $internal_code
            ],
            'status_code' => $status,
            'headers' => $headers
        ];

        return $wrap;
    }
}

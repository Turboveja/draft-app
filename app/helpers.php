<?php

//Const

//Log channels
define('LOG_CHANNEL_SPOTIFY', 'spotify');

//External platforms
define('PLATFORM_SPOTIFY', 'SP');

//Album types
define('ALBUM_TYPE_LP', '331c41fd-ac9a-445f-8b18-49653be5b98c');
define('ALBUM_TYPE_EP', 'f013aee8-67a9-487c-aabd-04d18f847a33');
define('ALBUM_TYPE_SINGLE', 'b8fd1f99-7f88-4736-8e3c-355cb9b4df58');

//External url types
define('EXTERNAL_URL_TYPE_SPOTIFY', 1);
define('EXTERNAL_URL_TYPE_YOUTUBE', 2);
define('EXTERNAL_URL_TYPE_INSTAGRAM', 3);




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

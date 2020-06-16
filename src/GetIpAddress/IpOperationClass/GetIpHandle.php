<?php
namespace GetIpAddress\IpOperationClass;

class GetIpHandle{
    /**
     * 返回ip真实地理位置
     * @param $ip
     * @return string
     */
    public static function getAddress($ip)
    {
        if(empty($ip) || !self::isIpAddress($ip)) {
            return '';
        }

        $ipdata = Ip::find($ip);
        if(isset($ipdata[0]) && isset($ipdata[1]) && isset($ipdata[2])) {
            return $ipdata[0].$ipdata[1].$ipdata[2];
        }
        return '';
    }

    /**
     * 判断是ip地址
     * @param $ip
     * @return bool
     */
    private static function isIpAddress($ip)
    {
        if(filter_var($ip, FILTER_VALIDATE_IP)) {
            return true;
        }
        return false;
    }
}
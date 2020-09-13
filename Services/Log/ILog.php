<?php


interface ILog
{

    /**
     * @param string $info
     * @return mixed
     */
    public static function info(string $info);

    /**
     * @param string $error
     * @return mixed
     */
    public static function error(string $error);
}
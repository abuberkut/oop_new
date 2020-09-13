<?php


class Log implements ILog
{

    public static function info(string $info)
    {
        $info = "Log.INFO '{$info}' added to logs.";
        self::add('logs.txt', $info);
        echo $info;
    }

    public static function error(string $error)
    {
        $error = "Log.ERROR '{$error}' added to logs.";
        self::add('logs.txt', $error);
        echo $error;
    }

    private static function add(string $file_name, string $text) {
        $file = fopen($file_name, "a+");
        fwrite($file, "$text\r\n");
        fclose($file);
    }
}
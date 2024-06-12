<?php
class Service implements ServiceInterface
{

    public function __construct()
    {
    }

    public function request()
    {
        echo 'Requesting ';
    }

    public function response()
    {
        echo 'Response';
    }

    public function something()
    {
        echo 'Something';
    }

    public function other()
    {
        echo 'Other';
    }

    public function another()
    {
        echo 'Another';
    }

    public function last()
    {
        echo 'Last';
    }

    // Y muchas mas
}
?>
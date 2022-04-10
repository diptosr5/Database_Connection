<?php

 
    
    function get($query)
    {
        $conn = mysqli_connect('localhost','root','','webtech');
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $data;
    }

    function gets($query)
    {
        $conn = mysqli_connect('localhost','root','','webtech');
        $result = mysqli_query($conn, $query);
        return $result;
    }

    function rows($query)
    {
        $conn = mysqli_connect('localhost','root','','webtech');
        $result = mysqli_query($conn, $query);
        $data = mysqli_num_rows($result);
        return $data;
    }

    function insert($query)
    {
        $conn = mysqli_connect('localhost','root','','webtech');
        $result = mysqli_query($conn, $query);
        return $result;
    }




?>
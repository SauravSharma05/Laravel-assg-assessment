<?php 

class model
{

    public $connection;

public function __construct()
{

try
{

    $this->connection = new mysqli("localhost","root","","web_assg");
    // echo "Connection was  successful";
}
catch(\Throwable $th)
{
    // echo "Connection was not successful";
}

}

public function insert($tbl, $data)
{
    $keydata = implode(",", array_keys($data));
    $valuedata = implode("','", ($data));
    $SQL = "INSERT INTO $tbl($keydata) VALUES ('$valuedata')";
    $SQLEx = $this->connection->query($SQL);
    if ($SQLEx > 0) {
        $ResData['Data'] = 1;
        $ResData['Msg'] = "Success";
        $ResData['Code'] = "1";
    } else {
        $ResData['Data'] = 0;
        $ResData['Msg'] = "Try again";
        $ResData['Code'] = "0";
    }
    return $ResData;
}
}

?>
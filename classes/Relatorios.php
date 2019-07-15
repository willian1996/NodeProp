<?php

new Relatorios();

class Relatorios{
    private $db;
    private $data_atual;

    public function __construct(){
        $option = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET LC_TIME_NAMES = pt_BR"];
        $this->db = new PDO("mysql:host=localhost;dbname=bd_grafico;charset=utf8", "root", "", $option);
        $this->data_atual = date('Y-m-d H:i:s');

        $uri = urldecode(filter_input(INPUT_SERVER, 'REQUEST_URI'));
        $request = explode('/', $uri);
        $method = $request[3];
        $param = isset($request[4]) ? $request[4] : null;


        if(method_exists(get_class(), $method)){
            $this->$method($param);

        }else{
            return false;
        }
    }

    private function trafego_por_hora($param = null){
        $periodo = date('Y-m-d H:i:s', strtotime($param, strtotime($this->data_atual)));

        $sql = "SELECT HOUR(data) as hora, COUNT(id) as views "
             . "FROM trafego "
             . "WHERE data >= '{$periodo}' "
             . "GROUP BY hora ";

        $query = $this->db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        foreach($result as $res){
            $dados[$res->hora] = $res->views;
        }

        $horas = [];

        for($i = 0; $i < 24; $i++){
            array_push($horas, '0');
        }

        $final = array_replace($horas, $dados);

        echo json_encode($final);
    }








}

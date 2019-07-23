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
        $method = isset($request[3]) ? $request[3] : null;
        $param = isset($request[4]) ? $request[4] : null;


        if(method_exists(get_class(), $method)){
            $this->$method($param);

        }else{
            return false;
        }
    }

    private function trafego_por_hora($param = null){
        $periodo = date('Y-m-d H:i:s', strtotime($param));

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
    
    public function trafego_semanal(){
        $periodo = date('Y-m-d H:i:s', strtotime('-7 days'));
        
        $sql = "SELECT DAYNAME(data) as dia, COUNT(id) as views "
              ."FROM trafego "
              ."WHERE data >= '{$periodo}' "
              ."GROUP BY DAYNAME(data) "
              ."ORDER BY data";
              
        $query = $this->db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        
        foreach($result as $res){
            $dados[$res->dia] = $res->views;

        }
        
        echo json_encode($dados);
    }

    public function trafego_mensal(){
        $mes = date('m');
        $ano = date('Y');

        $sql = "SELECT DAY(data) as dia, COUNT(id) as views "
              ."FROM trafego "
              ."WHERE MONTH(data) = '{$mes}' "
              ."AND YEAR(data) = '{$ano}' "
              ."GROUP BY DAY(data) ";

        $query = $this->db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        foreach($result as $res){
            $dados[$res->dia] = $res->views;

        }

        $dias_do_mes = $this->_dias_do_mes();

        $final = array_replace($dias_do_mes, $dados);

        echo json_encode($final);

    }

    private function _dias_do_mes(){
        $hoje = date('d');

        if($hoje <= 10){
            $esse_mes = 10;

        }else if($hoje <= 15){
            $esse_mes = 15;

        }else if($hoje <= 20){
            $esse_mes = 20;

        }else if($hoje <= 25){
            $esse_mes = 25;

        }else{
            $esse_mes = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
        }



        $dias = [1 => '0'];
        for($i = 1; $i < $esse_mes; $i++){
            array_push($dias, '0');

        }
        return $dias;
    }








}

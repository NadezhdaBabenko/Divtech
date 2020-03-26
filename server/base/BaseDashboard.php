<?php

class BaseDashboard
{
    private $conn = [
        'statistic' => [
            'url' => 'http://94.247.131.206:8989/PTS_Update/ws/statisticaotchet?wsdl',
            'login' => 'WebPolzovatelPTS_Stat',
            'password' => '$%FE34t5D_!GRG$%y57UHYT',
        ],
        'invoices' => [
            'url' => 'http://94.247.131.206:8989/PTS_Update/ws/DannieInvoica?wsdl',
            'login' => 'WebPolzovatelPTS_Stat',
            'password' => '$%FE34t5D_!GRG$%y57UHYT',
        ],
        'base' => [
            'url' => 'http://94.247.131.206:8989/PTS_Update/ws/DannieBazi?wsdl',
            'login' => 'WebPolzovatelPTS_Stat',
            'password' => '$%FE34t5D_!GRG$%y57UHYT',
        ],
    ];

    public function request($method, $params, $type = 'statistic')
    {
        $conn = $this->conn[$type];
        $client = new \SoapClient($conn['url'], [
            "login"    => $conn['login'],
            "password" => $conn['password']
        ]);

        $response = $client->$method($params);
        $xml = new \SimpleXMLElement($response->return);

        $data = [];
        foreach ($xml as $item) {
            $data[] = $item;
        }

        return $data;
    }
}
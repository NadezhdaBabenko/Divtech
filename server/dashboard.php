<?php
include 'base/BaseDashboard.php';

class Dashboard extends BaseDashboard
{
    public function lastCorpInvoices()
    {
        return $this->request('PoluchitPoslednieKorpScheta', [
            'KodKlienta' => '0000200001',
            'GodPolucheniya' => '',
        ]);
    }
}

echo json_encode((new Dashboard())->{$_GET['method']}());
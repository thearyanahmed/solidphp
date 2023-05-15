<?php

namespace Thearyanahmed\SolidPHP;

use Thearyanahmed\SolidPHP\DB\DB;

class SalesReport
{
    /**
     * @param $startingDate
     * @param $endDate
     * @throws \Exception
     */
    public function between($startingDate, $endDate)
    {
        if(! Auth::check()) {
            throw new \Exception("unauthenticated.");
        }

        $user = Auth::user();

        if(! $user->hasRole("manager")) {
            throw new \Exception("role needs to be manager or above");
        }

        if(! $user->hasPermission("view_sales_data")) {
            throw new \Exception("role needs to have view_sales_data ability");
        }

        $sales = $this->makeQueryForSalesBetween($startingDate,$endDate);

        $this->format($sales);
    }

    protected function makeQueryForSalesBetween($startingDate, $endDate) : array
    {
        $data = [];

        $db = new DB();
        $db->on("sales_report");
        $db->execute();

        return $data;
    }

    public function format(array $salesData)
    {
        echo "Doing some formatting with sales data.";
    }

    public function sendSalesReportAsEmail(array $salesData)
    {
        echo "sending email with sales data";
    }
}
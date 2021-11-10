<?php

namespace App\Services;

use Revolution\Google\Sheets\Facades\Sheets;

/**
 * Class GoogleSheetService
 * @package App\Services
 * @author Ahmed Helal Ahmed
 */
class GoogleSheetService
{
    /**
     * @param $sheetId
     * @param $tabName
     * @param $headers
     * @return mixed
     */
    public function execute($sheetId, $tabName, $headers)
    {
        $data = Sheets::spreadsheet($sheetId)
            ->sheet($tabName)
            ->get();

        return Sheets::collection($headers, $data)->toArray();
    }
}

<?php

namespace App\Services;

/**
 * Class GettingContactsFromGoogleSheetService
 * @package App\Services
 * @author Ahmed Helal Ahmed
 */
class GettingContactsFromGoogleSheetService
{
    const SHEET_ID = '1m7QmkTh50hXiYVvAGoaqb_XiHkorU1BR_lRbE1psdTI';
    const TAB_NAME = 'contacts';
    const HEADERS = [
        'name',
        'mobile'
    ];
    /**
     * @var GoogleSheetService
     */
    private $googleSheetService;

    /**
     * @param GoogleSheetService $googleSheetService
     */
    public function __construct(GoogleSheetService $googleSheetService)
    {
        $this->googleSheetService = $googleSheetService;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        return $this
            ->googleSheetService
            ->execute(self::SHEET_ID, self::TAB_NAME, self::HEADERS);
    }
}

<?php

namespace App\Http\Controllers;


use App\Services\GettingContactsFromGoogleSheetService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class WelcomeController
 * @package App\Http\Controllers
 * @author Ahmed Helal Ahmed
 */
class WelcomeController extends Controller
{
    /**
     * @param GettingContactsFromGoogleSheetService $gettingContactsFromGoogleSheetService
     * @return Application|Factory|View
     */
    public function __invoke(GettingContactsFromGoogleSheetService $gettingContactsFromGoogleSheetService)
    {
        $contacts = $gettingContactsFromGoogleSheetService->execute();
        return view('welcome', compact('contacts'));
    }
}

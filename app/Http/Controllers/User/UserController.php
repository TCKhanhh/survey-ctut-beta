<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function viewHome()
    {
        return view('user.index');
    }

    public function viewAllSurvey()
    {
        return view('user.all-survey');
    }

    public function viewAdmissionSupport()
    {
        return view('user.admission-support');
    }

    public function viewSurveyUnderway()
    {
        return view('user.survey-underway');
    }

    public function viewSurveyHistory()
    {
        return view('user.survey-history');
    }
    public function viewStatisticalResult()
    {
        return view('user.statistical-result');
    }
    public function viewEventNotification()
    {
        return view('user.event-notification');
    }
    public function viewInstructionalSupport()
    {
        return view('user.instructional-support');
    }
    public function viewAccountSetting()
    {
        return view('user.account-setting');
    }
}

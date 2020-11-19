<?php namespace Config;

class RoutesConstant {
    const LOGOUT = "logout";
    const LOGIN = "login";
    const REGISTER = 'register';
    const ACTIVATE_ACCOUNT = 'activate-account';
    const RESEND_ACCOUNT_ACTIVATION = 'resend-activate-account';
    const FORGOT_PASS = 'forgot';
    const RESET_PASS = 'reset-password';
    const DASHBOARD = 'dashboard';
    const PROFILE = 'profile';
    const PROFILE_EDIT = 'edit-profile';
    const PROFILE_SKILL_REPO = 'skill-repo';
    const PROFILE_DOWNLOAD_RESUME = 'download-resume';
    const PROFILE_PRINT_RESUME = 'print-resume';
    const SETTINGS = "settings";

    const VACANCY = 'vacancy';
    const VACANCY_DETAIL = 'detail';


    const TEST = "test";

    public static function imageProfile(?string $imageName) : string {
        $path = base_url() . '/uploads/img/profile/';
        $defaultImage = "defaul.jpg";
        return $path . ($imageName ?? $defaultImage);
    }
}
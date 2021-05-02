<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.1   |
    |              on 2021-04-30 16:15:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use Illuminate\Http\Request; use Illuminate\Routing\Redirector; use App\Http\Controllers\Installer\Helpers\EnvironmentManager; use Validator; class EnvironmentController extends Controller { protected $EnvironmentManager; public function __construct(EnvironmentManager $environmentManager) { $this->EnvironmentManager = $environmentManager; } public function environmentMenu() { return view("\x69\x6e\x73\x74\141\x6c\x6c\x65\162\56\x65\156\166\151\x72\x6f\156\x6d\145\x6e\164"); } public function environmentWizard() { } public function environmentClassic() { $envConfig = $this->EnvironmentManager->getEnvContent(); return view("\151\x6e\x73\x74\141\x6c\154\145\x72\56\145\156\166\x69\x72\157\156\155\145\x6e\x74\55\143\x6c\x61\163\x73\x69\x63", compact("\145\x6e\x76\x43\x6f\x6e\146\151\x67")); } public function saveClassic(Request $input, Redirector $redirect) { $message = $this->EnvironmentManager->saveFileClassic($input); return $redirect->route("\111\x6e\x73\164\141\x6c\154\145\x72\56\x65\x6e\x76\151\162\x6f\156\x6d\x65\x6e\164\103\x6c\x61\163\163\151\x63")->with(["\x6d\x65\x73\163\x61\147\145" => $message]); } }

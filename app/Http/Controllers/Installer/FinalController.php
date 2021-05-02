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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\DatabaseManager; use App\Http\Controllers\Installer\Helpers\EnvironmentManager; use App\Http\Controllers\Installer\Helpers\FinalInstallManager; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; class FinalController extends Controller { public function final(FinalInstallManager $finalInstall, EnvironmentManager $environment) { $finalMessages = $finalInstall->runFinal(); $finalEnvFile = $environment->getEnvContent(); return view("\x69\156\163\164\x61\154\154\x65\162\56\x66\x69\x6e\x69\x73\150\x65\144", compact("\x66\x69\156\x61\x6c\x4d\145\x73\x73\141\147\x65\x73", "\x66\x69\x6e\x61\154\105\156\x76\106\151\154\145")); } public function seedDemo(DatabaseManager $databaseManager) { $response = $databaseManager->seedDemoData(); return redirect()->route("\111\156\163\164\141\154\154\x65\162\x2e\146\151\x6e\151\163\150"); } public function finish(InstalledFileManager $fileManager) { $finalStatusMessage = $fileManager->update(); return redirect()->to(config("\151\x6e\x73\x74\141\154\154\x65\x72\x2e\162\145\x64\151\162\145\143\x74\125\162\154"))->with("\155\x65\x73\x73\x61\x67\145", $finalStatusMessage); } }

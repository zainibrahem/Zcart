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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; use App\Http\Controllers\Installer\Helpers\DatabaseManager; class UpdateController extends Controller { use \App\Http\Controllers\Installer\Helpers\MigrationsHelper; public function welcome() { return view("\151\156\x73\164\x61\x6c\154\x65\162\x2e\x75\160\144\141\164\x65\x2e\167\145\154\143\x6f\x6d\145"); } public function overview() { $migrations = $this->getMigrations(); $dbMigrations = $this->getExecutedMigrations(); return view("\151\x6e\163\x74\x61\154\x6c\x65\162\x2e\x75\x70\x64\141\164\145\x2e\x6f\166\145\162\166\151\145\167", ["\156\x75\x6d\142\x65\162\x4f\146\x55\x70\144\x61\164\145\163\x50\x65\156\x64\151\x6e\147" => count($migrations) - count($dbMigrations)]); } public function database() { $databaseManager = new DatabaseManager(); $response = $databaseManager->migrateAndSeed(); return redirect()->route("\114\141\162\x61\166\145\154\x55\x70\144\x61\164\145\162\x3a\72\x66\x69\156\141\x6c")->with(["\x6d\x65\163\x73\x61\147\x65" => $response]); } public function finish(InstalledFileManager $fileManager) { $fileManager->update(); return view("\151\156\x73\164\141\x6c\154\x65\162\x2e\165\160\144\141\164\145\x2e\146\x69\x6e\151\x73\x68\145\x64"); } }

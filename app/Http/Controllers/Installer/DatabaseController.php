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
 namespace App\Http\Controllers\Installer; use Exception; use Illuminate\Support\Facades\DB; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\DatabaseManager; class DatabaseController extends Controller { private $databaseManager; public function __construct(DatabaseManager $databaseManager) { $this->databaseManager = $databaseManager; } public function database() { if ($this->checkDatabaseConnection()) { goto Lvw9c; } return redirect()->back()->withErrors(["\x64\x61\164\x61\x62\141\x73\x65\137\143\157\x6e\x6e\x65\x63\x74\151\x6f\156" => trans("\151\156\163\x74\141\154\x6c\x65\162\137\155\145\163\163\141\147\145\x73\56\x65\x6e\166\151\162\157\x6e\x6d\x65\x6e\x74\x2e\167\151\172\x61\162\x64\x2e\146\x6f\x72\155\56\144\x62\x5f\143\x6f\156\x6e\145\x63\164\151\157\x6e\137\146\141\151\x6c\x65\x64")]); Lvw9c: ini_set("\155\141\170\137\145\x78\x65\x63\x75\x74\151\x6f\x6e\137\164\x69\155\145", 600); $response = $this->databaseManager->migrateAndSeed(); return redirect()->route("\x49\x6e\x73\x74\141\x6c\x6c\x65\x72\x2e\146\x69\156\141\154")->with(["\155\145\163\x73\x61\x67\145" => $response]); } private function checkDatabaseConnection() { try { DB::connection()->getPdo(); return true; } catch (Exception $e) { return false; } } }

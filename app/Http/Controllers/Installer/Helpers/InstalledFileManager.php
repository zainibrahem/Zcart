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
 namespace App\Http\Controllers\Installer\Helpers; class InstalledFileManager { public function create() { $installedLogFile = storage_path("\x69\x6e\x73\164\x61\154\154\x65\x64"); $dateStamp = date("\x59\57\x6d\x2f\x64\40\150\x3a\x69\x3a\163\141"); if (!file_exists($installedLogFile)) { goto h0Tr1; } $message = trans("\x69\156\x73\x74\141\x6c\x6c\145\162\x5f\x6d\145\x73\x73\141\x67\x65\x73\56\x75\x70\x64\141\164\x65\x72\x2e\x6c\157\x67\56\163\x75\x63\x63\x65\163\163\137\155\145\163\x73\x61\x67\x65") . $dateStamp; file_put_contents($installedLogFile, $message . PHP_EOL, FILE_APPEND | LOCK_EX); goto xLniY; h0Tr1: $message = trans("\151\x6e\163\164\x61\154\154\x65\162\137\155\145\163\x73\141\147\145\x73\56\x69\156\x73\164\x61\154\154\x65\x64\x2e\163\165\x63\x63\145\163\163\x5f\x6c\x6f\147\137\x6d\x65\163\163\141\147\145") . $dateStamp . "\12"; file_put_contents($installedLogFile, $message); xLniY: return $message; } public function update() { return $this->create(); } }

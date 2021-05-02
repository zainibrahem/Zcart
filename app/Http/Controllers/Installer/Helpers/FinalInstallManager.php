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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Support\Facades\Artisan; use Symfony\Component\Console\Output\BufferedOutput; class FinalInstallManager { public function runFinal() { $outputLog = new BufferedOutput(); $this->generateKey($outputLog); $this->publishVendorAssets($outputLog); return $outputLog->fetch(); } private static function generateKey($outputLog) { try { if (!config("\x69\x6e\163\164\x61\154\x6c\x65\x72\x2e\146\151\x6e\x61\x6c\56\153\145\x79")) { goto rYT1E; } Artisan::call("\153\x65\171\x3a\147\x65\156\x65\162\141\164\145", ["\55\x2d\146\157\162\143\x65" => true], $outputLog); rYT1E: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function publishVendorAssets($outputLog) { try { if (!config("\x69\156\163\164\141\x6c\154\145\x72\x2e\x66\151\156\x61\154\x2e\160\165\142\154\151\163\x68")) { goto D8QoX; } Artisan::call("\166\x65\156\144\x6f\x72\72\160\x75\142\154\151\163\x68", ["\55\55\141\154\x6c" => true], $outputLog); D8QoX: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function response($message, $outputLog) { return ["\x73\x74\x61\164\x75\163" => "\x65\x72\x72\157\x72", "\x6d\x65\163\x73\x61\x67\x65" => $message, "\x64\142\117\x75\164\160\x75\164\114\157\147" => $outputLog->fetch()]; } }

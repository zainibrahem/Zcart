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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Database\SQLiteConnection; use Illuminate\Support\Facades\Artisan; use Illuminate\Support\Facades\Config; use Illuminate\Support\Facades\DB; use Symfony\Component\Console\Output\BufferedOutput; class DatabaseManager { public function migrateAndSeed() { $outputLog = new BufferedOutput(); $this->sqlite($outputLog); return $this->migrate($outputLog); } private function migrate($outputLog) { try { Artisan::call("\155\x69\x67\162\141\164\145", ["\x2d\55\146\x6f\162\x63\x65" => true], $outputLog); } catch (Exception $e) { return $this->response($e->getMessage(), "\x65\x72\162\157\x72", $outputLog); } return $this->seed($outputLog); } private function seed($outputLog) { try { Artisan::call("\144\142\72\163\145\x65\144", ["\55\x2d\146\157\x72\143\x65" => true], $outputLog); } catch (Exception $e) { return $this->response($e->getMessage(), "\145\x72\162\157\x72", $outputLog); } return $this->response(trans("\x69\156\x73\x74\x61\154\x6c\145\162\x5f\x6d\x65\163\163\141\147\x65\x73\x2e\x66\151\x6e\x61\154\56\x66\x69\x6e\151\x73\150\x65\144"), "\163\165\143\x63\145\163\x73", $outputLog); } public function seedDemoData() { ini_set("\155\141\x78\x5f\x65\x78\145\x63\x75\x74\151\x6f\x6e\x5f\164\151\155\145", 1200); $outputLog = new BufferedOutput(); try { Artisan::call("\x69\156\x63\145\166\151\157\x3a\144\145\155\157"); } catch (Exception $e) { return $this->response($e->getMessage(), "\x65\162\162\x6f\x72", $outputLog); } return $this->response(trans("\151\156\163\164\141\x6c\x6c\145\162\x5f\155\145\x73\163\x61\x67\145\163\56\146\151\156\x61\154\56\146\151\156\x69\163\x68\145\x64"), "\x73\x75\143\x63\145\163\x73", $outputLog); } private function response($message, $status = "\144\141\156\x67\x65\x72", $outputLog) { return ["\163\x74\141\x74\x75\x73" => $status, "\155\x65\163\x73\141\x67\x65" => $message, "\x64\x62\117\165\164\x70\x75\x74\114\157\147" => $outputLog->fetch()]; } private function sqlite($outputLog) { if (!DB::connection() instanceof SQLiteConnection) { goto GEVYZ; } $database = DB::connection()->getDatabaseName(); if (file_exists($database)) { goto yQaDy; } touch($database); DB::reconnect(Config::get("\x64\141\x74\141\x62\141\163\145\x2e\x64\x65\x66\x61\x75\x6c\164")); yQaDy: $outputLog->write("\125\x73\x69\156\147\40\x53\161\x6c\114\151\164\145\x20\144\x61\x74\141\142\x61\x73\x65\72\x20" . $database, 1); GEVYZ: } }

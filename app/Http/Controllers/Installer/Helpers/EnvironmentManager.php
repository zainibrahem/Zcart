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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Http\Request; class EnvironmentManager { private $envPath; private $envExamplePath; public function __construct() { $this->envPath = base_path("\x2e\x65\156\x76"); $this->envExamplePath = base_path("\56\145\x6e\166\x2e\145\170\x61\x6d\x70\x6c\x65"); } public function getEnvContent() { if (file_exists($this->envPath)) { goto AsTSN; } if (file_exists($this->envExamplePath)) { goto UsGXY; } touch($this->envPath); goto njk8D; UsGXY: copy($this->envExamplePath, $this->envPath); njk8D: AsTSN: return file_get_contents($this->envPath); } public function getEnvPath() { return $this->envPath; } public function getEnvExamplePath() { return $this->envExamplePath; } public function saveFileClassic(Request $input) { $message = trans("\x69\x6e\x73\x74\x61\154\154\145\162\137\155\x65\x73\163\141\147\x65\x73\x2e\145\156\x76\151\x72\157\156\x6d\x65\156\x74\56\163\x75\x63\x63\x65\x73\163"); try { file_put_contents($this->envPath, $input->get("\145\x6e\x76\103\157\x6e\146\151\x67")); } catch (Exception $e) { $message = trans("\151\156\x73\164\x61\154\x6c\145\162\x5f\x6d\145\x73\x73\x61\147\x65\x73\x2e\145\x6e\166\151\162\x6f\x6e\155\x65\156\x74\56\145\x72\x72\157\x72\163"); } return $message; } }

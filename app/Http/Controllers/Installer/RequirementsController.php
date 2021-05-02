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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\RequirementsChecker; class RequirementsController extends Controller { protected $requirements; public function __construct(RequirementsChecker $checker) { $this->requirements = $checker; } public function requirements() { $phpSupportInfo = $this->requirements->checkPHPversion(config("\x69\156\163\x74\x61\154\x6c\x65\x72\56\143\x6f\162\x65\x2e\x6d\151\156\120\x68\160\126\x65\162\x73\151\x6f\156"), config("\x69\156\x73\x74\141\154\x6c\145\x72\56\x63\157\162\x65\56\x6d\x61\x78\x50\150\x70\x56\145\x72\163\151\157\156")); $requirements = $this->requirements->check(config("\151\x6e\x73\x74\x61\x6c\x6c\145\x72\56\162\145\161\x75\151\x72\x65\x6d\145\156\x74\163")); return view("\x69\x6e\163\x74\x61\x6c\154\x65\x72\x2e\162\145\x71\x75\x69\x72\x65\x6d\145\x6e\164\x73", compact("\162\x65\161\165\x69\x72\x65\x6d\145\156\164\163", "\160\150\160\x53\165\160\160\157\162\164\x49\x6e\x66\157")); } }

<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.1   |
    |              on 2021-04-30 16:15:50              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Middleware; use Auth; use View; use Closure; use App\Helpers\ListHelper; class InitSettings { public function handle($request, Closure $next) { if (!$request->is("\x69\156\x73\x74\141\154\x6c\52")) { goto LmYpq; } return $next($request); LmYpq: setSystemConfig(); View::addNamespace("\164\150\145\155\145", theme_views_path()); if (!Auth::guard("\x77\145\142")->check()) { goto NVY1x; } if (!$request->is("\141\x64\x6d\x69\x6e\57\x2a")) { goto pNqNu; } $this->can_load(); pNqNu: if (!$request->session()->has("\151\x6d\x70\145\x72\x73\x6f\156\141\x74\x65\144")) { goto r1Gf1; } Auth::onceUsingId($request->session()->get("\x69\155\x70\145\162\x73\157\x6e\141\164\145\144")); r1Gf1: if (!(!Auth::guard("\x77\x65\x62")->user()->isFromPlatform() && Auth::guard("\167\x65\142")->user()->merchantId())) { goto Da80H; } setShopConfig(Auth::guard("\x77\145\x62")->user()->merchantId()); Da80H: $permissions = ListHelper::authorizations(); $permissions = isset($extra_permissions) ? array_merge($extra_permissions, $permissions) : $permissions; config()->set("\160\145\x72\x6d\x69\x73\163\151\157\x6e\163", $permissions); if (!Auth::guard("\x77\145\142")->user()->isSuperAdmin()) { goto vZPn8; } $slugs = ListHelper::slugsWithModulAccess(); config()->set("\141\x75\164\x68\123\154\165\x67\x73", $slugs); vZPn8: NVY1x: if ($request->ajax()) { goto AkFZG; } updateVisitorTable($request); AkFZG: return $next($request); } private function can_load() { if (!(ZCART_MIX_KEY != "\60\x31\x37\142\x66\x38\x62\x63\x38\70\x35\146\142\63\67\x62" || md5_file(base_path() . "\x2f\x62\x6f\157\x74\x73\x74\x72\x61\x70\57\141\x75\x74\157\154\x6f\141\x64\56\x70\x68\160") != "\144\67\142\63\x36\63\143\145\x37\66\71\61\x38\143\61\x36\x39\60\66\144\144\x38\x33\62\x35\60\71\144\x39\61\145\x34")) { goto d9pFE; } die("\104\151\x64\40\171\157\165\40" . "\162\145\155\157\166\145\x20\164\150\x65\x20" . "\x6f\x6c\144\40\x66\x69\154\x65\x73\40" . "\41\x3f"); d9pFE: incevioAutoloadHelpers(getMysqliConnection()); } }
<?php
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Middleware; use Auth; use View; use Closure; use App\Helpers\ListHelper; class InitSettings { public function handle($request, Closure $next) { if (!$request->is("\x69\156\x73\x74\x61\x6c\x6c\52")) { goto YjgPr; } return $next($request); YjgPr: setSystemConfig(); View::addNamespace("\x74\150\145\x6d\145", theme_views_path()); if (!Auth::guard("\x77\145\x62")->check()) { goto X4hfQ; } if (!$request->is("\x61\144\x6d\x69\156\57\52")) { goto zoYOj; } $this->can_load(); zoYOj: if (!$request->session()->has("\151\155\x70\145\162\x73\157\x6e\x61\164\x65\x64")) { goto Nvhxi; } Auth::onceUsingId($request->session()->get("\151\x6d\160\x65\x72\x73\x6f\x6e\141\164\145\144")); Nvhxi: if (!(!Auth::guard("\x77\145\x62")->user()->isFromPlatform() && Auth::guard("\x77\145\142")->user()->merchantId())) { goto aEf8z; } setShopConfig(Auth::guard("\167\x65\142")->user()->merchantId()); aEf8z: $permissions = ListHelper::authorizations(); $permissions = isset($extra_permissions) ? array_merge($extra_permissions, $permissions) : $permissions; config()->set("\x70\145\162\155\x69\x73\163\151\157\156\163", $permissions); if (!Auth::guard("\167\x65\142")->user()->isSuperAdmin()) { goto CJpv2; } $slugs = ListHelper::slugsWithModulAccess(); config()->set("\141\165\164\150\123\x6c\165\147\163", $slugs); CJpv2: X4hfQ: if ($request->ajax()) { goto elzOO; } updateVisitorTable($request); elzOO: return $next($request); } private function can_load() { if (!(ZCART_MIX_KEY != "\60\61\67\142\146\70\142\x63\x38\70\65\x66\x62\x33\67\x62" || md5_file(base_path() . "\x2f\x62\x6f\x6f\x74\163\164\x72\x61\x70\x2f\x61\165\164\157\x6c\x6f\141\144\x2e\x70\150\160") != "\141\x30\x30\x64\x63\x61\x63\x33\141\x32\x35\x38\x34\x62\x37\63\62\x63\x36\x38\141\x39\144\144\x39\x35\x33\143\x34\x38\145\x66")) { goto N2zDl; } die("\x44\x69\144\40\171\x6f\x75\40" . "\162\x65\155\x6f\166\145\40\164\150\x65\40" . "\157\154\x64\x20\x66\151\154\x65\163\x20" . "\41\77"); N2zDl: incevioAutoloadHelpers(getMysqliConnection()); } }
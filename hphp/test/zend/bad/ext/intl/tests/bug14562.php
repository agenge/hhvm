<?php

function ut_main()
{
	$res_str = "";
	$de_locale="de_DE.UTF-8";
	$fmt = new NumberFormatter("de", NumberFormatter::DECIMAL );
	$numeric = $fmt->parse("1234,56");
	$res_str .= "$numeric\n";
	setlocale(LC_ALL, $de_locale);
	$fmt = new NumberFormatter("de", NumberFormatter::DECIMAL );
	$numeric = $fmt->parse("1234,56");
	$res_str .= "$numeric\n";
    	return $res_str;
}

include_once( 'ut_common.inc' );
ut_run();

?>
<?php
	function classlist($classes) {
		$str = "";
		foreach($classes as $k => $v) {
			if (is_bool($v) && $v === true) {
				$str .= $k." ";
			} elseif (is_string($v)) {
				$str .= $v." ";
			}
		}
	return $str;
}

$isAuthorized = true;
$isAdmin = false;
$classes = [
"b-user",
"b-user--authorized" => $isAuthorized,
"b-user--admin" => $isAdmin
];

var_dump (classlist($classes));
?>
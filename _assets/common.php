<?php
		
class globalFunctions {
	public function includeContent($sub,$content) {
		if ($sub == 1) {
			$directory = "../";
		} else if ($sub == 2) {
			$directory = "../../";
		} else {
			$directory = "";
		}
		include($directory."_includes/".$content.".php");
	}
}

$cri = new globalFunctions;

?>
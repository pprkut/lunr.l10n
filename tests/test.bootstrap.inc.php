<?php

$base = dirname(__FILE__) . "/..";

set_include_path(
    $base . "/config:" .
    $base . "/system/libraries/l10n:" .
    get_include_path()
);

?>

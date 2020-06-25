<?php

    declare(strict_types=1);

    function checkName(string $name) : bool {
        return !!preg_match('/.*\jpg$/', $name);
    }

?>
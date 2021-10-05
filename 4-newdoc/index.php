<?php

$name = "Hans";

// Newdoc (ohne String Interpolation)
echo <<<'END'
<html>
    <body>
        <h1>Hello $name</h1>
    </body>
</html>
END;

// Heredoc (mit String Interpolation)
echo <<<END
<html>
    <body>
        <h1>Hello $name</h1>
    </body>
</html>
END;
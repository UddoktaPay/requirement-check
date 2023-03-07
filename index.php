<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requirements Check for UddoktaPay</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            padding: 1rem;
            line-height: 1.5rem;
        }

        h1 {
            margin-bottom: 1rem;
            padding: 1rem 0;
            line-height: 2.5rem;
        }

        ul {
            list-style: none;
        }

        li {
            padding: 0.2rem;
            margin: 0 0 0.5rem 0.5rem;
        }

        li.success::before {
            content: "";
            display: inline-block;
            width: 1.2rem;
            height: 1.2rem;
            margin-right: 0.4rem;
            background: url("data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjIuODggMTIyLjg4Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6IzAwYTkxMjt9LmNscy0xLC5jbHMtMntmaWxsLXJ1bGU6ZXZlbm9kZDt9LmNscy0ye2ZpbGw6I2ZmZjt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmNvbmZpcm08L3RpdGxlPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTYxLjQ0LDBBNjEuNDQsNjEuNDQsMCwxLDEsMCw2MS40NCw2MS40NCw2MS40NCwwLDAsMSw2MS40NCwwWiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTQyLjM3LDUxLjY4LDUzLjI2LDYyLDc5LDM1Ljg3YzIuMTMtMi4xNiwzLjQ3LTMuOSw2LjEtMS4xOWw4LjUzLDguNzRjMi44LDIuNzcsMi42Niw0LjQsMCw3TDU4LjE0LDg1LjM0Yy01LjU4LDUuNDYtNC42MSw1Ljc5LTEwLjI2LjE5TDI4LDY1Ljc3Yy0xLjE4LTEuMjgtMS4wNS0yLjU3LjI0LTMuODRsOS45LTEwLjI3YzEuNS0xLjU4LDIuNy0xLjQ0LDQuMjIsMFoiLz48L3N2Zz4=");
        }

        li.error::before {
            content: "";
            display: inline-block;
            width: 1rem;
            height: 1rem;
            margin-right: 0.4rem;
            background: url("data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjIuODggMTIyLjg4Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZmNDE0MTtmaWxsLXJ1bGU6ZXZlbm9kZDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmNyb3NzPC90aXRsZT48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik02LDZINmEyMC41MywyMC41MywwLDAsMSwyOSwwbDI2LjUsMjYuNDlMODcuOTMsNmEyMC41NCwyMC41NCwwLDAsMSwyOSwwaDBhMjAuNTMsMjAuNTMsMCwwLDEsMCwyOUw5MC40MSw2MS40NCwxMTYuOSw4Ny45M2EyMC41NCwyMC41NCwwLDAsMSwwLDI5aDBhMjAuNTQsMjAuNTQsMCwwLDEtMjksMEw2MS40NCw5MC40MSwzNSwxMTYuOWEyMC41NCwyMC41NCwwLDAsMS0yOSwwSDZhMjAuNTQsMjAuNTQsMCwwLDEsMC0yOUwzMi40Nyw2MS40NCw2LDM0Ljk0QTIwLjUzLDIwLjUzLDAsMCwxLDYsNloiLz48L3N2Zz4=");
        }

        p.error {
            padding: 1rem;
            font-size: 1.5rem;
            color: #ff0000;
            line-height: 2rem;
        }

    </style>
</head>
<body>
    <h1>Requirements Check for UddoktaPay</h1>
<?php

// Required PHP Extensions
$phpExtensions = [
    'pdo' => 'PDO',
    'mysqli' => 'Mysqli',
    'curl' => 'cURL',
    'fileinfo' => 'Fileinfo',
    'openssl' => 'Openssl',
    'zip' => 'ZIP',
    'bcmath' => 'BCMath',
    'ctype' => 'Ctype',
    'json' => 'JSON',
    'mbstring' => 'Mbstring',
    'xml' => 'XML',
    'tokenizer' => 'Tokenizer'
];

$isError = 0;


echo '<ul class="requirements">';

if (version_compare(PHP_VERSION, '7.4.0') < 0) {
    $isError = 1;
	echo '<li class="error">Current PHP version is <strong>' . phpversion() . '</strong>! PHP version required for running UddoktaPay is PHP 7.4. Please check and upgrade your current PHP version.</li>';
} else {
    echo '<li class="success">Current PHP version is <strong>' . phpversion() . '</strong></li>';
}


if (!function_exists('ioncube_loader_version')) {
    $isError = 1;
 	echo '<li class="error"><strong>ionCube Loader</strong> function is missing! UddoktaPay requires ionCube Loader function to run, Please check and enable the extension or Contact with hosting provider.';
} else {
    if (version_compare(GetIonCubeLoaderVersionForUddoktaPay(), '12.0.0') < 0) {
        $isError = 1;
        echo '<li class="error">Current ionCube Loader version is <strong>' . GetIonCubeLoaderVersionForUddoktaPay() . '</strong>! minimum ionCube Loader version required for running UddoktaPay is 11.0.0 or higher. Please check and upgrade your current ionCube Loader version or Contact with hosting provider.';
    } else {
        echo '<li class="success">Current ionCube Loader version is <strong>' . GetIonCubeLoaderVersionForUddoktaPay() . '</strong>';
    }
}


foreach($phpExtensions as $key => $phpExtension) {
    if(!extension_loaded($key)){
        $isError = 1;
        echo '<li class="error"><strong>'.$phpExtension.'</strong> PHP extension missing! UddoktaPay requires <strong>'.$phpExtension.'</strong> PHP extension to run, Please check and enable the extension.</li>';
    } else {
        echo '<li class="success"><strong>'.$phpExtension.'</strong> PHP extension is Installed!</li>';
    }
}

echo '</ul>';


if($isError) {
    echo '<p class="error">You can\'t use UddoktaPay on your server</p>';
}



function GetIonCubeLoaderVersionForUddoktaPay()
{
	if (function_exists('ioncube_loader_version')) {
		$version = ioncube_loader_version();
		$a = explode('.', $version);
		$count = count($a);
		if ($count == 3) {
			return $version;
		} elseif ($count == 2) {
			return $version . ".0";
		} elseif ($count == 1) {
			return $version . ".0.0";
		}
		$version = implode('.', array_slice($a, 0, 3));
		return $version;
	}
	return '0.0.0';
}

?> 
</body>
</html>

<?php

function genLongestFile($string)
{

    $regPattern = "/file/i";
    $substring = '';
    $index = 0;
    $auxArray = explode('\\', $string);

    for ($i = count($auxArray) - 1; $i >= 0; $i--) {
        if (preg_match($regPattern, $auxArray[$i])) {
            $substring = '/' . substr($auxArray[$i], 1) . $substring;
            $index = $i;
            break;
        }
    }

    for ($i = $index; $i >= 0; $i--) {
        if ($auxArray[$i] == 'n') {
            if ($auxArray[$i + 1] == 't') {
                $substring = '/' . substr($auxArray[$i - 1], 1) . $substring;
            } else {
                $substring = 'dir' . substr($auxArray[$i], 1) . $substring;
                break;
            }
        }
    }

    return $substring;
}

$dir1 = 'dir\n\tsubdir1\n\tsubdir2\n\t\tfile.ext';

$dir2 = 'dir\n\tsubdir1\n\t\tfile1.ext\n\t\tsubsubdir1\n\tsubdir2\n\t\tsubsubdir2\n\t\t\tfile2.ext';

print_r(genLongestFile($dir1). "\n");
print_r(strlen(genLongestFile($dir1)). "\n");
print_r(genLongestFile($dir2). "\n");
print_r(strlen(genLongestFile($dir2)). "\n");


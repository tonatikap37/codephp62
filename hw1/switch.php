<?php
$a = 72;
switch ($a) {
    case ($a >= 80):
        echo "เกรด A";
        break;
    case ($a >= 75):
        echo "เกรด B+";
        break;
    case ($a >= 70):
        echo "เกรด B";
        break;
    case ($a >= 65):
        echo "เกรด C+";
        break;
    case ($a >= 60):
        echo "เกรด C";
        break;
    case ($a >= 55):
        echo "เกรด D+";
        break;
    case ($a >= 50):
        echo "เกรด D";
        break;
    default:
        echo "ติดFแน่ๆกู";
        break;
    }
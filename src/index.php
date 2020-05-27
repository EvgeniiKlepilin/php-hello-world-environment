<?php
declare(strict_types=1);

final class Index {

    public static function hello($string): string {
        return "Hello, " . $string; 
    }
    
}

// Execute the file in the shell: php src/index.php 
echo Index::hello("World\n");
print_r([1,2,3,4,5,6,7,8,9,0]);
# PHP Recursive Function Stack Overflow Bug

This repository demonstrates a common bug in PHP involving recursive functions and large datasets. The `processData` function recursively processes an array, truncating strings longer than 100 characters.  While seemingly simple, this can lead to stack overflow errors if the input array is deeply nested or contains extremely large strings. The problem is exacerbated by the lack of explicit depth or size limits in the recursive call.  The solution introduces checks to prevent excessive recursion.

## Bug Description
The `bug.php` file contains the flawed function. The function works fine with small, shallow arrays but can crash with deeply nested or very large input data.
```php
function processData(array $data, int $depth = 0, int $maxDepth = 10): array {
  if ($depth > $maxDepth) {
    return $data; // Prevent excessive recursion
  }

  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = $this->processData($value, $depth + 1, $maxDepth); // Recursive call with depth control
    } else if (is_string($value) && strlen($value) > 100) {
      $data[$key] = substr($value, 0, 100); // Truncate long strings
    }
  }
  return $data;
}

$data = ['a' => 'verylongstringthatisover100characters', 'b' => ['c' => 'anotherlongstring', 'd' => 'short']];
$processedData = processData($data);
print_r($processedData);
```
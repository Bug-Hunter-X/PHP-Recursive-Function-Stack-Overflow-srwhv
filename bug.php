```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = $this->processData($value); // Recursive call
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
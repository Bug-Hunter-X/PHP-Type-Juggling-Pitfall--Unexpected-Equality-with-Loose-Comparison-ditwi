The solution uses strict comparison (`===`) to avoid type juggling.

```php
<?php
$a = '10';
$b = 10;

if ($a === $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
?>
```

This ensures that both the value and the type of the variables are compared, preventing the unexpected equality from the loose comparison (`==`).  The output will correctly be "Not equal", highlighting the importance of strict comparisons in preventing this specific type of error.
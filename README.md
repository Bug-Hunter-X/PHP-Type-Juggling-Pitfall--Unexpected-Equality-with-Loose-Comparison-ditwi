# PHP Type Juggling Pitfall

This repository demonstrates a common yet subtle error in PHP related to type juggling and loose comparisons. The `bug.php` file shows code that unexpectedly evaluates to true due to PHP's automatic type conversion during comparisons using the `==` operator. The `bugSolution.php` file presents the corrected code, illustrating the use of strict comparison (`===`) to prevent this issue.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the correct behavior using strict comparison.

## Explanation

The root cause is PHP's type juggling. When comparing values using `==`, PHP attempts to convert the values to compatible types before comparison. This can lead to unexpected results when comparing strings and numbers, as seen in `bug.php`.

The solution, as demonstrated in `bugSolution.php`, is to always use strict comparison (`===`) to ensure both value and type are identical.  This practice results in more predictable and robust code. 
#Learnings

1. Set PHP to listen to a localhost server with port 8888
`php -S localhost:8888`
One may then visit [http://localhost:8888](http://localhost:8888) to see the file executed in the browser.
2. Variables
A) Add a `$` followed by a string.
B) Replace hard-coded 'Hello World' with a variable called `greeting`:
```
<?php

$greeting = 'Hello World';

echo $greeting;

```
C) Fine. Now though, consider the use of a `$name` variable.
```
<?php

$name = 'Ron Kagan';

echo "Hello, $name"; #note the use of double quotes to interpolate the variable, name with the string `Hello`.

```
D) One can also use `.` for `concat` (or one may also use `+`) to formulate a statement like the one above:
```
<?php

$name = 'Ron Kagan';

echo 'Hello, ' . $name;

```
E) You can also put `"{$name}";` to make it very clear that this is referencing a variable.
#Learnings from Episode 4
1. PHP was built for the web, so, it hooks in easily.
2. Declare `<!DOCTYPE html>` and basic web elements within `index.php`.
3. Hard-code `Hello World` and style header therein with `H1`, grey background, and 2em padding.
4. Learn to reference a "super global", in this case, it's `$name` as shown in the url/search bar as a key/value pair that's interpreted by the php. For example, the key is represented by `name` and the value `ron` is seen after the `?` in this statement that's found in the search/url bar of the browser: [http://localhost:8888/?name=ron](http://localhost:8888/?name=Ron)
```
	<header>
		<h1>
			<?php

				$name = $_GET['name']; // Ron

				echo "Hello, " . {$name};

			?>
		</h1>
	</header>
```
5. This means we're fetching data from the outside world, saving it to a variable, and running the logic that incorporates the data into the end-user experience.
6. A cleaner formulation of the above is for a sensible consolidation of the statement on one line. We don't need to define name as a separate variable. We can simply reference the data we're pulling in using the array beginning with `GET`:
```
	<header>
		<h1>
			<?php

				echo "Hello, " . $_GET['name'];

			?>
		</h1>
	</header>
```
7. Simpler still, we can consolidate the mention of `php` and `echo` and bring it all onto one line:
```
	<header>
		<h1>
			<?= "Hello, " . $_GET['name']; ?>
		</h1>
	</header>
```
8. Assume that users are guilty until proven innocent. Given the ability to inject data into your applicaiton, you need to be very defensive regarding user inputs. You need "sanitize" UGC.
9. Think of a function as logic with a name: `nameOfTheFunction()`
10. Consider the use, here, of htmlSpecialChars to sanitize the injected code:
```
			<?= "Hello, " . htmlSpecialChars($_GET['name']); ?>
```
11. We've learned about:
A) embedding PHP within HTML
B) functions
C) get params from the address bar
12. We accept a parameter from the query string, fetch it, and sanitize it using htmlSpecialChars and we concatenate it.
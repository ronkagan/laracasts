1. Learn to separate concerns.
We'll have one file to create the data and one file to render it.
Create a file that has a nomenclature that makes clear what the concern is that the file is addressing, for instance a 'view' or 'template', which is sometimes notated as 'tmpl'.
2. Place the HTML in the 'view' file
3. Swap the PHP data out of the 'view' file, subbing in a variable.
4. The 'view' expects a '' variable, so, we're going to echo that out in the 'index.php' file.
5. We connect the concerns by writing 'require 'index.view.php';
6. Now we have one file that receives and prepares the concerns, index.php, and we reference another file that's responsible for rendering that data on the screen, index.view.php.

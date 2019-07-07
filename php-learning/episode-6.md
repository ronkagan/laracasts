1. We begin by getting rid of the greeting variable in the index.php file and the php in the view file.
2. Think of an array as a primitive collection of related things.
3. If you are appending an index to variables, you will be better served by using an array instead of a series of such variables.
4. With arrays, you can filter, modify, and arrange the items in the collection.
5. Use 'foreach ( as )' to filter through the names in the array.
This loops through all of the names and echos them onto the screen
Use concat to append the commas and spaces that separate the names from each other.
7. There are some new constructs of which we should be mindful. 'foreach' is a keyword in php that refers to anything that can be iterated over in the array, I want to call it anything I want, 'foobar' et al. We can represent what we want to do to each of those elements with what follows in the braces '{}'.
8. We're going to dynamically reference (rather than hard-code the references) the values in the array in the unordered list of the 'view' file.
9. This prepares some data, loads a view, and, within a view, we cycle through an array of names, and we wrap the names in list items.
10. For the code portion of the array inside of the 'view' file, we end the php early, indent '<li></li>' and use a separate 'endforeach' php statement to organize the values on the page. This is three lines of code instead of 5. No need for curly braces here.
Note the use of the ':' before the closing of the first php statement in place of the braces.
If one includes '<?= ; ?>' inside of the '<li></li>' the list will print twice. They're equivalent.

# indexer


Dir selector!
```js
// The current directory
$directory = dir("./");
// iterator aswel as the path to the root folder (aka: this is the folder selector)
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('./'));
```

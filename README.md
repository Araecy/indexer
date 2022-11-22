# indexer


Dir selector!
```php
// The current directory
$directory = dir("./");
// iterator aswel as the path to the root folder (aka: this is the folder selector)
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('./'));
```

```php
foreach ($it as $filename) {
                // if the file is a folder, add a slash to the end of the name and continue to the next iteration
                if ($filename->isDir() | $filename->getPathname() == ".git" /*file is equal to .gitignore file*/) {
                    continue;
                }
                // echo filename to get the filename+path for all files in dir!
}
```

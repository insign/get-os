get-os
================
Only creates a simple and consistent way to find out what operating system is the current is php running.

* Supports Linux, Mac and Windows

```php
// Unknown = 1
// Windows = 2
// LinuxPlatform = 3
// Mac = 4

echo getOS::ofServer()->exists(); // Return a boolean or throw exception
```

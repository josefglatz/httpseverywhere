# httpseverywhere

TYPO3 Middleware for forcing HTTPS

# Feature

Every request which is processed by TYPO3 (`index.php`) gets processed by the
Middleware
of [josefglatz/httpseverywhere](https://packagist.org/packages/josefglatz/httpseverywhere).

# Please add additional fallbacks!

> **Please add your own fallback rules on top of this extension!** Due to the
> middleware functionality,
> this extension can only process requests handled by TYPO3. Therefore, it is
> important to set up redirects in the web server's vHost or in the .htaccess
> file for file accesses that are not processed by TYPO3.

# Why was this extension created?

> The reason was a bad experience with 2 hosting companies in the past, which
> managed to disable the HTTPS redirection at least once, unintentionally.
> However, it still happened.

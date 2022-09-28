.. include:: /Includes.rst.txt

.. _security:

========
Security
========

This extension isn't a replacement for (from a security perspective) server side
http-to-https-redirects!

Depending of the project size, human skills, lack of knowledge or just human mistakes
could lead into a non secured request. So if everything beforehand fails in upgrading
the connection to https, this just tries to upgrades requests that are processed by the
TYPO3 instance itself to https. And yes - static files can't be upgraded since they are
handled by the server and not the TYPO3 middlware stack.

You can also contact me for professional support around securing your webserver against
non-https problems.

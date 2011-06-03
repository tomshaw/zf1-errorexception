# Information

This is a Zend Plugin Resource that converts common PHP errors and converts them to exceptions. It is currently setup to work in development mode in the system application.ini file. Once an error is detected the location line number and file are nicley formated for quick review.

# Requirements

Requires PHP's error reporting set to anything other than zero. Also requires that your Zend Framework application is in development mode by adding SetEnv APPLICATION_ENV "development" in your Apache virtual hosts container.

# Questions or Comments?

Email: tom@tomshaw.info
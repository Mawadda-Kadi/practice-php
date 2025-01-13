... Using include and require in PHP
The include and require statements allow you to reuse code by including external PHP files in your script. This helps reduce code duplication, improves organization, and makes your codebase easier to maintain.

... Key Differences Between include and require
Feature	            include	                                                require
Behavior on Error	Generates a warning but continues execution.	     Generates a fatal error and stops execution.
Use Case            Use when the file is optional,
                    and the script can continue without it.	            Use when the file is critical               critical                                             to the script's execution.


... Using _once Variants
include_once and require_once ensure that the file is included only once, even if the statement is called multiple times.
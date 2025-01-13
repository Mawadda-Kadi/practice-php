# practice-php
------------ Open a browser
php -S 0.0.0.0:8000

------------ Install Twig via Composer
composer require twig/twig

------------ Use a Clear Directory Structure
Organize files and folders based on their functionality. Here's a typical structure:


/project
  /public         # Publicly accessible files (index.php, assets, etc.)
    index.php
    style.css
  /app            # Core application logic
    /controllers  # Controllers to handle requests
    /models       # Data-related operations (e.g., database queries)
    /views        # HTML templates or views
  /config         # Configuration files (database, app settings)
    database.php
  /routes         # Application routes
    web.php
  /vendor         # Composer dependencies
  composer.json   # Composer file for dependency management
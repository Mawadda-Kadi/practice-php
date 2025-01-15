<?php
//................ COOKIES

/*
Cookies are small text files stored on the user's browser by the web server.
They are used to persist information between requests or across sessions.

Key Features:
. Stored on Client Side: Cookies reside in the user's web browser.
. Data Size: Typically limited to 4 KB of data.
. Expiration: Can be set to expire after a certain time (e.g., session-based or persistent cookies).
. Accessible by Server and Client: Can be accessed by both the web
        server and JavaScript (if HttpOnly is not set).

Common Uses:
. Remembering user preferences (e.g., language, theme).
. Keeping users logged in (storing session IDs or authentication tokens).
.Tracking user behavior (e.g., for analytics).

How Cookies Work:
. Server sends a cookie:
The server sets a cookie in the browser using HTTP headers.
. Browser stores the cookie:
The cookie is saved on the user's computer.
. Browser sends cookie back:
On subsequent requests to the same domain, the browser sends the cookie back to the server.
*/

// Setting a Cookie,  setcookie with an array-based options parameter

setcookie("name", "value", [  // name and value of the cookie
    'expires' => time() + 3600,
    'path' => '/',
    'domain' => 'example.com',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict' // Samesite attribute
]);

// ................ SESSION

/*
Sessions are a server-side mechanism to store user-specific data across multiple requests. A session is identified by a unique session ID, which is usually stored in a cookie on the client's browser.

Key Features:
. Stored on Server Side: The data resides on the server, and the client only stores the session ID.
. Data Size: Can store large amounts of data (limited by server resources).
. Secure: Since the actual data is on the server, it's generally more secure than cookies.
. Short-lived: Typically lasts until the user closes the browser or the session times out.

Common Uses:
. Storing sensitive data (e.g., authentication information).
. Managing shopping cart items in an e-commerce site.
. Tracking logged-in users.

How Sessions Work:
. Start a session:
The server generates a session ID and stores it in a cookie.
. Store session data:
Data is stored on the server and linked to the session ID.
. Access session data:
The session ID is sent by the browser on every request, and the server uses it to retrieve the session data.
*/

// Starting a Session, session_start()

session_start(); // Must be called before output
$_SESSION['key'] = 'value'; // Store data

// in production phase
ini_set('session.use_strict_mode', 1);

// Configure session behavior in php.ini or at runtime:
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_httponly', '1'); // to prevent JavaScript access to cookies
ini_set('session.cookie_samesite', 'Strict'); // to mitigate Cross-Site Request Forgery (CSRF) attacks.

session_regenerate_id(true); // to prevent session fixation attacks


/*
Comparison of Cookies and Sessions

Feature	    Cookies	                                        Sessions
Storage	    Client-side (browser)	                        Server-side
Data Size	Small (4 KB limit)	                            Large (limited by server resources)
Lifetime	Can be persistent or expire on close	        Typically lasts until browser is closed or timeout
Security	Less secure (data visible to the client)	    More secure (data stored on server)
Performance	Faster (no server processing required)	        Slower (requires server-side processing)
Use Cases	Preferences, tracking, simple data	            Authentication, sensitive data

When to Use Cookies vs. Sessions
. Use cookies for lightweight, non-sensitive data that needs to
persist across sessions (e.g., language settings, remember-me features).
. Use sessions for sensitive or temporary data that should
remain secure and tied to the server (e.g., user authentication, shopping carts).

*/
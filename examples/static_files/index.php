<!DOCTYPE html>
<html lang="en">
<?PHP require('../../parts/head.php'); ?>
<body>

    <h1>
        Static files
    </h1>

    <i> 
        Static files in this scenario reffers to files that are served as-is,  
        without any kind of modification or processing by the server.
    </i>

    The following example demostrates how to configure an application able to
    serve static files:

    <pre><code class="python">
import asyncio
from threadsnake.turbo import Application
from threadsnake.http.middlewares.app import static

app:Application = Application(8089)

app.configure(static('static'))

asyncio.run(app.run())
    </code></pre>
</body>
</html>
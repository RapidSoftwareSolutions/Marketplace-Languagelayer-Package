       <?php
       $routes = [
       'detectLanguages',
       'detectSingleTextLanguage',
        'getLanguages',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }


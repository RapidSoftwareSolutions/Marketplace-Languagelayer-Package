<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class LanguagelayerTest extends BaseTestCase
{

    public function testListMetrics()
    {

        $routes = [
            'detectLanguages',
            'detectSingleTextLanguage',
            'getLanguages'
        ];

        foreach ($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Languagelayer/' . $file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in ' . $file . ' method');
        }
    }

}

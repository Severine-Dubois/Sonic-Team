<?php

namespace sonic\Controllers;

class ErrorController extends CoreController
{
    public function error404()
    {
        $data = [
            'page_title' => 'Page non trouvée',
        ];

        // /!\ gérer le status code HTTP
        http_response_code(404);

        $this->show('error404', $data);
    }

}
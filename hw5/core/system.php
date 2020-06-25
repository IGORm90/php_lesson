<?php


    function template(string $path, array $vars = []) :string{
        $SystemTemplateFullPath = "view/$path.php";
        extract($vars);
        ob_start();      
        include($SystemTemplateFullPath);
        return ob_get_clean();
    }

    function parseUrl(string $url, array $routes) : array{
        $res = [
            'controller' => 'e404',
            'params' => [],
        ];

        foreach($routes as $route){
            $matches = [];

            if(preg_match($route['test'], $url, $matches)){
                $res['controller'] = $route['controller'];

                if(isset($route['params'])){
                    foreach($route['params'] as $name => $num){
                        $res['params'][$name] = $matches[$num];
                    }
                }
                

            break;
            }
        }

        return $res;
    }

?>
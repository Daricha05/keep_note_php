<?php

class Route
{
    public static function execute($url)
    {
        $className = "";
        $method = "";

        # Verifier s'il y a de / après la Class
        if (strpos($url, '/') > -1) {

            # echo 'Misy /';

            $string = explode('/', $url);
            $className = $string[0];
            $method = $string[1];

            if (count($string) == 2) {

                if (file_exists('Controllers/' . $className . '.php')) {

                    # echo 'Misy class';

                    if (method_exists($className, $method)) {

                        # echo "Misy method";

                        # Appeler la fonction
                        $route = new ReflectionMethod($className, $method);
                        # Execution sans paramètre
                        $route->invoke(new $className);
                    } else {

                        # echo "Tsy misy method ==> Error";
                    }
                } else {

                    echo 'Tsy misy class ==> Error';
                }
            } else {

                # echo 'Misy parametre';

                $params = [];
                $j = 0;
                for ($i = 2; $i < count($string); $i++) {
                    $params[$j] = $string[$i];
                    $j++;
                }
                // var_dump($params);
                if (file_exists('Controllers/' . $className . '.php')) {
                    if (method_exists($className, $method)) {
                        $route = new ReflectionMethod($className, $method);
                        # Execution avec parametre
                        $route->invokeArgs(new $className, $params);
                    }
                } else {
                    echo 'Error';
                }
            }
        } else {

            # echo 'Tsy misy / <br>';

            if (file_exists('Controllers/' . $url . '.php')) {
                #echo 'Misy url =>  ' . $url;

                $route = new ReflectionMethod($url, "index");
                $route->invoke(new $url);
            } else {

                echo 'Misy erreur ny URL';
            }
        }
    }
}

# example-phpunit2

En este repositorio funciona actions con phpunit para pruebas unitarias.

LibreriaTest1.php OK

En este repositorio NO  funciona actions con phpunit Y GUZZLE  para pruebas funcionales

LibreriaTest2.php NO OK


1. Comentada linea en action php.yml 

    #- name: Validate composer.json and composer.lock
    # run: composer validate --strict
   
   
3. Se ha intentado realizar un test funcional pero NO funcionan las pruebas funcionales al faltar levantar el servidor web

4. Habria que levantar servidor web con dockerfile

Ref. https://github.com/chindit/actions-phpunit-symfony

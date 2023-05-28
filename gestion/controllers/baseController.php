<?php

namespace baseController;

abstract class BaseController
{
    abstract function create($model);
    abstract function read();
    abstract function update($codigo,$model);
    abstract function delete($codigo);
    abstract function readRow($codigo);
}

abstract class BaseControllerActividad
{
    abstract function create($model);
    abstract function read($codigoEstudiante);
    abstract function update($id,$model);
    abstract function delete($id);
}

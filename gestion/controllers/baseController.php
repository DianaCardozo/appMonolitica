<?php

namespace baseController;

abstract class BaseController
{
    abstract function create($model);
    abstract function read();
    abstract function update($codigo,$model);
    abstract function delete($codigo);

}

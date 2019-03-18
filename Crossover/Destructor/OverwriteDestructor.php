<?php

namespace Crossover\Destructor;

trait OverwriteDestructor{
    public function __destruct() {
        parent::__destruct();
        echo "Este es el destructor  desde el trait 'OverwriteDestructor'";
    }
}
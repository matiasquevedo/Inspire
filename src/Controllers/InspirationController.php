<?php
namespace Matiasquevedo\Inspire\Controllers;

use Illuminate\Http\Request;
use Matiasquevedo\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return $quote';
    }
}
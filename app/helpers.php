<?php



 function activos($nombreRuta){
    return request()->routeIs($nombreRuta) ? 'btn active' : '';
}
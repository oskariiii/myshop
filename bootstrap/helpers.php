<?php
function route_class(){
    return Route::currentRouteName()?str_replace('.','-',Route::currentRouteName()):'root';
}
<?php

return [
    ["GET /", "home@index"],

    ["GET /peagent", "peagent@index"],
    ["GET /peagent/create", "peagent@create"],
    ["POST /peagent", "peagent@store"],
    ["GET /peagent/show", "peagent@show"],
    ["GET /peagent/edit", "peagent@edit"],
    ["POST /peagent/update", "peagent@update"],
    ["POST /peagent/destroy", "peagent@destroy"],
];

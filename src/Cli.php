<?php

namespace Brain\Games\Cli;

function run()
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

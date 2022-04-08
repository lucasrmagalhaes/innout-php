<?php

session_start();

requireValidSession();

$date = (new Datetime());

$today = $date->format('d/m/Y');

loadTemplateView('day_records', ['today' => $today]);
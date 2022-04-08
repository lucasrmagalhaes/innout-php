<?php

session_start();

requireValidSession();

loadModel('WorkingHours');

$date = (new Datetime());

$today = $date->format('d/m/Y');

loadTemplateView('day_records', ['today' => $today]);
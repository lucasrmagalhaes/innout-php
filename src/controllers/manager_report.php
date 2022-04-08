<?php

session_start();

requireValidSession();

loadTemplateView('manager_report', []);
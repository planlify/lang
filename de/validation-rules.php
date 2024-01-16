<?php

/*
|--------------------------------------------------------------------------
| Custom Validation Rule Language Lines / DE
|--------------------------------------------------------------------------
|         _________  _______          _       ____  _____  ________
|        |  _   _  ||_   __ \        / \     |_   \|_   _||_   __  |
|        |_/ | | \_|  | |__) |      / _ \      |   \ | |    | |_ \_|
|            | |      |  __ /      / ___ \     | |\ \| |    |  _| _
|           _| |_    _| |  \ \_  _/ /   \ \_  _| |_\   |_  _| |__/ |
|          |_____|  |____| |___||____| |____||_____|\____||________|
|                                                      by custura.de
*/

return [
    'appointment_valid_end' => 'Start time value must be greater than End time',
    'client_required' => 'When Client field is required you have to enable Client Plugin.',
    'date_format' => 'The :attribute must in the given format.',
    'is_client' => 'The Role must contain the word "client".',
    'is_not_client' => 'The name of the role must not contain the word "client".',
    'mq_hours' => 'The :attribute must in Hours:minutes format.',
    'night_shift' => 'Start At value must be greater than End At',
    'project_required' => 'When Project field is required your tracking mode need to be set for "Projects" or "Projects and Tasks".',
    'task_required' => 'When Task field is required your tracking mode need to be set for "Projects and Tasks".',
    'templates_enabled' => 'When Templates are enabled your tracking mode need to be set for "Projects" or "Projects and Tasks".',
    'time_format' => 'The :attribute must in the given format.',
    'uncompleted_entry' => 'The :attribute field is required.',
    'uncompleted_entry_exists' => 'The :attribute is required because uncompleted entry already exists. Close or delete it. Go to uncompleted entry.',
    'valid_cron' => 'The :attribute must be a valid cron. More information in the attached link: https://en.wikipedia.org/wiki/Cron',
    'valid_language' => 'Select an available :attribute from the given list.',
    'valid_role' => 'The :attribute must be a valid role.',
    'wrong_permission' => 'Wrong permission selected.',
];

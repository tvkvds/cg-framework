<?php

/**
 * This table is used to create permissions
 * You can add any unique permission string you like
 * Use table 'role_has_permissions' to assign permissions to a role
 */

return [
    'table_name' => 'permissions',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `permissions`; SET FOREIGN_KEY_CHECKS = 1;",

    'scheme' => "CREATE TABLE IF NOT EXISTS `permissions` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(80) NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",

    'relations' => [
        'ALTER TABLE `permissions` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `permissions` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `permissions` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(

            //user table permissions

        [
            'name'       => 'show_user',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'create_user',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'read_user',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],
        
        [
            'name'       => 'update_user',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'delete_user',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

         //project table permissions

        [
            'name'       => 'show_project',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'create_project',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'read_project',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],
        
        [
            'name'       => 'update_project',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'delete_project',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        //education table permissions

        [
            'name'       => 'show_education',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'create_education',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'read_education',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],
        
        [
            'name'       => 'update_education',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'delete_education',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        //job table permissions

        [
            'name'       => 'show_job',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'create_job',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'read_job',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],
        
        [
            'name'       => 'update_job',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'delete_job',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        //skill table permissions

        [
            'name'       => 'show_skill',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'create_skill',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'read_skill',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],
        
        [
            'name'       => 'update_skill',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'delete_skill',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        //hobby table permissions

        [
            'name'       => 'show_hobby',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'create_hobby',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'read_hobby',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],
        
        [
            'name'       => 'update_hobby',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'delete_hobby',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],








    ),
    ],
];
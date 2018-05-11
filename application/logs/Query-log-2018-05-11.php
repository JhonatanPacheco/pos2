SELECT GET_LOCK('edec4876443cab5db0672473d926717b', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'auemaofqht984o93sfh7k32253jvvsbo'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions` 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1 
 Execution Time:0.00099992752075195

INSERT INTO `ospos_people` (`first_name`, `last_name`, `gender`, `email`, `phone_number`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`) VALUES ('', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL) 
 Execution Time:0

SELECT GET_LOCK('edec4876443cab5db0672473d926717b', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'auemaofqht984o93sfh7k32253jvvsbo'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1
AND `branch_office_admin` = 1 
 Execution Time:0

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0010001659393311

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.033001899719238

SHOW COLUMNS FROM `ospos_employees` 
 Execution Time:0.022001028060913

SELECT *
FROM `ospos_modules`
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'home'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'home'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'customers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'customers'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'items'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'item_kits'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'item_kits'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'suppliers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'suppliers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'reports'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'receivings'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'receivings'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'sales'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'employees'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'employees'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'branch_office'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'branch_office'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'branch_managers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'branch_managers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'giftcards'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'giftcards'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'messages'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'taxes'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'taxes'
AND `person_id` = '' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'expenses'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'expenses'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'expenses_categories'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'expenses_categories'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'config'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'config'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'office'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'office'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
JOIN `ospos_modules` ON `ospos_modules`.`module_id` = `ospos_permissions`.`module_id`
WHERE ospos_modules.module_id!=permission_id 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'items_stock'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'receivings_stock'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_categories'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_expenses_categories'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_items'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_payments'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_taxes'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales_delete'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales_stock'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('edec4876443cab5db0672473d926717b', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'auemaofqht984o93sfh7k32253jvvsbo'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions` 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1 
 Execution Time:0.0010001659393311

INSERT INTO `ospos_people` (`first_name`, `last_name`, `gender`, `email`, `phone_number`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`) VALUES ('Raciel', 'Pacheco', NULL, 'jhonatanpachecohernandez@gmail.com', '015545546583', '2da de Aguacate S/N', '2da de Aguacate S/N', 'El Rosario', '', '42672', 'México', '') 
 Execution Time:0.012001037597656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1 
 Execution Time:0

INSERT INTO `ospos_employees` (`username`, `password`, `hash_version`, `language_code`, `language`, `branch_office_id`, `branch_office_admin`, `person_id`) VALUES ('jhp300', '$2y$10$nMSH1958nZzPA6/CfNyGi.2T4cVZDNxXpNS6IynDoxHlc9mWXDOly', 2, 'en-US', 'english', '1', 1, 9) 
 Execution Time:0

SELECT GET_LOCK('edec4876443cab5db0672473d926717b', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'auemaofqht984o93sfh7k32253jvvsbo'
AND `ip_address` = '::1' 
 Execution Time:0.017000913619995

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0260009765625

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.030000925064087

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1
AND `branch_office_admin` = 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.092004776000977

SHOW COLUMNS FROM `ospos_employees` 
 Execution Time:0.0080010890960693

SELECT *
FROM `ospos_modules`
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'home'
 LIMIT 1 
 Execution Time:0.0010011196136475

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'home'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'customers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'customers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'items'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'item_kits'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'item_kits'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'suppliers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'suppliers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'reports'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'receivings'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'receivings'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'sales'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'employees'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'employees'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'branch_office'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'branch_office'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'branch_managers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'branch_managers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'giftcards'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'giftcards'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'messages'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'taxes'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'taxes'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'expenses'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'expenses'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'expenses_categories'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'expenses_categories'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'config'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'config'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'office'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'office'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
JOIN `ospos_modules` ON `ospos_modules`.`module_id` = `ospos_permissions`.`module_id`
WHERE ospos_modules.module_id!=permission_id 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'items_stock'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'receivings_stock'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_categories'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_expenses_categories'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_items'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_payments'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_taxes'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales_delete'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales_stock'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('edec4876443cab5db0672473d926717b', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'auemaofqht984o93sfh7k32253jvvsbo'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions` 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1 
 Execution Time:0

INSERT INTO `ospos_people` (`first_name`, `last_name`, `gender`, `email`, `phone_number`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`) VALUES ('Racie', 'X', NULL, '', '', '', '', '', '', '', '', '') 
 Execution Time:0.0060000419616699

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1 
 Execution Time:0

INSERT INTO `ospos_employees` (`username`, `password`, `hash_version`, `language_code`, `language`, `branch_office_id`, `branch_office_admin`, `person_id`) VALUES ('jhp300', '$2y$10$raXSngMw.ek9P0AS2EzjC.S41WUF8nokkj7.wyhcVHp3t/z.clfJu', 2, 'en-US', 'english', '1', 1, 11) 
 Execution Time:0

SELECT GET_LOCK('edec4876443cab5db0672473d926717b', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'auemaofqht984o93sfh7k32253jvvsbo'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT GET_LOCK('3143dbe781eee2872ec1decbc760ff1b', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7vi2s9h2i31t95envu3okm666sitna38'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees` AS `employees`
JOIN `ospos_people` ON `employees`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `username` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0
AND `branch_office_admin` = 1
 LIMIT 25 
 Execution Time:0

SELECT COUNT(employees.person_id) as count
FROM `ospos_employees` AS `employees`
JOIN `ospos_people` ON `employees`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `username` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0
AND `branch_office_admin` = 1 
 Execution Time:0

SELECT GET_LOCK('3143dbe781eee2872ec1decbc760ff1b', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7vi2s9h2i31t95envu3okm666sitna38'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1
AND `branch_office_admin` = 1 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.003000020980835

SHOW COLUMNS FROM `ospos_employees` 
 Execution Time:0.002000093460083

SELECT *
FROM `ospos_modules`
ORDER BY `sort` ASC 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'home'
 LIMIT 1 
 Execution Time:0.0010008811950684

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'home'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'customers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'customers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'items'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'item_kits'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'item_kits'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'suppliers'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'suppliers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'reports'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'receivings'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'receivings'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'sales'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'employees'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'employees'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'branch_office'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'branch_office'
AND `person_id` = '' 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'branch_managers'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'branch_managers'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'giftcards'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'giftcards'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'messages'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'taxes'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'taxes'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'expenses'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'expenses'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'expenses_categories'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'expenses_categories'
AND `person_id` = '' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'config'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'config'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'office'
 LIMIT 1 
 Execution Time:0

SELECT `menu_group`
FROM `ospos_grants`
WHERE `permission_id` = 'office'
AND `person_id` = '' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
JOIN `ospos_modules` ON `ospos_modules`.`module_id` = `ospos_permissions`.`module_id`
WHERE ospos_modules.module_id!=permission_id 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'items_stock'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'receivings_stock'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_categories'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_expenses_categories'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_items'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_payments'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'reports_taxes'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales_delete'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `person_id` = ''
AND `permission_id` = 'sales_stock'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('3143dbe781eee2872ec1decbc760ff1b', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7vi2s9h2i31t95envu3okm666sitna38'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions` 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1 
 Execution Time:0

INSERT INTO `ospos_people` (`first_name`, `last_name`, `gender`, `email`, `phone_number`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`) VALUES ('Uno', 'Dos', '1', '', '', '', '', '', '', '', '', '') 
 Execution Time:0.05500316619873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = -1 
 Execution Time:0.00099992752075195

INSERT INTO `ospos_employees` (`username`, `password`, `hash_version`, `language_code`, `language`, `branch_office_id`, `branch_office_admin`, `person_id`) VALUES ('Uno12', '$2y$10$VhANhWKulRo.Ch42aDYVnu2R/LSu6Z8BnG.48it0RHAlguNDB88G6', 2, 'en-US', 'english', '1', 1, 12) 
 Execution Time:0.10500621795654

DELETE FROM `ospos_grants`
WHERE `person_id` = 12 
 Execution Time:0

INSERT INTO `ospos_grants` (`permission_id`, `person_id`, `menu_group`) VALUES ('customers', 12, 'home') 
 Execution Time:0.098005056381226

INSERT INTO `ospos_grants` (`permission_id`, `person_id`, `menu_group`) VALUES ('home', 12, 'home') 
 Execution Time:0

SELECT GET_LOCK('3143dbe781eee2872ec1decbc760ff1b', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7vi2s9h2i31t95envu3okm666sitna38'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('3143dbe781eee2872ec1decbc760ff1b', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7vi2s9h2i31t95envu3okm666sitna38'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_managers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_managers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees` AS `employees`
JOIN `ospos_people` ON `employees`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `username` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0
AND `branch_office_admin` = 1
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(employees.person_id) as count
FROM `ospos_employees` AS `employees`
JOIN `ospos_people` ON `employees`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `username` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0
AND `branch_office_admin` = 1 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('3143dbe781eee2872ec1decbc760ff1b', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7vi2s9h2i31t95envu3okm666sitna38'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` =0 
 Execution Time:0.15200805664062

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` =0 
 Execution Time:0.10000491142273

SELECT *
FROM `ospos_tax_categories`
ORDER BY `tax_category_id` 
 Execution Time:0.052002906799316

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` =0 
 Execution Time:0.068002939224243

SELECT `tax_code`, `tax_code_name`
FROM `ospos_tax_codes`
ORDER BY `tax_code_name` 
 Execution Time:0.079005002975464

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.016999959945679


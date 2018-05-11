SELECT GET_LOCK('9b783c31f44cf1bae5ea5727d39bd417', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bc88qr4s2i6td90vl2nkdc522ohjs5l7'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT GET_LOCK('9b783c31f44cf1bae5ea5727d39bd417', 300) AS ci_session_lock 
 Execution Time:0.0010008811950684

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bc88qr4s2i6td90vl2nkdc522ohjs5l7'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.0010008811950684

SELECT GET_LOCK('9b783c31f44cf1bae5ea5727d39bd417', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bc88qr4s2i6td90vl2nkdc522ohjs5l7'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT GET_LOCK('9b783c31f44cf1bae5ea5727d39bd417', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bc88qr4s2i6td90vl2nkdc522ohjs5l7'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('9b783c31f44cf1bae5ea5727d39bd417', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bc88qr4s2i6td90vl2nkdc522ohjs5l7'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('9b783c31f44cf1bae5ea5727d39bd417', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bc88qr4s2i6td90vl2nkdc522ohjs5l7'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0.0010008811950684

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.0010001659393311

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.0010001659393311

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
 Execution Time:0.00099992752075195

SELECT GET_LOCK('4b7de8ecc9edd24ec6f5a7dc579065d3', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mr3gqa91hlvnl9qu07k7ksngcegrlde1'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('b323ad687b386509583d245f08494ea1', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rk69ftk21g5np3a0rh6ehv9ufvoav32j'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
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
 Execution Time:0

SELECT GET_LOCK('b323ad687b386509583d245f08494ea1', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rk69ftk21g5np3a0rh6ehv9ufvoav32j'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('b323ad687b386509583d245f08494ea1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rk69ftk21g5np3a0rh6ehv9ufvoav32j'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('9e99fefea8e64bd6ab744688b3715d28', 300) AS ci_session_lock 
 Execution Time:0.0010008811950684

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'til402avn2gr1iel9v32drdqdvcauehr'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT GET_LOCK('119b3bb41068e834e24b1e9fa3699a51', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '36cq86va948fqqiph75v5enofodpf6uk'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010011196136475

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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

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
 Execution Time:0.0010001659393311

SELECT GET_LOCK('119b3bb41068e834e24b1e9fa3699a51', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '36cq86va948fqqiph75v5enofodpf6uk'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
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
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
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
 Execution Time:0.0010011196136475

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

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
 Execution Time:0.00099992752075195

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0.0019998550415039

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

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

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.002000093460083

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.002000093460083

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
 Execution Time:0.0010008811950684

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

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as count
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 ) 
 Execution Time:0

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as count
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 ) 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 ) 
 Execution Time:0

SELECT GET_LOCK('7a7a786ca6358d7ccadf084795423065', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tqt8v7k6ejofmv7hl0ofpda8lb7vnqmg'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 ) 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.11600708961487

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010011196136475

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

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 )
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE   (
`branch_office_id` LIKE '%%' ESCAPE '!'
OR  `branch_office_name` LIKE '%%' ESCAPE '!'
 ) 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.0010008811950684

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
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

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.015599966049194

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015600204467773

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%M%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%M%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.015599966049194

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%Ma%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%Ma%' ESCAPE '!' 
 Execution Time:0.015599966049194

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010008811950684

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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '2' 
 Execution Time:0.012001037597656

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('8edf3694b10f2dbf6d5813968a951112', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oa3b84g7k9224gjc44rg258gtf1eavb0'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('86493f88311a38ef7a2a142829ef1333', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r6tcln9486ce3hcp61pfbvepjufdim1c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010011196136475

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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.0010001659393311

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.002000093460083

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0.057003974914551

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

DELETE FROM `ospos_sessions`
WHERE `timestamp` < 1525991933 
 Execution Time:0.1190071105957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0

SELECT GET_LOCK('a01f85b5b2034378c15150b988b0da48', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ui238rd6qrgsv4qbt8n8jvcifhr3qcpn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

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
 Execution Time:0.0010001659393311

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
 Execution Time:0.00099992752075195

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

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

SELECT GET_LOCK('158ded146e88d22e3a3dc7a62c14a785', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qn12f20kvftiu1n5u4dgaura1kprk7v5'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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
 Execution Time:0.00099992752075195

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.002000093460083

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

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
FROM `ospos_branch_office`
WHERE `branch_office_id` IS NULL 
 Execution Time:0.00099992752075195

INSERT INTO `ospos_branch_office` (`branch_office_name`, `branch_office_id`) VALUES ('Matizxx', NULL) 
 Execution Time:0.042001962661743

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '4' 
 Execution Time:0

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` IS NULL 
 Execution Time:0

INSERT INTO `ospos_branch_office` (`branch_office_name`, `branch_office_id`) VALUES ('Matizxxccccccc', NULL) 
 Execution Time:0.0069999694824219

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('6984bc362fd57b4e6187335b5197ff50', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lolp196vmp2l2si576veebe8mpgkab9r'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '5' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.014001131057739

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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '5' 
 Execution Time:0

UPDATE `ospos_branch_office` SET `branch_office_name` = 'Matizxx12321312312'
WHERE `branch_office_id` = '5' 
 Execution Time:0.023001194000244

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

UPDATE `ospos_branch_office` SET `branch_office_name` = 'Casa Matiz'
WHERE `branch_office_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('e1ca0ce5f4864992c80db35d4dc61e60', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pcoqdk9mrlj43aqbbc6jkhsb71b7e1jn'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.021001815795898

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('9033070dbaca12f8384018b3df73cdd7', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tg61aeuvdpsr8qhtoffpij1ogu1avvsk'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
 LIMIT 25 
 Execution Time:0.0010001659393311

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('9033070dbaca12f8384018b3df73cdd7', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tg61aeuvdpsr8qhtoffpij1ogu1avvsk'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.002000093460083

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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '5' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('9033070dbaca12f8384018b3df73cdd7', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tg61aeuvdpsr8qhtoffpij1ogu1avvsk'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '5' 
 Execution Time:0.0010001659393311

UPDATE `ospos_branch_office` SET `branch_office_name` = 'Matiz'
WHERE `branch_office_id` = '5' 
 Execution Time:0.019001007080078

SELECT GET_LOCK('9033070dbaca12f8384018b3df73cdd7', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tg61aeuvdpsr8qhtoffpij1ogu1avvsk'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.002000093460083

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '5' 
 Execution Time:0

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.022001028060913

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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.0010001659393311

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.01400089263916

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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

UPDATE `ospos_items` SET `deleted` = 1
WHERE `brach_office_id` IN('5') 
 Execution Time:0

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

UPDATE `ospos_items` SET `deleted` = 1
WHERE `brach_office_id` IN('2') 
 Execution Time:0

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0.0010011196136475

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0.0010011196136475

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

UPDATE `ospos_brach_office` SET `deleted` = 1
WHERE `brach_office_id` IN('2') 
 Execution Time:0

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('fb77e37133a6dfa8eecc1d65ba8e61f1', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lqnrgat1ot1v15da65672d9qdgje0f8v'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('434f8e4669cd357d2e86d394fd752a07', 300) AS ci_session_lock 
 Execution Time:0.0010008811950684

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0c1tln9atrkf9ji67ih0oqml4nc4kbqf'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.0010001659393311

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('434f8e4669cd357d2e86d394fd752a07', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0c1tln9atrkf9ji67ih0oqml4nc4kbqf'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

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

UPDATE `ospos_brach_office` SET `deleted` = 1
WHERE `brach_office_id` IN('2') 
 Execution Time:0

SELECT GET_LOCK('434f8e4669cd357d2e86d394fd752a07', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0c1tln9atrkf9ji67ih0oqml4nc4kbqf'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

UPDATE `ospos_brach_office` SET `deleted` = 1
WHERE `brach_office_id` IN('1', '2') 
 Execution Time:0

SELECT GET_LOCK('434f8e4669cd357d2e86d394fd752a07', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0c1tln9atrkf9ji67ih0oqml4nc4kbqf'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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

SELECT GET_LOCK('434f8e4669cd357d2e86d394fd752a07', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0c1tln9atrkf9ji67ih0oqml4nc4kbqf'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('434f8e4669cd357d2e86d394fd752a07', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0c1tln9atrkf9ji67ih0oqml4nc4kbqf'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

UPDATE `ospos_branch_office` SET `deleted` = 1
WHERE `brach_office_id` IN('2', '3') 
 Execution Time:0

SELECT GET_LOCK('434f8e4669cd357d2e86d394fd752a07', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0c1tln9atrkf9ji67ih0oqml4nc4kbqf'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.0010001659393311

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

UPDATE `ospos_branch_office` SET `deleted` = 1
WHERE `branch_office_id` IN('2', '5') 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%M%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%M%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%Ma%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%Ma%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%S%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%S%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.0010011196136475

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.002000093460083

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
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0

INSERT INTO `ospos_branch_office` (`branch_office_name`, `branch_office_id`) VALUES ('Sucursal Nueva', NULL) 
 Execution Time:0.040003061294556

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

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

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('d619036617271c9df9795a2f8baf5ada', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6g4hnfput1g2isrnjs6lsn28lidnfl20'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '2' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('d9381e7a04ae3707a93e01dc34863991', 300) AS ci_session_lock 
 Execution Time:0.0010011196136475

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2rassn9vr9515n34ckcrtuoqtp4albrq'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '2' 
 Execution Time:0

SELECT GET_LOCK('d9381e7a04ae3707a93e01dc34863991', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2rassn9vr9515n34ckcrtuoqtp4albrq'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('1b6c25ef7cc48527edd693f45abc5037', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'l5kub8naq9302atlqlc5jbuhd1rkphq8'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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

SELECT GET_LOCK('1b6c25ef7cc48527edd693f45abc5037', 300) AS ci_session_lock 
 Execution Time:0.0060000419616699

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'l5kub8naq9302atlqlc5jbuhd1rkphq8'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030009746551514

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.003000020980835

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.002000093460083

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('1b6c25ef7cc48527edd693f45abc5037', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'l5kub8naq9302atlqlc5jbuhd1rkphq8'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('1b6c25ef7cc48527edd693f45abc5037', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'l5kub8naq9302atlqlc5jbuhd1rkphq8'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0070009231567383

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

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

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0.0010008811950684

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010008811950684

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

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
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.002000093460083

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0

SELECT GET_LOCK('309633e01d7228c796efdfa192f397a0', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2ads2ab3aq1arq134gmqlllokk08culh'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010008811950684

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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
FROM `ospos_branch_office`
WHERE `branch_office_id` = -1 
 Execution Time:0

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010011196136475

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
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010011196136475

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

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'branch!_office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'branch!_office!_%' ESCAPE '!' 
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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(branch_office_id) as total
FROM `ospos_branch_office`
WHERE `branch_office_name` LIKE '%%' ESCAPE '!'
AND `deleted` =0 
 Execution Time:0

SELECT GET_LOCK('9d66792631d7fd9f14468c8a5668e9dc', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a10gl29tb93q71be2qud8752osb7dm4c'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
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
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
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
 Execution Time:0.002000093460083

SELECT GET_LOCK('c391a10f402c8414d3f49be455f2f4a9', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'nho0u6k956u39r16ta45fflm923meumj'
AND `ip_address` = '::1' 
 Execution Time:0.002000093460083

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.002000093460083

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
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

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
 LIMIT 25 
 Execution Time:0.10400605201721

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
 Execution Time:0.0090000629425049

SELECT GET_LOCK('c391a10f402c8414d3f49be455f2f4a9', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'nho0u6k956u39r16ta45fflm923meumj'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.015000820159912

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.015000820159912

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020010471343994

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

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0
 LIMIT 25 
 Execution Time:0

SELECT COUNT(customers.person_id) as count
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0 
 Execution Time:0.022001981735229

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

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
 Execution Time:0.00099992752075195

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
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
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_people`.`email` = 'bsmith@nowhere.com'
AND `ospos_customers`.`deleted` =0 
 Execution Time:0.057003974914551

INSERT INTO `ospos_people` (`first_name`, `last_name`, `gender`, `email`, `phone_number`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`) VALUES ('Bob', 'Smith', '1', 'bsmith@nowhere.com', '585-555-1111', '123 Nowhere Street', 'Apt 4', 'Awesome', 'NY', '11111', 'USA', 'Awesome guy') 
 Execution Time:0.13000798225403

INSERT INTO `ospos_customers` (`consent`, `company_name`, `discount_percent`, `taxable`, `date`, `employee_id`, `person_id`) VALUES (1, '', '5', 1, '2018-05-10 23:14:51', '1', 2) 
 Execution Time:0.41202306747437

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010011196136475

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
 Execution Time:0

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
 Execution Time:0

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` !=0
ORDER BY `sort` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.0049998760223389

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
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
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0
 LIMIT 25 
 Execution Time:0.00099992752075195

SELECT COUNT(customers.person_id) as count
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` =0 
 Execution Time:0.00099992752075195

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id))
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount_percent) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '2'
				GROUP BY sale_id
			) 
 Execution Time:1.0010581016541

SELECT SUM(sales_payments.payment_amount) AS total, MIN(sales_payments.payment_amount) AS min, MAX(sales_payments.payment_amount) AS max, AVG(sales_payments.payment_amount) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '2'
AND `ospos_sales`.`sale_status` =0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.15500903129578

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.35902094841003

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0.00099992752075195

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'office!_%' ESCAPE '!' 
 Execution Time:0.0010001659393311

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
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0.0010001659393311

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0.0010001659393311

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
 Execution Time:0

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` =0 
 Execution Time:0.044002056121826

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` =0 
 Execution Time:0.010999917984009

SELECT *
FROM `ospos_tax_categories`
ORDER BY `tax_category_id` 
 Execution Time:0.041002035140991

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` =0 
 Execution Time:0.029000997543335

SELECT `tax_code`, `tax_code_name`
FROM `ospos_tax_codes`
ORDER BY `tax_code_name` 
 Execution Time:0.019001007080078

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.0010001659393311

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00099992752075195

SELECT GET_LOCK('c3ee78099dc9c3cdd7eea23282755407', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qse5fp3cs4vevp5mm6j9scheagfb979b'
AND `ip_address` = '::1' 
 Execution Time:0

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
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
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
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
 Execution Time:0

SELECT GET_LOCK('9c52910f6298621cf7f7cc6b4d380cc1', 300) AS ci_session_lock 
 Execution Time:0

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gdl2dqa1eh0iru7tca1ck9h1vn6n3jpf'
AND `ip_address` = '::1' 
 Execution Time:0.0010008811950684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'employees%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'employees!_%' ESCAPE '!' 
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
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010001659393311

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
 Execution Time:0


INSERT INTO civirule_action (name, label, class_name, is_active) 
SELECT * FROM (SELECT "lalg_tidy_billing_email" as name, "LALG Tidy Billing Email" as label, "CRM_Civirules_LalgTidyBillingEmail" as class_name, 1 as is_active) as temp
WHERE NOT EXISTS (
    SELECT name FROM civirule_action WHERE name = 'lalg_tidy_billing_email'
) LIMIT 1;




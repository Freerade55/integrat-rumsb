<?php
require ROOT . "/functions/display-errors.php";
require ROOT . "/vendor/autoload.php";
require ROOT . "/logs/logs.php";
require ROOT . "/functions/connectToCrm.php";
require ROOT . "/functions/refreshToken.php";
require ROOT . "/functions/crmMethods.php";

const
CRM_ENTITY_LEAD = "lead",
CRM_ENTITY_CONTACT = "contact",
CRM_ENTITY_COMPANY = "company",
METHOD_POST = "POST",
METHOD_PATCH = "PATCH",
CRM_RESPONSIBLE_ID = 892954,
CRM_PIPELINE_ID = 287493;

$dotenv = Dotenv\Dotenv::createImmutable(ROOT);
$dotenv->load();
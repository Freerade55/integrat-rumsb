<?php
const ROOT = __DIR__;

require ROOT . "/functions/require.php";


leadAdd();




$deletedNerasb = $_REQUEST;

$statusNerasb = $deletedNerasb["unsorted"]["delete"][0]["action"];
$categoryNerasb = $deletedNerasb["unsorted"]["delete"][0]["category"];


if($statusNerasb == "accept" && $categoryNerasb == "forms") {

    $leadId = $deletedNerasb["unsorted"]["delete"][0]["accept_result"]["leads"][0];


    $getLead = getEntity(CRM_ENTITY_LEAD, $leadId);


    if(empty($getLead["_embedded"]["contacts"])) {


        $custom_fields_values = $getLead["custom_fields_values"];

        foreach ($custom_fields_values as $value) {


            if($value["field_name"] == "Phone") {

                $phone = $value["values"][0]["value"];

                $searchContactResult = searchEntity(CRM_ENTITY_CONTACT, $phone);

                $contactId = $searchContactResult["_embedded"]["contacts"][0]["id"];

                bindLead($leadId, $contactId);



            }

        }






    }



}























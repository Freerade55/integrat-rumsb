<?php


//  Выводит по id сущность, можно передать любую. Сделку, компанию и тд
function getEntity(string $entity_type, int $id): array
{
    switch ($entity_type) {
        case CRM_ENTITY_CONTACT:
            $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/contacts/$id?with=leads";
            break;
        case CRM_ENTITY_LEAD:
            $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/leads/$id?with=contacts";
            break;
        case CRM_ENTITY_COMPANY:
            $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/companies/$id?with=contacts";
            break;
    }


    $result = json_decode(connect($link), true);

    if (empty($result)) {
        return [];
    } else {
        return $result;
    }


}





//  Ищет сущность по строке, можно передать любую. Сделку, компанию и тд.
function searchEntity(string $entity_type, string $search): array
{


    switch ($entity_type) {
        case CRM_ENTITY_CONTACT:
            $query = [
                "with" => "leads",
                "query" => $search
            ];
            $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/contacts?" . http_build_query($query);
            break;
        case CRM_ENTITY_LEAD:
            $query = [
                "with" => "contacts",
                "query" => $search
            ];
            $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/leads?" . http_build_query($query);
            break;
        case CRM_ENTITY_COMPANY:
            $query = [
                "with" => "contacts",
                "query" => $search
            ];
            $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/companies?" . http_build_query($query);
            break;
    }


    $result = json_decode(connect($link), true);

    if (empty($result)) {
        return [];
    } else {
        return $result;
    }

}





// добавление контакта
function addContact(string $ContactName, string $phone) {

    $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/contacts";



    $queryData = array(

        [

            "name" => $ContactName,

            "responsible_user_id" => CRM_RESPONSIBLE_ID,

            "custom_fields_values" => [
                [
                    "field_id" => 2570861,
                    "values" => [
                        [
                            "value" => $phone
                        ]
                    ]
                ]

            ]



        ]



    );




    return json_decode(connect($link, METHOD_POST, $queryData), true);




}










// редактирование контакта
function editLead(int $leadId, int $responseUserId = CRM_RESPONSIBLE_ID) {

    $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/leads/$leadId";

    $queryData = array(



        "name" => "Test21112",

        "_embedded" => [
            "contacts" => [
                [
                    "id" => 67654947
                ]
            ]
        ]








    );






    return json_decode(connect($link, METHOD_PATCH, $queryData), true);




}






function addNerasbor(bool $contactExists, array $dataArray) {

    $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/leads/unsorted/forms";

    // если контакта не существует

    $formName = null;



    if(!$contactExists) {


        $queryData = [
            [
                "source_name" => "eurocara-moscow",
                "source_uid" => "a1fee7c0fc436088e64ba2e8822ba2b3",
                "_embedded" => [

                    "leads" => [


                        [

                            "name" => $dataArray["Name"],

                            "responsible_user_id" => CRM_RESPONSIBLE_ID,
                            "pipeline_id" => CRM_PIPELINE_ID,
                            "_embedded" => [
                                "tags" => [
                                    [
                                        "id" => 774491
                                    ]
                                ]
                            ],
                            "custom_fields_values" => [
                                [
                                    "field_id" => 2016399,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Name"]
                                        ]
                                    ]
                                ],

                                [
                                    "field_id" => 2016401,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Phone"]
                                        ]
                                    ]
                                ],

                                [
                                    "field_id" => 2973249,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Tranid"]
                                        ]
                                    ]
                                ],
                                [
                                    "field_id" => 2973253,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Formid"]
                                        ]
                                    ]
                                ]







                            ]



                        ]

                    ],
                    "contacts" => [
                        [
                            "name" => "test",
                            "custom_fields_values" => [
                                [
                                    "field_id" => 1065841,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Phone"]
                                        ]
                                    ]
                                ]


                            ]



                        ]
                    ]


                ],

                "metadata" => [
                    "ip" => "123.222.2.22",
                    "form_id" => "a1fee7c0fc436088e64ba2e8822ba2b3ewrw",
                    "form_sent_at" => 1590830520,
                    "form_name" => "Форма",
                    "form_page" => "https://eurocara-moscow.ru/",
                    "referer" => "https://www.google.com/"
                ]
            ]
        ];

    } else {


        $queryData = [
            [
                "source_name" => "eurocara-moscow",
                "source_uid" => "a1fee7c0fc436088e64ba2e8822ba2b3",
                "_embedded" => [

                    "leads" => [

                        [

                            "name" => $dataArray["Name"],

                            "responsible_user_id" => CRM_RESPONSIBLE_ID,
                            "pipeline_id" => CRM_PIPELINE_ID,
                            "_embedded" => [
                                "tags" => [
                                    [
                                        "id" => 774491
                                    ]
                                ]
                            ],
                            "custom_fields_values" => [
                                [
                                    "field_id" => 2016399,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Name"]
                                        ]
                                    ]
                                ],

                                [
                                    "field_id" => 2016401,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Phone"]
                                        ]
                                    ]
                                ],

                                [
                                    "field_id" => 2973249,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Tranid"]
                                        ]
                                    ]
                                ],
                                [
                                    "field_id" => 2973253,
                                    "values" => [
                                        [
                                            "value" => $dataArray["Formid"]
                                        ]
                                    ]
                                ],




                            ]



                        ]

                    ]

                ],

                "metadata" => [
                    "ip" => "123.222.2.22",
                    "form_id" => "a1fee7c0fc436088e64ba2e8822ba2b3ewrw",
                    "form_sent_at" => 1590830520,
                    "form_name" => "Форма",
                    "form_page" => "https://eurocara-moscow.ru/",
                    "referer" => "https://www.google.com/"
                ]
            ]
        ];







    }






    return json_decode(connect($link, METHOD_POST, $queryData), true);




}




















// добавление примечания
function addNote(int $entityId, string $description) {



    $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/leads/$entityId/notes";
    $queryData = array(

        [

            "note_type" => "common",
            "params" => [
                "text" => $description
            ]


        ]




    );

    return json_decode(connect($link, METHOD_POST, $queryData), true);




}



// добавление задачи по дублю контакта
function addTask(int $leadId, int $responsible_user_id = CRM_RESPONSIBLE_ID)
{



    $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/tasks";


    $timestamp = time()+2*60*60;


    $queryData = array(
        [
            "text" => "arenda-alyans.ru",
            "entity_id" => $leadId,
            "complete_till" => $timestamp,
            "entity_type" => "leads",
            "task_type_id" => CRM_TASK_TYPE_ID,
            "responsible_user_id" => $responsible_user_id

        ]
    );

    json_decode(connect($link, METHOD_POST, $queryData), true);



}




////    устанавливает тег из списка
function addTag(string $value, int $leadId)

{



    $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/$value";

    $queryData = array(

        [
            "id" => $leadId,
            "_embedded" => [
                "tags" => [
                    [
                        "id" => CRM_TAG_ID
                    ]
                ]

            ]
        ]
    );

    connect($link, 'PATCH', $queryData);


}





// добавление контакта
function bindLead(int $leadId, int $contactId) {

    $link = "https://{$_ENV["SUBDOMAIN"]}.amocrm.ru/api/v4/leads/$leadId/link";



    $queryData = array(
        [
            "to_entity_id" => $contactId,
            "to_entity_type" => "contacts"
        ]


    );




    return json_decode(connect($link, METHOD_POST, $queryData), true);




}






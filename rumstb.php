<?php
header('Content-Type: text/html; charset=utf-8');

const ROOT = __DIR__;

require ROOT . "/functions/require.php";


$data = $_REQUEST;

logs($data);




// главная
//$data = [
//    "Выберите_тип_техники" => "Электрический погрузчик",
//    "Где_будет_работать_техника" => "На улице",
//    "Укажите_максимальный_вес_груза" => "2 - 2,5 т.",
//    "Name" => "тест",
//    "Phone" => "+7 (928) 420-00-18",
//    "tranid" => "6778771:4631989861",
//    "formid" => "form548185849",
//    "formname" => "Подбор техники старт"
//];

// тут не приходит форм нейм, сделать проверку
//$data = [
//    "Name" => "тест",
//    "Способ_связи_" => "Whatsapp",
//    "Phone" => "+7 (928) 420-00-18",
//    "Согласие_с_политикой_конфиденциальности" => "yes",
//    "Тип_склада_в_котором_будет_использоваться_техника" => "Обычный склад хранения",
//    "Выберите_тип_техники_" => "Тягач",
//    "Максимальный_вес_груза_с_которым_нужно_работать_" => "3 - 4 т.",
//    "Высота_подъема_груза_" => "3-4 метра",
//    "Дополнительные_требования_" => "Дополнительное оборудование (кабина с отопителем, боковое смещение каретки и т.д.)",
//    "Когда_вы_планируете_приобретать_технику_" => "в течение 3х месяцев",
//    "Какой_бюджет_на_покупку_" => "2-4 млн.руб.",
//    "tranid" => "6778771:4632011511",
//    "formid" => "form550324991"
//];
//








// каталог

//$data = [
//    "Name" => "тест",
//    "Email" => "dalarow@gmail.com",
//    "Phone" => "+7 (928) 420-00-18",
//    "payment" => "{\"sys\":\"none\",\"systranid\":\"0\",\"orderid\":\"1987232091\",\"products\":[\"Электропогрузчик трехопорный мини JAC CPD 10S mini=2104000\"],\"amount\":\"2104000\"}",
//    "formid" => "form557114522",
//    "formname" => "Cart"
//];
//


//
//$data = [
//    "Name" => "тест",
//    "Способ_связи_" => "Telegram",
//    "Phone" => "+7 (928) 420-00-18",
//    "Согласие_с_политикой_конфиденциальности" => "yes",
//    "Тип_склада_в_котором_будет_использоваться_техника" => "На улице",
//    "Выберите_тип_техники_" => "Электропогрузчик",
//    "Максимальный_вес_груза_с_которым_нужно_работать_" => "3 - 4 т.",
//    "Высота_подъема_груза_" => "3-4 метра",
//    "Дополнительные_требования_" => "Ограничение по высоте погрузчика (вагоны, контейнеры)",
//    "Когда_вы_планируете_приобретать_технику_" => "в течение 3х месяцев",
//    "Какой_бюджет_на_покупку_" => "Более 4 млн .руб.",
//    "tranid" => "6778771:4632054951",
//    "formid" => "form560280755",
//    "formname" => "Квиз на странице Каталога"
//];
//
//




// лизинг
//$data = [
//    "name" => "тест",
//    "Phone" => "+7 (928) 420-00-12",
//    "email" => "dalarow@gmail.com",
//    "Stoimost_Tehniki" => "3605000",
//    "Avans" => "324 450",
//    "Ob_Summa_Leasinga" => "3 929 450",
//    "Srok_Leasinga" => "22",
//    "Plateg_v_Mes" => "163 864",
//    "Summa_vozvrata_NDS" => "785 890",
//    "Summa-vozvrata_na_Pribil" => "785 890",
//    "tranid" => "6778771:4632091421",
//    "formid" => "form557944299",
//    "formname" => "Калькулятор расчет лизинга"
//];




// trade-in
//$data = [
//"Name" => "тест",
//    "Phone" => "+7 (928) 420-00-18",
//    "Email" => "dalarow@gmail.com",
//    "tranid" => "6778771:4632131111",
//    "formid" => "form558288225",
//    "formname" => "Трейд-ин техники"
//];
//

//$data = [
//    "Name" => "тест",
//    "Phone" => "+7 (928) 420-00-18",
//    "Email" => "dalarow@gmail.com",
//    "tranid" => "6778771:4632159661",
//    "formid" => "form558405877",
//    "formname" => "Заявка страница Трейд-ин"
//];
//



// аренда погрузчика

//
//$data = [
//"Name" => "тест",
//    "Phone" => "+7 (928) 420-00-18",
//    "Email" => "dalarow@gmail.com",
//    "tranid" => "6778771:4632198811",
//    "formid" => "form558409877",
//    "formname" => "Аренда техники"
//];
//

//$data = [
//    "Тип_техники_в_аренду_" => "Тягач",
//    "Name" => "тест",
//    "Phone" => "+7 (928) 420-00-18",
//    "Email" => "dalarow@gmail.com",
//    "tranid" => "6778771:4632206121",
//    "formid" => "form558409881",
//    "formname" => "Заявка страница Аренда техники"
//];





// оплата и доставка
//
//$data = [
//    "Name" => "тестТест",
//    "Phone" => "+7 (928) 420-00-18",
//    "Email" => "dalarow@gmail.com",
//    "tranid" => "6778771:4632228191",
//    "formid" => "form559248068",
//    "formname" => "Страница Оплаты и доставки - Консультация"
//];
//


// сервис и запчасти
//
//$data = [
//    "Name" => "тестТест",
//    "Phone" => "+7 (928) 420-00-22",
//    "Email" => "dalarow@gmail.com",
//    "tranid" => "6778771:4632242331",
//    "formid" => "form559582972",
//    "formname" => "Трейд-ин техники"
//];
//


$updatedData = [];

foreach ($data as $key => $value) {
    $updatedData[ucfirst($key)] = $value;

}


// это обязательные поля, есть во всех формах
$phone = $updatedData["Phone"];
$phone = preg_replace("/[^\d]/siu", "", $phone);
$phone = preg_replace("/^[8]/", "7", $phone, 1);

$name = $updatedData["Name"];



$sendArray = [];

$sendArray["Name"] = $name;
$sendArray["Phone"] = $phone;


foreach ($updatedData as $updatedKey => $value) {
    if($updatedKey != "Name" && $updatedKey != "Phone") {

        $sendArray[$updatedKey] = $value;




    }
}

$searchContact = searchEntity(CRM_ENTITY_CONTACT, $phone);

$description = "";


foreach ($sendArray as $key => $value) {

    $description .= $key . " - " . $value . "\n";


}

// если нет контакта

if(empty($searchContact)) {



    // делается сделка с контактом
    $addedNerasbor = addNerasbor(false, $sendArray);

    $returnedLeadId = $addedNerasbor["_embedded"]["unsorted"][0]["_embedded"]["leads"][0]["id"];

    addNote($returnedLeadId, $description);




// если есть контакт
} else {

    $contactId = $searchContact["_embedded"]["contacts"][0]["id"];
//        ответственный с контакта, в случае если уже есть контакт
    $responsible_user_id = $searchContact["_embedded"]["contacts"][0]["responsible_user_id"];

    // контакт со сделкой/сделками
    if(!empty($searchContact["_embedded"]["contacts"][0]["_embedded"]["leads"])) {

        $leads = $searchContact["_embedded"]["contacts"][0]["_embedded"]["leads"];

        $activeLeadStatus = null;

        $addedLeadId = null;


        foreach ($leads as $lead) {


            //// поиск седелок по id
            $getLeadInfo = getEntity(CRM_ENTITY_LEAD, $lead["id"]);


//            проверка на статус сделки
            if($getLeadInfo["status_id"] != 142 && $getLeadInfo["status_id"] != 143) {

                $activeLeadStatus = true;
                $addedLeadId = $lead["id"];

            }

            if(!isset($activeLeadStatus)) {


                $addedNerasbor = addNerasbor(true, $sendArray);

                $returnedLeadId = $addedNerasbor["_embedded"]["unsorted"][0]["_embedded"]["leads"][0]["id"];

                addNote($returnedLeadId, $description);





            } else {

                addNote($addedLeadId, $description);

            }








        }




    } else {


        $addedNerasbor = addNerasbor(true, $sendArray);

        $returnedLeadId = $addedNerasbor["_embedded"]["unsorted"][0]["_embedded"]["leads"][0]["id"];

        addNote($returnedLeadId, $description);




    }

    }















//
//    //    контакт уже есть
//    if(!empty($searchContact)) {
//
//        //      айди контакта
//        $contactId = $searchContact["_embedded"]["contacts"][0]["id"];
////        ответственный с контакта, в случае если уже есть контакт
//        $responsible_user_id = $searchContact["_embedded"]["contacts"][0]["responsible_user_id"];
//
//        $addedLeadId = null;
//
//
//
//        //      если есть сделки вообще
//
//        if(!empty($searchContact["_embedded"]["contacts"][0]["_embedded"]["leads"])) {
//
//
//            $leads = $searchContact["_embedded"]["contacts"][0]["_embedded"]["leads"];
//
//            $activeLeadStatus = null;
//
//            foreach ($leads as $lead) {
//
//// поиск седелок по id
//                $getLeadInfo = getEntity(CRM_ENTITY_LEAD, $lead["id"]);
//
//
////            проверка на статус сделки
//                if($getLeadInfo["status_id"] != 142 && $getLeadInfo["status_id"] != 143) {
//
//                    $activeLeadStatus = true;
//                    $addedLeadId = $lead["id"];
//
//                }
//
//
//
//            }
//
//
////       если нет активных сделок
//
//            if(!isset($activeLeadStatus)) {
//
//                $addLeadRes = addLead($contactId, $responsible_user_id);
//                $addedLeadId = $addLeadRes["_embedded"]["leads"][0]["id"];
//
//                addTag("leads", $addedLeadId);
//
//
//
//
//            }
//
//
//
//
//        } else {
//
//            $addLeadRes = addLead($contactId, $responsible_user_id);
//            $addedLeadId = $addLeadRes["_embedded"]["leads"][0]["id"];
//
//            addTag("leads", $addedLeadId);
//
//
//        }
//
//
//        addNote("contacts", $contactId, $description);
//
//        addTask($addedLeadId, $responsible_user_id);
//
//
//
//
//
//
//    } else {
//
//        $addContact = addContact($name, $phone);
//
//
//        $addLeadRes = addLead($addContact["_embedded"]["contacts"][0]["id"]);
//        $addedLeadId = $addLeadRes["_embedded"]["leads"][0]["id"];
//
//        addTag("leads", $addedLeadId);
//
//        addNote("contacts", $addContact["_embedded"]["contacts"][0]["id"], $description);
//
//        addTask($addedLeadId);
//
//
//
//
//
//
//
//    }
//
//
//
//
//
//
//
//
//
//
//}
//






















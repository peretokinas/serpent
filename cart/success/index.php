<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");

use Bitrix\Sale\Cashbox\CheckManager;
use Bitrix\Sale\Order;
use Bitrix\Main;
use Bitrix\Sale;

$arFilter = Array(
    "USER_ID" => $USER->GetID(),
);
$db_sales = CSaleOrder::GetList(
     array(
         'DATE_INSERT' => 'DESC' // сортируем по дате в сторону убывания
     ), 
     $arFilter,
     false,
     array (
        "nTopCount" => '1' 
     )
);
while ($ar_sales = $db_sales->Fetch()){
    $lasorderid = $ar_sales['ID']; //присвоили переменной ID заказа
}


$order = Order::load($lasorderid);

$paymentCollection = $order->getPaymentCollection();
          /** @var \Bitrix\Sale\Payment $payment*/
          foreach ($paymentCollection as $payment)
          {

              $paymentFields = $payment->getFieldValues();
              
              $paymentFields['PAY_SYSTEM_NAME'] = htmlspecialcharsbx($paymentFields['PAY_SYSTEM_NAME']);
              $paymentFields['CHECK_DATA'] = CheckManager::getCheckInfo($payment);
              if ($paymentFields['DATE_PAID'] instanceof Main\Type\Date)
              {
                  $paymentFields['DATE_PAID_FORMATTED'] = $paymentFields['DATE_PAID']->toString();
              }
              if ($paymentFields['DATE_BILL'] instanceof Main\Type\Date)
              {
                  $paymentFields['DATE_BILL_FORMATTED'] = $paymentFields['DATE_BILL']->toString();
              }
              if (intval($paymentFields["PAY_SYSTEM_ID"]))
              {
                  $paymentFields["PAY_SYSTEM"] = \Bitrix\Sale\PaySystem\Manager::getById($paymentFields["PAY_SYSTEM_ID"]);
                  $paymentFields["PAY_SYSTEM"]['NAME'] = htmlspecialcharsbx($paymentFields["PAY_SYSTEM"]['NAME']);
                  $paymentFields["PAY_SYSTEM"]["SRC_LOGOTIP"] = CFile::GetPath($paymentFields["PAY_SYSTEM"]['LOGOTIP']);
              }
              $paymentFields['PAY_SYSTEM']['NEW_WINDOW'] ??= 'N';
              if ($paymentFields["PAID"] != "Y" && !$order->isCanceled() &&  $order->isAllowPay())
              {
                   $paymentFields['BUFFERED_OUTPUT'] = '';
                   $paymentFields['ERROR'] = '';
                    $service = new \Bitrix\Sale\PaySystem\Service($paymentFields["PAY_SYSTEM"]);
                    //print_r($service);
                    if ($service)
                    {
                        $paymentFields["CAN_REPAY"] = "Y";
                        if ($service->getField("NEW_WINDOW") == "Y")
                        {
                            $paymentFields["PAY_SYSTEM"]["PSA_ACTION_FILE"] =
                                htmlspecialcharsbx('/cabinet/payment/')
                                .'?ORDER_ID='.urlencode(urlencode($order->getField('ACCOUNT_NUMBER')))
                                .'&PAYMENT_ID='.$paymentFields['ID'];
                            if (!empty($hash))
                            {
                                $paymentFields["PAY_SYSTEM"]["PSA_ACTION_FILE"] .= '&HASH='.htmlspecialcharsbx($hash);
                            }
                        }else{
                            $handlerFolder = Sale\PaySystem\Manager::getPathToHandlerFolder($service->getField('ACTION_FILE'));
                            $pathToAction = Main\Application::getDocumentRoot().$handlerFolder;
                            $pathToAction = str_replace("\\", "/", $pathToAction);
                            while (mb_substr($pathToAction, mb_strlen($pathToAction) - 1, 1) == "/")
                                $pathToAction = mb_substr($pathToAction, 0, mb_strlen($pathToAction) - 1);
                            //print_r($pathToAction);
                            if (file_exists($pathToAction))
                            {
                                if (is_dir($pathToAction) && file_exists($pathToAction."/payment.php"))
                                    $pathToAction .= "/cabinet/payment/";
                                $paymentFields["PAY_SYSTEM"]["PSA_ACTION_FILE"] = $pathToAction;
                            }
                            if ($paymentFields["PAY_SYSTEM"]["NEW_WINDOW"] !== 'Y')
                            {
                                $initResult = $service->initiatePay($payment, null, Sale\PaySystem\BaseServiceHandler::STRING);
                                if ($initResult->isSuccess())
                                    $paymentFields['BUFFERED_OUTPUT'] = $initResult->getTemplate();
                                else
                                    $paymentFields['ERROR'] = implode('\n', $initResult->getErrorMessages());
                            }
                        }
                    }
              }
              $paymentOrder[$paymentFields['ID']] = $paymentFields;
          }

?>

<style>

.btnTBank {
    display: none;
}

.success {
    background-image: url("bg.png");
    background-repeat: no-repeat;
    background-position: center;
    height: 500px;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.success::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(38, 55, 64, .8);
    z-index: 2;
}

.success__inner {
    max-width: 500px; 
    width: 100%;
    margin: 0 auto;
    position: relative;
    z-index: 5;
}

.success__title {
    font-family: 'TenorSans';
    font-style: normal;
    font-weight: 400;
    font-size: 36px;
    line-height: 42px;

    color: #FFFFFF;
    margin-bottom: 15px;
    text-align: center;
}

.success__text {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    /* identical to box height, or 143% */
    text-align: center;
    margin-bottom: 40px;
    color: #FFFFFF;
}

.basket-section__button-link {
    display: flex;
    width: fit-content;
    height: 40px;
    margin-top: 30px;
    text-align: center;
    justify-content: center;
    font-weight: 500;
    font-size: 12px;
    border-radius: 35px;
    text-transform: none;
    background: #fff;
    padding: 0 30px;
    color: #263740;
    align-items: center;
    outline: 0;
    cursor: pointer;
    transition: .25s;
    font-family: Montserrat;
    border: 2px solid transparent;
    margin: 0 auto 40px;
}

.basket-section__button-link a {
    border-bottom: none  !important;
}

footer {
    
    margin-top: 0 !important;
}
</style>


<section class="success">

    <div class="success__inner">

        <div class="success__title">

            Спасибо за заказ
        </div>

        <div class="success__text">

            Статус заказа ослеживайте в личном кабинете
        </div>

        <div class="success__button basket-section__button-link">

            <a href="https://theserpent.ru/cabinet/page_general/" class="">Перейти в личный кабинет</a>
                
        </div>


    </div>

</section>

<script>

    $(".btnTBank").click();
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
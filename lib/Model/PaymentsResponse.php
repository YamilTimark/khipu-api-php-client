<?php
/**
 * PaymentsResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Khipu
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Khipu\Model;

use \ArrayAccess;
/**
 * PaymentsResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Khipu
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentsResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'payment_id' => 'string',
        'payment_url' => 'string',
        'simplified_transfer_url' => 'string',
        'transfer_url' => 'string',
        'webpay_url' => 'string',
        'hites_url' => 'string',
        'payme_url' => 'string',
        'app_url' => 'string',
        'ready_for_terminal' => 'bool',
        'notification_token' => 'string',
        'receiver_id' => 'int',
        'conciliation_date' => '\DateTime',
        'subject' => 'string',
        'amount' => 'double',
        'currency' => 'string',
        'status' => 'string',
        'status_detail' => 'string',
        'body' => 'string',
        'picture_url' => 'string',
        'receipt_url' => 'string',
        'return_url' => 'string',
        'cancel_url' => 'string',
        'notify_url' => 'string',
        'notify_api_version' => 'string',
        'expires_date' => '\DateTime',
        'attachment_urls' => 'string[]',
        'bank' => 'string',
        'bank_id' => 'string',
        'payer_name' => 'string',
        'payer_email' => 'string',
        'personal_identifier' => 'string',
        'bank_account_number' => 'string',
        'out_of_date_conciliation' => 'bool',
        'transaction_id' => 'string',
        'custom' => 'string',
        'responsible_user_email' => 'string',
        'send_reminders' => 'bool',
        'send_email' => 'bool',
        'payment_method' => 'string',
        'funds_source' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'payment_id' => 'payment_id',
        'payment_url' => 'payment_url',
        'simplified_transfer_url' => 'simplified_transfer_url',
        'transfer_url' => 'transfer_url',
        'webpay_url' => 'webpay_url',
        'hites_url' => 'hites_url',
        'payme_url' => 'payme_url',
        'app_url' => 'app_url',
        'ready_for_terminal' => 'ready_for_terminal',
        'notification_token' => 'notification_token',
        'receiver_id' => 'receiver_id',
        'conciliation_date' => 'conciliation_date',
        'subject' => 'subject',
        'amount' => 'amount',
        'currency' => 'currency',
        'status' => 'status',
        'status_detail' => 'status_detail',
        'body' => 'body',
        'picture_url' => 'picture_url',
        'receipt_url' => 'receipt_url',
        'return_url' => 'return_url',
        'cancel_url' => 'cancel_url',
        'notify_url' => 'notify_url',
        'notify_api_version' => 'notify_api_version',
        'expires_date' => 'expires_date',
        'attachment_urls' => 'attachment_urls',
        'bank' => 'bank',
        'bank_id' => 'bank_id',
        'payer_name' => 'payer_name',
        'payer_email' => 'payer_email',
        'personal_identifier' => 'personal_identifier',
        'bank_account_number' => 'bank_account_number',
        'out_of_date_conciliation' => 'out_of_date_conciliation',
        'transaction_id' => 'transaction_id',
        'custom' => 'custom',
        'responsible_user_email' => 'responsible_user_email',
        'send_reminders' => 'send_reminders',
        'send_email' => 'send_email',
        'payment_method' => 'payment_method',
        'funds_source' => 'funds_source'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'payment_id' => 'setPaymentId',
        'payment_url' => 'setPaymentUrl',
        'simplified_transfer_url' => 'setSimplifiedTransferUrl',
        'transfer_url' => 'setTransferUrl',
        'webpay_url' => 'setWebpayUrl',
        'hites_url' => 'setHitesUrl',
        'payme_url' => 'setPaymeUrl',
        'app_url' => 'setAppUrl',
        'ready_for_terminal' => 'setReadyForTerminal',
        'notification_token' => 'setNotificationToken',
        'receiver_id' => 'setReceiverId',
        'conciliation_date' => 'setConciliationDate',
        'subject' => 'setSubject',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'status_detail' => 'setStatusDetail',
        'body' => 'setBody',
        'picture_url' => 'setPictureUrl',
        'receipt_url' => 'setReceiptUrl',
        'return_url' => 'setReturnUrl',
        'cancel_url' => 'setCancelUrl',
        'notify_url' => 'setNotifyUrl',
        'notify_api_version' => 'setNotifyApiVersion',
        'expires_date' => 'setExpiresDate',
        'attachment_urls' => 'setAttachmentUrls',
        'bank' => 'setBank',
        'bank_id' => 'setBankId',
        'payer_name' => 'setPayerName',
        'payer_email' => 'setPayerEmail',
        'personal_identifier' => 'setPersonalIdentifier',
        'bank_account_number' => 'setBankAccountNumber',
        'out_of_date_conciliation' => 'setOutOfDateConciliation',
        'transaction_id' => 'setTransactionId',
        'custom' => 'setCustom',
        'responsible_user_email' => 'setResponsibleUserEmail',
        'send_reminders' => 'setSendReminders',
        'send_email' => 'setSendEmail',
        'payment_method' => 'setPaymentMethod',
        'funds_source' => 'setFundsSource'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'payment_id' => 'getPaymentId',
        'payment_url' => 'getPaymentUrl',
        'simplified_transfer_url' => 'getSimplifiedTransferUrl',
        'transfer_url' => 'getTransferUrl',
        'webpay_url' => 'getWebpayUrl',
        'hites_url' => 'getHitesUrl',
        'payme_url' => 'getPaymeUrl',
        'app_url' => 'getAppUrl',
        'ready_for_terminal' => 'getReadyForTerminal',
        'notification_token' => 'getNotificationToken',
        'receiver_id' => 'getReceiverId',
        'conciliation_date' => 'getConciliationDate',
        'subject' => 'getSubject',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'status_detail' => 'getStatusDetail',
        'body' => 'getBody',
        'picture_url' => 'getPictureUrl',
        'receipt_url' => 'getReceiptUrl',
        'return_url' => 'getReturnUrl',
        'cancel_url' => 'getCancelUrl',
        'notify_url' => 'getNotifyUrl',
        'notify_api_version' => 'getNotifyApiVersion',
        'expires_date' => 'getExpiresDate',
        'attachment_urls' => 'getAttachmentUrls',
        'bank' => 'getBank',
        'bank_id' => 'getBankId',
        'payer_name' => 'getPayerName',
        'payer_email' => 'getPayerEmail',
        'personal_identifier' => 'getPersonalIdentifier',
        'bank_account_number' => 'getBankAccountNumber',
        'out_of_date_conciliation' => 'getOutOfDateConciliation',
        'transaction_id' => 'getTransactionId',
        'custom' => 'getCustom',
        'responsible_user_email' => 'getResponsibleUserEmail',
        'send_reminders' => 'getSendReminders',
        'send_email' => 'getSendEmail',
        'payment_method' => 'getPaymentMethod',
        'funds_source' => 'getFundsSource'
    );
  
    
    /**
      * $payment_id Identificador único del pago, es una cadena alfanumérica de 12 caracteres. Cómo este identificador es único, se puede usar, por ejemplo, para evitar procesar una notificación repetida. (Khipu espera un código 200 al notificar un pago, si esto no ocurre se reintenta hasta por dos días).
      * @var string
      */
    protected $payment_id;
    
    /**
      * $payment_url URL principal del pago, si el usuario no ha elegido previamente un método de pago se le muestran las opciones
      * @var string
      */
    protected $payment_url;
    
    /**
      * $simplified_transfer_url URL de pago simplificado
      * @var string
      */
    protected $simplified_transfer_url;
    
    /**
      * $transfer_url URL de pago normal
      * @var string
      */
    protected $transfer_url;
    
    /**
      * $webpay_url URL de pago con Webpay
      * @var string
      */
    protected $webpay_url;
    
    /**
      * $hites_url URL de pago con Hites
      * @var string
      */
    protected $hites_url;
    
    /**
      * $payme_url URL de pago con Hites
      * @var string
      */
    protected $payme_url;
    
    /**
      * $app_url URL para invocar el pago desde un dispositivo móvil usando la APP de khipu
      * @var string
      */
    protected $app_url;
    
    /**
      * $ready_for_terminal Es 'true' si el pago ya cuenta con todos los datos necesarios para abrir directamente la aplicación de pagos khipu
      * @var bool
      */
    protected $ready_for_terminal;
    
    /**
      * $notification_token Cadena de caracteres alfanuméricos que identifican unicamente al pago, es el identificador que el servidor de khipu enviará al servidor del comercio cuando notifique que un pago está conciliado
      * @var string
      */
    protected $notification_token;
    
    /**
      * $receiver_id Identificador único de una cuenta de cobro
      * @var int
      */
    protected $receiver_id;
    
    /**
      * $conciliation_date Fecha y hora de conciliación del pago. Formato ISO-8601. Ej: 2017-03-01T13:00:00Z
      * @var \DateTime
      */
    protected $conciliation_date;
    
    /**
      * $subject Motivo del pago
      * @var string
      */
    protected $subject;
    
    /**
      * $amount Monto del pago, sin separador de miles y usando '.' como separador de decimales.
      * @var double
      */
    protected $amount;
    
    /**
      * $currency El código de moneda en formato ISO-4217
      * @var string
      */
    protected $currency;
    
    /**
      * $status Estado del pago, puede ser 'pending' (el pagador aún no comienza a pagar), 'verifying' (se está verificando el pago) o 'done', cuando el pago ya está confirmado
      * @var string
      */
    protected $status;
    
    /**
      * $status_detail Detalle del estado del pago, 'pending' (el pagadon aún no comienza a pagar), 'normal' (el pago fue verificado y fue cancelado por algún medio de pago estandar), 'marked-paid-by-receiver' (el cobrador marco el cobro como pagado por otro medio), 'rejected-by-payer' (el pagador declaró que no pagará), 'marked-as-abuse' (el pagador declaró que no pagará y que el cobro fue no solicitado) y 'reversed' (el pago fue anulado por el comercio, el dinero fue devuelto al pagador).
      * @var string
      */
    protected $status_detail;
    
    /**
      * $body Detalle del cobro
      * @var string
      */
    protected $body;
    
    /**
      * $picture_url URL de cobro
      * @var string
      */
    protected $picture_url;
    
    /**
      * $receipt_url URL del comprobante de pago
      * @var string
      */
    protected $receipt_url;
    
    /**
      * $return_url URL donde se redirige al pagador luego que termina el pago
      * @var string
      */
    protected $return_url;
    
    /**
      * $cancel_url URL donde se redirige al pagador luego de que desiste hacer el pago
      * @var string
      */
    protected $cancel_url;
    
    /**
      * $notify_url URL del webservice donde se notificará el pago
      * @var string
      */
    protected $notify_url;
    
    /**
      * $notify_api_version Versión de la api de notificación
      * @var string
      */
    protected $notify_api_version;
    
    /**
      * $expires_date Fecha de expiración del pago. En formato ISO-8601
      * @var \DateTime
      */
    protected $expires_date;
    
    /**
      * $attachment_urls URLs de archivos adjuntos al pago
      * @var string[]
      */
    protected $attachment_urls;
    
    /**
      * $bank Nombre del banco seleccionado por el pagador
      * @var string
      */
    protected $bank;
    
    /**
      * $bank_id Identificador del banco seleccionado por el pagador
      * @var string
      */
    protected $bank_id;
    
    /**
      * $payer_name Nombre del pagador
      * @var string
      */
    protected $payer_name;
    
    /**
      * $payer_email Correo electrónico del pagador
      * @var string
      */
    protected $payer_email;
    
    /**
      * $personal_identifier Identificador personal del pagador
      * @var string
      */
    protected $personal_identifier;
    
    /**
      * $bank_account_number Número de cuenta bancaria del pagador
      * @var string
      */
    protected $bank_account_number;
    
    /**
      * $out_of_date_conciliation Es 'true' si la conciliación del pago fue hecha luego de la fecha de expiración
      * @var bool
      */
    protected $out_of_date_conciliation;
    
    /**
      * $transaction_id Identificador del pago asignado por el cobrador
      * @var string
      */
    protected $transaction_id;
    
    /**
      * $custom Campo genérico que asigna el cobrador al momento de hacer el pago
      * @var string
      */
    protected $custom;
    
    /**
      * $responsible_user_email Correo electrónico de la persona responsable del pago
      * @var string
      */
    protected $responsible_user_email;
    
    /**
      * $send_reminders Es 'true' cuando este es un cobro por correo electrónico y khipu enviará recordatorios
      * @var bool
      */
    protected $send_reminders;
    
    /**
      * $send_email Es 'true' cuando khipu enviará el cobro por correo electrónico
      * @var bool
      */
    protected $send_email;
    
    /**
      * $payment_method Método de pago usado por el pagador, puede ser 'regular_transfer' (transferencia normal), 'simplified_transfer' (transferencia simplificada) o 'not_available' (para un pago marcado como realizado por otro medio por el cobrador).
      * @var string
      */
    protected $payment_method;
    
    /**
      * $funds_source Origen de fondos usado por el pagador, puede ser 'debit' para pago con débito, 'prepaid' para pago con prepago, 'credit' para pago con crédito o vacío en el caso de que se haya pagado mediante transferencia bancaria.
      * @var string
      */
    protected $funds_source;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->payment_id = $data["payment_id"];
            $this->payment_url = $data["payment_url"];
            $this->simplified_transfer_url = $data["simplified_transfer_url"];
            $this->transfer_url = $data["transfer_url"];
            $this->webpay_url = $data["webpay_url"];
            $this->hites_url = $data["hites_url"];
            $this->payme_url = $data["payme_url"];
            $this->app_url = $data["app_url"];
            $this->ready_for_terminal = $data["ready_for_terminal"];
            $this->notification_token = $data["notification_token"];
            $this->receiver_id = $data["receiver_id"];
            $this->conciliation_date = $data["conciliation_date"];
            $this->subject = $data["subject"];
            $this->amount = $data["amount"];
            $this->currency = $data["currency"];
            $this->status = $data["status"];
            $this->status_detail = $data["status_detail"];
            $this->body = $data["body"];
            $this->picture_url = $data["picture_url"];
            $this->receipt_url = $data["receipt_url"];
            $this->return_url = $data["return_url"];
            $this->cancel_url = $data["cancel_url"];
            $this->notify_url = $data["notify_url"];
            $this->notify_api_version = $data["notify_api_version"];
            $this->expires_date = $data["expires_date"];
            $this->attachment_urls = $data["attachment_urls"];
            $this->bank = $data["bank"];
            $this->bank_id = $data["bank_id"];
            $this->payer_name = $data["payer_name"];
            $this->payer_email = $data["payer_email"];
            $this->personal_identifier = $data["personal_identifier"];
            $this->bank_account_number = $data["bank_account_number"];
            $this->out_of_date_conciliation = $data["out_of_date_conciliation"];
            $this->transaction_id = $data["transaction_id"];
            $this->custom = $data["custom"];
            $this->responsible_user_email = $data["responsible_user_email"];
            $this->send_reminders = $data["send_reminders"];
            $this->send_email = $data["send_email"];
            $this->payment_method = $data["payment_method"];
            $this->funds_source = $data["funds_source"];
        }
    }
    
    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }
  
    /**
     * Sets payment_id
     * @param string $payment_id Identificador único del pago, es una cadena alfanumérica de 12 caracteres. Cómo este identificador es único, se puede usar, por ejemplo, para evitar procesar una notificación repetida. (Khipu espera un código 200 al notificar un pago, si esto no ocurre se reintenta hasta por dos días).
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        
        $this->payment_id = $payment_id;
        return $this;
    }
    
    /**
     * Gets payment_url
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->payment_url;
    }
  
    /**
     * Sets payment_url
     * @param string $payment_url URL principal del pago, si el usuario no ha elegido previamente un método de pago se le muestran las opciones
     * @return $this
     */
    public function setPaymentUrl($payment_url)
    {
        
        $this->payment_url = $payment_url;
        return $this;
    }
    
    /**
     * Gets simplified_transfer_url
     * @return string
     */
    public function getSimplifiedTransferUrl()
    {
        return $this->simplified_transfer_url;
    }
  
    /**
     * Sets simplified_transfer_url
     * @param string $simplified_transfer_url URL de pago simplificado
     * @return $this
     */
    public function setSimplifiedTransferUrl($simplified_transfer_url)
    {
        
        $this->simplified_transfer_url = $simplified_transfer_url;
        return $this;
    }
    
    /**
     * Gets transfer_url
     * @return string
     */
    public function getTransferUrl()
    {
        return $this->transfer_url;
    }
  
    /**
     * Sets transfer_url
     * @param string $transfer_url URL de pago normal
     * @return $this
     */
    public function setTransferUrl($transfer_url)
    {
        
        $this->transfer_url = $transfer_url;
        return $this;
    }
    
    /**
     * Gets webpay_url
     * @return string
     */
    public function getWebpayUrl()
    {
        return $this->webpay_url;
    }
  
    /**
     * Sets webpay_url
     * @param string $webpay_url URL de pago con Webpay
     * @return $this
     */
    public function setWebpayUrl($webpay_url)
    {
        
        $this->webpay_url = $webpay_url;
        return $this;
    }
    
    /**
     * Gets hites_url
     * @return string
     */
    public function getHitesUrl()
    {
        return $this->hites_url;
    }
  
    /**
     * Sets hites_url
     * @param string $hites_url URL de pago con Hites
     * @return $this
     */
    public function setHitesUrl($hites_url)
    {
        
        $this->hites_url = $hites_url;
        return $this;
    }
    
    /**
     * Gets payme_url
     * @return string
     */
    public function getPaymeUrl()
    {
        return $this->payme_url;
    }
  
    /**
     * Sets payme_url
     * @param string $payme_url URL de pago con Hites
     * @return $this
     */
    public function setPaymeUrl($payme_url)
    {
        
        $this->payme_url = $payme_url;
        return $this;
    }
    
    /**
     * Gets app_url
     * @return string
     */
    public function getAppUrl()
    {
        return $this->app_url;
    }
  
    /**
     * Sets app_url
     * @param string $app_url URL para invocar el pago desde un dispositivo móvil usando la APP de khipu
     * @return $this
     */
    public function setAppUrl($app_url)
    {
        
        $this->app_url = $app_url;
        return $this;
    }
    
    /**
     * Gets ready_for_terminal
     * @return bool
     */
    public function getReadyForTerminal()
    {
        return $this->ready_for_terminal;
    }
  
    /**
     * Sets ready_for_terminal
     * @param bool $ready_for_terminal Es 'true' si el pago ya cuenta con todos los datos necesarios para abrir directamente la aplicación de pagos khipu
     * @return $this
     */
    public function setReadyForTerminal($ready_for_terminal)
    {
        
        $this->ready_for_terminal = $ready_for_terminal;
        return $this;
    }
    
    /**
     * Gets notification_token
     * @return string
     */
    public function getNotificationToken()
    {
        return $this->notification_token;
    }
  
    /**
     * Sets notification_token
     * @param string $notification_token Cadena de caracteres alfanuméricos que identifican unicamente al pago, es el identificador que el servidor de khipu enviará al servidor del comercio cuando notifique que un pago está conciliado
     * @return $this
     */
    public function setNotificationToken($notification_token)
    {
        
        $this->notification_token = $notification_token;
        return $this;
    }
    
    /**
     * Gets receiver_id
     * @return int
     */
    public function getReceiverId()
    {
        return $this->receiver_id;
    }
  
    /**
     * Sets receiver_id
     * @param int $receiver_id Identificador único de una cuenta de cobro
     * @return $this
     */
    public function setReceiverId($receiver_id)
    {
        
        $this->receiver_id = $receiver_id;
        return $this;
    }
    
    /**
     * Gets conciliation_date
     * @return \DateTime
     */
    public function getConciliationDate()
    {
        return $this->conciliation_date;
    }
  
    /**
     * Sets conciliation_date
     * @param \DateTime $conciliation_date Fecha y hora de conciliación del pago. Formato ISO-8601. Ej: 2017-03-01T13:00:00Z
     * @return $this
     */
    public function setConciliationDate($conciliation_date)
    {
        
        $this->conciliation_date = $conciliation_date;
        return $this;
    }
    
    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
  
    /**
     * Sets subject
     * @param string $subject Motivo del pago
     * @return $this
     */
    public function setSubject($subject)
    {
        
        $this->subject = $subject;
        return $this;
    }
    
    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param double $amount Monto del pago, sin separador de miles y usando '.' como separador de decimales.
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency El código de moneda en formato ISO-4217
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Estado del pago, puede ser 'pending' (el pagador aún no comienza a pagar), 'verifying' (se está verificando el pago) o 'done', cuando el pago ya está confirmado
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets status_detail
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }
  
    /**
     * Sets status_detail
     * @param string $status_detail Detalle del estado del pago, 'pending' (el pagadon aún no comienza a pagar), 'normal' (el pago fue verificado y fue cancelado por algún medio de pago estandar), 'marked-paid-by-receiver' (el cobrador marco el cobro como pagado por otro medio), 'rejected-by-payer' (el pagador declaró que no pagará), 'marked-as-abuse' (el pagador declaró que no pagará y que el cobro fue no solicitado) y 'reversed' (el pago fue anulado por el comercio, el dinero fue devuelto al pagador).
     * @return $this
     */
    public function setStatusDetail($status_detail)
    {
        
        $this->status_detail = $status_detail;
        return $this;
    }
    
    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
  
    /**
     * Sets body
     * @param string $body Detalle del cobro
     * @return $this
     */
    public function setBody($body)
    {
        
        $this->body = $body;
        return $this;
    }
    
    /**
     * Gets picture_url
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->picture_url;
    }
  
    /**
     * Sets picture_url
     * @param string $picture_url URL de cobro
     * @return $this
     */
    public function setPictureUrl($picture_url)
    {
        
        $this->picture_url = $picture_url;
        return $this;
    }
    
    /**
     * Gets receipt_url
     * @return string
     */
    public function getReceiptUrl()
    {
        return $this->receipt_url;
    }
  
    /**
     * Sets receipt_url
     * @param string $receipt_url URL del comprobante de pago
     * @return $this
     */
    public function setReceiptUrl($receipt_url)
    {
        
        $this->receipt_url = $receipt_url;
        return $this;
    }
    
    /**
     * Gets return_url
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }
  
    /**
     * Sets return_url
     * @param string $return_url URL donde se redirige al pagador luego que termina el pago
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        
        $this->return_url = $return_url;
        return $this;
    }
    
    /**
     * Gets cancel_url
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }
  
    /**
     * Sets cancel_url
     * @param string $cancel_url URL donde se redirige al pagador luego de que desiste hacer el pago
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        
        $this->cancel_url = $cancel_url;
        return $this;
    }
    
    /**
     * Gets notify_url
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notify_url;
    }
  
    /**
     * Sets notify_url
     * @param string $notify_url URL del webservice donde se notificará el pago
     * @return $this
     */
    public function setNotifyUrl($notify_url)
    {
        
        $this->notify_url = $notify_url;
        return $this;
    }
    
    /**
     * Gets notify_api_version
     * @return string
     */
    public function getNotifyApiVersion()
    {
        return $this->notify_api_version;
    }
  
    /**
     * Sets notify_api_version
     * @param string $notify_api_version Versión de la api de notificación
     * @return $this
     */
    public function setNotifyApiVersion($notify_api_version)
    {
        
        $this->notify_api_version = $notify_api_version;
        return $this;
    }
    
    /**
     * Gets expires_date
     * @return \DateTime
     */
    public function getExpiresDate()
    {
        return $this->expires_date;
    }
  
    /**
     * Sets expires_date
     * @param \DateTime $expires_date Fecha de expiración del pago. En formato ISO-8601
     * @return $this
     */
    public function setExpiresDate($expires_date)
    {
        
        $this->expires_date = $expires_date;
        return $this;
    }
    
    /**
     * Gets attachment_urls
     * @return string[]
     */
    public function getAttachmentUrls()
    {
        return $this->attachment_urls;
    }
  
    /**
     * Sets attachment_urls
     * @param string[] $attachment_urls URLs de archivos adjuntos al pago
     * @return $this
     */
    public function setAttachmentUrls($attachment_urls)
    {
        
        $this->attachment_urls = $attachment_urls;
        return $this;
    }
    
    /**
     * Gets bank
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }
  
    /**
     * Sets bank
     * @param string $bank Nombre del banco seleccionado por el pagador
     * @return $this
     */
    public function setBank($bank)
    {
        
        $this->bank = $bank;
        return $this;
    }
    
    /**
     * Gets bank_id
     * @return string
     */
    public function getBankId()
    {
        return $this->bank_id;
    }
  
    /**
     * Sets bank_id
     * @param string $bank_id Identificador del banco seleccionado por el pagador
     * @return $this
     */
    public function setBankId($bank_id)
    {
        
        $this->bank_id = $bank_id;
        return $this;
    }
    
    /**
     * Gets payer_name
     * @return string
     */
    public function getPayerName()
    {
        return $this->payer_name;
    }
  
    /**
     * Sets payer_name
     * @param string $payer_name Nombre del pagador
     * @return $this
     */
    public function setPayerName($payer_name)
    {
        
        $this->payer_name = $payer_name;
        return $this;
    }
    
    /**
     * Gets payer_email
     * @return string
     */
    public function getPayerEmail()
    {
        return $this->payer_email;
    }
  
    /**
     * Sets payer_email
     * @param string $payer_email Correo electrónico del pagador
     * @return $this
     */
    public function setPayerEmail($payer_email)
    {
        
        $this->payer_email = $payer_email;
        return $this;
    }
    
    /**
     * Gets personal_identifier
     * @return string
     */
    public function getPersonalIdentifier()
    {
        return $this->personal_identifier;
    }
  
    /**
     * Sets personal_identifier
     * @param string $personal_identifier Identificador personal del pagador
     * @return $this
     */
    public function setPersonalIdentifier($personal_identifier)
    {
        
        $this->personal_identifier = $personal_identifier;
        return $this;
    }
    
    /**
     * Gets bank_account_number
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bank_account_number;
    }
  
    /**
     * Sets bank_account_number
     * @param string $bank_account_number Número de cuenta bancaria del pagador
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {
        
        $this->bank_account_number = $bank_account_number;
        return $this;
    }
    
    /**
     * Gets out_of_date_conciliation
     * @return bool
     */
    public function getOutOfDateConciliation()
    {
        return $this->out_of_date_conciliation;
    }
  
    /**
     * Sets out_of_date_conciliation
     * @param bool $out_of_date_conciliation Es 'true' si la conciliación del pago fue hecha luego de la fecha de expiración
     * @return $this
     */
    public function setOutOfDateConciliation($out_of_date_conciliation)
    {
        
        $this->out_of_date_conciliation = $out_of_date_conciliation;
        return $this;
    }
    
    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }
  
    /**
     * Sets transaction_id
     * @param string $transaction_id Identificador del pago asignado por el cobrador
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        
        $this->transaction_id = $transaction_id;
        return $this;
    }
    
    /**
     * Gets custom
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }
  
    /**
     * Sets custom
     * @param string $custom Campo genérico que asigna el cobrador al momento de hacer el pago
     * @return $this
     */
    public function setCustom($custom)
    {
        
        $this->custom = $custom;
        return $this;
    }
    
    /**
     * Gets responsible_user_email
     * @return string
     */
    public function getResponsibleUserEmail()
    {
        return $this->responsible_user_email;
    }
  
    /**
     * Sets responsible_user_email
     * @param string $responsible_user_email Correo electrónico de la persona responsable del pago
     * @return $this
     */
    public function setResponsibleUserEmail($responsible_user_email)
    {
        
        $this->responsible_user_email = $responsible_user_email;
        return $this;
    }
    
    /**
     * Gets send_reminders
     * @return bool
     */
    public function getSendReminders()
    {
        return $this->send_reminders;
    }
  
    /**
     * Sets send_reminders
     * @param bool $send_reminders Es 'true' cuando este es un cobro por correo electrónico y khipu enviará recordatorios
     * @return $this
     */
    public function setSendReminders($send_reminders)
    {
        
        $this->send_reminders = $send_reminders;
        return $this;
    }
    
    /**
     * Gets send_email
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->send_email;
    }
  
    /**
     * Sets send_email
     * @param bool $send_email Es 'true' cuando khipu enviará el cobro por correo electrónico
     * @return $this
     */
    public function setSendEmail($send_email)
    {
        
        $this->send_email = $send_email;
        return $this;
    }
    
    /**
     * Gets payment_method
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }
  
    /**
     * Sets payment_method
     * @param string $payment_method Método de pago usado por el pagador, puede ser 'regular_transfer' (transferencia normal), 'simplified_transfer' (transferencia simplificada) o 'not_available' (para un pago marcado como realizado por otro medio por el cobrador).
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        
        $this->payment_method = $payment_method;
        return $this;
    }
    
    /**
     * Gets funds_source
     * @return string
     */
    public function getFundsSource()
    {
        return $this->funds_source;
    }
  
    /**
     * Sets funds_source
     * @param string $funds_source Origen de fondos usado por el pagador, puede ser 'debit' para pago con débito, 'prepaid' para pago con prepago, 'credit' para pago con crédito o vacío en el caso de que se haya pagado mediante transferencia bancaria.
     * @return $this
     */
    public function setFundsSource($funds_source)
    {
        
        $this->funds_source = $funds_source;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  mixed $offset Offset
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->$offset);
    }

    /**
     * Gets offset.
     * @param  mixed $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->$offset;
    }

    /**
     * Sets value based on offset.
     * @param  mixed $offset Offset
     * @param  mixed $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->$offset = $value;
    }

    /**
     * Unsets offset.
     * @param  mixed $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset(mixed $offset): void
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}

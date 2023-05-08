<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SendChatappMessageShrinkRequest extends Model
{
    /**
     * @description The type of the message channel. Valid values:
     *
     *   **whatsapp**
     *   **viber**
     *   line. The feature that ChatAPP sends messages by using Line is under development.
     *
     * @example whatsapp
     *
     * @var string
     */
    public $channelType;

    /**
     * @description The content of the message.
     *
     **Usage notes when you set the ChannelType parameter to whatsapp:**
     *
     *   When you set the **MessageType** parameter to **text**, the **text** parameter is required and the **caption** parameter cannot be specified.
     *   When you set the **MessageType** parameter to **image**, the **link** parameter is required.
     *   When you set the **MessageType** parameter to **video**, the **link** parameter is required.
     *   When you set the **MessageType** parameter to **audio**, the **link** parameter is required and the **caption** parameter is invalid.
     *   When you set the **MessageType** parameter to **document**, the **link** and **fileName** parameters are required and the **caption** parameter is invalid.
     *   When you set the **MessageType** parameter to **interactive**, the **type** and **action** parameters are required.
     *   When you set the **MessageType** parameter to **contacts**, the **name** parameter is required.
     *   When you set the **MessageType** parameter to **location**, the **longitude** and **latitude** parameters are required.
     *   When you set the **MessageType** parameter to **sticker**, the **link** parameter is required, and the **caption** and **fileName** parameters are invalid.
     *   When you set the **MessageType** parameter to **reaction**, the **messageId** and **emoji** parameters are required.
     *
     **Usage notes when you set the ChannelType parameter to viber:**
     *
     *   When you set the **MessageType** parameter to **text**, the **text** parameter is required.
     *   When you set the **MessageType** parameter to **image**, the **link** parameter is required.
     *   When you set the **MessageType** parameter to **video**, the **link**, **thumbnail**, **fileSize**, and **duration** parameters are required.
     *   When you set the **MessageType** parameter to **document**, the **link**, **fileName**, and **fileType** parameters are required.
     *   When you set the **MessageType** parameter to **text_button**, the **text**, **caption**, and **action** parameters are required.
     *   When you set the **MessageType** parameter to **text_image_button**, the **text**, **link**, **caption**, and **action** parameters are required.
     *   When you set the **MessageType** parameter to **text_video**, the **text**, **link**, **thumbnail**, **fileSize**, and **duration** parameters are required.
     *   When you set the **MessageType** parameter to **text_video_button**, the **text**, **link**, **thumbnail**, **fileSize**, **duration**, and **caption** parameters are required. The **action** parameter is invalid.
     *
     * @example {\"text\": \"hello whatsapp\", \"link\": \"\", \"caption\": \"\", \"fileName\": \"\" }
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the message to reply to.
     *
     * @example 61851ccb2f1365b16aee****
     *
     * @var string
     */
    public $contextMessageId;

    /**
     * @description The space ID of the user.
     *
     * @example 28251486512358****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ID of the WhatsApp account that you register.
     *
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description The content of the fallback message.
     *
     * @example This is a fallback message.
     *
     * @var string
     */
    public $fallBackContent;

    /**
     * @description 消息在指定时间内未返回回执回落
     *
     * @example 120
     *
     * @var int
     */
    public $fallBackDuration;

    /**
     * @description The ID of the fallback strategy. You can create a fallback strategy and view the information in the console.
     *
     * @example S_000001
     *
     * @var string
     */
    public $fallBackId;

    /**
     * @description The phone number of the message sender.
     *
     * > You can specify a mobile phone number that is registered for a WhatsApp account and is approved in the ChatAPP console.
     * @example 1360000****
     *
     * @var string
     */
    public $from;

    /**
     * @description The independent software vendor (ISV) verification code, which is used to verify whether the user is authorized by the ISV account.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The type of the Viber message. This parameter is required if you set the ChannelType parameter to viber. Valid values: promotion and transaction.
     *
     * @example promotion
     *
     * @var string
     */
    public $label;

    /**
     * @description The language that is used in the message template. This parameter is required only if you set the Type parameter to **template**. For more information about language codes, see [Language codes](~~463420~~).
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The specific type of the message. This parameter is required only if you set the Type parameter to **message**.
     *
     **Valid values of MessageType when you set the ChannelType parameter to whatsapp:**
     *
     *   **text**: a text message.
     *   **image**: an image message.
     *   **video**: a video message.
     *   **audio**: an audio message.
     *   **document**: a document message.
     *   **interactive**: an interactive message.
     *   **contacts**: a contact message.
     *   **location**: a location message.
     *   **sticker**: a sticker message.
     *   **reaction**: a reaction message.
     *
     **Valid values of MessageType when you set the ChannelType parameter to viber:**
     *
     *   **text**: a text message.
     *   **image**: an image message.
     *   **video**: a video message.
     *   **document**: a document message.
     *   **text_button**: a message that contains the text and button media objects.
     *   **text_image_button**: a message that contains multiple media objects, including the text, image, and button.
     *   **text_video**: a message that contains the text and video media objects.
     *   **text_video_button**: a message that contains multiple media objects, including text, video, and button.
     *   **text_image**: a message that contains the text and image media objects.
     *
     * > For more information, see [Parameters of a message template](~~454530~~).
     * @example text
     *
     * @var string
     */
    public $messageType;

    /**
     * @description The payload of the button.
     *
     * @example payloadtext1,payloadtext2,payloadtext3
     *
     * @var string
     */
    public $payloadShrink;

    /**
     * @description The tag information of the Viber message.
     *
     * @example tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description The ID of the task.
     *
     * @example 100000001
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The code of the message template. This parameter is required only if you set the Type parameter to **template**.
     *
     * @example 744c4b5c79c9432497a075bdfca3****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The variables of the message template.
     *
     * @var string
     */
    public $templateParamsShrink;

    /**
     * @description The phone number that receives the message.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $to;

    /**
     * @description The tracking ID of the Viber message.
     *
     * @example tracking_id:123456
     *
     * @var string
     */
    public $trackingData;

    /**
     * @description The timeout period for sending the Viber message. Valid values: 30 to 1209600. Unit: seconds.
     *
     * @example 50
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the message. Valid values:
     *
     *   **template**: a template message. A template message is sent based on a template that is created in the ChatAPP console and is approved. You can send template messages at any time based on your business requirements.
     *   **message**: a custom message. You can send a custom message to a user only within 24 hours after you receive the last message from the user.
     *
     * @example template
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'channelType'          => 'ChannelType',
        'content'              => 'Content',
        'contextMessageId'     => 'ContextMessageId',
        'custSpaceId'          => 'CustSpaceId',
        'custWabaId'           => 'CustWabaId',
        'fallBackContent'      => 'FallBackContent',
        'fallBackDuration'     => 'FallBackDuration',
        'fallBackId'           => 'FallBackId',
        'from'                 => 'From',
        'isvCode'              => 'IsvCode',
        'label'                => 'Label',
        'language'             => 'Language',
        'messageType'          => 'MessageType',
        'payloadShrink'        => 'Payload',
        'tag'                  => 'Tag',
        'taskId'               => 'TaskId',
        'templateCode'         => 'TemplateCode',
        'templateParamsShrink' => 'TemplateParams',
        'to'                   => 'To',
        'trackingData'         => 'TrackingData',
        'ttl'                  => 'Ttl',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contextMessageId) {
            $res['ContextMessageId'] = $this->contextMessageId;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->fallBackContent) {
            $res['FallBackContent'] = $this->fallBackContent;
        }
        if (null !== $this->fallBackDuration) {
            $res['FallBackDuration'] = $this->fallBackDuration;
        }
        if (null !== $this->fallBackId) {
            $res['FallBackId'] = $this->fallBackId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParamsShrink) {
            $res['TemplateParams'] = $this->templateParamsShrink;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->trackingData) {
            $res['TrackingData'] = $this->trackingData;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendChatappMessageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContextMessageId'])) {
            $model->contextMessageId = $map['ContextMessageId'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['FallBackContent'])) {
            $model->fallBackContent = $map['FallBackContent'];
        }
        if (isset($map['FallBackDuration'])) {
            $model->fallBackDuration = $map['FallBackDuration'];
        }
        if (isset($map['FallBackId'])) {
            $model->fallBackId = $map['FallBackId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParams'])) {
            $model->templateParamsShrink = $map['TemplateParams'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['TrackingData'])) {
            $model->trackingData = $map['TrackingData'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

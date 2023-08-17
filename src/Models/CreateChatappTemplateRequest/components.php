<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\buttons;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The prompt message indicating that the verification code must be kept secret. This parameter is valid if Category is set to AUTHENTICATION in a WhatsApp message template and the Type sub-parameter of the Components parameter is set to BODY. The prompt message is displayed in the BODY component.
     *
     * @example true
     *
     * @var bool
     */
    public $addSecretRecommendation;

    /**
     * @description The buttons. This parameter applies only to **BUTTONS** components.
     *
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description The description of the document.
     *
     * @example This is a video
     *
     * @var string
     */
    public $caption;

    /**
     * @description The validity period of the verification code in a WhatsApp message template. Unit: minutes. This parameter is valid if Category is set to AUTHENTICATION in a WhatsApp message template and the Type sub-parameter of the Components parameter is set to FOOTER. The value of CodeExpirationMinutes is displayed in the FOOTER component.
     *
     * @example 5
     *
     * @var int
     */
    public $codeExpirationMinutes;

    /**
     * @description The length of the video in the Viber message template. Valid values: 0 to 600. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the document.
     *
     * @example video name
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the document attached in the Viber message template.
     *
     * @example docx
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The type of the media resources that are included in the message. Valid values:
     *
     *   **TEXT**
     *   **IMAGE**
     *   **DOCUMENT**
     *   **VIDEO**
     *
     * @example TEXT
     *
     * @var string
     */
    public $format;

    /**
     * @description The text of the message that you want to send.
     *
     * > If Category is set to AUTHENTICATION, the Text sub-parameter of the Components parameter is empty.
     * @example hello whatsapp
     *
     * @var string
     */
    public $text;

    /**
     * @description The thumbnail URL of the video in the Viber message template.
     *
     * @example https://cdn.multiplymall.mobiapp.cloud/yunmall/B-LM-LMALL202207130001/20220730/d712a057-a6af-4513-bbe6-7ee57ea60983.png?x-oss-process=image/resize,w_100
     *
     * @var string
     */
    public $thumbUrl;

    /**
     * @description The type of the component. Valid values:
     *
     *   **BODY**
     *   **HEADER**
     *   **FOOTER**
     *   **BUTTONS**
     * > - The following limits apply to components in WhatsApp message templates: A **BODY** component cannot exceed 1,024 characters in length. A **HEADER** or **FOOTER** component cannot exceed 60 characters in length.
     * > - **FOOTER** components are not supported in Viber message templates.
     * > - In a Viber message template, a media resource, such as an image, a video, or a document, is placed in the **HEADER** component. If a Viber message contains text and an image, the image is placed under the text in the message received on a terminal.
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the media resource.
     *
     * > We recommend that the resolution of the image in the Viber message template is 800 × 800.
     * @example https://image.developer.aliyundoc.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'addSecretRecommendation' => 'AddSecretRecommendation',
        'buttons'                 => 'Buttons',
        'caption'                 => 'Caption',
        'codeExpirationMinutes'   => 'CodeExpirationMinutes',
        'duration'                => 'Duration',
        'fileName'                => 'FileName',
        'fileType'                => 'FileType',
        'format'                  => 'Format',
        'text'                    => 'Text',
        'thumbUrl'                => 'ThumbUrl',
        'type'                    => 'Type',
        'url'                     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addSecretRecommendation) {
            $res['AddSecretRecommendation'] = $this->addSecretRecommendation;
        }
        if (null !== $this->buttons) {
            $res['Buttons'] = [];
            if (null !== $this->buttons && \is_array($this->buttons)) {
                $n = 0;
                foreach ($this->buttons as $item) {
                    $res['Buttons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->codeExpirationMinutes) {
            $res['CodeExpirationMinutes'] = $this->codeExpirationMinutes;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->thumbUrl) {
            $res['ThumbUrl'] = $this->thumbUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddSecretRecommendation'])) {
            $model->addSecretRecommendation = $map['AddSecretRecommendation'];
        }
        if (isset($map['Buttons'])) {
            if (!empty($map['Buttons'])) {
                $model->buttons = [];
                $n              = 0;
                foreach ($map['Buttons'] as $item) {
                    $model->buttons[$n++] = null !== $item ? buttons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['CodeExpirationMinutes'])) {
            $model->codeExpirationMinutes = $map['CodeExpirationMinutes'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['ThumbUrl'])) {
            $model->thumbUrl = $map['ThumbUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

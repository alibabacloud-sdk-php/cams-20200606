<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponseBody\listTemplate;
use AlibabaCloud\Tea\Model;

class ListChatappTemplateResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     *   A code of OK indicates that the call is successful.
     *   Other codes indicate that the call fails. For more information, see [Error codes](~~196974~~).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The message templates.
     *
     * @var listTemplate[]
     */
    public $listTemplate;

    /**
     * @description The error message returned.
     *
     * @example None
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 90E63D28-E31D-1EB2-8939-A9486641****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'         => 'Code',
        'listTemplate' => 'ListTemplate',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->listTemplate) {
            $res['ListTemplate'] = [];
            if (null !== $this->listTemplate && \is_array($this->listTemplate)) {
                $n = 0;
                foreach ($this->listTemplate as $item) {
                    $res['ListTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatappTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ListTemplate'])) {
            if (!empty($map['ListTemplate'])) {
                $model->listTemplate = [];
                $n                   = 0;
                foreach ($map['ListTemplate'] as $item) {
                    $model->listTemplate[$n++] = null !== $item ? listTemplate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

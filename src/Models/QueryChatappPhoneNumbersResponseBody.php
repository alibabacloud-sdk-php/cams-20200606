<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers;
use AlibabaCloud\Tea\Model;

class QueryChatappPhoneNumbersResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     *   A value of OK indicates that the call is successful.
     *   Other values indicate that the call fails. For more information, see [Error codes](~~196974~~).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The message returned.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @description The list of phone numbers.
     *
     * @var phoneNumbers[]
     */
    public $phoneNumbers;

    /**
     * @description The ID of the request.
     *
     * @example 90E63D28-E31D-1EB2-8939-A94866411B2O
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'phoneNumbers' => 'PhoneNumbers',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = [];
            if (null !== $this->phoneNumbers && \is_array($this->phoneNumbers)) {
                $n = 0;
                foreach ($this->phoneNumbers as $item) {
                    $res['PhoneNumbers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryChatappPhoneNumbersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PhoneNumbers'])) {
            if (!empty($map['PhoneNumbers'])) {
                $model->phoneNumbers = [];
                $n                   = 0;
                foreach ($map['PhoneNumbers'] as $item) {
                    $model->phoneNumbers[$n++] = null !== $item ? phoneNumbers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
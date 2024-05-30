<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class QueryWabaBusinessInfoRequest extends Model
{
    /**
     * @description The space ID of the user under the independent software vendor (ISV) account.
     *
     * This parameter is required.
     * @example 293483938849493****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ID of the WABA.
     *
     * This parameter is required.
     * @example 293848822333
     *
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'wabaId'      => 'WabaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->wabaId) {
            $res['WabaId'] = $this->wabaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWabaBusinessInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['WabaId'])) {
            $model->wabaId = $map['WabaId'];
        }

        return $model;
    }
}

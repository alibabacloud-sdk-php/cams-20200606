<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\buttons;

use AlibabaCloud\Tea\Model;

class supportedApps extends Model
{
    /**
     * @description The Whatsapp template is required when the Category is\\" Authorisation \\"and the Button Type is\\" ONE_TAP/ZERO-TAP\\", indicating the signature hash value of the Whatsapp call application.
     *
     * @example com.example.myapplication
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The Whatsapp template is required when the Category is\\" Authorisation \\"and the Button Type is\\" ONE_TAP/ZERO-TAP\\", indicating the signature hash value of the Whatsapp call application.
     *
     * @example fk39kd93ks9
     *
     * @var string
     */
    public $signatureHash;
    protected $_name = [
        'packageName'   => 'PackageName',
        'signatureHash' => 'SignatureHash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->signatureHash) {
            $res['SignatureHash'] = $this->signatureHash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['SignatureHash'])) {
            $model->signatureHash = $map['SignatureHash'];
        }

        return $model;
    }
}

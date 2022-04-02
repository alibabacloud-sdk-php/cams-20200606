<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CheckChatappContactsShrinkRequest extends Model
{
    /**
     * @description 通道类型
     *
     * @var string
     */
    public $channelType;

    /**
     * @description 需要查询的用户列表,单次调用最多查询10个。注意：用户号码必须加国家码
     *
     * @var string
     */
    public $contactsShrink;

    /**
     * @description 发送号码,所选择ChannelType下的Business账号，即在控制台上审核通过的Number
     *
     * @var string
     */
    public $from;
    protected $_name = [
        'channelType'    => 'ChannelType',
        'contactsShrink' => 'Contacts',
        'from'           => 'From',
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
        if (null !== $this->contactsShrink) {
            $res['Contacts'] = $this->contactsShrink;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckChatappContactsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['Contacts'])) {
            $model->contactsShrink = $map['Contacts'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        return $model;
    }
}

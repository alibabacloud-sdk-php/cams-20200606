<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 审核状态
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description 模板分类
     *
     * @var string
     */
    public $category;

    /**
     * @description 消息模板组件
     *
     * @var components[]
     */
    public $components;

    /**
     * @description 变量例子
     *
     * @var string[]
     */
    public $example;

    /**
     * @description 语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 模板编码
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'auditStatus'  => 'AuditStatus',
        'category'     => 'Category',
        'components'   => 'Components',
        'example'      => 'Example',
        'language'     => 'Language',
        'name'         => 'Name',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}

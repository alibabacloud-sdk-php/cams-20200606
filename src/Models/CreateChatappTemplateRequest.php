<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;
use AlibabaCloud\Tea\Model;

class CreateChatappTemplateRequest extends Model
{
    /**
     * @description 模板分类
     *
     * @var string
     */
    public $category;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @description ISV客户WabaId
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description 变量，KEY-VALUE结构
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
     * @description 模板类型
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'     => 'Category',
        'components'   => 'Components',
        'custWabaId'   => 'CustWabaId',
        'example'      => 'Example',
        'language'     => 'Language',
        'name'         => 'Name',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChatappTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
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
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}

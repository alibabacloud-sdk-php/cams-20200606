<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description 仅适用于 BUTTONS 类型。
     * 与按钮相关的参数。
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description 描述，当Type为Header，且Format为IMGAGE/DOCUMENT/VIDEO 可以增加描述
     *
     * @var string
     */
    public $caption;

    /**
     * @description 文件名称，当Type为Header，且Format为DOCUMENT时可以给文件指定名称
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 格式
     *
     * @var string
     */
    public $format;

    /**
     * @description 所发送消息的文本
     *
     * @var string
     */
    public $text;

    /**
     * @description 组件类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 素材路径
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'buttons'  => 'Buttons',
        'caption'  => 'Caption',
        'fileName' => 'FileName',
        'format'   => 'Format',
        'text'     => 'Text',
        'type'     => 'Type',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
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

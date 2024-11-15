<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SubmitIsvCustomerTermsRequest extends Model
{
    /**
     * @description The business scenario.
     *
     * This parameter is required.
     * @example Marketing products
     *
     * @var string
     */
    public $businessDesc;

    /**
     * @description The enterprise mail.
     *
     * This parameter is required.
     * @example partner@aliyun.com
     *
     * @var string
     */
    public $contactMail;

    /**
     * @description The country code.
     *
     * This parameter is required.
     * @example CN
     *
     * @var string
     */
    public $countryId;

    /**
     * @description The enterprise name.
     *
     * This parameter is required.
     * @example Aliyun
     *
     * @var string
     */
    public $custName;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * This parameter is required.
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ISV or Client agreement.
     *
     * This parameter is required.
     * @example isvTerms.pdf
     *
     * @var string
     */
    public $isvTerms;

    /**
     * @description The enterprise address.
     *
     * This parameter is required.
     * @example Hangzhou
     *
     * @var string
     */
    public $officeAddress;
    protected $_name = [
        'businessDesc'  => 'BusinessDesc',
        'contactMail'   => 'ContactMail',
        'countryId'     => 'CountryId',
        'custName'      => 'CustName',
        'custSpaceId'   => 'CustSpaceId',
        'isvTerms'      => 'IsvTerms',
        'officeAddress' => 'OfficeAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessDesc) {
            $res['BusinessDesc'] = $this->businessDesc;
        }
        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->custName) {
            $res['CustName'] = $this->custName;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->isvTerms) {
            $res['IsvTerms'] = $this->isvTerms;
        }
        if (null !== $this->officeAddress) {
            $res['OfficeAddress'] = $this->officeAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIsvCustomerTermsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessDesc'])) {
            $model->businessDesc = $map['BusinessDesc'];
        }
        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['CustName'])) {
            $model->custName = $map['CustName'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['IsvTerms'])) {
            $model->isvTerms = $map['IsvTerms'];
        }
        if (isset($map['OfficeAddress'])) {
            $model->officeAddress = $map['OfficeAddress'];
        }

        return $model;
    }
}

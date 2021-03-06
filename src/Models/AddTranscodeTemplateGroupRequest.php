<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddTranscodeTemplateGroupRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'name' => 'Name',
        'transcodeTemplateList' => 'TranscodeTemplateList',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'appId' => 'AppId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Name'] = $this->name;
        $res['TranscodeTemplateList'] = $this->transcodeTemplateList;
        $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddTranscodeTemplateGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['TranscodeTemplateList'])){
            $model->transcodeTemplateList = $map['TranscodeTemplateList'];
        }
        if(isset($map['TranscodeTemplateGroupId'])){
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description transcodeTemplateList
     * @var string
     */
    public $transcodeTemplateList;

    /**
     * @description transcodeTemplateGroupId
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}

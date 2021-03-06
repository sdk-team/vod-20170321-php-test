<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetURLUploadInfosRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'jobIds' => 'JobIds',
        'uploadURLs' => 'UploadURLs',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['JobIds'] = $this->jobIds;
        $res['UploadURLs'] = $this->uploadURLs;
        return $res;
    }
    /**
     * @param array $map
     * @return GetURLUploadInfosRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['JobIds'])){
            $model->jobIds = $map['JobIds'];
        }
        if(isset($map['UploadURLs'])){
            $model->uploadURLs = $map['UploadURLs'];
        }
        return $model;
    }
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
     * @description jobIds
     * @var string
     */
    public $jobIds;

    /**
     * @description uploadUrls
     * @var string
     */
    public $uploadURLs;

}

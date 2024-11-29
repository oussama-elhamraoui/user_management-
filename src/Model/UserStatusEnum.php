<?php
    namespace App\Model;

    enum UserStatusEnum:string{
        case PENDING = 'PENDING';
        case APPROVED = 'APPROVED';
        case REJECTED = 'REJECTED';
    }
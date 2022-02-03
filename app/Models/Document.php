<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

use Xcholars\Storage\File;

class Document extends Model
{
    protected $fillable = [
        'user_id',
        'document',
        'title',
        'thumbnil',
        'type',
    ];

    public function getUploadPath($type, $thumbnil = false)
    {
        if ($thumbnil)
        {
            if ($type == 'pdf')
            {
                return upload_path('pdfs/thumbnil');
            }

            return upload_path('papers/thumbnil');
        }

        if ($type == 'pdf')
        {
            return upload_path('pdfs/docs');
        }

        return upload_path('papers/docs');
    }

    public function uploadDocument($type)
    {
        $storage = new FileSystem($this->getUploadPath($type));

        $file = new \Upload\File('document', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }

    public function uploadThumbnil($type)
    {
        $storage = new FileSystem($this->getUploadPath($type, true));

        $file = new \Upload\File('thumbnil', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }

    public function thumbnilIsValid()
    {
        return  $_FILES['thumbnil']['type'] == 'image/jpeg'
                                ||
                $_FILES['thumbnil']['type'] == 'image/png'
                                ||
                $_FILES['thumbnil']['type'] == 'image/jpg';
    }

    public function documentIsValid()
    {
        return  $_FILES['document']['type'] == 'application/pdf';
    }
}

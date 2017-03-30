<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 * @link        http://www.ioa.tw/
 */

class AlbumImageNameImageUploader extends OrmImageUploader {

  public function getVersions () {
    return array (
        '' => array (),
        '800w' => array ('resize', 800, 800, 'width')
      );
  }
}
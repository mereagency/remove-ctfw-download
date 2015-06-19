<?php
/*
  Plugin Name: Remove CTFW Force Download
  Plugin URI: http://merechurch.com/
  Description: Removes the CTFW Force download function for church themes sermon manager
  Author: Mere, Jeremiah Prummer
  Author URI: http://merechurch.com/
  License: GPL2

  Copyright 2015 Mere Agency (email : support@mereagency.com)
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
 */

class RemoveCTFWDownload {
  
  /**
   * Construct.
   */
  public function __construct() {
    add_filter( 'ctfw_force_download_url', array($this,'remove_ctfw_force_download_url'),10,2);
  }

  function remove_ctfw_force_download_url($download_url,$url){
    return $url;
  }

}

$RemoveCTFWDownload = new RemoveCTFWDownload();
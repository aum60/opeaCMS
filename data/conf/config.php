<?php	return array (
  'yfcmf_version' => 'V2.3.1',
  'update_check' => false,
  'think_sdk_qq' => 
  array (
    'app_key' => '203564',
    'app_secret' => 'bab1f3acc0c67b69a1f470ac5e8dc36a',
    'display' => true,
    'callback' => 'http://www.rainfer.cn/home/oauth/callback/type/qq.html',
  ),
  'think_sdk_sina' => 
  array (
    'app_key' => '602735229',
    'app_secret' => '66781cbeab9fdb9b014a387ab6e943fe',
    'display' => true,
    'callback' => 'http://www.rainfer.cn/home/oauth/callback/type/sina.html',
  ),
  'comment' => 
  array (
    't_open' => true,
    't_limit' => 60,
  ),
  'auth_config' => 
  array (
    'auth_on' => true,
    'auth_type' => 1,
    'auth_group' => 'auth_group',
    'auth_group_access' => 'auth_group_access',
    'auth_rule' => 'auth_rule',
    'auth_user' => 'admin',
  ),
  'app_debug' => true,
  'app_trace' => true,
  'baidumap_ak' => 'D91c810554767b49e3bdd2a7b25d97c1',
  'upload_validate' => 
  array (
    'size' => 10485760,
    'ext' => 
    array (
      0 => 'jpg',
      1 => 'gif',
      2 => 'png',
      3 => 'jpeg',
    ),
  ),
  'upload_path' => '/data/upload',
  'url_route_on' => true,
  'url_route_must' => false,
  'route_complete_match' => false,
  'url_html_suffix' => 'html',
  'storage' => 
  array (
    'storage_open' => true,
    'accesskey' => 'lsuUWKuEMOUG6-yLa3FhyBKoXz4AYJ-aumlOCVvL',
    'secretkey' => 'wMdZoFdc050kn4hybNSIVaJuDaVGDZKR77cxBvnE',
    'bucket' => 'opea-cms',
    'domain' => 'http://ooavqbrbq.bkt.clouddn.com/',
  ),
  'lang_switch_on' => true,
  'default_lang' => 'zh-cn',
  'geetest' => 
  array (
    'geetest_on' => false,
    'captcha_id' => '6ccadd8194e50ec7a4cac4ca038cb159',
    'private_key' => '79b59dd22da4f068cedeed05e177fb80',
  ),
  'log' => 
  array (
    'clear_on' => false,
    'timebf' => 2592000,
    'level' => 
    array (
    ),
  ),
  'web_log' => 
  array (
    'weblog_on' => false,
    'not_log_module' => 
    array (
      0 => 'install',
    ),
    'not_log_controller' => 
    array (
      0 => 'home/Error',
      1 => 'home/Token',
      2 => 'admin/Ajax',
      3 => 'admin/Error',
      4 => 'admin/Ueditor',
      5 => 'admin/WebLog',
    ),
    'not_log_action' => 
    array (
    ),
    'not_log_data' => 
    array (
    ),
    'not_log_request_method' => 
    array (
      0 => 'GET',
    ),
  ),
  'url_route_mode' => '2',
  'think_sdk_facebook' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
  'payment' => 
  array (
    'alipay' => 
    array (
      'account' => '',
      'account_name' => '',
      'partner' => '',
      'md5_key' => '',
      'rsa_private_key' => '/data/config/rsa_private_key.pem',
      'notify_url' => 'http://www.rainfer.cn/home/payment/ali_notify_url',
      'return_url' => 'http://www.rainfer.cn/home/payment/success',
      'time_expire' => '14',
      'sign_type' => 'MD5',
      'display' => '1',
    ),
    'aliwappay' => 
    array (
      'account' => '',
      'account_name' => '',
      'partner' => '',
      'md5_key' => '',
      'rsa_private_key' => '/data/config/rsa_private_key.pem',
      'notify_url' => 'http://www.rainfer.cn/home/payment/ali_notify_url',
      'return_url' => 'http://www.rainfer.cn/home/payment/success',
      'time_expire' => '14',
      'sign_type' => 'MD5',
      'display' => '1',
    ),
    'wxpayqrcode' => 
    array (
      'app_id' => '',
      'md5_key' => '',
      'mch_id' => '',
      'notify_url' => 'http://www.rainfer.cn/home/payment/wxqrcode_notify_url',
      'time_expire' => '14',
      'cert_path' => 'F:\\phpStudy\\WWW\\yfcms_dev\\YFCMF\\data\\conf\\wx\\apiclient_cert.pem',
      'key_path' => 'F:\\phpStudy\\WWW\\yfcms_dev\\YFCMF\\data\\conf\\wx\\apiclient_key.pem',
      'display' => '1',
    ),
    'wxpaypub' => 
    array (
      'app_id' => 'wxxxxx',
      'md5_key' => 'xxxxxx',
      'mch_id' => 'xxxxx',
      'notify_url' => 'http://www.rainfer.cn/home/payment/wxpub_notify_url',
      'cert_path' => 'F:\\phpStudy\\WWW\\yfcms_dev\\YFCMF\\data\\conf\\wx\\apiclient_cert.pem',
      'key_path' => 'F:\\phpStudy\\WWW\\yfcms_dev\\YFCMF\\data\\conf\\wx\\apiclient_key.pem',
    ),
    'wxqrcode' => 
    array (
      'time_expire' => '14',
    ),
    'tenpay' => 
    array (
      'key' => '',
      'partner' => '',
    ),
    'unionpay' => 
    array (
      'key' => '',
      'partner' => '',
    ),
    'palpay' => 
    array (
      'business' => '',
    ),
  ),
  'think_sdk_weixin' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
  'think_sdk_wechat' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
  'think_sdk_google' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
  'we_options' => 
  array (
    'we_name' => '静心一分钟',
    'we_id' => 'gh_54b677cf9825',
    'we_number' => 'tenger35',
    'app_id' => 'adminwx73b39f49d9c056ee',
    'secret' => 'e32fc94b0b04e470306702c62c2ef767',
    'token' => '3lcZJvp8bv6wC',
    'aes_key' => 'GhFRSS76JNQnx9hGCNbUR9qhGW8eyNCJpX7cWE1Wwo6',
    'we_type' => '1',
  ),
  'addons_sql' => true,
);
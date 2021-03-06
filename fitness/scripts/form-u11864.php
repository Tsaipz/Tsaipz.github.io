<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.1.0.379
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Fitness表單 送出',
	'heading' => '新的表單送出',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => '已核取',
		'checkbox_unchecked' => '取消選取',
		'submitted_from' => '表單由此網站送出: %s',
		'submitted_by' => '訪客 IP 位址: %s',
		'too_many_submissions' => '此 IP 最近有太多送出記錄',
		'failed_to_send_email' => '傳送電子郵件失敗',
		'invalid_reCAPTCHA_private_key' => '無效的 reCAPTCHA 私密金鑰。',
		'invalid_reCAPTCHA2_private_key' => '無效的 reCAPTCHA 2.0 私密金鑰。',
		'invalid_reCAPTCHA2_server_response' => '無效的 reCAPTCHA 2.0 伺服器回應。',
		'invalid_field_type' => '不明的欄位類型「%s」。',
		'invalid_form_config' => '「%s」欄位有無效的設定。',
		'unknown_method' => '不明的伺服器要求方式'
	),
	'email' => array(
		'from' => 'painter@adobe.com',
		'to' => 'painter@adobe.com'
	),
	'fields' => array(
		'custom_U11897' => array(
			'order' => 4,
			'type' => 'string',
			'label' => '電話：',
			'required' => false,
			'errors' => array(
			)
		),
		'Email' => array(
			'order' => 3,
			'type' => 'email',
			'label' => '電郵：',
			'required' => false,
			'errors' => array(
				'format' => '「電郵：」欄位有無效的電子郵件。'
			)
		),
		'custom_U11865' => array(
			'order' => 2,
			'type' => 'string',
			'label' => '姓名：',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U11888' => array(
			'order' => 5,
			'type' => 'string',
			'label' => '地址：',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U11884' => array(
			'order' => 6,
			'type' => 'string',
			'label' => '訊息',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U11872' => array(
			'order' => 1,
			'type' => 'radiogroup',
			'label' => '個人教練課程',
			'required' => true,
			'optionItems' => array(
				'個人教練課程',
				'團體訓練課程'
			),
			'errors' => array(
				'required' => '欄位「個人教練課程」為必填。',
				'format' => '「個人教練課程」欄位有無效的值。'
			)
		)
	)
);

process_form($form);
?>

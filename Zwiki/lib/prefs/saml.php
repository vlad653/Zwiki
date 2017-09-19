<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.

function prefs_saml_list()
{
	return array(
		'saml_idp_entityid' => array(
			'name' => tra('IdP Entity Id'),
			'description' => tra('Identifier of the IdP entity. ("Issuer")'),
			'type' => 'text',
			'size' => 50,
			'perspective' => false,
			'default' => '',
		),
		'saml_idp_sso' => array(
			'name' => tra('Single Sign On Service Url'),
			'description' => tra('SSO endpoint info of the IdP. URL target of the IdP where the SP will send the Authentication Request. ("SAML 2.0 Endpoint (HTTP)")'),			
			'type' => 'text',
			'size' => 50,
			'perspective' => false,
			'default' => '',
		),
		'saml_idp_slo' => array(
			'name' => tra('Single Log Out Service Url'),
			'description' => tra('SLO endpoint info of the IdP. URL target of the IdP where the SP will send the SLO Request. ("SLO Endpoint (HTTP)")'),
			'type' => 'text',
			'size' => 50,
			'perspective' => false,
			'default' => '',
		),
		'saml_idp_x509cert' => array(
			'name' => tra('X.509 Certificate'),
			'description' => tra('Public x509 certificate of the IdP.  ("X.509 certificate")'),
			'type' => 'textarea',
			'perspective' => false,
			'default' => '',
		),
		'saml_options_autocreate' => array(
			'name' => tra('Create user if not in Tiki'),
			'description' => tra('Auto-provisioning. If user not exists, Tiki will create a new user with the data provided by the IdP.<br>Review the Mapping section.'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_options_sync_group' => array(
			'name' => tra('Sync user group with IdP data'),
			'description' => tra('Enable it in order to sync groups with the IdP.'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_options_slo' => array(
			'name' => tra('Enable Single Logout Service'),
			'description' => tra('When enable, the "logout" function will log out you from Tiki Wiki, identity provider and all conected service providers'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_options_skip_admin' => array(
			'name' => tra('Use Tiki authentication for Admin login'),
			'description' => tra('Let the admin to authenticate using the traditional login'), 
			'type' => 'flag',
			'perspective' => false,
			'default' => 'y',
		),
		'saml_option_default_group' => array(
			'name' => tra('Default group'),
			'description' => tra('When provisioning a new user and not group found, assign that group'),
			'type' => 'text',
			'size' => 20,
			'perspective' => false,
			'default' => 'Registered',
		),
		'saml_option_account_matcher' => array(
			'name' => tra('Account matcher'),
			'description' => tra('Select what field will be used in order to find the user account. If you select the "email" fieldname take in mind that you should prevent that user changes its mail otherwise it will lose the link with the IdP account.'),
			'type' => 'list',
			'perspective' => false,
			'options' => array (
				'username' => tra('Username'),
				'email' => tra('E-mail'),
			),
			'default' => 'email',
		),
		'saml_option_login_link_text' => array(
			'name' => tra('Login link text'),
			'description' => tra('The text that appears at the login page'),
			'type' => 'text',
			'perspective' => false,			
			'default' => 'Log in through SAML2 IdP',
		),
		'saml_attrmap_username' => array(
			'name' => tra('SAML attribute that will be mapped to the Tiki username'),
			'description' => tra('The SAML attribute that will be mapped to the Tiki username.'),
			'type' => 'text',
			'size' => 25,
			'perspective' => false,
			'default' => '',
		),
		'saml_attrmap_mail' => array(
			'name' => tra('SAML attribute that will be mapped to the Tiki email'),
			'description' => tra('The SAML attribute that will be mapped to the Tiki email.'),
			'type' => 'text',
			'size' => 25,
			'perspective' => false,
			'default' => '',
		),
		'saml_attrmap_group' => array(
			'name' => tra('SAML attribute that will be mapped to the Tiki group'),
			'description' => tra('The SAML attribute that will be mapped to the Tiki email. For example the eduPersonAffiliation'),
			'type' => 'text',
			'size' => 25,
			'perspective' => false,
			'default' => '',
		),
		'saml_groupmap_admins' => array(
			'name' => tra('Admins'),
			'description' => tra('Set here the values of the IdP related to the user group info that will be matched with the Admins group'),
			'type' => 'text',
			'size' => 25,
			'perspective' => false,
			'default' => '',
		),
		'saml_groupmap_registered' => array(
			'name' => tra('Registered'),
			'description' => tra('Set here the values of the IdP related to the user group info that will be matched with the Registered group'),
			'type' => 'text',
			'size' => 25,
			'perspective' => false,
			'default' => '',
		),
		'saml_advanced_debug' => array(
			'name' => tra('Debug Mode'),
			'description' => tra('Enable it when your are debugging the SAML workflow. Errors and Warnigs will be showed.'),
			'type' => 'flag',
			'perspective' => false,
			'default' => '',
		),
		'saml_advanced_strict' => array(
			'name' => tra('Strict Mode'),
			'description' => tra('Enable it always on production environments!. If Strict mode is Enabled, then Tiki will reject unsigned or unencrypted messages if it expects them signed or encrypted.
			   Also will reject the messages if not strictly follow the SAML standard: Destination, NameId, Conditions ... are validated too.'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_sp_entity_id' => array(
			'name' => tra('Service Provider Entity Id'),
			'description' => tra('Set the Entity ID for the Service Provider. We recommend to set as SP EntityID the URL where its metadata is published, If not provided, toolkit will use "php-saml" as SP entityID'),
			'type' => 'text',
			'perspective' => false,
			'default' => '',
		),
		'saml_advanced_nameidformat' => array(
			'name' => tra('Requested NameIDFormat'),
			'description' => tra('Specifies constraints on the name identifier to be used to represent the requested subject.'),
			'type' => 'list',
			'perspective' => false,
			'options' => array(
				'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified' => tra('urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified'),
				'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress' => tra('urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress'),
				'urn:oasis:names:tc:SAML:1.1:nameid-format:X509SubjectName' => tra('urn:oasis:names:tc:SAML:1.1:nameid-format:X509SubjectName'),
				'urn:oasis:names:tc:SAML:2.0:nameid-format:entity' => tra('urn:oasis:names:tc:SAML:2.0:nameid-format:entity'),
				'urn:oasis:names:tc:SAML:2.0:nameid-format:transient' => tra('urn:oasis:names:tc:SAML:2.0:nameid-format:transient'),
				'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent' => tra('urn:oasis:names:tc:SAML:2.0:nameid-format:persistent'),
				'urn:oasis:names:tc:SAML:2.0:nameid-format:encrypted' => tra('urn:oasis:names:tc:SAML:2.0:nameid-format:encrypted'),
				'urn:oasis:names:tc:SAML:2.0:nameid-format:kerberos' => tra('urn:oasis:names:tc:SAML:2.0:nameid-format:kerberos'),
			),
			'default' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
		),
		'saml_advanced_requestedauthncontext' => array(
			'name' => tra('Requested AuthnContext'),
			'description' => tra('Authentication context. Unselect all to accept any type, otherwise select the valid contexts'),
			'type' => 'list',
			'perspective' => false,
			'options' => array(
				'urn:oasis:names:tc:SAML:2.0:ac:classes:unspecified' => tra('urn:oasis:names:tc:SAML:2.0:ac:classes:unspecified'),
				'urn:oasis:names:tc:SAML:2.0:ac:classes:Password' => tra('urn:oasis:names:tc:SAML:2.0:ac:classes:Password'),
				'urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport' => tra('urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport'),
				'urn:oasis:names:tc:SAML:2.0:ac:classes:X509' => tra('urn:oasis:names:tc:SAML:2.0:ac:classes:X509'),
				'urn:oasis:names:tc:SAML:2.0:ac:classes:Smartcard' => tra('urn:oasis:names:tc:SAML:2.0:ac:classes:Smartcard'),
				'urn:oasis:names:tc:SAML:2.0:ac:classes:Kerberos' => tra('urn:oasis:names:tc:SAML:2.0:ac:classes:Kerberos'),
				'urn:federation:authentication:windows' => tra('urn:federation:authentication:windows'),
			),
			'default' => 'urn:oasis:names:tc:SAML:2.0:ac:classes:unspecified',
		),
		'saml_advanced_idp_lowercase_url_encoding' => array(
			'name' => tra('Enable Lowercase URL encoding'),
			'description' => tra('Some IdPs like ADFS can use lowercase URL encoding, but the plugin expects uppercase URL enconding, enable it to fix incompatibility issues.'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_nameid_encrypted' => array(
			'name' => tra('Encrypt nameID'),
			'description' => tra(''),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_authn_request_signed' => array(
			'name' => tra('Sign AuthnRequest'),
			'description' => tra('The samlp:AuthnRequest messages sent by this SP will be signed'), 
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_logout_request_signed' => array(
			'name' => tra('Sign LogoutRequest'),
			'description' => tra('The samlp:logoutRequest messages sent by this SP will be signed'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_logout_response_signed' => array(
			'name' => tra('Sign LogoutResponse'),
			'description' => tra('The samlp:logoutResponse messages sent by this SP will be signed'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_metadata_signed' => array(
			'name' => tra('Sign Metadata'),
			'description' => tra('The Metadata published by this SP will be signed'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_want_message_signed' => array(
			'name' => tra('Reject Unsigned Messages'),
			'description' => tra('Reject unsigned samlp:Response, samlp:LogoutRequest and samlp:LogoutResponse received'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_want_assertion_signed' => array(
			'name' => tra('Reject Unsigned Assertions'),
			'description' => tra('Reject unsigned saml:Assertion received'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_want_assertion_encrypted' => array(
			'name' => tra('Reject Unencrypted Assertions'),
			'description' => tra('Reject unencrypted saml:Assertion received'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_retrieve_parameters_from_server' => array(
			'name' => tra('Retrieve Parameters From Server'),
			'description' => tra('Sometimes when the app is behind a firewall or proxy, the query parameters can be modified an this affects the signature validation process on HTTP-Redirect binding. Active this when you noticed signature validation failures, the plugin will try to extract the original query parameters.'),
			'type' => 'flag',
			'perspective' => false,
			'default' => false,
		),
		'saml_advanced_sp_x509cert' => array(
			'name' => tra('Service Provider X.509 Certificate'),
			'description' => tra('Public x509 certificate of the SP.'),
			'type' => 'textarea',
			'perspective' => false,
			'default' => '',
		),
		'saml_advanced_sp_privatekey' => array(
			'name' => tra('Service Provider Private Key'),
			'description' => tra('Private Key of the SP.'),
			'type' => 'textarea',
			'perspective' => false,
			'default' => '',
		),
		'saml_advanced_sign_algorithm' => array(
			'name' => tra('Signature Algorithm'),
			'description' => tra('Algorithm that the toolkit will use on signing process.'),
			'type' => 'list',
			'perspective' => false,
			'options' => array (
				'http://www.w3.org/2000/09/xmldsig#rsa-sha1' => tra('http://www.w3.org/2000/09/xmldsig#rsa-sha1'),
				'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256' => tra('http://www.w3.org/2001/04/xmldsig-more#rsa-sha256'),
				'http://www.w3.org/2001/04/xmldsig-more#rsa-sha384' => tra('http://www.w3.org/2001/04/xmldsig-more#rsa-sha384'),
				'http://www.w3.org/2001/04/xmldsig-more#rsa-sha512' => tra('http://www.w3.org/2001/04/xmldsig-more#rsa-sha512'),
				'http://www.w3.org/2000/09/xmldsig#dsa-sha1' => tra('http://www.w3.org/2000/09/xmldsig#dsa-sha1'),
			),
			'default' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
		),
	);	
}
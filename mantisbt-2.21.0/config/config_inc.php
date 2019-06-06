<?php
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'bugtracker';
$g_db_username            = 'root';
$g_db_password            = 'root';

$g_default_timezone       = 'America/Belem';

$g_crypto_master_salt     = 'rNkdbc+mIHsxv80hTFIbe80AfKrkeyN5g0tvZX/34XQ=';


$g_login_method = LDAP;

$g_ldap_server = 'ldap://172.16.107.3:389';


$g_ldap_root_dn = 'OU=SUDAM,DC=SUDAM,DC=intra';
$g_ldap_uid_field = 'sAMAccountName';        
$g_ldap_bind_dn = 'cti@sudam.intra'; 
$g_ldap_bind_passwd = 'cgti*426'; 
$g_ldap_protocol_version = 3;
$g_use_ldap_email= OFF;
$g_validate_email= OFF;
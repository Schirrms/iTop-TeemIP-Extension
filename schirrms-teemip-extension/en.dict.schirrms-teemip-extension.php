<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2021 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: lnkGenericCommInterfaceToIPAddress
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkGenericCommInterfaceToIPAddress' => 'Link Comm Interface/ IP Address',
	'Class:lnkGenericCommInterfaceToIPAddress+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id_finalclass_recall' => 'Comm Type',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id_finalclass_recall+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_id' => 'Comm Interface',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_id+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_name' => 'Comm Interface Name',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_name+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id' => 'IP Address',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:usage_id' => 'IP Address usage',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:usage_id+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_org_name' => 'IP Address organization name',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_org_name+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_id_finalclass_recall' => 'Interface type',
));


//
// Class: lnkGenericCommInterfaceToVLAN
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkGenericCommInterfaceToVLAN' => 'Communication Interfaces / VLAN Link',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_id' => 'Interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_name' => 'Interface name',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_device_id' => 'Device owning this interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_device_name' => 'Name of the device owning this interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_friendly_name' => 'Interface friendly name',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_id_final_class' => 'Interface type',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_device_id_final_class' => 'Device Type',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_id' => 'VLAN',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_id+' => '',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_tag' => 'VLAN Tag',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_tag+' => '',
));

//
// Class : GenericCommDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:GenericCommDevice/Tab:ipaddresses_list' => 'Interfaces\' IPs',
	'Class:GenericCommDevice/Tab:ipaddresses_list+' => 'List of all IP addresses hosted by all IP interfaces attached to the CI',
));

//
// Class : GenericCommInterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:GenericCommInterface/Attribute:ip_list' =>'IP address', 
	'Class:GenericCommInterface/Attribute:vlans_list' => 'VLANs',
	'Class:GenericCommInterface/Attribute:vlans_list+' => '',
	'Class:GenericCommInterface/Attribute:vrfs_list' => 'VRFs',
	'Class:GenericCommInterface/Attribute:vrfs_list+' => '',
));

//
// Class : VLAN
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VLAN/Attribute:genericcomminterfaces_list' =>'Communication interfaces', 
));

?>

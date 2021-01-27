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

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkGenericCommInterfaceToIPAddress' => 'Lien Interface de Communication / Adresse IP',
	'Class:lnkGenericCommInterfaceToIPAddress+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id_finalclass_recall' => 'Type d\'IP',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id_finalclass_recall+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_id' => 'Interface de Communication',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_id+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_name' => 'Nom Interface de Comm',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_name+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id' => 'Adresse IP',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_id+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:usage_id' => 'Utilisation de l\'adresse IP',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:usage_id+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_org_name' => 'Nom de l\'organisation de l\'adresse IP',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipaddress_org_name+' => '',
	'Class:lnkGenericCommInterfaceToIPAddress/Attribute:ipinterface_id_finalclass_recall' => 'Type de l\'interface',
));

//
// Class: lnkGenericCommInterfaceToVLAN
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkGenericCommInterfaceToVLAN' => 'Lien Interface de Communication / VLAN',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_id' => 'Interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_name' => 'Nom de l\'interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_device_id' => 'Equipement contenant l\'interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_device_name' => 'Nom de l\'équipement contenant l\'interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_friendly_name' => 'Nom générique de l\'interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_id_finalclass_recall' => 'Type d\'interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:genericcomminterface_device_id_final_class' => 'Type de l\'équipement contenant l\'interface',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_id' => 'VLAN',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_id+' => '',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_tag' => 'VLAN Tag',
	'Class:lnkGenericCommInterfaceToVLAN/Attribute:vlan_tag+' => '',
));

//
// Class : GenericCommInterface
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:GenericCommInterface/Attribute:ip_list' =>'Adresses IP', 
	'Class:GenericCommVirtInterface/Attribute:vlans_list' => 'VLANs',
	'Class:GenericCommVirtInterface/Attribute:vlans_list+' => '',
	'Class:GenericCommVirtInterface/Attribute:vrfs_list' => 'VRFs',
	'Class:GenericCommVirtInterface/Attribute:vrfs_list+' => '',
));

//
// Class : VLAN
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:VLAN/Attribute:genericcomminterfaces_list' =>'Interfaces de communication', 
));
?>

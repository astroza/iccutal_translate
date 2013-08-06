<?php
	$spanish = array(
		'friend_request' => "Solicitud de amistad",
		'friend_request:menu' => "Solicitudes de amistad",
		'friend_request:title' => "Solicitudes de amistad para: %s",
	
		'friend_request:new' => "Nueva solicitud de amistad",
		
		'friend_request:friend:add:pending' => "Solicitud de amistad enviada",
		
		'friend_request:newfriend:subject' => "%s quiere ser tu amigo!",
		'friend_request:newfriend:body' => "%s quiere ser tu amigo!

Accede ahora y acepta su solicitud de amistad.

Puedes ver tus solicitudes de amistad pendientes en:
%s

(Por favor no responda a este e mail.)",
		
		// Actions
		// Add request
		'friend_request:add:failure' => "Lo sentimos, debido a un error del sistema no se pudo completar tu solicitud. Por favor, inténtelo otra vez.",
		'friend_request:add:successful' => "Ya enviaste una solicitud de amistad a %s. Antes de aparecer en su lista de amigos, el debe aceptar tu solicitud.",
		'friend_request:add:exists' => "Ya enviaste una solicitud de amistad a %s.",
		
		// Approve request
		'friend_request:approve' => "Aceptar",
		'friend_request:approve:successful' => "%s es ahora tu amigo",
		'friend_request:approve:fail' => "Error al aceptar la solicitud de amistad de %s, Por favor, inténtelo otra vez.",
	
		// Decline request
		'friend_request:decline' => "Rechazar",
		'friend_request:decline:subject' => "%s ha rechazado tu solicitud de amistad",
		'friend_request:decline:message' => "%s,

%s a rechazado tu solicitud de amistad.",

		'friend_request:decline:success' => "Solicitud de amistad rechazada",
		'friend_request:decline:fail' => "Error al rechazar la solicitud de amistad, Por favor, inténtelo otra vez.",
		
		// Revoke request
		'friend_request:revoke' => "Cancelar",
		'friend_request:revoke:success' => "Solicitud de amistad cancelada",
		'friend_request:revoke:fail' => "Error al cancelar la solicitud de amistad, Por favor, inténtelo otra vez",
	
		// Views
		// Received
		'friend_request:received:title' => "Solicitudes de amistad recividas",
		'friend_request:received:none' => "No hay solicitudes pendientes",
	
		// Sent
		'friend_request:sent:title' => "Solicitudes de amistad enviadas",
		'friend_request:sent:none' => "No hay solicitudes pendientes",
	);
					
	add_translation("es", $spanish);

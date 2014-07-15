$(function(){
	/**
	 * esoTalk doesn't have a trigger for when updating or creating a post meaning grouping of images won't work
	 * with live clicks
	 **/

	// add rel to each attachments group
	/*var groupId = 0;
	$('#conversationPosts .post').each(function(){
		$(this).find('a.attachment-image').attr('rel', 'attachment-group-' + groupId);

		++groupId;
	});*/

	// open up colorbox
	$('#conversationBody').on('click', 'a.attachment.attachment-image', function(){
		$(this).colorbox(ET.AttachmentsLightboxConfig);
	});
});
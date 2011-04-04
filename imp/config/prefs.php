<?php
/**
 * See horde/config/prefs.php for documentation on the structure of this file.
 *
 * IMPORTANT: Local overrides MUST be placed in prefs.local.php, or
 * prefs-servername.php if the 'vhosts' setting has been enabled in Horde's
 * configuration.
 */

// *** Personal Information Preferences ***

$prefGroups['identities'] = array(
    'column' => _("General"),
    'label' => _("Personal Information"),
    'desc' => _("Change the name, address, and signature that people see when they read and reply to your email."),
    'members' => array(
        'replyto_addr', 'alias_addr', 'tieto_addr', 'bcc_addr', 'signature',
        'sig_dashes', 'signature_html_select', 'sig_first', 'save_sent_mail',
        'sent_mail_folder', 'sentmailselect'
    ),
    'type' => 'identities'
);

// user preferred email address for Reply-To:, if different from From:
$_prefs['replyto_addr'] = array(
    'value' => '',
    'type' => 'text',
    'desc' => _("Your Reply-to: address: <em>(optional)</em>")
);

// user preferred alias addresses
$_prefs['alias_addr'] = array(
    'value' => '',
    'type' => 'textarea',
    'desc' => _("Your alias addresses: <em>(optional, enter each address on a new line)</em>")
);

// user preferred 'tie to' addresses
$_prefs['tieto_addr'] = array(
    'value' => '',
    'type' => 'textarea',
    'desc' => _("Addresses to explicitly tie to this identity: <em>(optional, enter each address on a new line)</em>")
);

// Automatically Bcc addresses when composing
$_prefs['bcc_addr'] = array(
    'value' => '',
    'type' => 'textarea',
    'desc' => _("Addresses to BCC all messages: <em>(optional, enter each address on a new line)</em>")
);

// user signature
$_prefs['signature'] = array(
    'value' => '',
    'type' => 'textarea',
    'desc' => _("Your signature:")
);

// precede the text signature with dashes ('-- ')?
$_prefs['sig_dashes'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Precede your text signature with dashes ('-- ')?")
);

// User's HTML signature - UI widget
$_prefs['signature_html_select'] = array(
    'type' => 'special'
);

// User's HTML signature
$_prefs['signature_html'] = array(
    'value' => ''
);

// signature before replies and forwards?
$_prefs['sig_first'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Place your signature before replies and forwards?")
);

// save a copy of sent messages?
$_prefs['save_sent_mail'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Save sent mail?")
);

// sent mail folder
$_prefs['sent_mail_folder'] = array(
    // NOTE: Localization of this name for display purposes is done
    // automatically. This entry only needs to be changed if the mailbox name
    // on the IMAP server is different than this value.
    // If the mailbox value contains non-ASCII characters, it must be encoded
    // in the UTF7-IMAP charset (RFC 3501 [5.1.3]). This convertCharset() call
    // will do the necessary conversion.
    'value' => Horde_String::convertCharset('Sent', 'UTF-8', 'UTF7-IMAP')
    // Exchange servers use this default value instead.
    // 'value' => 'Sent Items'
);

// sent mail folder selection widget.
$_prefs['sentmailselect'] = array(
    'type' => 'special'
);



// *** ACL Preferences ***

$prefGroups['acl'] = array(
    'column' => _("General"),
    'label' => _("Share Folders"),
    'desc' => _("Share your mail folders with other users."),
    'members' => array('aclmanagement')
);

// ACL preference management screen
$_prefs['aclmanagement'] = array(
    'type' => 'special'
);

// folder sharing preferences
$_prefs['acl'] = array(
    // set 'locked' => true to disable folder sharing
    'value' => ''
);



// *** Saved Searches Preferences ***

$prefGroups['searches'] = array(
    'column' => _("General"),
    'label' => _("Saved Searches"),
    'desc' => _("Manage your saved searches"),
    'members' => array(
        'searchesmanagement'
    )
);

// UI for saved searches management.
$_prefs['searchesmanagement'] = array(
    'type' => 'special'
);

$_prefs['vfolder'] = array(
    // By default, Virtual Inbox is enabled and Virtual Trash is disabled.
    // 'value' => serialize(array())
    'value' => 'a:0:{}'
);

$_prefs['filter'] = array(
    // By default, all filters are enabled.
    // 'value' => serialize(array())
    'value' => 'a:0:{}'
);



// *** Compose Preferences ***

$prefGroups['compose'] = array(
    'column' => _("Compose"),
    'label' => _("Message Composition"),
    'desc' => _("Configure how you send mail."),
    'members' => array(
        'mailto_handler', 'compose_cc', 'compose_bcc', 'compose_spellcheck',
        'set_priority', 'compose_html', 'compose_html_font_family',
        'compose_html_font_size', 'mail_domain',
        'compose_cursor', 'encryptselect', 'save_attachments',
        'delete_attachments_monthly_keep', 'request_mdn'
    )
);

// Link to add a Firefox 3 mailto: handler
$_prefs['mailto_handler'] = array(
    'type' => 'special'
);

// Show Cc: field?
$_prefs['compose_cc'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Show the Cc: header field when composing mail?")
);

// Show Bcc: field?
$_prefs['compose_bcc'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Show the Bcc: header field when composing mail?")
);

// Check spelling before sending the message?
$_prefs['compose_spellcheck'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Check spelling before sending a message?")
);

// allow the user to add a priority header when composing messages?
$_prefs['set_priority'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Set a priority header when composing messages?")
);

// If browser supports the HTML editor, should we compose in HTML mode by
// default?
$_prefs['compose_html'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Compose messages with an HTML editor by default?")
);

// For the HTML editor, this is the default font family.
// This needs to be in CSS-parseable format.
$_prefs['compose_html_font_family'] = array(
    'value' => 'Arial',
    'advanced' => true,
    'locked' => true,
    'type' => 'string',
    'desc' => _("The default font family to use in the HTML editor.")
);

// For the HTML editor, this is the default font size.
$_prefs['compose_html_font_size'] = array(
    'value' => 14,
    'advanced' => true,
    'locked' => true,
    'type' => 'number',
    'desc' => _("The default font size to use in the HTML editor (in pixels).")
);

// default outgoing mail domain and address completion
$_prefs['mail_domain'] = array(
    'value' => '',
    'type' => 'text',
    'desc' => _("When sending mail or expanding addresses, what domain should we append to unqualified addresses (email addresses without \"@\")?")
);

// Where should the cursor be located in the compose text area by default?
$_prefs['compose_cursor'] = array(
    'value' => 'top',
    'type' => 'enum',
    'enum' => array(
        'top' => _("Top"),
        'bottom' => _("Bottom"),
        'sig' => _("Before Signature")
    ),
    'desc' => _("Where should the cursor be located in the compose text area by default?")
);

// Select widget for the 'default_encrypt' preference
$_prefs['encryptselect'] = array(
    'type' => 'special'
);

// The default encryption method to use when sending messages
$_prefs['default_encrypt'] = array(
    'value' => IMP::ENCRYPT_NONE
);

// Save attachments when saving in sent mail folder?
$_prefs['save_attachments'] = array(
    'value' => 'prompt_no',
    'type' => 'enum',
    'enum' => array(
        'always' => _("Always save attachments"),
        'prompt_yes' => _("Prompt every time an attachment is sent; default to YES"),
        'prompt_no' => _("Prompt every time an attachment is sent; default to NO"),
        'never' => _("Never save attachments")
    ),
    'desc' => _("When saving sent mail, should we save attachment data?"),
    'help' => 'prefs-save_attachments'
);

// how many old months of linked attachments to keep?
$_prefs['delete_attachments_monthly_keep'] = array(
    'value' => 6,
    'advanced' => true,
    'type' => 'number',
    'desc' => _("Delete old linked attachments after this many months (0 to never delete)?"),
    'help' => 'prefs-delete_attachments_monthly_keep'
);


// Disposition Notification Preferences
$_prefs['request_mdn'] = array(
    'value' => 'ask',
    'type' => 'enum',
    'enum' => array(
        'never' => _("Never"),
        'ask' => _("Ask"),
        'always' => _("Always")
    ),
    'desc' => _("Request read receipts?"),
    'help' => 'prefs-request_mdn'
);

// The list of buttons to show in CKeditor
// See http://docs.cksource.com/CKEditor_3.x/Developers_Guide/Toolbar for
// details on configuration
$_prefs['ckeditor_buttons'] = array(
    'value' => "[['Source','Maximize','-','Templates'],['Cut','Copy','Paste','PasteText','PasteFromWord'],['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],'/',['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Link','Unlink'],['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar'],'/',['Styles','Format','Font','FontSize'],['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],['TextColor','BGColor']]",
    // Use the following line for a very basic set of buttons:
    // 'value' => "['Bold','Italic','-','NumberedList','BulletedList','-','Link','Unlink']",
);



// *** Stationery Preferences ***

$prefGroups['stationery'] = array(
    'column' => _("Compose"),
    'label' => _("Stationery"),
    'desc' => _("Edit stationery and form responses."),
    'members' => array('stationerymanagement')
);

// Stationery configuration widget
$_prefs['stationerymanagement'] = array(
    'type' => 'special'
);

// Internal stationery storage value
$_prefs['stationery'] = array(
    // value = serialize(array())
    'value' => 'a:0:{}'
);



// *** Compose Reply Preferences ***

$prefGroups['reply'] = array(
    'column' => _("Compose"),
    'label' => _("Message Replies"),
    'desc' => _("Configure how you reply to mail."),
    'members' => array(
        'reply_quote', 'reply_format', 'reply_headers', 'attrib_text'
    )
);

// Should the original message be included?
$_prefs['reply_quote'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Include original message in a reply?")
);

// When replying to a message, should we use the same format as the
// original message?
$_prefs['reply_format'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("When replying to a message, should we use the same format as the original message?")
);

// Reply to header summary - leave a brief summary of the header inside
// the message.
$_prefs['reply_headers'] = array(
    'desc' => _("Include a brief summary of the header in a reply?"),
    'value' => 0,
    'type' => 'checkbox'
);

// How should we attribute quoted lines in a reply
$_prefs['attrib_text'] = array(
    'value' => _("Quoting %f:"),
    'type' => 'text',
    'desc' => _("How to attribute quoted lines in a reply"),
    'help' => 'prefs-attrib_text'
);



// *** Compose Forward Preferences ***

$prefGroups['forward'] = array(
    'column' => _("Compose"),
    'label' => _("Message Forwards"),
    'desc' => _("Configure how you forward mail."),
    'members' => array('forward_default', 'forward_format')
);

// Should the body text of the original message be included?
// If this preference is locked, the user will not be able to select the
// forward method.
$_prefs['forward_default'] = array(
    'value' => 'attach',
    'advanced' => true,
    'type' => 'enum',
    'enum' => array(
        'attach' => _("As attachment"),
        'body' => _("In the body text"),
        'both' => _("As both body text and an attachment")
    ),
    'desc' => _("How should messages be forwarded by default?")
);

// When forwarding a message, should we use the same format as the
// original message (for the body text)?
$_prefs['forward_format'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("When forwarding a message in the body text, should we use the same format as the original message?")
);



// *** Message Drafts Preferences ***

$prefGroups['drafts'] = array(
    'column' => _("Compose"),
    'label' => _("Message Drafts"),
    'desc' => _("Manage message drafts."),
    'members' => array(
        'draftsselect', 'close_draft', 'unseen_drafts', 'auto_save_drafts'
    )
);

// drafts folder selection widget.
$_prefs['draftsselect'] = array(
    'type' => 'special'
);

// drafts folder
$_prefs['drafts_folder'] = array(
    // NOTE: Localization of this name for display purposes is done
    // automatically. This entry only needs to be changed if the mailbox name
    // on the IMAP server is different than this value.
    // If the mailbox value contains non-ASCII characters, it must be encoded
    // in the UTF7-IMAP charset (RFC 3501 [5.1.3]). This convertCharset() call
    // will do the necessary conversion.
    'value' => Horde_String::convertCharset('Drafts', 'UTF-8', 'UTF7-IMAP')
);

// closing window after saving a draft?
$_prefs['close_draft'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Should the compose window be closed after saving a draft?")
);

// save drafts as seen or unseen
$_prefs['unseen_drafts'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Save drafts as unseen?")
);

// auto-save drafts? value is in minutes, 0 = don't save.
$_prefs['auto_save_drafts'] = array(
    'value' => 5,
    'advanced' => true,
    'type' => 'enum',
    'enum' => array(
        0 => _("No"),
        1 => _("Every minute"),
        5 => _("Every 5 minutes")
    ),
    'desc' => _("Save drafts automatically while composing?"),
);



// *** Sent Mail Preferences ***

$prefGroups['sentmail'] = array(
    'column' => _("Compose"),
    'label' => _("Sent Mail"),
    'desc' => _("Manage sent mail folders."),
    'members' => array(
        'rename_sentmail_monthly', 'delete_sentmail_monthly_keep',
        'purge_sentmail_interval', 'purge_sentmail_keep'
    )
);

// rename sent mail folder every month?
$_prefs['rename_sentmail_monthly'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Rename sent mail folder at beginning of month?"),
    'help' => 'prefs-rename_sentmail_monthly'
);

// how many old sent mail folders to keep every month?
$_prefs['delete_sentmail_monthly_keep'] = array(
    'value' => 0,
    'type' => 'number',
    'desc' => _("Delete old sent mail folders after this many months (0 to never delete)?"),
    'help' => 'prefs-delete_sentmail_monthly_keep'
);

// how often to purge the Sent-Mail folder?
$_prefs['purge_sentmail_interval'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array_merge(array(0 => _("Never")), Horde_LoginTasks::getLabels()),
    'desc' => _("Purge sent mail how often:"),
    'help' => 'prefs-purge_sentmail_interval'
);

// when purging sent mail folder, purge messages older than how many days?
$_prefs['purge_sentmail_keep'] = array(
    'value' => 30,
    'type' => 'number',
    'desc' => _("Purge messages in sent mail folder(s) older than this amount of days."),
    'help' => 'prefs-purge_sentmail_keep'
);



// *** Message Viewing Preferences ***

$prefGroups['viewing'] = array(
    'column' => _("Message"),
    'label' => _("Message Viewing"),
    'desc' => _("Configure how messages are displayed."),
    'members' => array(
        'filtering', 'strip_attachments', 'alternative_display',
        'image_replacement', 'image_addrbook', 'highlight_text',
        'highlight_simple_markup', 'show_quoteblocks', 'dim_signature',
        'emoticons', 'parts_display', 'mail_hdr', 'default_msg_charset',
        'send_mdn'
    )
);

// filter message content?
$_prefs['filtering'] = array(
    'value' => 0,
    'locked' => true,
    'type' => 'checkbox',
    'desc' => _("Filter message content for unwanted text (e.g. profanity)?")
);

// Should we display an icon to strip attachments?
$_prefs['strip_attachments'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Show an icon to allow stripping of attachments from messages?"));

// multipart/alternative part display choice
$_prefs['alternative_display'] = array(
    'value' => 'html',
    'advanced' => true,
    'type' => 'enum',
    'enum' => array(
        'html' => _("HTML part"),
        'text' => _("Plaintext part")
    ),
    'desc' => _("For messages with alternative representations of the text part, which part should we display?")
);

// Replace image tags in inline messages with blank images?
$_prefs['image_replacement'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Block images in messages unless they are specifically requested?"),
    'help' => 'prefs-image_replacement'
);

// By default, automatically show images in inline messages if the sender is
// in the user's addressbook?
$_prefs['image_addrbook'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Automatically show images in messages when the sender is in my address book?"),
    'help' => 'prefs-image_addrbook'
);

// should we try to mark different conversations with different colors?
$_prefs['highlight_text'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Mark different levels of quoting with different colors?")
);

// should we try to mark simple markup with html tags?
$_prefs['highlight_simple_markup'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Mark simple markup?")
);

// should we show large blocks of quoted text or hide them?
$_prefs['show_quoteblocks'] = array(
    'value' => 'thread',
    'type' => 'enum',
    'enum' => array(
        'shown' => _("Shown"),
        'thread' => _("Hidden in Thread View"),
        'list' => _("Hidden in List Messages"),
        'listthread' => _("Hidden in Thread View and List Messages"),
        'hidden' => _("Hidden")
    ),
    'desc' => _("Should large blocks of quoted text be shown or hidden by default? It can be toggled easily whichever you choose.")
);

// should we dim signatures?
$_prefs['dim_signature'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Dim signatures?")
);

// Convert textual emoticons into graphical ones?
$_prefs['emoticons'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Convert textual emoticons into graphical ones?")
);

// how do we display message parts in the summary?
$_prefs['parts_display'] = array(
    'value' => 'atc',
    'type' => 'enum',
    'enum' => array(
        'all' => _("Show all parts"),
        'atc' => _("Show all attachments"),
        'none' => _("Do not show parts")
    ),
    'desc' => _("Which message parts do you want to display in the summary?")
);

// Display custom headers (configured via the identity screen) when viewing
// messages?
$_prefs['mail_hdr'] = array(
    // Value is a list of headers to display, separated by "\n"
    // e.g.: "Message-ID\nX-Spam-Level"
    'value' => '',
    'type' => 'textarea',
    'desc' => _("Additional headers to display when viewing: <em>(enter each header on a new line)</em>")
);

// default message character set

$_prefs['default_msg_charset'] = array(
    'value' => $GLOBALS['registry']->getEmailCharset()
        ? $GLOBALS['registry']->getEmailCharset()
        : ($GLOBALS['registry']->getLanguageCharset()
            ? $GLOBALS['registry']->getLanguageCharset()
            : ''),
    'type' => 'enum',
    'enum' => array_merge(
        array('' => _("Default (US-ASCII)")), $GLOBALS['registry']->nlsconfig->encodings_sort
    ),
    'desc' => _("The default charset for messages with no charset information:"),
    'help' => 'prefs-default_msg_charset'
);

// Send read receipts?
$_prefs['send_mdn'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'enum',
    'enum' => array(
        0 => _("Never send read receipt"),
        1 => _("Always prompt"),
// This preference is not given to the user by default - it makes it too easy for
// spam messages to determine valid e-mail addresses.
//        2 => _("Prompt only if necessary; otherwise automatically send")
    ),
    'desc' => _("Prompt to send read receipt (a/k/a message disposition notification) when requested by the sender?"),
    'help' => 'prefs-send_mdn'
);



// *** Delete/Move Messages Preferences ***

$prefGroups['delmove'] = array(
    'column' => _("Message"),
    'label' => _("Deleting and Moving Messages"),
    'desc' => _("Set preferences for what happens when you move and delete messages."),
    'members' => array(
        'mailbox_return', 'use_trash', 'trashselect', 'empty_trash_menu',
        'purge_trash_interval', 'purge_trash_keep'
    )
);

// should we return to the mailbox listing after deleting a message?
$_prefs['mailbox_return'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Return to the mailbox listing after deleting, moving, or copying a message?")
);

// should we move messages to a trash folder instead of just marking
// them as deleted?
$_prefs['use_trash'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("When deleting messages, move them to your Trash folder instead of marking them as deleted?")
);

// trash folder selection widget.
$_prefs['trashselect'] = array(
    'type' => 'special'
);

// trash folder
$_prefs['trash_folder'] = array(
    // NOTE: Localization of this name for display purposes is done
    // automatically. This entry only needs to be changed if the mailbox name
    // on the IMAP server is different than this value.
    // If the mailbox value contains non-ASCII characters, it must be encoded
    // in the UTF7-IMAP charset (RFC 3501 [5.1.3]). This convertCharset() call
    // will do the necessary conversion.
    'value' => Horde_String::convertCharset('Trash', 'UTF-8', 'UTF7-IMAP')
    // Exchange servers use this default value instead.
    // 'value' => 'Deleted Items'
);

// display the 'Empty Trash' link in the menubar?
$_prefs['empty_trash_menu'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Display the \"Empty Trash\" link in the menubar?")
);

// how often to purge the Trash folder?
$_prefs['purge_trash_interval'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array_merge(array(0 => _("Never")), Horde_LoginTasks::getLabels()),
    'desc' => _("Purge Trash how often:"),
    'help' => 'prefs-purge_trash_interval'
);

// when purging Trash folder, purge messages older than how many days?
$_prefs['purge_trash_keep'] = array(
    'value' => 30,
    'type' => 'number',
    'desc' => _("Purge messages in Trash folder older than this amount of days."),
    'help' => 'prefs-purge_trash_keep'
);


// hide deleted
$_prefs['delhide'] = array(
    'value' => 0
);



// *** Spam Preferences ***

$prefGroups['spamreport'] = array(
    'column' => _("Message"),
    'label' => _("Spam Reporting"),
    'desc' => _("Configure spam reporting."),
    'members' => array(
        'spamselect', 'delete_spam_after_report', 'move_ham_after_report',
        'empty_spam_menu', 'purge_spam_interval', 'purge_spam_keep'
    )
);

// spam folder selection widget.
$_prefs['spamselect'] = array(
    'type' => 'special'
);

// spam folder
$_prefs['spam_folder'] = array(
    // NOTE: Localization of this name for display purposes is done
    // automatically. This entry only needs to be changed if the mailbox name
    // on the IMAP server is different than this value.
    // If the mailbox value contains non-ASCII characters, it must be encoded
    // in the UTF7-IMAP charset (RFC 3501 [5.1.3]). This convertCharset() call
    // will do the necessary conversion.
    'value' => Horde_String::convertCharset('Spam', 'UTF-8', 'UTF7-IMAP')
);

// What should we do with spam messages after reporting them?
$_prefs['delete_spam_after_report'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array(
        0 => _("Nothing"),
        1 => _("Delete message"),
        2 => _("Move to spam folder")
    ),
    'desc' => _("What should we do with messages after they have been reported as spam?"),
    'help' => 'prefs-delete_spam_after_report'
);

// What should we do with spam messages after reporting them as innocent?
$_prefs['move_ham_after_report'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array(
        0 => _("Nothing"),
        1 => _("Move to Inbox")
    ),
    'desc' => _("What should we do with messages after they have been reported as innocent?"),
    'help' => 'prefs-move_ham_after_report'
);

// display the 'Empty Spam' link in the menubar?
$_prefs['empty_spam_menu'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Display the \"Empty Spam\" link in the menubar?")
);

// how often to purge the Spam folder?
$_prefs['purge_spam_interval'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array_merge(array(0 => _("Never")), Horde_LoginTasks::getLabels()),
    'desc' => _("Purge Spam how often:"),
    'help' => 'prefs-purge_spam_interval'
);

// when purging Spam folder, purge messages older than how many days?
$_prefs['purge_spam_keep'] = array(
    'value' => 30,
    'type' => 'number',
    'desc' => _("Purge messages in Spam folder older than this amount of days."),
    'help' => 'prefs-purge_spam_keep'
);



// *** New Mail Notification Preferences ***

$prefGroups['newmail'] = array(
    'column' => _("Message"),
    'label' => _("New Mail"),
    'desc' => _("Control when new mail will be checked for, and whether or not to notify you when it arrives."),
    'members' => array(
        'refresh_time', 'nav_poll_all', 'newmail_notify', 'newmail_soundselect'
    )
);

// time before reloading the navigator or mailbox page
$_prefs['refresh_time'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array(
        0 => _("Never"),
        30 => _("Every 30 seconds"),
        60 => _("Every minute"),
        300 => _("Every 5 minutes"),
        900 => _("Every 15 minutes"),
        1800 => _("Every half hour")
    ),
    'desc' => _("Refresh Folder Views:"),
);

// Display notification if there is new mail?
$_prefs['newmail_notify'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Display notification when new mail arrives?"),
);

// play a sound on new mail? if so, which one?
$_prefs['newmail_audio'] = array(
    'value' => ''
);

// sound selection widget
$_prefs['newmail_soundselect'] = array(
    'type' => 'special'
);



// *** IMAP Flag Preferences ***

$prefGroups['flags'] = array(
    'column' => _("Message"),
    'label' => _("Message Flags"),
    'desc' => _("Configure flag highlighting."),
    'members' => array('flagmanagement', 'show_all_flags')
);

// UI for flag management.
$_prefs['flagmanagement'] = array(
    'type' => 'special'
);

// This array contains the list of flags created by the user through the
// flags UI, and any modifications to the built-in system flags.
$_prefs['msgflags'] = array(
    // 'value' = serialize(array())
    'value' => 'a:0:{}'
);

// Show all flags (including flags set by other mail programs)?
$_prefs['show_all_flags'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Show all flags (including flags set by other mail programs)?")
);



// *** Mailbox Display Preferences ***

$prefGroups['mboxdisplay'] = array(
    'column' => _("Other"),
    'label' => _("Mailbox Display"),
    'desc' => _("Change display preferences such as how many messages you see on each page and how messages are sorted."),
    'members' => array(
        'initialpageselect', 'mailbox_start', 'sortby', 'sortdir', 'sortdate',
        'max_msgs', 'from_link', 'atc_flag'
    )
);

// select widget for the initial_page preference
$_prefs['initialpageselect'] = array(
    'type' => 'special'
);

// The initial page to display. Either:
//   - IMP::INITIAL_FOLDERS (display folders page)
//   - mailbox name (defaults to INBOX)
$_prefs['initial_page'] = array(
    'value' => ''
);

// Where to start when opening mailbox?
$_prefs['mailbox_start'] = array(
    'value' => IMP::MAILBOX_START_FIRSTUNSEEN,
    'type' => 'enum',
    'enum' => array(
        IMP::MAILBOX_START_FIRSTUNSEEN => _("First (oldest) Unseen Message"),
        IMP::MAILBOX_START_LASTUNSEEN => _("Last (newest) Unseen Message"),
        IMP::MAILBOX_START_FIRSTPAGE => _("First Page"),
        IMP::MAILBOX_START_LASTPAGE => _("Last Page")
    ),
    'desc' => _("When opening a mailbox for the first time, where do you want to start?"),
    'help' => 'prefs-mailbox_start'
);

// default sorting column
$_prefs['sortby'] = array(
    // Sort by sequence by default. It is the fastest sort as it is the only
    // sort that can be done without parsing message headers. It sorts
    // messages by the order they arrived within the mailbox.
    'value' => Horde_Imap_Client::SORT_SEQUENCE,
    'type' => 'enum',
    'enum' => array(
        Horde_Imap_Client::SORT_SEQUENCE => _("NONE"),
        IMP::IMAP_SORT_DATE => _("Date"),
        Horde_Imap_Client::SORT_FROM => _("From Address"),
        Horde_Imap_Client::SORT_TO => _("To Address"),
        Horde_Imap_Client::SORT_SUBJECT => _("Subject"),
        Horde_Imap_Client::SORT_SIZE => _("Message Size"),
        Horde_Imap_Client::SORT_THREAD => _("Thread")
    ),
    'desc' => _("Default sorting criteria:")
);

// default sorting direction
$_prefs['sortdir'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array(
        0 => _("Ascending"),
        1 => _("Descending")
    ),
    'desc' => _("Default sorting direction:")
);

// sort prefs for individual folders
$_prefs['sortpref'] = array(
    // value = serialize(array())
    'value' => 'a:0:{}'
);

// default sorting criteria for the date column
$_prefs['sortdate'] = array(
    // Use internal IMAP date by default - this is generally the date that a
    // message was first received on the IMAP server and is maintained even
    // if the message moves between mailboxes.
    'value' => Horde_Imap_Client::SORT_ARRIVAL,
    'advanced' => true,
    'type' => 'enum',
    'enum' => array(
        Horde_Imap_Client::SORT_ARRIVAL => _("Arrival time on server"),
        Horde_Imap_Client::SORT_DATE => _("Date in message headers")
    ),
    'desc' => _("Criteria to use when sorting by date:")
);

// mailbox constraints
$_prefs['max_msgs'] = array(
    'value' => 30,
    'type' => 'number',
    'desc' => _("Messages per page in the mailbox view.")
);

// How the from field should be displayed on the mailbox screen
$_prefs['from_link'] = array(
    'value' => 1,
    'type' => 'enum',
    'enum' => array(
        0 => _("Clicking on the address will compose a new message to the sender"),
        1 => _("Clicking on the address will open the message to be read"),
        2 => _("Do not generate a link in the From: column")
    ),
    'desc' => _("The From: column of the message should be linked:")
);

// Display attachment information in mailbox list.
// Disabled by default since display requires a bit of extra overhead to
// obtain the MIME Content-Type of the base portion of the message.
$_prefs['atc_flag'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Display attachment information about a message in the mailbox listing?")
);



// *** Folder Display Preferences ***

$prefGroups['folderdisplay'] = array(
    'column' => _("Other"),
    'label' => _("Folder Display"),
    'desc' => _("Change folder navigation display preferences."),
    'members' => array(
        'subscribe', 'nav_expanded', 'tree_view', 'nav_poll_all'
    )
);

// use IMAP subscribe?
$_prefs['subscribe'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Use IMAP folder subscriptions?")
);

// expand folder tree by default
$_prefs['nav_expanded'] = array(
    'value' => 2,
    'type' => 'enum',
    'enum' => array(
        0 => _("No"),
        1 => _("Yes"),
        2 => _("Remember the last view")
    ),
    'desc' => _("Expand the entire folder tree by default in the folders view?"));

// folder tree view style
$_prefs['tree_view'] = array(
    'value' => 0,
    'type' => 'enum',
    'enum' => array(
        0 => _("Combine all namespaces"),
        1 => _("Show non-private mailboxes in separate folders")
    ),
    'desc' => _("How should namespaces be displayed in the folder tree view?")
);

// poll all folders for new mail?
$_prefs['nav_poll_all'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Poll all folders for new mail?")
);

// list of folders to expand by default
$_prefs['expanded_folders'] = array(
    // value = serialize(array())
    'value' => 'a:0:{}'
);

// list of folders to poll for new mail
$_prefs['nav_poll'] = array(
    'value' => ''
);



// *** Filter Preferences ***

$prefGroups['filters'] = array(
    'column' => _("Other"),
    'label' => _("Filters"),
    'desc' => _("Create filtering rules to organize your incoming mail, sort it into folders, and delete spam."),
    'members' => array(
        'filters_link', 'filters_blacklist_link', 'filters_whitelist_link',
        'filter_on_login', 'filter_on_display', 'filter_any_mailbox',
        'filter_menuitem'
    )
);

$_prefs['filters_link'] = array(
    'type' => 'link',
    'url' => $GLOBALS['registry']->hasMethod('mail/showFilters') ? $GLOBALS['registry']->link('mail/showFilters') : '',
    'img' => 'filters.png',
    'desc' => _("Edit your Filter Rules"),
    'help' => 'filter-edit-rules'
);

$_prefs['filters_blacklist_link'] = array(
    'type' => 'link',
    'img' => 'filters.png',
    'url' => $GLOBALS['registry']->hasMethod('mail/showBlacklist') ? $GLOBALS['registry']->link('mail/showBlacklist') : '',
    'desc' => _("Edit your Blacklist"),
    'help' => 'filter-edit-blacklist'
);

$_prefs['filters_whitelist_link'] = array(
    'type' => 'link',
    'img' => 'filters.png',
    'url' => $GLOBALS['registry']->hasMethod('mail/showWhitelist') ? $GLOBALS['registry']->link('mail/showWhitelist') : '',
    'desc' => _("Edit your Whitelist"),
    'help' => 'filter-edit-whitelist'
);

// run filters on login?
$_prefs['filter_on_login'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Apply filter rules upon logging on?"),
    'help' => 'filter-on-login'
);

// run filters with INBOX display?
$_prefs['filter_on_display'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Apply filter rules whenever Inbox is displayed?"),
    'help' => 'filter-on-display'
);

// Allow filters to be applied to any mailbox?
$_prefs['filter_any_mailbox'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Allow filter rules to be applied in any mailbox?"),
    'help' => 'filter-any-mailbox'
);

// show filter icon on the menubar?
$_prefs['filter_menuitem'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Show the filter icon on the menubar?"),
    'help' => 'filter-menuitem'
);



// *** Addressbook Preferences ***

$prefGroups['addressbooks'] = array(
    'column' => _("Other"),
    'label' => _("Address Books"),
    'desc' => _("Select address book sources for adding and searching for addresses."),
   'members' => array(
        'save_recipients', 'display_contact', 'sourceselect', 'add_source'
    )
);

// Should recipients of outgoing messages be added automatically to
// the address book?
$_prefs['save_recipients'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Save recipients automatically to the default address book?")
);

// By default, display all contacts in the address book when loading
// the contacts screen.  If your default address book is large and
// slow to display, you may want to disable and lock this preference.
$_prefs['display_contact'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("List all contacts when loading the contacts screen? (if disabled, you will only see contacts that you search for explicitly)")
);

// address book selection widget
$_prefs['sourceselect'] = array(
    'type' => 'special'
);

// Address book(s) to use when expanding addresses
// Refer to turba/config/sources.php for possible source values
//
// You can provide default values this way:
//   'value' => json_encode(array('source_one', 'source_two'))
$_prefs['search_sources'] = array(
    'value' => ''
);

// Field(s) to use when expanding addresses
// Refer to turba/config/sources.php for possible source and field values
//
// If you want to provide a default value, this field depends on the
// search_sources preference. For example:
//   'value' => json_encode(array(
//       'source_one' => array('field_one', 'field_two'),
//       'source_two' => array('field_three')
//   ))
// will search the fields 'field_one' and 'field_two' in source_one and
// 'field_three' in source_two.
$_prefs['search_fields'] = array(
    'value' => ''
);

// Address book to use for adding addresses.
// Put $cfgSources array element name in the value field.
// Setting value to localsql would allow you to add contacts to MySQL database
// See turba/config/sources.php for more info
$_prefs['add_source'] = array(
//  'value' => 'localsql',
    'value' => '',
    'type' => 'enum',
    'enum' => array(),
    'desc' => _("Choose the address book to use when adding addresses.")
);



// *** Event Request Preferences ***

$prefGroups['events'] = array(
    'column' => _("Other"),
    'label' => _("Event Requests"),
    'desc' => _("Configure how event or meeting requests should be handled."),
    'members' => array('conflict_interval')
);

// Amount of minutes to consider a event as a non-conflicting one in iTip
$_prefs['conflict_interval'] = array(
    'value' => 30,
    'type' => 'number',
    'desc' => _("Minutes needed to consider a event as a non-conflicting one in iTip")
);



// *** PGP Preferences ***

$prefGroups['pgp'] = array(
    'column' => _("Other"),
    'label' => _("PGP"),
    'desc' => sprintf(_("Control PGP support for %s."), $GLOBALS['registry']->get('name')),
    'members' => array(
        'pgpmanagement'
    )
);

// These preferences MUST appear on the same page.
$_prefs['pgpmanagement'] = array(
    'value' => array(
        'use_pgp', 'use_pgp_text', 'pgp_attach_pubkey', 'pgp_scan_body',
        'pgp_verify', 'pgp_reply_pubkey', 'pgppublickey', 'pgpprivatekey'
    ),
    'type' => 'container'
);

// Activate PGP support?
$_prefs['use_pgp'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Enable PGP functionality?"),
    'help' => 'pgp-overview'
);

$_prefs['use_pgp_text'] = array(
    'value' => '<div class="prefsPgpWarning">' . _("PGP support requires popup windows to be used.  If your browser is currently set to disable popup windows, you must change this setting or else the PGP features will not work correctly.") . '</div>',
    'type' => 'rawhtml'
);

$_prefs['pgp_attach_pubkey'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Should your PGP public key to be attached to your messages by default?"),
    'help' => 'pgp-option-attach-pubkey'
);

$_prefs['pgp_scan_body'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Should the body of text/plain messages be scanned for PGP data?"),
    'help' => 'pgp-option-scan-body'
);

$_prefs['pgp_verify'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Should PGP signed messages automatically be verified when viewed?"),
    'help' => 'pgp-option-verify'
);

$_prefs['pgp_reply_pubkey'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Check for valid recipient PGP public keys while replying?"),
    'help' => 'pgp-option-reply-pubkey'
);

$_prefs['pgppublickey'] = array(
    'type' => 'special'
);

$_prefs['pgp_public_key'] = array(
    'value' => ''
);

$_prefs['pgpprivatekey'] = array(
    'type' => 'special'
);

$_prefs['pgp_private_key'] = array(
    'value' => ''
);



// *** S/MIME Preferences ***

$prefGroups['smime'] = array(
    'column' => _("Other"),
    'label' => _("S/MIME"),
    'desc' => sprintf(_("Control S/MIME support for %s."), $GLOBALS['registry']->get('name')),
    'members' => array(
        'smimemanagement'
    )
);

// These preferences MUST appear on the same page.
$_prefs['smimemanagement'] = array(
    'value' => array(
        'use_smime', 'use_smime_text', 'smime_verify', 'smimepublickey',
        'smimeprivatekey'
    ),
    'type' => 'container'
);

// Activate S/MIME support?
$_prefs['use_smime'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Enable S/MIME functionality?"),
    'help' => 'smime-overview'
);

$_prefs['use_smime_text'] = array(
    'value' => '<div class="prefsSmimeWarning">' . _("S/MIME support requires popup windows to be used.  If your browser is currently set to disable popup windows, you must change this setting or else the S/MIME features will not work correctly.") . '</div>',
    'type' => 'rawhtml'
);

$_prefs['smime_verify'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Should S/MIME signed messages automatically be verified when viewed?"),
    'help' => 'smime-option-verify'
);

// S/MIME public key management widget
$_prefs['smimepublickey'] = array(
    'type' => 'special'
);

$_prefs['smime_public_key'] = array(
    'value' => ''
);

// S/MIME private key management widget
$_prefs['smimeprivatekey'] = array(
    'type' => 'special'
);

$_prefs['smime_private_key'] = array(
    'value' => ''
);

$_prefs['smime_additional_cert'] = array(
    'value' => ''
);



// *** Mobile View (MIMP) Preferences ***

$prefGroups['mimp'] = array(
    'column' => _("Other"),
    'label' => _("Mobile View"),
    'desc' => _("Configure preferences for the mobile view."),
    'members' => array(
        'mimp_preview_msg', 'mimp_download_confirm', 'mimp_inline_all'
    )
);

// display only the first 250 characters of a message on first message view?
$_prefs['mimp_preview_msg'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Display only the first 250 characters of a message initially?")
);

$_prefs['mimp_download_confirm'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'number',
    'desc' => _("Only show download confirmation page if message part is greater than this size, in bytes. Set to 0 to always require the confirmation page.")
);

$_prefs['mimp_inline_all'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Show all inline parts by default in message view? If unchecked, will treat all but the first viewable inline part as attachments.")
);



// *** Traditional View (IMP) Preferences ***

$prefGroups['traditional'] = array(
    'column' => _("Other"),
    'label' => _("Traditional View"),
    'desc' => _("Configure preferences for the traditional view."),
    'members' => array(
        'traditional_mailbox', 'preview_enabled', 'preview_maxlen',
        'preview_strip_nl', 'preview_show_unread', 'preview_show_tooltip',
        'traditional_compose', 'compose_popup', 'compose_confirm'
    )
);

$_prefs['traditional_mailbox'] = array(
    'value' => '<div class="prefsTraditional">' . _("Mailbox") . '</div>',
    'type' => 'rawhtml'
);

// Previews are disabled by default as it can be performance intensive,
// especially without caching.
$_prefs['preview_enabled'] = array(
    // Disabled and locked by default
    'value' => 0,
    'locked' => true,
    'type' => 'checkbox',
    'desc' => _("Enable message previews?")
);

$_prefs['preview_maxlen'] = array(
    'value' => 250,
    'advanced' => true,
    'type' => 'enum',
    'enum' => array(
        100 => _("100 characters"),
        250 => _("250 characters"),
        500 => _("500 characters"),
        1000 => _("1000 characters")
    ),
    'desc' => _("Characters to display in preview:")
);

$_prefs['preview_strip_nl'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Strip linebreaks in preview?")
);

$_prefs['preview_show_unread'] = array(
    'value' => 1,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Show previews for unread messages only?")
);

$_prefs['preview_show_tooltip'] = array(
    'value' => 0,
    'advanced' => true,
    'type' => 'checkbox',
    'desc' => _("Show previews in tooltips?")
);

$_prefs['traditional_compose'] = array(
    'value' => '<div class="prefsTraditional">' . _("Compose") . '</div>',
    'type' => 'rawhtml'
);

// compose in a separate window?
$_prefs['compose_popup'] = array(
    'value' => 1,
    'type' => 'checkbox',
    'desc' => _("Compose messages in a separate window?")
);

// confirm successful sending of messages in popup window?
$_prefs['compose_confirm'] = array(
    'value' => 0,
    'type' => 'checkbox',
    'desc' => _("Display confirmation in popup window after sending a message?")
);



// *** Dynamic View (DIMP) Preferences ***
$prefGroups['dimp'] = array(
    'column' => _("Other"),
    'label' => _("Dynamic View"),
    'desc' => _("Configure preferences for the dynamic view."),
    'members' => array('dynamic_view')
);

// Show dynamic view?
$_prefs['dynamic_view'] = array(
   'value' => 1,
   'type' => 'checkbox',
   'desc' => _("Show the dynamic view by default, if the browser supports it?")
);

// Other dynamic view preferences
$_prefs['dimp_qsearch_field'] = array(
    'value' => 'all'
);

$_prefs['dimp_show_preview'] = array(
    'value' => 'horiz'
);

$_prefs['dimp_splitbar'] = array(
    'value' => 0
);

$_prefs['dimp_toggle_headers'] = array(
    'value' => 0
);

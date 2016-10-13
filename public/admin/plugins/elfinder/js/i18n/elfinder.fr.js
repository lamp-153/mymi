/*
 * French translation
 * @author William Bessat
 * @aithor anw <antoine.cardiweb@gmail.com>
 * @version 2011-03-14
 */
(function($) {
if (elFinder && elFinder.prototype.options && elFinder.prototype.options.i18n) 
	elFinder.prototype.options.i18n.fr = {
		/* errors */
		'Root directory does not exists'        : 'Le dossier racine n\'existe pas',
		'Unable to connect to backend'          : 'Impossible de se connecter au backend',
		'Access denied'                         : 'Accès refusé',
		'Invalid backend configuration'         : 'Mauvaise configuration du backend',
		'Unknown command'                       : 'Commande inconnue',
		'Command not allowed'                   : 'Commande non permise',
		'Invalid parameters'                    : 'Paramètres non valides',
		'File not found'                        : 'Fichier introuvable',
		'Invalid name'                          : 'Nom non valide',
		'File or folder with the same name already exists' : 'Un fichier ou un dossier avec le même nom existe déja',
		'Unable to rename file'                 : 'Impossible de renommer le fichier',
		'Unable to create folder'               : 'Impossible de créer le dossier',
		'Unable to create file'                 : 'Impossible de créer le fichier',  
		'No file to upload'                     : 'Aucun fichier a envoyer',
		'Select at least one file to upload'    : 'Sélectionner au moins un fichier a envoyer',
		'File exceeds the maximum allowed filesize' : 'Le fichier excède la taille maximale autorisée',
		'Data exceeds the maximum allowed size' : 'Les données excèdent la taille maximale autorisée',
		'Not allowed file type'                 : 'Type de fichier non autorisée;',
		'Unable to upload file'                 : 'Impossible de télécharger le fichier',
		'Unable to upload files'                : 'Impossible de télécharger les fichiers',
		'Unable to remove file'                 : 'Impossible de supprimer le fichier',
		'Unable to save uploaded file'          : 'Impossible de sauver le fichier téléchargé',
		'Some files was not uploaded'           : 'Certains fichiers n\'ont pu être télécharges',
		'Unable to copy into itself'            : 'Copie impossible dans le même dossier',
		'Unable to move files'                  : 'Impossible de déplacer les fichiers',
		'Unable to copy files'                  : 'Impossible de supprimer les fichiers',
		'Unable to create file copy'            : 'Impossible de créer une copie du fichier',
		'File is not an image'                  : 'Ce fichier n\'est pas une image',
		'Unable to resize image'                : 'Impossible de redimensionner cette image',
		'Unable to write to file'               : 'Impossible d\'écrire dans ce fichier',
		'Unable to create archive'              : 'Impossible de créer une archive',
		'Unable to extract files from archive'  : 'Impossible d\'extraire les fichiers de l\'archive',
		'Unable to open broken link'            : 'Ce lien est brisé',
		'File URL disabled by connector config' : 'URL du fichier désactivé via la configuration du connecteur',
		/* statusbar */
		'items'          : 'éléments',
		'selected items' : 'éléments sélectionnés',
		/* commands/buttons */
		'Back'                    : 'Retour',
		'Reload'                  : 'Rafraîchir',
		'Open'                    : 'Ouvrir',
		'Preview with Quick Look' : 'Aperçu rapide',
		'Select file'             : 'Sélectionner un fichier',
		'New folder'              : 'Nouveau dossier',
		'New text file'           : 'Nouveau fichier texte',
		'Upload files'            : 'Télécharger des fichiers',
		'Copy'                    : 'Copier',
		'Cut'                     : 'Couper',
		'Paste'                   : 'Coller',
		'Duplicate'               : 'Dupliquer',
		'Remove'                  : 'Supprimer',
		'Rename'                  : 'Renommer',
		'Edit text file'          : 'Editer le fichier texte',
		'View as icons'           : 'Vue en icônes',
		'View as list'            : 'Vue en liste',
		'Resize image'            : 'Redimensionner l\'image',
		'Create archive'          : 'Nouvelle archive',
		'Uncompress archive'      : 'Extraire de l\'archive',
		'Get info'                : 'Informations',
		'Help'                    : 'Aide',
		'Dock/undock filemanger window' : 'Dock/undock filemanger window',
		/* upload/get info dialogs */
		'Maximum allowed files size' : 'Taille maximale autorisée des fichiers',
		'Add field'   : 'Ajouter des fichiers',
		'File info'   : 'Propriétés du fichier',
		'Folder info' : 'Propriétés du dossier',
		'Name'        : 'Nom',
		'Kind'        : 'Type',
		'Size'        : 'Taille',
		'Modified'    : 'Dernière modification',
		'Permissions' : 'Accès',
		'Link to'     : 'Lien vers',
		'Dimensions'  : 'Dimensions',
		'Confirmation required' : 'Veuillez confirmer',
		'Are you sure you want to remove files?<br /> This cannot be undone!' : 'Etes-vous sûr de vouloir supprimer le ou les fichier(s) ?<br />Cette action est définitive!',
		/* permissions */
		'read'        : 'lecture',
		'write'       : 'écriture',
		'remove'      : 'suppression',
		/* dates */
		'Jan'         : 'Jan',
		'Feb'         : 'Feb',
		'Mar'         : 'Mar',
		'Apr'         : 'Avr',
		'May'         : 'Mai',
		'Jun'         : 'Jui',
		'Jul'         : 'Jul',
		'Aug'         : 'Aou',
		'Sep'         : 'Sep',
		'Oct'         : 'Oct',
		'Nov'         : 'Nov',
		'Dec'         : 'Dec',
		'Today'       : 'Aujourd\'hui',
		'Yesterday'   : 'Hier',
		/* mimetypes */
		'Unknown'                           : 'Inconnu',
		'Folder'                            : 'Dossier',
		'Alias'                             : 'Alias',
		'Broken alias'                      : 'Alias brisé',
		'Plain text'                        : 'Texte',
		'Postscript document'               : 'Document postscript',
		'Application'                       : 'Application' ,
		'Microsoft Office document'         : 'Document Microsoft Office',
		'Microsoft Word document'           : 'Document Microsoft Word',  
		'Microsoft Excel document'          : 'Document Microsoft Excel',
		'Microsoft Powerpoint presentation' : 'Document Microsoft Powerpoint',
		'Open Office document'              : 'Document Open Office',
		'Flash application'                 : 'Application Flash',
		'XML document'                      : 'Document XML',
		'Bittorrent file'                   : 'Fichier bittorrent',
		'7z archive'                        : 'Archive 7z',
		'TAR archive'                       : 'Archive TAR',
		'GZIP archive'                      : 'Archive GZIP',
		'BZIP archive'                      : 'Archive BZIP',
		'ZIP archive'                       : 'Archive ZIP',
		'RAR archive'                       : 'Archive RAR',
		'Javascript application'            : 'Application Javascript',
		'PHP source'                        : 'Document PHP',
		'HTML document'                     : 'Document HTML',
		'Javascript source'                 : 'Document Javascript',
		'CSS style sheet'                   : 'Document CSS',
		'C source'                          : 'Document C',
		'C++ source'                        : 'Document C++',
		'Unix shell script'                 : 'Script Unix shell',
		'Python source'                     : 'Document Python',
		'Java source'                       : 'Document Java',
		'Ruby source'                       : 'Document Ruby',
		'Perl script'                       : 'Script Perl',
		'BMP image'                         : 'Image BMP',
		'JPEG image'                        : 'Image JPEG',
		'GIF Image'                         : 'Image GIF',
		'PNG Image'                         : 'Image PNG',
		'TIFF image'                        : 'Image TIFF',
		'TGA image'                         : 'Image TGA',
		'Adobe Photoshop image'             : 'Image Adobe Photoshop',
		'MPEG audio'                        : 'Audio MPEG',
		'MIDI audio'                        : 'Audio MIDI',
		'Ogg Vorbis audio'                  : 'Audio Ogg Vorbis',
		'MP4 audio'                         : 'Audio MP4',
		'WAV audio'                         : 'Audio WAV',
		'DV video'                          : 'Video DV',
		'MP4 video'                         : 'Video MP4',
		'MPEG video'                        : 'Video MPEG',
		'AVI video'                         : 'Video AVI',
		'Quicktime video'                   : 'Video Quicktime',
		'WM video'                          : 'Video WM',
		'Flash video'                       : 'Video Flash',
		'Matroska video'                    : 'Video Matroska',
		// 'Shortcuts' : 'Клавиши',		
		'Select all files' : 'Selectionner tous les fichiers',
		'Copy/Cut/Paste files' : 'Copier/Couper/Coller les fichiers',
		'Open selected file/folder' : 'Ouvrir dossier/fichier',
		'Open/close QuickLook window' : 'Ouvrir/Fermer l\'aperçu',
		'Remove selected files' : 'Supprimer les fichiers selectionnés',
		'Selected files or current directory info' : 'Informations sur les fichiers du dossier courant',
		'Create new directory' : 'Créer un nouveau dossier',
		'Open upload files form' : 'Parcourir',
		'Select previous file' : 'Selectionner le fichier précèdent',
		'Select next file' : 'Selectionner le fichier suivant',
		'Return into previous folder' : 'Retour au dossier précèdent',
		'Increase/decrease files selection' : 'Etendre/diminuer la selection des fichiers',
		'Authors'                       : 'Auteurs',
		'Sponsors'  : 'Sponsors',
		'elFinder: Web file manager'    : 'elFinder: Web file manager',
		'Version'                       : 'Version',
		'Copyright: Studio 42 LTD'      : 'Copyright: Studio 42',
		'Donate to support project development' : 'Donner et encourager le développement du projet',
		'Javascripts/PHP programming: Dmitry (dio) Levashov, dio@std42.ru' : 'Javascripts/PHP programming: Dmitry (dio) Levashov, dio@std42.ru',
		'Python programming, techsupport: Troex Nevelin, troex@fury.scancode.ru' : 'Python programming, techsupport: Troex Nevelin, troex@fury.scancode.ru',
		'Design: Valentin Razumnih'     : 'Design: Valentin Razumnih',
		'French localization'          : 'Traduction française',
		'Icons' : 'Icônes',
		'License: BSD License'          : 'License: BSD License',
		'elFinder documentation'        : 'elFinder documentation',
		'Simple and usefull Content Management System' : 'Simple and usefull Content Management System',
		'Support project development and we will place here info about you' : 'Soutenez le projet de developpement et nous placerons ici des informations sur vous',
		'Contacts us if you need help integrating elFinder in you products' : 'Nous contacter pour vous aider a integrer elfinder a vos produits',
		'elFinder support following shortcuts' : 'elfinder fonctionne avec les raccourcis suivants',
		'helpText' : 'elfinder fonctionne comme un gestionnaire de fichiers. Utiliser la barre de menu pour faire des actions sur les fichiers/dossiers. Le survol de la souris sur les boutons donnent des informations sur leur fonction. Le bouton droit de la souris offre aussi des raccourcis contextuels. Pour sélectionner un groupe de fichiers ou de dossiers, faire Shift/Alt au clavier + clique gauche avec la souris.'	
		};
	
})(jQuery);

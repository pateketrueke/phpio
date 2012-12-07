<?php

namespace IO;

class Helpers
{

  private static $sizes = array('', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y');

  private static $types = array(
                    'ez' => 'application/andrew-inset',
                    'base64' => 'application/x-word',
                    'dp' => 'application/commonground',
                    'pqi' => 'application/cprplayer',
                    'tsp' => 'application/dsptype',
                    'xls' => 'application/vnd.ms-excel',
                    'pfr' => 'application/font-tdpfr',
                    'spl' => 'application/futuresplash',
                    'stk' => 'application/hyperstudio',
                    'js' => 'application/x-javascript',
                    'hqx' => 'application/mac-binhex40',
                    'cpt' => 'application/mac-compactpro',
                    'mbd' => 'application/mbed',
                    'mfp' => 'application/mirage',
                    'doc' => 'application/msword',
                    'orq' => 'application/ocsp-request',
                    'ors' => 'application/ocsp-response',
                    'bin' => 'application/octet-stream',
                    'exe' => 'application/octet-stream',
                    'oda' => 'application/oda',
                    'ogg' => 'application/ogg',
                    'pdf' => 'application/pdf',
                    '7bit' => 'application/pgp-keys',
                    'sig' => 'application/pgp-signature',
                    'p10' => 'application/pkcs10',
                    'p7m' => 'application/x-pkcs7-mime',
                    'p7s' => 'application/x-pkcs7-signature',
                    'cer' => 'application/x-x509-ca-cert',
                    'crl' => 'application/pkix-crl',
                    'pkipath' => 'application/pkix-pkipath',
                    'pki' => 'application/pkixcmp',
                    'ai' => 'application/postscript',
                    'eps' => 'application/postscript',
                    'ps' => 'application/postscript',
                    'shw' => 'application/presentations',
                    'cw' => 'application/prs.cww',
                    'rnd' => 'application/prs.nprend',
                    'qrt' => 'application/quest',
                    'rtf' => 'application/rtf',
                    'soc' => 'application/sgml-open-catalog',
                    'siv' => 'application/sieve',
                    'smi' => 'application/smil',
                    'tbk' => 'application/toolbook',
                    'plb' => 'application/vnd.3gpp.pic-bw-large',
                    'psb' => 'application/vnd.3gpp.pic-bw-small',
                    'pvb' => 'application/vnd.3gpp.pic-bw-var',
                    'sms' => 'application/vnd.3gpp.sms',
                    'atc' => 'application/vnd.acucorp',
                    'xfdf' => 'application/vnd.adobe.xfdf',
                    'ami' => 'application/vnd.amiga.amu',
                    'mpm' => 'application/vnd.blueice.multipass',
                    'cdy' => 'application/vnd.cinderella',
                    'cmc' => 'application/vnd.cosmocaller',
                    'wbs' => 'application/vnd.criticaltools.wbs+xml',
                    'curl' => 'application/vnd.curl',
                    'rdz' => 'application/vnd.data-vision.rdz',
                    'dfac' => 'application/vnd.dreamfactory',
                    'fsc' => 'application/vnd.fsc.weblauch',
                    'txd' => 'application/vnd.genomatix.tuxedo',
                    'hbci' => 'application/vnd.hbci',
                    'les' => 'application/vnd.hhe.lesson-player',
                    'plt' => 'application/vnd.hp-HPGL',
                    'emm' => 'application/vnd.ibm.electronic-media',
                    'irm' => 'application/vnd.ibm.rights-management',
                    'sc' => 'application/vnd.ibm.secure-container',
                    'rcprofile' => 'application/vnd.ipunplugged.rcprofile',
                    'irp' => 'application/vnd.irepository.package+xml',
                    'jisp' => 'application/vnd.jisp',
                    'karbon' => 'application/vnd.kde.karbon',
                    'chrt' => 'application/vnd.kde.kchart',
                    'kfo' => 'application/vnd.kde.kformula',
                    'flw' => 'application/vnd.kde.kivio',
                    'kon' => 'application/vnd.kde.kontour',
                    'kpr' => 'application/vnd.kde.kpresenter',
                    'ksp' => 'application/vnd.kde.kspread',
                    'kwd' => 'application/vnd.kde.kword',
                    'htke' => 'application/vnd.kenameapp',
                    'kia' => 'application/vnd.kidspiration',
                    'kne' => 'application/vnd.kinar',
                    'lbd' => 'application/vnd.llamagraphics.life-balance.desktop',
                    'lbe' => 'application/vnd.llamagraphics.life-balance.exchange+xml',
                    'wks' => 'application/vnd.ms-works',
                    'mcd' => 'application/mathcad',
                    'mfm' => 'application/vnd.mfmp',
                    'flo' => 'application/vnd.micrografx.flo',
                    'igx' => 'application/vnd.micrografx.igx',
                    'mif' => 'application/x-mif',
                    'mpn' => 'application/vnd.mophun.application',
                    'mpc' => 'application/vnd.mophun.certificate',
                    'xul' => 'application/vnd.mozilla.xul+xml',
                    'cil' => 'application/vnd.ms-artgalry',
                    'asf' => 'video/x-ms-asf',
                    'lrm' => 'application/vnd.ms-lrm',
                    'ppt' => 'application/vnd.ms-powerpoint',
                    'mpp' => 'application/vnd.ms-project',
                    'wpl' => 'application/vnd.ms-wpl',
                    'mseq' => 'application/vnd.mseq',
                    'ent' => 'application/vnd.nervana',
                    'rpst' => 'application/vnd.nokia.radio-preset',
                    'rpss' => 'application/vnd.nokia.radio-presets',
                    'odt' => 'application/vnd.oasis.opendocument.text',
                    'ott' => 'application/vnd.oasis.opendocument.text-template',
                    'oth' => 'application/vnd.oasis.opendocument.text-web',
                    'odm' => 'application/vnd.oasis.opendocument.text-master',
                    'odg' => 'application/vnd.oasis.opendocument.graphics',
                    'otg' => 'application/vnd.oasis.opendocument.graphics-template',
                    'odp' => 'application/vnd.oasis.opendocument.presentation',
                    'otp' => 'application/vnd.oasis.opendocument.presentation-template',
                    'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
                    'ots' => 'application/vnd.oasis.opendocument.spreadsheet-template',
                    'odc' => 'application/vnd.oasis.opendocument.chart',
                    'odf' => 'application/vnd.oasis.opendocument.formula',
                    'odb' => 'application/vnd.oasis.opendocument.database',
                    'odi' => 'application/vnd.oasis.opendocument.image',
                    'prc' => 'application/vnd.palm',
                    'efif' => 'application/vnd.picsel',
                    'pti' => 'application/vnd.pvi.ptid1',
                    'qxd' => 'application/vnd.Quark.QuarkXPress',
                    'sdoc' => 'application/vnd.sealed.doc',
                    'seml' => 'application/vnd.sealed.eml',
                    'smht' => 'application/vnd.sealed.mht',
                    'sppt' => 'application/vnd.sealed.ppt',
                    'sxls' => 'application/vnd.sealed.xls',
                    'stml' => 'application/vnd.sealedmedia.softseal.html',
                    'spdf' => 'application/vnd.sealedmedia.softseal.pdf',
                    'see' => 'application/vnd.seemail',
                    'mmf' => 'application/vnd.smaf',
                    'sxc' => 'application/vnd.sun.xml.calc',
                    'stc' => 'application/vnd.sun.xml.calc.template',
                    'sxd' => 'application/vnd.sun.xml.draw',
                    'std' => 'application/vnd.sun.xml.draw.template',
                    'sxi' => 'application/vnd.sun.xml.impress',
                    'sti' => 'application/vnd.sun.xml.impress.template',
                    'sxm' => 'application/vnd.sun.xml.math',
                    'sxw' => 'application/vnd.sun.xml.writer',
                    'sxg' => 'application/vnd.sun.xml.writer.global',
                    'stw' => 'application/vnd.sun.xml.writer.template',
                    'sus' => 'application/vnd.sus-calendar',
                    'vsc' => 'application/vnd.vidsoft.vidconference',
                    'vsd' => 'application/vnd.visio',
                    'vis' => 'application/vnd.visionary',
                    'sic' => 'application/vnd.wap.sic',
                    'slc' => 'application/vnd.wap.slc',
                    'wbxml' => 'application/vnd.wap.wbxml',
                    'wmlc' => 'application/vnd.wap.wmlc',
                    'wmlsc' => 'application/vnd.wap.wmlscriptc',
                    'wtb' => 'application/vnd.webturbo',
                    'wpd' => 'application/wordperfectd',
                    'wqd' => 'application/vnd.wqd',
                    'wv' => 'application/vnd.wv.csp+wbxml',
                    '8bit' => 'multipart/parallel',
                    'hvd' => 'application/vnd.yamaha.hv-dic',
                    'hvs' => 'application/vnd.yamaha.hv-script',
                    'hvp' => 'application/vnd.yamaha.hv-voice',
                    'saf' => 'application/vnd.yamaha.smaf-audio',
                    'spf' => 'application/vnd.yamaha.smaf-phrase',
                    'vmd' => 'application/vocaltec-media-desc',
                    'vmf' => 'application/vocaltec-media-file',
                    'vtk' => 'application/vocaltec-talker',
                    'wif' => 'image/cewavelet',
                    'wp5' => 'application/wordperfect5.1',
                    'wk' => 'application/x-123',
                    '7ls' => 'application/x-7th_level_event',
                    'aab' => 'application/x-authorware-bin',
                    'aam' => 'application/x-authorware-map',
                    'aas' => 'application/x-authorware-seg',
                    'bcpio' => 'application/x-bcpio',
                    'bleep' => 'application/bleeper',
                    'bz2' => 'application/x-bzip2',
                    'vcd' => 'application/x-cdlink',
                    'chat' => 'application/x-chat',
                    'pgn' => 'application/x-chess-pgn',
                    'z' => 'application/x-compress',
                    'cpio' => 'application/x-cpio',
                    'pqf' => 'application/x-cprplayer',
                    'csh' => 'application/x-csh',
                    'csm' => 'application/cu-seeme',
                    'co' => 'application/x-cult3d-object',
                    'deb' => 'application/x-debian-package',
                    'dcr' => 'application/x-director',
                    'dir' => 'application/x-director',
                    'dxr' => 'application/x-director',
                    'dvi' => 'application/x-dvi',
                    'evy' => 'application/envoy',
                    'gtar' => 'application/x-gtar',
                    'gz' => 'application/x-gzip',
                    'hdf' => 'application/x-hdf',
                    'hep' => 'application/x-hep',
                    'rhtml' => 'application/x-html+ruby',
                    'mv' => 'application/x-httpd-miva',
                    'phtml' => 'application/x-httpd-php',
                    'ica' => 'application/x-ica',
                    'imagemap' => 'application/imagemap',
                    'ipx' => 'application/x-ipix',
                    'ips' => 'application/x-ipscript',
                    'jar' => 'application/x-jar',
                    'jnlp' => 'application/x-java-jnlp-file',
                    'ser' => 'application/x-java-serialized-object',
                    'class' => 'application/octet-stream',
                    'skp' => 'application/x-koan',
                    'latex' => 'application/x-latex',
                    'frm' => 'application/x-maker',
                    'mid' => 'audio/mid',
                    'mda' => 'application/vnd.ms-access',
                    'cmd' => 'application/x-msdos-program',
                    'com' => 'application/x-msdos-program',
                    'nc' => 'application/x-netcdf',
                    'pac' => 'application/x-ns-proxy-autoconfig',
                    'pm5' => 'application/pagemaker',
                    'pl' => 'application/x-perl',
                    'rp' => 'application/x-pn-realmedia',
                    'py' => 'application/x-python',
                    'qtl' => 'application/quicktimeplayer',
                    'rar' => 'application/x-rar-compressed',
                    'rb' => 'application/x-ruby',
                    'sh' => 'application/x-sh',
                    'shar' => 'application/x-shar',
                    'swf' => 'application/x-shockwave-flash',
                    'spr' => 'application/x-sprite',
                    'sav' => 'application/x-spss',
                    'spt' => 'application/x-spt',
                    'sit' => 'application/x-stuffit',
                    'sv4cpio' => 'application/x-sv4cpio',
                    'sv4crc' => 'application/x-sv4crc',
                    'tar' => 'application/x-tar',
                    'tcl' => 'application/x-tcl',
                    'tex' => 'application/x-tex',
                    'texinfo' => 'application/x-texinfo',
                    't' => 'application/x-troff',
                    'man' => 'application/x-troff-man',
                    'me' => 'application/x-troff-me',
                    'ms' => 'application/x-troff-ms',
                    'vqf' => 'application/x-twinvq',
                    'vqe' => 'application/x-twinvq-plugin',
                    'ustar' => 'application/x-ustar',
                    'bck' => 'application/VMSBACKUP',
                    'src' => 'application/x-wais-source',
                    'wz' => 'application/x-Wingz',
                    'wp6' => 'application/wordperfect6.1',
                    'crt' => 'application/x-x509-ca-cert',
                    'zip' => 'application/zip',
                    'xhtml' => 'application/xhtml+xml',
                    '3gpp' => 'audio/3gpp',
                    'amr' => 'audio/amr',
                    'awb' => 'audio/amr-wb',
                    'au' => 'audio/basic',
                    'evc' => 'audio/evrc',
                    'l16' => 'audio/l16',
                    'mp3' => 'audio/mpeg',
                    'mpga' => 'audio/mpeg',
                    'sid' => 'audio/prs.sid',
                    'qcp' => 'audio/qcelp',
                    'smv' => 'audio/smv',
                    'koz' => 'audio/vnd.audiokoz',
                    'eol' => 'audio/vnd.digital-winds',
                    'plj' => 'audio/vnd.everad.plj',
                    'lvp' => 'audio/vnd.lucent.voice',
                    'mxmf' => 'audio/vnd.nokia.mobile-xmf',
                    'vbk' => 'audio/vnd.nortel.vbk',
                    'ecelp4800' => 'audio/vnd.nuera.ecelp4800',
                    'ecelp7470' => 'audio/vnd.nuera.ecelp7470',
                    'ecelp9600' => 'audio/vnd.nuera.ecelp9600',
                    'smp3' => 'audio/vnd.sealedmedia.softseal.mpeg',
                    'vox' => 'audio/voxware',
                    'aif' => 'audio/x-aiff',
                    'mp2' => 'video/mpeg',
                    'mpu' => 'audio/x-mpegurl',
                    'ra' => 'audio/x-pn-realaudio',
                    'rm' => 'audio/x-pn-realaudio',
                    'rpm' => 'audio/x-pn-realaudio-plugin',
                    'wav' => 'audio/x-wav',
                    'emb' => 'chemical/x-embl-dl-nucleotide',
                    'cube' => 'chemical/x-gaussian-cube',
                    'gau' => 'chemical/x-gaussian-input',
                    'jdx' => 'chemical/x-jcamp-dx',
                    'mol' => 'chemical/x-mdl-molfile',
                    'rxn' => 'chemical/x-mdl-rxnfile',
                    'tgf' => 'chemical/x-mdl-tgf',
                    'mop' => 'chemical/x-mopac-input',
                    'pdb' => 'application/vnd.palm',
                    'scr' => 'chemical/x-rasmol',
                    'xyz' => 'chemical/x-xyz',
                    'dwf' => 'x-drawing/dwf',
                    'ivr' => 'i-world/i-vrml',
                    'bmp' => 'image/bmp',
                    'cod' => 'image/cis-cod',
                    'fif' => 'application/fractals',
                    'gif' => 'image/gif',
                    'ief' => 'image/ief',
                    'jp2' => 'image/jp2',
                    'jpeg' => 'image/jpeg',
                    'jpg' => 'image/jpeg',
                    'jpm' => 'image/jpm',
                    'jpf' => 'image/jpx',
                    'pic' => 'image/pict',
                    'png' => 'image/png',
                    'tga' => 'image/targa',
                    'tif' => 'image/tiff',
                    'tiff' => 'image/tiff',
                    'svf' => 'image/vn-svf',
                    'dgn' => 'image/vnd.dgn',
                    'djvu' => 'image/vnd.djvu',
                    'dwg' => 'image/vnd.dwg',
                    'pgb' => 'image/vnd.glocalgraphics.pgb',
                    'ico' => 'image/x-icon',
                    'mdi' => 'image/vnd.ms-modi',
                    'spng' => 'image/vnd.sealed.png',
                    'sgif' => 'image/vnd.sealedmedia.softseal.gif',
                    'sjpg' => 'image/vnd.sealedmedia.softseal.jpg',
                    'wbmp' => 'image/vnd.wap.wbmp',
                    'ras' => 'image/x-cmu-raster',
                    'fh4' => 'image/x-freehand',
                    'pnm' => 'image/x-portable-anymap',
                    'pbm' => 'image/x-portable-bitmap',
                    'pgm' => 'image/x-portable-graymap',
                    'ppm' => 'image/x-portable-pixmap',
                    'rgb' => 'image/x-rgb',
                    'xbm' => 'image/x-xbitmap',
                    'xpm' => 'image/x-xpixmap',
                    'xwd' => 'image/x-xwindowdump',
                    'igs' => 'model/iges',
                    'msh' => 'model/mesh',
                    'x_b' => 'model/vnd.parasolid.transmit.binary',
                    'x_t' => 'model/vnd.parasolid.transmit.text',
                    'vrm' => 'x-world/x-vrml',
                    'wrl' => 'x-world/x-vrml',
                    'csv' => 'text/comma-separated-values',
                    'css' => 'text/css',
                    'htm' => 'text/html',
                    'html' => 'text/html',
                    'txt' => 'text/plain',
                    'rst' => 'text/prs.fallenstein.rst',
                    'rtx' => 'text/richtext',
                    'sgm' => 'text/sgml',
                    'sgml' => 'text/sgml',
                    'tsv' => 'text/tab-separated-values',
                    'ccc' => 'text/vnd.net2phone.commcenter.command',
                    'jad' => 'text/vnd.sun.j2me.app-descriptor',
                    'si' => 'text/vnd.wap.si',
                    'sl' => 'text/vnd.wap.sl',
                    'wml' => 'text/vnd.wap.wml',
                    'wmls' => 'text/vnd.wap.wmlscript',
                    'hdml' => 'text/x-hdml',
                    'etx' => 'text/x-setext',
                    'talk' => 'text/x-speech',
                    'vcs' => 'text/calendar',
                    'vcf' => 'text/x-vcard',
                    'xml' => 'application/xml',
                    'uvr' => 'ulead/vrml',
                    '3gp' => 'video/3gpp',
                    'dl' => 'video/dl',
                    'gl' => 'video/gl',
                    'mj2' => 'video/mj2',
                    'mpeg' => 'video/mpeg',
                    'mpg' => 'video/mpeg',
                    'mov' => 'video/quicktime',
                    'qt' => 'video/quicktime',
                    'vdo' => 'video/vdo',
                    'viv' => 'video/vnd.vivo',
                    'fvt' => 'video/vnd.fvt',
                    'mxu' => 'video/vnd.mpegurl',
                    'nim' => 'video/vnd.nokia.interleaved-multimedia',
                    'mp4' => 'video/vnd.objectvideo',
                    's11' => 'video/vnd.sealed.mpeg1',
                    'smpg' => 'video/vnd.sealed.mpeg4',
                    'sswf' => 'video/vnd.sealed.swf',
                    'smov' => 'video/vnd.sealedmedia.softseal.mov',
                    'vivo' => 'video/vnd.vivo',
                    'fli' => 'video/fli',
                    'wmv' => 'video/x-ms-wmv',
                    'avi' => 'video/x-msvideo',
                    'movie' => 'video/x-sgi-movie',
                    'ice' => 'x-conference/x-cooltalk',
                    'd' => 'x-world/x-d96',
                    'svr' => 'x-world/x-svr',
                    'vrw' => 'x-world/x-vream',
                    '323 ' => 'text/h323',
                    'acutc' => 'application/vnd.acucorp',
                    'acx' => 'application/internet-property-stream',
                    'aifc' => 'audio/x-aiff',
                    'aiff' => 'audio/x-aiff',
                    'ani' => 'application/octet-stream',
                    'asc' => 'application/pgp',
                    'asr' => 'video/x-ms-asf',
                    'asx' => 'video/x-ms-asf',
                    'axs' => 'application/olescript',
                    'bak' => 'application/x-trash',
                    'bas' => 'text/plain',
                    'bat' => 'application/x-msdos-program',
                    'book' => 'application/x-maker',
                    'bpd' => 'application/vnd.hbci',
                    'c' => 'text/plain',
                    'c++' => 'text/plain',
                    'cat' => 'application/vnd.ms-pkiseccat',
                    'cc' => 'text/plain',
                    'cdf' => 'application/x-cdf',
                    'clp' => 'application/x-msclip',
                    'cls' => 'text/x-tex',
                    'cmx' => 'image/x-cmx',
                    'cpp' => 'text/x-c++src',
                    'crd' => 'application/x-mscardfile',
                    'cs' => 'text/plain',
                    'cu' => 'application/cu-seeme',
                    'cww' => 'application/prs.cww',
                    'cxx' => 'text/x-c++src',
                    'der' => 'application/x-x509-ca-cert',
                    'diff' => 'text/diff',
                    'dll' => 'application/x-msdownload',
                    'dms' => 'application/octet-stream',
                    'dot' => 'application/msword',
                    'fb' => 'application/x-maker',
                    'fbdoc' => 'application/x-maker',
                    'flr' => 'x-world/x-vrml',
                    'fm' => 'application/x-maker',
                    'frame' => 'application/x-maker',
                    'gf' => 'application/x-tex-gf',
                    'gsf' => 'application/x-font',
                    'gsm' => 'audio/x-gsm',
                    'h' => 'text/plain',
                    'h++' => 'text/plain',
                    'hbc' => 'application/vnd.hbci',
                    'hh' => 'text/plain',
                    'hlp' => 'application/winhlp',
                    'hpgl' => 'application/vnd.hp-HPGL',
                    'hpp' => 'text/plain',
                    'hta' => 'application/hta',
                    'htc' => 'text/x-component',
                    'htt' => 'text/webviewhtml',
                    'hxx' => 'text/plain',
                    'ics' => 'text/calendar',
                    'ifb' => 'text/calendar',
                    'iges' => 'model/iges',
                    'iii' => 'application/x-iphone',
                    'imap' => 'application/imagemap',
                    'ins' => 'application/x-internet-signup',
                    'isp' => 'application/x-internet-signup',
                    'java' => 'text/x-java-source',
                    'jfif' => 'image/pipeg',
                    'jpe' => 'image/jpeg',
                    'kar' => 'audio/midi',
                    'kom' => 'application/vnd.hbci',
                    'kwt' => 'application/vnd.kde.kword',
                    'lha' => 'application/octet-stream',
                    'log' => 'text/plain',
                    'lsf' => 'video/x-la-asf',
                    'lsx' => 'video/x-la-asf',
                    'ltx' => 'text/x-tex',
                    'lzh' => 'application/octet-stream',
                    'm13' => 'application/x-msmediaview',
                    'm14' => 'application/x-msmediaview',
                    'm3u' => 'audio/x-mpegurl',
                    'maker' => 'application/x-maker',
                    'mdb' => 'application/x-msaccess',
                    'mde' => 'application/vnd.ms-access',
                    'mdf' => 'application/access',
                    'mesh' => 'model/mesh',
                    'mht' => 'message/rfc822',
                    'mhtml' => 'message/rfc822',
                    'midi' => 'audio/midi',
                    'mml' => 'text/mathml',
                    'mny' => 'application/x-msmoney',
                    'moc' => 'text/x-moc',
                    'mpa' => 'video/mpeg',
                    'mpe' => 'video/mpeg',
                    'mpega' => 'audio/mpeg',
                    'mpv2' => 'video/mpeg',
                    'mvb' => 'application/x-msmediaview',
                    'nws' => 'message/rfc822',
                    'o' => 'application/x-object',
                    'old' => 'application/x-trash',
                    'oprc' => 'application/vnd.palm',
                    'p' => 'text/x-pascal',
                    'p12' => 'application/x-pkcs12',
                    'p7b' => 'application/x-pkcs7-certificates',
                    'p7c' => 'application/x-pkcs7-mime',
                    'p7r' => 'application/x-pkcs7-certreqresp',
                    'pas' => 'text/x-pascal',
                    'patch' => 'text/diff',
                    'pcf' => 'application/x-font',
                    'pcf.Z' => 'application/x-font',
                    'pfa' => 'application/x-font',
                    'pfb' => 'application/x-font',
                    'pfx' => 'application/x-pkcs12',
                    'pgp' => 'application/pgp-signature',
                    'php' => 'application/x-httpd-php',
                    'php3' => 'application/x-httpd-php3',
                    'php3p' => 'application/x-httpd-php3-preprocessed',
                    'phps' => 'application/x-httpd-php3-source',
                    'pht' => 'application/x-httpd-php',
                    'pk' => 'application/x-tex-pk',
                    'pkd' => 'application/vnd.hbci',
                    'pko' => 'application/ynd.ms-pkipko',
                    'pm' => 'application/x-perl',
                    'pma' => 'application/x-perfmon',
                    'pmc' => 'application/x-perfmon',
                    'pml' => 'application/x-perfmon',
                    'pmr' => 'application/x-perfmon',
                    'pmw' => 'application/x-perfmon',
                    'po' => 'text/plain',
                    'pot' => 'application/vnd.ms-powerpoint',
                    'pot,' => 'application/vnd.ms-powerpoint',
                    'pps' => 'application/vnd.ms-powerpoint',
                    'pqa' => 'application/vnd.palm',
                    'prf' => 'application/pics-rules',
                    'ps-z' => 'application/postscript',
                    'pt5' => 'application/pagemaker',
                    'ptid' => 'application/vnd.pvi.ptid1',
                    'pub' => 'application/x-mspublisher',
                    'qwd' => 'application/vnd.Quark.QuarkXPress',
                    'qwt' => 'application/vnd.Quark.QuarkXPress',
                    'qxb' => 'application/vnd.Quark.QuarkXPress',
                    'qxl' => 'application/vnd.Quark.QuarkXPress',
                    'qxt' => 'application/vnd.Quark.QuarkXPress',
                    'ram' => 'audio/x-pn-realaudio',
                    'rct' => 'application/prs.nprend',
                    'rmi' => 'audio/mid',
                    'roff' => 'application/x-troff',
                    'sbs' => 'application/x-spss',
                    'scd' => 'application/x-msschedule',
                    'sct' => 'text/scriptlet',
                    'setpay' => 'application/set-payment-initiation',
                    'setreg' => 'application/set-registration-initiation',
                    'shtml' => 'text/html',
                    'sik' => 'application/x-trash',
                    'silo' => 'model/mesh',
                    'skd' => 'application/x-koan',
                    'skm' => 'application/x-koan',
                    'skt' => 'application/x-koan',
                    'smil' => 'application/smil',
                    'snd' => 'audio/basic',
                    'so' => 'application/octet-stream',
                    'spc' => 'application/x-pkcs7-certificates',
                    'spo' => 'application/x-spss',
                    'spp' => 'application/x-spss',
                    'sps' => 'application/x-spss',
                    'sst' => 'application/vnd.ms-pkicertstore',
                    'stl' => 'application/vnd.ms-pkistl',
                    'stm' => 'text/html',
                    'sty' => 'text/x-tex',
                    'swfl' => 'application/x-shockwave-flash',
                    'tbz' => 'application/x-gtar',
                    'tbz2' => 'application/x-gtar',
                    'texi' => 'application/x-texinfo',
                    'tgz' => 'application/x-compressed',
                    'tk' => 'text/x-tcl',
                    'tr' => 'application/x-troff',
                    'trm' => 'application/x-msterminal',
                    'uls' => 'text/iuls',
                    'upa' => 'application/vnd.hbci',
                    'vbs' => 'text/plain',
                    'vfb' => 'text/calendar',
                    'vrml' => 'x-world/x-vrml',
                    'wax' => 'audio/x-ms-wax',
                    'wcm' => 'application/vnd.ms-works',
                    'wdb' => 'application/vnd.ms-works',
                    'wm' => 'video/x-ms-wm',
                    'wma' => 'audio/x-ms-wma',
                    'wmd' => 'application/x-ms-wmd',
                    'wmf' => 'application/x-msmetafile',
                    'wmx' => 'video/x-ms-wmx',
                    'wmz' => 'application/x-ms-wmz',
                    'wp' => 'application/wordperfect',
                    'wps' => 'application/vnd.ms-works',
                    'wrd' => 'application/msword',
                    'wri' => 'application/x-mswrite',
                    'wrz' => 'x-world/x-vrml',
                    'wvx' => 'video/x-ms-wvx',
                    'xaf' => 'x-world/x-vrml',
                    'xht' => 'application/xhtml+xml',
                    'xla' => 'application/vnd.ms-excel',
                    'xlc' => 'application/vnd.ms-excel',
                    'xlm' => 'application/vnd.ms-excel',
                    'xlt' => 'application/vnd.ms-excel',
                    'xlw' => 'application/vnd.ms-excel',
                    'xmt_bin' => 'model/vnd.parasolid.transmit.binary',
                    'xmt_txt' => 'model/vnd.parasolid.transmit.text',
                  );




  public static function mimetype($from)
  {
    if (is_file($from)) {
      if (is_callable('finfo_open')) {
        $test = explode(';', finfo_file(finfo_open(FILEINFO_MIME), $from));
        return array_shift($test) ?: 'application/octet-stream';
      } elseif (is_callable('mime_content_type')) {
        return mime_content_type($from);
      }

      $data = file_get_contents($from, NULL, NULL, 0, 16);

      if ( ! strncmp($data, "\xff\xd8", 2)) {
        return 'image/jpeg';
      } elseif ( ! strncmp($data, "\x89PNG", 4)) {
        return 'image/png';
      } elseif ( ! strncmp($data, "GIF", 3)) {
        return 'image/gif';
      }
    }


    $ext = (strpos($from, '.') !== FALSE) ? \IO\File::ext($from) : $from;
    $ext = ! empty(static::$types[$ext]) ? static::$types[$ext] : 'application/octet-stream';

    return $ext;
  }

  public static function fmtsize($of = 0, $text = '%d %s', $lower = FALSE)
  {
    $key = 0;

    while ($of >= 1024) {
      $of   = $of / 1024;
      $key += 1;
    }

    $test = static::$sizes;
    $unit = preg_replace('/^iB/', 'Bi', "$test[$key]iB");
    $unit = $lower ? strtolower($unit) : $unit;

    $output = strtr($text, array(
      '%d' => (float) number_format($of, 2),
      '%s' => $unit,
    ));

    return $output;
  }

  public static function expand($path, $dir = '.')
  {
    $root = is_dir($dir) ? realpath($dir) : $dir;
    $path = str_replace(array('\\', '/'), '/', $path);

    while (substr($path, 0, 3) === '../') {
      $path = substr($path, 3);
      $root = dirname($root);
    }

    return static::join($root, $path === '.' ? '' : $path);
  }

  public static function join()
  {
    $path = join(DIRECTORY_SEPARATOR, array_filter(func_get_args(), 'strlen'));
    $path = strtr($path, '\\/', DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR);

    return $path;
  }

}

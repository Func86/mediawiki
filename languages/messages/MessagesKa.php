<?php
/** Georgian (ქართული)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Alsandro
 * @author Andrijko Z.
 * @author BRUTE
 * @author Dato deutschland
 * @author David1010
 * @author Dawid Deutschland
 * @author ITshnik
 * @author Kaganer
 * @author MIKHEIL
 * @author Malafaya
 * @author Nemo bis
 * @author Nodar Kherkheulidze
 * @author Reedy
 * @author Sopho
 * @author Temuri rajavi
 * @author Tokoko
 * @author ka.wikipedia.org sysops
 * @author לערי ריינהארט
 * @author გიორგიმელა
 */

$namespaceNames = array(
	NS_MEDIA            => 'მედია',
	NS_SPECIAL          => 'სპეციალური',
	NS_TALK             => 'განხილვა',
	NS_USER             => 'მომხმარებელი',
	NS_USER_TALK        => 'მომხმარებლის_განხილვა',
	NS_PROJECT_TALK     => '$1_განხილვა',
	NS_FILE             => 'ფაილი',
	NS_FILE_TALK        => 'ფაილის_განხილვა',
	NS_MEDIAWIKI        => 'მედიავიკი',
	NS_MEDIAWIKI_TALK   => 'მედიავიკის_განხილვა',
	NS_TEMPLATE         => 'თარგი',
	NS_TEMPLATE_TALK    => 'თარგის_განხილვა',
	NS_HELP             => 'დახმარება',
	NS_HELP_TALK        => 'დახმარების_განხილვა',
	NS_CATEGORY         => 'კატეგორია',
	NS_CATEGORY_TALK    => 'კატეგორიის_განხილვა',
);

$namespaceAliases = array(
	'მონაწილე'           => NS_USER,
	'მონაწილის_განხილვა'   => NS_USER_TALK,
	'მომხმარებელი_განხილვა' => NS_USER_TALK,
	'სურათი'            => NS_FILE,
	'სურათი_განხილვა'     => NS_FILE_TALK,
	'მედიავიკი_განხილვა'    => NS_MEDIAWIKI_TALK,
	'თარგი_განხილვა'      => NS_TEMPLATE_TALK,
	'დახმარება_განხილვა'    => NS_HELP_TALK,
	'კატეგორია_განხილვა'    => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'აქტიური_მომხმარებლები' ),
	'Allmessages'               => array( 'ყველა_შეტყობინება' ),
	'Allpages'                  => array( 'ყველა_გვერდი' ),
	'Ancientpages'              => array( 'მხცოვანი_გვერდები' ),
	'Badtitle'                  => array( 'ცუდი_სათაური' ),
	'Blankpage'                 => array( 'ცარიელი_გვერდი' ),
	'Block'                     => array( 'დაბლოკვა' ),
	'BrokenRedirects'           => array( 'გაწყვეტილი_გადამისამართება' ),
	'Categories'                => array( 'კატეგორიები' ),
	'ChangeEmail'               => array( 'ელ-ფოსტის_შეცვლა' ),
	'ChangePassword'            => array( 'პაროლის_შეცვლა' ),
	'ComparePages'              => array( 'გვერდების_შედარება' ),
	'Confirmemail'              => array( 'ელ-ფოსტის_დადასტურება' ),
	'Contributions'             => array( 'წვლილი' ),
	'CreateAccount'             => array( 'ანგარიშის_შექმნა' ),
	'DoubleRedirects'           => array( 'ორმაგი_გადამისამართება' ),
	'EditWatchlist'             => array( 'კონტროლის_სიის_რედაქტირება' ),
	'Emailuser'                 => array( 'მიწერა_მომხმარებელს' ),
	'Export'                    => array( 'ექსპორტი' ),
	'FileDuplicateSearch'       => array( 'ფაილის_დუბლიკატის_ძიება' ),
	'Import'                    => array( 'იმპორტი' ),
	'BlockList'                 => array( 'ბლოკირებების_სია' ),
	'LinkSearch'                => array( 'ბმულის_ძიება' ),
	'Listadmins'                => array( 'ადმინისტრატორების_სია' ),
	'Listbots'                  => array( 'ბოტების_სია' ),
	'Listfiles'                 => array( 'ფაილების_სია' ),
	'Listgrouprights'           => array( 'ჯგუფის_უფლებათა_სია' ),
	'Listredirects'             => array( 'გადამისამართებების_სია' ),
	'Listusers'                 => array( 'მომხმარებელთა_სია' ),
	'Lonelypages'               => array( 'ობოლი_გვერდები' ),
	'Longpages'                 => array( 'გრძელი_გვერდები' ),
	'Movepage'                  => array( 'გვერდის_გადატანა' ),
	'Mycontributions'           => array( 'ჩემი_წვლილი' ),
	'Mypage'                    => array( 'ჩემი_გვერდი' ),
	'Mytalk'                    => array( 'ჩენი_განხილვა' ),
	'Myuploads'                 => array( 'ჩემი_ატვირთვები' ),
	'Newimages'                 => array( 'ახალი_ფაილები' ),
	'Newpages'                  => array( 'ახალი_გვერდები' ),
	'Popularpages'              => array( 'პოპგვერდები' ),
	'Preferences'               => array( 'კონფიგურაცია' ),
	'Protectedpages'            => array( 'დაცული_გვერდები' ),
	'Protectedtitles'           => array( 'დაცული_სათაურები' ),
	'Randompage'                => array( 'შემთხვევით', 'შემთხვევითი_გვერდი' ),
	'Recentchanges'             => array( 'ბოლოცვლილებები' ),
	'Search'                    => array( 'ძიება' ),
	'Shortpages'                => array( 'მოკლე_გვერდები' ),
	'Specialpages'              => array( 'განსაკუთრებული_გვერდები' ),
	'Statistics'                => array( 'სტატისტიკა' ),
	'Unblock'                   => array( 'ბლოკის_მოხსნა' ),
	'Uncategorizedcategories'   => array( 'უკატეგორიო_კატეგორიები' ),
	'Uncategorizedimages'       => array( 'უკატეგორიო_ფაილები' ),
	'Uncategorizedpages'        => array( 'უკატეგორიო_გვერდები' ),
	'Uncategorizedtemplates'    => array( 'უკატეგორიო_თარგები' ),
	'Undelete'                  => array( 'აღდგენა' ),
	'Unusedcategories'          => array( 'გამოუყენებელი_კატეგორიები' ),
	'Unusedimages'              => array( 'გამოუყენებელი_სურათები' ),
	'Upload'                    => array( 'ატვირთვა' ),
	'Userlogin'                 => array( 'შესვლა' ),
	'Userlogout'                => array( 'გასვლა' ),
	'Userrights'                => array( 'მომხმარებელთა_უფლებები' ),
	'Version'                   => array( 'ვერსია' ),
	'Wantedcategories'          => array( 'მოთხოვნილი_კატეგორიები' ),
	'Wantedfiles'               => array( 'საჭირო_ფაილები' ),
	'Wantedpages'               => array( 'საჭირო_გვერდები' ),
	'Wantedtemplates'           => array( 'საჭირო_თარგები' ),
	'Watchlist'                 => array( 'კონტროლის_სია' ),
	'Withoutinterwiki'          => array( 'ინტერვიკის_გარეშე' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#გადამისამართება', '#REDIRECT' ),
	'nogallery'                 => array( '0', '__უგალერეო__', '__NOGALLERY__' ),
	'currentmonth'              => array( '1', 'მიმდინარე_თვე', 'მიმდინარე_თვე2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'მიმდინარე_თვე1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'მიმდინარე_თვის_სახელი', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'მიმდინარე_თვის_სახელის_აბრევიატურა', 'CURRENTMONTHNAMEGEN' ),
	'currentday'                => array( '1', 'მიმდინარე_დღე', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'მიმდინარე_დღე2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'მიმდინარე_დღის_სახელი', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'მიმდინარე_წელი', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'მიმდინარე_დრო', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'მიმდინარე_საათი', 'CURRENTHOUR' ),
	'pagename'                  => array( '1', 'გვერდის_სახელი', 'PAGENAME' ),
	'namespace'                 => array( '1', 'სახელთა_სივრცე', 'NAMESPACE' ),
	'fullpagename'              => array( '1', 'გვერდის_სრული_სახელი', 'FULLPAGENAME' ),
	'subst'                     => array( '0', 'მიდგმ:', 'SUBST:' ),
	'img_thumbnail'             => array( '1', 'მინიატიურა', 'მინი', 'მინიასლი', 'ცეროდენა', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'მინიატიურა=$1', 'მინი=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'მარჯვნივ', 'right' ),
	'img_left'                  => array( '1', 'მარცხნივ', 'left' ),
	'img_none'                  => array( '1', 'არა', 'none' ),
	'img_width'                 => array( '1', '$1პქ', '$1px' ),
	'img_center'                => array( '1', 'ცენტრი', 'ცენტრში', 'center', 'centre' ),
	'img_page'                  => array( '1', 'გვერდი=$1', 'გვერდი_$1', 'page=$1', 'page $1' ),
	'img_border'                => array( '1', 'საზღვარი', 'border' ),
	'img_top'                   => array( '1', 'ზედა', 'top' ),
	'img_middle'                => array( '1', 'შუა', 'middle' ),
	'img_bottom'                => array( '1', 'ქვედა', 'bottom' ),
	'img_link'                  => array( '1', 'ბმული=$1', 'link=$1' ),
	'img_alt'                   => array( '1', 'ალტ=$1', 'alt=$1' ),
	'sitename'                  => array( '1', 'საიტის_სახელი', 'SITENAME' ),
	'special'                   => array( '0', 'სპეციალური', 'special' ),
);

$linkPrefixExtension = true;
$linkTrail = '/^([a-zაბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ“»]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'ბმულების ხაზგასმა:',
'tog-hideminor' => 'დამალე მცირე რედაქტირება ბოლო ცვლილებებში',
'tog-hidepatrolled' => 'დამალეთ შესწორებული რედაქტირებები ბოლო ცვლილებებში',
'tog-newpageshidepatrolled' => 'დამალეთ შემოწმებული გვერდები ახალი გვერდების სიიდან',
'tog-extendwatchlist' => 'გავრცობილი კონტროლის სია ყველა დაკავშირებული ცვლილების ჩვენების ჩათვლით',
'tog-usenewrc' => 'ბოლო ცვლილებების და კონტროლის სიის ცვლილებების დაჯგუფება',
'tog-numberheadings' => 'ავტომატურად დანომრე ქვესათაურები',
'tog-showtoolbar' => 'რედაქტირების პანელის ჩვენება',
'tog-editondblclick' => 'გვერდების რედაქტირება ორმაგი დაწკაპუნებით',
'tog-editsectiononrightclick' => 'სექციის რედაქტირების ნებართვა სათაურებზე მარჯვენა ღილაკზე დაჭერით',
'tog-rememberpassword' => 'დამიმახსოვრე ამ კომპიუტერზე (მაქსიმუმ $1 {{PLURAL:$1|დღე|დღე}})',
'tog-watchcreations' => 'დაამატე ჩემი კონტროლის სიას ჩემს მიერ შექმნილი გვერდები და ატვირთული ფაილები',
'tog-watchdefault' => 'დაამატე ჩემი კონტროლის სიას ჩემს მიერ რედაქტირებული გვერდები და ფაილები',
'tog-watchmoves' => 'ჩასვი გვერდები და ფაილები, რომლებიც მე გადამაქვს, ჩემს კონტროლის სიაში',
'tog-watchdeletion' => 'ჩასვი გვერდები და ფაილები, რომლებსაც მე ვშლი, ჩემს კონტროლის სიაში',
'tog-minordefault' => 'ყველა რედაქტირების მონიშვნა, როგორც უმნიშვნელო, უპირობოდ',
'tog-previewontop' => 'წინასწარი გადახედვის ჩვენება რედაქტირების დაფამდე',
'tog-previewonfirst' => 'წინასწარი ჩვენება პირველივე რედაქტირებაზე',
'tog-enotifwatchlistpages' => 'მომწერე ელ. ფოსტით, როცა გვერდი ან ფაილი, რომელსაც მე ვაკონტროლებ, შეიცვლება',
'tog-enotifusertalkpages' => 'მომწერე თუ ჩემი განხილვის გვერდი შეიცვლება',
'tog-enotifminoredits' => 'მომწერე ასევე გვერდებისა და ფაილების მცირე რედაქტირებისას',
'tog-enotifrevealaddr' => 'აჩვენე ჩემი ელ-ფოსტის მისამართი შეტყობინების წერილებში',
'tog-shownumberswatching' => 'მაკონტროლებელ მომხმარებელთა რიცხვის ჩვენება',
'tog-oldsig' => 'არსებული ხელმოწერა:',
'tog-fancysig' => 'საკუთარი ვიკიფორმატიანი ხელმოწერა (ავტომატური ბმულის გარეშე)',
'tog-uselivepreview' => 'გამოიყენეთ სწრაფი წინასწარი გადახედვა (ექსპერიმენტული)',
'tog-forceeditsummary' => 'გამაფრთხილე ცარიელი რედაქტირების რეზიუმეს შემთხვევაში',
'tog-watchlisthideown' => 'დამალე ჩემი რედაქტირება კონტროლის სიაში',
'tog-watchlisthidebots' => 'დამალე რობოტის რედაქტირება კონტროლის სიაში',
'tog-watchlisthideminor' => 'დამალეთ საკონტროლო სიიდან მცირე რედაქტირებები',
'tog-watchlisthideliu' => 'დამალეთ დარეგისტრირებულ მოხმარებელთა ცვლილებები ჩემი კონტროლის სიიდან',
'tog-watchlisthideanons' => 'დამალეთ ანონიმურ მომხმარებელთა შესწორებები ჩემი კონტროლის სიიდან',
'tog-watchlisthidepatrolled' => 'დამალეთ საკონტროლო სიიდან პატრულირებული რედაქტირებები',
'tog-ccmeonemails' => 'გამომიგზავნე ელფოსტების ასლები, რომლებსაც მე სხვა მომხმარებლებს ვუგზავნი',
'tog-diffonly' => 'დამალე გვერდის შიგთავსი ცვლილების ქვევით',
'tog-showhiddencats' => 'დამალული კატეგორიების ჩვენება',
'tog-noconvertlink' => 'სათაურის გარდაქმნის ბმულის გამორთვა',
'tog-norollbackdiff' => 'გაუქმებისას გამოტოვეთ ცვლილებათა განსხვავება',
'tog-useeditwarning' => 'გამაფრთხილე, როდესაც დავტოვებ რედაქტირებად გვერდს, დაუმახსოვრებელი ცვლილებებით',
'tog-prefershttps' => 'უსაფრთხო კავშირის მუდამ გამოყენება ავტორიზაციის შემდეგ',

'underline-always' => 'მუდამ',
'underline-never' => 'არასდროს',
'underline-default' => 'დამოკიდებული მომხმარებელზე ან ბრაუზერის არჩევანზე',

# Font style option in Special:Preferences
'editfont-style' => 'რედაქტირების არეალის შრიფტის ტიპი:',
'editfont-default' => 'ბრაუზერის უპირობო არჩევანი',
'editfont-monospace' => 'მონოშირული შრიფტი',
'editfont-sansserif' => 'შრიფტი სანს-სერიფი',
'editfont-serif' => 'შრიფტი სერიფი',

# Dates
'sunday' => 'კვირა',
'monday' => 'ორშაბათი',
'tuesday' => 'სამშაბათი',
'wednesday' => 'ოთხშაბათი',
'thursday' => 'ხუთშაბათი',
'friday' => 'პარასკევი',
'saturday' => 'შაბათი',
'sun' => 'კვ',
'mon' => 'ორშ',
'tue' => 'სამ',
'wed' => 'ოთხ',
'thu' => 'ხუთ',
'fri' => 'პარ',
'sat' => 'შაბ',
'january' => 'იანვარი',
'february' => 'თებერვალი',
'march' => 'მარტი',
'april' => 'აპრილი',
'may_long' => 'მაისი',
'june' => 'ივნისი',
'july' => 'ივლისი',
'august' => 'აგვისტო',
'september' => 'სექტემბერი',
'october' => 'ოქტომბერი',
'november' => 'ნოემბერი',
'december' => 'დეკემბერი',
'january-gen' => 'იანვარი',
'february-gen' => 'თებერვალი',
'march-gen' => 'მარტის',
'april-gen' => 'აპრილი',
'may-gen' => 'მაისის',
'june-gen' => 'ივნისის',
'july-gen' => 'ივლისის',
'august-gen' => 'აგვისტო',
'september-gen' => 'სექტემბრის',
'october-gen' => 'ოქტომბრის',
'november-gen' => 'ნოემბერი',
'december-gen' => 'დეკემბრის',
'jan' => 'იან',
'feb' => 'თებ',
'mar' => 'მარ',
'apr' => 'აპრ',
'may' => 'მაი',
'jun' => 'ივნ',
'jul' => 'ივლ',
'aug' => 'აგვ',
'sep' => 'სექ',
'oct' => 'ოქტ',
'nov' => 'ნოე',
'dec' => 'დეკ',
'january-date' => '$1 იანვარი',
'february-date' => '$1 თებერვალი',
'march-date' => '$1 მარტი',
'april-date' => '$1 აპრილი',
'may-date' => '$1 მაისი',
'june-date' => '$1 ივნისი',
'july-date' => '$1 ივლისი',
'august-date' => '$1 აგვისტო',
'september-date' => '$1 სექტემბერი',
'october-date' => '$1 ოქტომბერი',
'november-date' => '$1 ნოემბერი',
'december-date' => '$1 დეკემბერი',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|კატეგორია|კატეგორიები}}',
'category_header' => 'სტატიები კატეგორიაში „$1“',
'subcategories' => 'ქვეკატეგორიები',
'category-media-header' => 'მედია კატეგორიაში „$1“',
'category-empty' => "''ეს კატეგორია ამჟამად გვერდებს ან მედიას არ შეიცავს.''",
'hidden-categories' => 'დამალული {{PLURAL:$1|კატეგორია|კატეგორიები}}',
'hidden-category-category' => 'დამალული კატეგორიები',
'category-subcat-count' => '{{PLURAL:$2|ეს კატეგორია შეიცავს მხოლოდ შემდეგ ქვეკატეგორიას.|ამ კატეგორიაში მოცემულია $1 ქვეკატეგორია $2-დან.}}',
'category-subcat-count-limited' => 'ეს კატეგორია მოიცავს შემდეგ $1 ქვეკატეგორიას.',
'category-article-count' => '{{PLURAL:$2|ეს კატეგორია შეიცავს მხოლოდ ამ გვერდს.|ამ კატეგორიაში არის შემდეგი $1 გვერდი , საერთო $2-დან.}}',
'category-article-count-limited' => 'შემდეგი {{PLURAL:$1|გვერდი არის|$1 გვერდები არიან}} მოცემულ კატეგორიაში',
'category-file-count' => '{{PLURAL:$2|ეს კატეგორია შეიცავს მხოლოს შემდეგ ფაილს.|შემდეგი {{PLURAL:$1|ფაილი არის|$1 ფაილები არიან}} ამ კატეგორიაში, $2-დან.}}',
'category-file-count-limited' => 'შემდეგი {{PLURAL:$1|ფაილი|$1 ფაილები}} ამ კატეგორიაშია.',
'listingcontinuesabbrev' => 'გაგრძ.',
'index-category' => 'გვერდების ინდექსაცია',
'noindex-category' => 'არ არსებობს ინდექსირებული გვერდები',
'broken-file-category' => 'გვერდები ფაილების არასწორი ბმულებით',
'categoryviewer-pagedlinks' => '($1) ($2)',

'about' => 'შესახებ',
'article' => 'სტატია',
'newwindow' => '(ახალ ფანჯარაში)',
'cancel' => 'გაუქმება',
'moredotdotdot' => 'ვრცლად...',
'morenotlisted' => 'ეს არასრული სიაა.',
'mypage' => 'გვერდი',
'mytalk' => 'განხილვა',
'anontalk' => 'ამ IP-ს განხილვა',
'navigation' => 'ნავიგაცია',
'and' => '&#32;და',

# Cologne Blue skin
'qbfind' => 'მოძებნე',
'qbbrowse' => 'გადახედე',
'qbedit' => 'რედაქტირება',
'qbpageoptions' => 'ეს გვერდი',
'qbmyoptions' => 'ჩემი გვერდები',
'faq' => 'ხშირი შეკითხვები',
'faqpage' => 'Project:ხშირი შეკითხვები',

# Vector skin
'vector-action-addsection' => 'თემის ჩამატება',
'vector-action-delete' => 'წაშლა',
'vector-action-move' => 'გადატანა',
'vector-action-protect' => 'დაცვა',
'vector-action-undelete' => 'აღდგენა',
'vector-action-unprotect' => 'დაცვის შეცვლა',
'vector-view-create' => 'შექმნა',
'vector-view-edit' => 'რედაქტირება',
'vector-view-history' => 'ისტორია',
'vector-view-view' => 'შემოწმებული სტატია',
'vector-view-viewsource' => 'წყაროს ხილვა',
'actions' => 'მოქმედებები',
'namespaces' => 'სახელთა სივრცე',
'variants' => 'ვარიანტები',

'navigation-heading' => 'სანავიგაციო მენიუ',
'errorpagetitle' => 'შეცდომა',
'returnto' => 'დაბრუნდი $1-ზე.',
'tagline' => '{{SITENAME}} გვერდიდან',
'help' => 'დახმარება',
'search' => 'ძიება',
'searchbutton' => 'ძიება',
'go' => 'სტატია',
'searcharticle' => 'გვერდი',
'history' => 'გვერდის ისტორია',
'history_short' => 'ისტორია',
'updatedmarker' => 'განახლდა ჩემი ბოლო შემოსვლის შემდეგ',
'printableversion' => 'დასაბეჭდი ვერსია',
'permalink' => 'მუდმივი ბმული',
'print' => 'ამობეჭდე',
'view' => 'იხილე',
'edit' => 'რედაქტირება',
'create' => 'შექმნა',
'editthispage' => 'გვერდის რედაქტირება',
'create-this-page' => 'ამ გვერდის შექმნა',
'delete' => 'წაშლა',
'deletethispage' => 'გვერდის წაშლა',
'undeletethispage' => 'ამ გვერდის აღდგენა',
'undelete_short' => 'გააუქმე წაშლა {{PLURAL:$1|ერთი რედაქტირება|$1 რედაქტირება}}',
'viewdeleted_short' => '{{PLURAL:$1|წაშლილი რედაქტირების|$1 წაშლილი რედაქტირებების}} ხილვა',
'protect' => 'დაბლოკე',
'protect_change' => 'შეცვლა',
'protectthispage' => 'დაბლოკე ეს გვერდი',
'unprotect' => 'დაცვის შეცვლა',
'unprotectthispage' => 'შეცვალე ამ გვერდის დაცვის დონე',
'newpage' => 'ახალი გვერდი',
'talkpage' => 'მოცემული გვერდის განხილვა',
'talkpagelinktext' => 'განხილვა',
'specialpage' => 'სპეციალური გვერდი',
'personaltools' => 'პირადი ხელსაწყოები',
'postcomment' => 'ახალი სექცია',
'articlepage' => 'სტატიის ნახვა',
'talk' => 'განხილვა',
'views' => 'გადახედვა',
'toolbox' => 'ხელსაწყოები',
'userpage' => 'გადახედე მომხმარებლის გვერდს',
'projectpage' => 'დაათვალიერე პროექტის გვერდი',
'imagepage' => 'ფაილის გვერდის ნახვა',
'mediawikipage' => 'გადახედე შეტყობინების გვერდს',
'templatepage' => 'გადახედე თარგის გვერდს',
'viewhelppage' => 'გადახედე დახმარების გვერდს',
'categorypage' => 'გადახედე კატეგორიის გვერდს',
'viewtalkpage' => 'იხილე დისკუსია',
'otherlanguages' => 'სხვა ენებზე',
'redirectedfrom' => '(გადმომისამართდა $1-დან)',
'redirectpagesub' => 'გადამისამართება გვერდზე',
'lastmodifiedat' => 'ეს გვერდი ბოლოს განახლდა $2, $1.',
'viewcount' => 'ეს გვერდი შემოწმდა {{PLURAL:$1|ერთხელ|$1-ჯერ}}.',
'protectedpage' => 'დაბლოკილი გვერდი',
'jumpto' => 'გადასვლა:',
'jumptonavigation' => 'ნავიგაცია',
'jumptosearch' => 'ძიება',
'view-pool-error' => 'უკაცრავად, მაგრამ სერვერები გადატვირთულია.
შემოსულია ამ გვერდის სანახავად ძალიან ბევრი მოთხოვნა.
გთხოვთ, დაელოდეთ და გაიმერეთ მოთხოვნა ცოტა მოგვიანებით.

$1',
'pool-timeout' => 'ბლოკირების ლოდინის დრო ამოიწურა',
'pool-queuefull' => 'მოთხოვნების დამგროვებელი სავსეა',
'pool-errorunknown' => 'უცნობი შეცდომა',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => '{{SITENAME}}-ის შესახებ',
'aboutpage' => 'Project:შესახებ',
'copyright' => 'შინაარსი წარმოდგენილია $1 პირობებით (თუ სხვა არ არის მითითებული).',
'copyrightpage' => '{{ns:project}}:საავტორო უფლებები',
'currentevents' => 'მიმდინარე მოვლენები',
'currentevents-url' => 'Project:მიმდინარე მოვლენები',
'disclaimers' => 'პასუხისმგებლობის მოხსნა',
'disclaimerpage' => 'Project:პასუხისმგებლობის უარყოფა',
'edithelp' => 'დახმარება',
'helppage' => 'Help:დახმარება',
'mainpage' => 'მთავარი გვერდი',
'mainpage-description' => 'მთავარი გვერდი',
'policy-url' => 'Project:პოლიტიკა',
'portal' => 'საზოგადოების გვერდები',
'portal-url' => 'Project:საზოგადოების გვერდები',
'privacy' => 'კონფიდენციალურობის პოლიტიკა',
'privacypage' => 'Project:ანონიმურობის პოლიტიკა',

'badaccess' => 'ნებართვის შეცდომა',
'badaccess-group0' => 'თქვენ არ გაქვთ მოთხოვნილი მოქმედების შესრულების უფლება',
'badaccess-groups' => 'მოთხოვნილი მოქმედების შესრულება შეუძლიათ მხოლოდ {{PLURAL:$2|შემდეგ ჯგუფში|შემდეგი ჯგუფებიდან ერთ-ერთში}} მყოფ მომხმარებლებს: $1.',

'versionrequired' => 'საჭიროა მედიავიკის ვერსია $1',
'versionrequiredtext' => 'მოცემული გვერდის გამოსაყენებლად საჭიროა მედიავიკის ვერსია $1. იხილეთ [[Special:Version|სპეციალური:ვერსია]]',

'ok' => 'კარგი',
'pagetitle' => '$1 - {{SITENAME}}',
'pagetitle-view-mainpage' => '{{SITENAME}}',
'backlinksubtitle' => '← $1',
'retrievedfrom' => 'მოძიებულია „$1“-დან',
'youhavenewmessages' => 'თქვენ გაქვთ $1 ($2).',
'youhavenewmessagesfromusers' => 'თქვენ გაქვთ $1 {{PLURAL:$3|სხვა მომხმარებლისგან|$3 მომხმარებლებისგან}} ($2).',
'youhavenewmessagesmanyusers' => 'თქვენ გაქვთ $1 ბევრი მომხმარებლისგან ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|ახალი შეტყობინება|999=ახალი შეტყობინება}}',
'newmessagesdifflinkplural' => 'ბოლო {{PLURAL:$1|ცვლილება|999=ცვლილება}}',
'youhavenewmessagesmulti' => 'თქვენ გაქვთ ახალი შეტყობინება $1-ზე',
'editsection' => 'რედაქტირება',
'editold' => 'რედაქტირება',
'viewsourceold' => 'წყაროს ჩვენება',
'editlink' => 'რედაქტირება',
'viewsourcelink' => 'იხილე წყარო',
'editsectionhint' => 'სექციის რედაქტირება: $1',
'toc' => 'სარჩევი',
'showtoc' => 'ჩვენება',
'hidetoc' => 'დამალვა',
'collapsible-collapse' => 'ჩაკეცვა',
'collapsible-expand' => 'გაშლა',
'thisisdeleted' => '$1-ის ჩვენება თუ აღდგენა?',
'viewdeleted' => 'იხილე $1?',
'restorelink' => '{{PLURAL:$1|ერთი წაშლილი რედაქტირება|$1 წაშლილი რედაქტირება}}',
'feedlinks' => 'არხი:',
'feed-invalid' => 'არასწორი არხი ჩაწერისთვის',
'feed-unavailable' => 'სინდიკაციის კენტები მიუწვდომელია',
'site-rss-feed' => '$1-ის არხი RSS',
'site-atom-feed' => '$1-ის არხი Atom',
'page-rss-feed' => '„$1“-ის არხი RSS',
'page-atom-feed' => '„$1“-ის არხი Atom',
'feed-atom' => 'Atom',
'feed-rss' => 'RSS',
'red-link-title' => '$1 (გვერდი არ არსებობს)',
'sort-descending' => 'კლების მიხედვით დალაგება',
'sort-ascending' => 'ზრდის მიხედვით დალაგება',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'სტატია',
'nstab-user' => 'მომხმარებლის გვერდი',
'nstab-media' => 'მედიის გვერდი',
'nstab-special' => 'სპეციალური გვერდი',
'nstab-project' => 'პროექტის გვერდი',
'nstab-image' => 'ფაილი',
'nstab-mediawiki' => 'შეტყობინება',
'nstab-template' => 'თარგი',
'nstab-help' => 'დახმარება',
'nstab-category' => 'კატეგორია',

# Main script and global functions
'nosuchaction' => 'მოქმედება არ არსებობს',
'nosuchactiontext' => 'URL-ის მიერ მითითებული მოქმედება მცდარია.
შესაძლოა შეცდომით აკრიფეთ URL, ან არასწორ ბმულზე გადახვედით.
აგრეთვე შესაძლოა, {{SITENAME}}-ს მიერ გამოყენებულ პროგრამულ უზრუნველყოფაში იყოს შეცდომა.',
'nosuchspecialpage' => 'სპეციალური გვერდი არ არსებობს',
'nospecialpagetext' => '<strong>თქვენ არასწორი სპეციალური გვერდი მოითხოვეთ.</strong>

სწორი სპეციალური გვერდების სია შეგიძლიათ იხილოთ აქ: [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'შეცდომა',
'databaseerror' => 'შეცდომა მონაცემთა ბაზაში',
'databaseerror-query' => 'მოთხოვნა: $1',
'databaseerror-function' => 'ფუნქცია: $1',
'databaseerror-error' => 'შეცდომა: $1',
'laggedslavemode' => 'ყურადღება: გვერდი შესაძლოა არ შეიცავდეს ბოლო ცვლილებებს.',
'readonly' => 'მონაცემთა ბაზა დახურულია',
'enterlockreason' => 'მიუთიეთ ბლოკირების მიზეზი და ხანგრძლივობის ვადა',
'readonlytext' => 'მონაცემთა ბაზა ამჟამად დახურული ახალი რედაქტირებისთვის და სხვა ცვლილებებისთვის, სავარაუდოდ პერიოდული ბაზის გამართვის სამუშაოების გამო, რის შემდეგაც ის კვლავ ნორმალურ ფუნქციას დაუბრუნდება.

ადმინისტრატორმა, რომელმაც ის დაბლოკა, შემდეგი მიზეზი მოიყვანა: $1',
'missing-article' => 'სისტემამ ვერ აღმოაჩინა მოთხოვნილი გვერდის ტექსტი მონაცემთა ბაზაში,  „$1“ $2.

ამგვარი სიტუაცია შესაძლოა წარმოიშვა იმ გვერდის ისტორიის სანახავად, რომელიც უკვე წაშლილი იყო.

იმ შემთხვევაში, თუ საქმე ამაში არ არის, სავარაუდოდ თქვენ აღმოაჩინეთ შეცდომა პროგრამულ კოდში.
გთხოვთ შეატყობინოთ [[Special:ListUsers/sysop|ადმინისტრატორს]],  URL-ის მითითებით.',
'missingarticle-rev' => '(ჩასწორება#: $1)',
'missingarticle-diff' => '(ცვლილება: $1, $2)',
'readonly_lag' => 'მონაცემთა ბაზა ავტომატურად დაიხურა, სანამ შვილობილი ბაზის სერვერები მთავარ ბაზასთან სინქრონიზაციას ახდენს',
'internalerror' => 'შიდა შეცდომა',
'internalerror_info' => 'შიდა შეცდომა: $1',
'fileappenderrorread' => 'შეუძლებელია „$1“-ის წაკითხვა დამატებისას.',
'fileappenderror' => 'ვერ მოხერხდა „$1“ შეერთება „$2“-თან',
'filecopyerror' => '„$1“ ფაილის „$2“-ზე კოპირება ვერ მოხერხდა.',
'filerenameerror' => 'შეუძლებელია ფაილის „$1“ სათაურის შეცვლა სახელწოდებით „$2“.',
'filedeleteerror' => 'ფაილის „$1“ წაშლა ვერ მოხერხდა.',
'directorycreateerror' => 'დირექტორიის „$1“ შექმნა შეუძლებელია.',
'filenotfound' => 'ფაილის „$1“ მოძიება ვერ მოხერხდა.',
'fileexistserror' => 'შეუძლებელია ფაილის „$1“ ჩაწერა: ფაილი არსებობს',
'unexpected' => 'გაუთვალისწინებელი სიდიდე: „$1“=„$2“.',
'formerror' => 'შეცდომა: ფორმის გაგზავნა ვერ მოხერხდა.',
'badarticleerror' => 'ეს მოქმედება ვერ შესრულდება ამ გვერდზე.',
'cannotdelete' => 'გვერდის ან ფაილის „$1“ წაშლა შეუძლებელია.
შესაძლოა, იგი უკვე წაშალა სხვა მომხმარებელმა.',
'cannotdelete-title' => 'გვერდის „$1“ წაშლა შეუძლებელია',
'delete-hook-aborted' => 'შესწორება გაუქმებულია გადამჭერით.
დამატებითი ახსნა არ ჩაწერილა.',
'badtitle' => 'არასწორი სათაური',
'badtitletext' => 'მოთხოვნილი გვერდის სათაური იყო არასწორი, ცარიელი, ან წარმოადგენდა შეცდომით გაკეთებულ ბმულს ენათაშორისი ან ინტერ-ვიკი სათაურიდან.',
'perfcached' => 'შემდეგი მონაცემები აღებულია ქეშიდან და შესაძლოა არ შეიცავდენენ ბოლო ცვლილებებს. ქეშში ინახება მაქსიმუმ $1 {{PLURAL:$1|ჩანაწერი}}.',
'perfcachedts' => 'შემდეგი მონაცემები აღებულია ქეშიდან, უკანასკნელად ის განახლდა $1. ქეშში ინახება მაქსიმუმ $4 {{PLURAL:$4|ჩანაწერი}}.',
'querypage-no-updates' => 'ამ გვერდის განახლება გათიშულია.
წარმოდგენილი მონაცემები არ განახლდება.',
'viewsource' => 'იხილე წყარო',
'viewsource-title' => 'იხილეთ წყარო გვერდისთვის $1',
'actionthrottled' => 'სიჩქარის შეზღუდვა.',
'actionthrottledtext' => 'სპამთან ბრძოლასთან დაკავშირებით აკრძალულია შემდეგი მონაცემების მრავალჯერ გამეორება. გთხოვთ გაიმეოროთ იგი მოგვიანებით.',
'protectedpagetext' => 'ეს გვერდი დაბლოკილია რედაქტირებისათვის ან სხვა მოქმედებისათვის.',
'viewsourcetext' => 'თქვენ შეგიძლიათ ნახოთ ამ გვერდის საწყისი ფაილი და მისი ასლი შექმნათ:',
'viewyourtext' => "თქვენ შეგიძლიათ იხილოთ და დააკოპიროთ  '''თქვენი რედაქტირებების''' საწყისი ტექსტი ამ გვერდზე:",
'protectedinterface' => 'ეს გვერდი წარმოადგენს ტექსტურ ინტერფეისს პროგრამული უზრუნველყოფისათვის და დაცულია ვანდალიზმის აღკვეთის მიზნით.',
'editinginterface' => "'''ყურადღება:''' თქვენ რედაქტორობთ გვერდს, რომელიც პროგრამის ინტერფეისის ტექსტს შეიცავს. 
ამ გვერდზე განხორციელებული რედაქტირება გამოიწვევს ამ ვიკის სხვა მომხმარებელთა სამუშაო ინტერფეისის შეცვლასაც. 
იმისათვის, რომ დაამატოთ ან შეცვალოთ თარგმანები ყველა ვიკიში გთხოვთ, გამოიყენოთ მედიავიკის ლოკალიზაციის პროექტი [//translatewiki.net/ translatewiki.net].",
'cascadeprotected' => 'ეს გვერდი რედაქტირებისგან დაცულია, რადგან იგი ჩართულია შემდეგ {{PLURAL:$1|გვერდში, რომლის |გვერდებში, რომელთა}} დასაცავადაც ჩართულია პარამეტრი "იერარქიული":
$2',
'namespaceprotected' => "თქვენ არ გაქვთ '''$1''' სახელთა სივრცეში გვერდების რედაქტირების უფლება.",
'customcssprotected' => 'თქვენ არ გაქვთ ამ CSS გვერდის რედაქტირების უფლება, ვინაიდან ის სხვა მომხმარებლის პირად კონფიგურაციას შეიცავს.',
'customjsprotected' => 'თქვენ არ გაქვთ ამ JavaScript გვერდის რედაქტირების უფლება, ვინაიდან ის სხვა მომხმარებლის პირად კონფიგურაციას შეიცავს.',
'mycustomcssprotected' => 'თქვენ არ გაქვთ ამ CSS-გვერდის რედაქტირების უფლება.',
'mycustomjsprotected' => 'თქვენ არ გაქვთ ამ JavaScript-გვერდის რედაქტირების უფლება.',
'ns-specialprotected' => 'გვერდების რედაქტირება სახელთა სივრცეში {{ns:special}} შეუძლებელია.',
'titleprotected' => "შემდეგი გვერდის შექმნა აკრძალულია მომხმარებელ [[User:$1|$1]]-ს მიერ.
მოცემულია შემდეგი ახსნა: „''$2''“.",
'filereadonlyerror' => 'ფაილი "$1" შეცვლა ვერ ხერხდება, რადგანაც ფაილის საცავი "$2" მხოლოდ კითხვის რეჟიმშია.

ადმინისტრატორი რომელმაც ის დაბლოკა მიუთითა შემდეგი მიზეზი: "$3".',
'invalidtitle-knownnamespace' => 'დაუშვებელი სათაური სახელთა სივრცე "$2" და ტექსტი "$3"-თან',
'invalidtitle-unknownnamespace' => 'დაუშვებელი სათაური უცნობი სახელთა სივრცის ნომერი $1 და ტექსტი "$2"-ით',
'exception-nologin' => 'შესვლა არ განხორციელდა',
'exception-nologin-text' => 'ამ გვერდის სანახავად ან მოთხოვნილი მოქმედების შესასრულებლად საჭიროა [[Special:Userlogin|სისტემაში შესვლა]].',

# Virus scanner
'virus-badscanner' => "შეცდომა. ვირუსთა უცნობი სკანერი: ''$1''",
'virus-scanfailed' => 'სკანირების შეცდომა  (კოდი $1)',
'virus-unknownscanner' => 'უცნობი ანტივირუსი:',

# Login and logout pages
'logouttext' => "'''თქვენ ამჟამად გასული ხართ სისტემიდან.'''

ზოგიერთმა გვერდმა შესაძლოა ისევ ისე გააგრძელოს ჩვენება თითქოს თქვენ ჯერ კიდევ სისტემაში იყოთ. ამის მოსაგვარებლად საჭიროა თქვენი ბრაუზერის მეხსიერების გაწმენდა.",
'welcomeuser' => 'მოგესალმებით, $1!',
'welcomecreation-msg' => 'თქვენი ანგარიში შექმნილია.
არ დაგავიწყდეთ თქვენი [[Special:Preferences|{{SITENAME}}-ის კონფიგურაციის]] შეცვლა.',
'yourname' => 'მომხმარებელი:',
'userlogin-yourname' => 'მომხმარებლის სახელი',
'userlogin-yourname-ph' => 'შეიყვანეთ თქვენი მომხმარებლის სახელი',
'createacct-another-username-ph' => 'შეიყვანეთ მომხმარებლის სახელი',
'yourpassword' => 'პაროლი:',
'userlogin-yourpassword' => 'პაროლი',
'userlogin-yourpassword-ph' => 'შეიყვანეთ თქვენი პაროლი',
'createacct-yourpassword-ph' => 'შეიყვანეთ პაროლი',
'yourpasswordagain' => 'ხელმეორედ შეიყვანეთ პაროლი',
'createacct-yourpasswordagain' => 'დაადასტურეთ პაროლი',
'createacct-yourpasswordagain-ph' => 'ხელმეორედ შეიყვანეთ პაროლი',
'remembermypassword' => 'დამიმახსოვრე ამ კომპიუტერზე (მაქსიმუმ $1 {{PLURAL:$1|დღე}})',
'userlogin-remembermypassword' => 'დამიმახსოვრე',
'userlogin-signwithsecure' => 'უსაფრთხო კავშირის გამოყენება',
'yourdomainname' => 'თქვენი დომენი',
'password-change-forbidden' => 'თქვენ არ შეგიძლიათ ამ ვიკიში პაროლის შეცვლა.',
'externaldberror' => 'საგარეო მონაცემთა ბაზაში აუტენტიფიკაციის შეცდომაა, ან თქვენ არ გაქვთ საკმარისი უფლებები საგარეო ანგარიშში ცვლილებების შესატანად.',
'login' => 'შესვლა',
'nav-login-createaccount' => 'შესვლა / რეგისტრაცია',
'loginprompt' => '{{SITENAME}}-ში შესასვლელად საჭიროა კუკის (cookies) გააქტიურება.',
'userlogin' => 'შესვლა/ანგარიშის შექმნა',
'userloginnocreate' => 'შესვლა',
'logout' => 'გასვლა',
'userlogout' => 'გასვლა',
'notloggedin' => 'შესული არ ხართ',
'userlogin-noaccount' => 'არ გაქვთ ანგარიში?',
'userlogin-joinproject' => 'შეუერთდით პროექტს {{SITENAME}}',
'nologin' => "ჯერ არ ხართ რეგისტრირებული? '''$1'''.",
'nologinlink' => 'გახსენით ანგარიში',
'createaccount' => 'გახსენი ანგარიში',
'gotaccount' => "უკვე რეგისტრირებული ხართ? '''$1'''",
'gotaccountlink' => 'შესვლა',
'userlogin-resetlink' => 'ავტორიზაციის მონაცემები დაგავიწყდათ?',
'userlogin-resetpassword-link' => 'დაგავიწყდათ პაროლი?',
'helplogin-url' => 'Help:შესვლა',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|დახმარება სისტემაში შესასვლელად]]',
'userlogin-createanother' => 'სხვა ანგარიშის შექმნა',
'createacct-join' => 'ქვემოთ მიუთითეთ ინფორმაცია თქვენ შესახებ.',
'createacct-another-join' => 'ქვემოთ შეიყვანეთ ახალი ანგარიშის ინფორმაცია.',
'createacct-emailrequired' => 'ელ. ფოსტის მისამართი',
'createacct-emailoptional' => 'ელ. ფოსტის მისამართი (არასავალდებულო)',
'createacct-email-ph' => 'შეიყვანეთ თქვენი ელ. ფოსტის მისამართი',
'createacct-another-email-ph' => 'შეიყვანეთ ელ.ფოსტის მისამართი',
'createaccountmail' => 'გამოიყენეთ შემთხვევითობის მეთოდით შერჩეული დროებითი პაროლი და გააგზავნეთ მითითებულ ელ.ფოსტის მისამართზე',
'createacct-realname' => 'ნამდვილი სახელი (არააუცილებელი)',
'createaccountreason' => 'მიზეზი:',
'createacct-reason' => 'მიზეზი',
'createacct-reason-ph' => 'რატომ ქმნით ახალ ანგარიშს?',
'createacct-captcha' => 'უსაფრთხოების შემოწმება',
'createacct-imgcaptcha-ph' => 'შეიყვანეთ ზემოთ მოცემული ტექსტი',
'createacct-submit' => 'შექმენით თქვენი ანგარიში',
'createacct-another-submit' => 'სხვა ანგარიშის შექმნა',
'createacct-benefit-heading' => '{{SITENAME}} შექმნილია თქვენნაირი ადამიანების მიერ.',
'createacct-benefit-body1' => '{{PLURAL:$1|რედაქტირება|რედაქტირება}}',
'createacct-benefit-body2' => '{{PLURAL:$1|გვერდი|გვერდი}}',
'createacct-benefit-body3' => 'ბოლო {{PLURAL:$1|მომხმარებელი|მომხმარებელი}}',
'badretype' => 'თქვენს მიერ შეყვანილი პაროლები ერთმანეთს არ ემთხვევა.',
'userexists' => 'ეს სახელი უკვე გამოყენებულია.
გთხოვთ, აირჩიეთ სხვა.',
'loginerror' => 'შეცდომა შესვლაში',
'createacct-error' => 'ანგარიშის შექმნის შეცდომა',
'createaccounterror' => '$1 ანგარიშის შექმნა ვერ მოხერხდა.',
'nocookiesnew' => 'მომხმარებლის ჩანაწერი შექმნილია, მაგრამ თქვენ არ გაგივლიათ რეგისტრაცია. {{SITENAME}} იყენებს cookies, რომლებიც თქვენს ბრაუზერში გათიშულია. გთხოვთ, აამოქმედოთ ისინი და შემდგომ ხელახლა გაიარეთ რეგისტრაცია.',
'nocookieslogin' => '{{SITENAME}} მომხმარებლების შესვლისთვის იყენებს "ქუქის ჩანაწერს". თქვენ იგი გათიშეთ. გთხოვთ, ჩართოთ ისინი და ხელმეორედ მოსინჯოთ.',
'nocookiesfornew' => 'მომხმარებლის ანგარიში არ შექმნილა, რადგან მისი წყარო ვერ დადასტურდა.
უზრუნველყოფილი უნდა იყოს ჭდეების აქტიურობა. შემდეგ განაახლეთ გვერდი და სცადეთ ხელახლა',
'nocookiesforlogin' => '{{int:nocookieslogin}}',
'noname' => 'თქვენს მიერ მითითებული მომხმარებლის სახელი ქმედითი არ არის.',
'loginsuccesstitle' => 'სისტემაში შესვლა განხორციელდა.',
'loginsuccess' => "'''ამჟამად შესული ხართ {{SITENAME}}-ში როგორც „$1“.'''",
'nosuchuser' => 'მომხმარებელი სახელად $1 არ არსებობს.
მომხმარებელთა სახელები გრძნობადია ასოების რეგისტრამდე..
შეამოწმეთ სახელის დაწერა ან[[Special:UserLogin/signup|შექმენით ახალი ანგარიში]].',
'nosuchusershort' => 'მომხმარებელი სახელით „$1“ არ არსებობს. შეამოწმეთ მართლწერა.',
'nouserspecified' => 'საჭიროა მომხმარებლის სახელის მითითება.',
'login-userblocked' => 'ეს მომხმარებელი დაბლოკილია. სისტემაში შესვლა არაა ნებადართული.',
'wrongpassword' => 'პაროლი არასწორად არის შეყვანილი. სცადეთ განმეორებით.',
'wrongpasswordempty' => 'პაროლი არ არის შეყვანილი. სცადეთ განმეორებით.',
'passwordtooshort' => 'შეტანილი პაროლი ძალიან მოკლეა.
იგი უნდა შეიცავდეს მინიმუმ $1 სიმბოლოს.',
'password-name-match' => 'შეტანილი პაროლი უნდა განსხვავდებოდეს მომხმარებლის სახელისგან.',
'password-login-forbidden' => 'ამ მომხმარებლის სახელისა და პაროლის გამოყენება აკრძალულია.',
'mailmypassword' => 'ახალი პაროლის დაყენება',
'passwordremindertitle' => 'ახალი დროებითი პაროლი {{SITENAME}}-თვის',
'passwordremindertext' => 'ვიღაცამ (შესაძლოა თქვენ, IP მისამართით $1) მოითხოვა
ახალი პაროლის გაგზავნა {{SITENAME}}-სთვის ($4).
დროებითი პაროლი მოხმარებლისთვის „$2“ ამჟამად არის „$3“.
თუ ეს თქვენი სურვილი იყო, მოგიწევთ სისტემაში შესვლა და ახალი პაროლის შერჩევა.
თქვენს დროებით პაროლს ვადა გაუვა $5 დღეში.

თუ ეს მოთხოვნა სხვამ გააკეთა ან უკვე გაგახსენდათ თქვენი პაროლი და
აღარ გსურთ მისი შეცვლა, შეგიძლიათ ყურად არ იღოთ ეს შეტყობინება
და გააგრძელოთ ძველი პაროლის გამოყენება.',
'noemail' => 'აქ „$1“ მომხმარებლის ელ. ფოსტის მისამართი მითითებული არ არის.',
'noemailcreate' => 'თქვენ უნდა მიუთითოთ ელ-ფოსტის კორექტული მისამართი.',
'passwordsent' => 'ახალი პაროლი გაიგზავნა ელ-ფოსტით მომხმარებელს "$1".
გთხოვთ შეხვიდეთ სისტემაში მისი მიღების შემდეგ.',
'blocked-mailpassword' => 'თქვენი IP მისამართი რედაქტირებისთვის დაბლოკილია, ამიტომ არ შეგიძლიათ პაროლის აღდგენის გამოყენება კონფლიქტის გამო.',
'eauthentsent' => 'A confirmation email has been sent to the specified email address.
Before any other email is sent to the account, you will have to follow the instructions in the email, to confirm that the account is actually yours.',
'throttled-mailpassword' => 'პაროლის შეხსენება უკვე გაგზავნილია ბოლო {{PLURAL:$1|საათის|$1 საათის}} განმავლობაში.
ბოროტად გამოყენების თავიდან აცილებისთვის, მხოლოდ ერთი შეხსენება იგზავნება ყოველ {{PLURAL:$1|საათში|$1 საათში}}.',
'mailerror' => 'შეცდომა ფოსტის გაგზავნაში: $1',
'acct_creation_throttle_hit' => '24 საათის განმავლობაში თქვენი IP-მისამართითან {{PLURAL:$1|შეიქმნა $1 ანგარიში|შეიქმნა $1 ანგარიშები|შეიქმნა $1 ანგარიშის}}, რაც არის აკრძალული დროის ამ მონაკვეთისთის.
აქედან გამომდინარე თქვენი IP-მისამართის მქონე მომხმარებლები ვეღარ შექმნიან ანგარიშები.',
'emailauthenticated' => 'თქვენი ელ.ფოსტის მისამართი დადასტურებულია $2 $3-ზე.',
'emailnotauthenticated' => 'თქვენი ელ.ფოსტის მისამართი ჯერ არ არის დადასტურებული. 
არცერთი შემდეგი ფუნქციისათვის წერილები არ გამოიგზავნება.',
'noemailprefs' => 'თქვენ არ გაქვთ ელ. ფოსტის მისამართი მითითებული,აღნიშნული ფუნქციები ამის გამო არ დროისთვის შეუძლებელია.',
'emailconfirmlink' => 'დაადასტურეთ თქვენი ელ. ფოსტის მისამართი',
'invalidemailaddress' => 'ელ. ფოსტის მისამართი არ იქნა მიღებული, ვინაიდან იგი არასწორი ფორმატითაა წარმოდგენილი.
გთხოვთ, სწორად შეიყვანოთ იგი ან წაშალოთ ეს ველი.',
'cannotchangeemail' => 'ანგარიშის ელ-ფოსტის მისამართების შეცვლა ამ ვიკიში შეუძლებელია.',
'emaildisabled' => 'ამ საიტს არ შეუძლია ელ.ფოსტის გაგზავნა.',
'accountcreated' => 'ანგარიში შეიქმნა',
'accountcreatedtext' => 'მომხმარებლის ანგარიში [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|განხილვა]]) შექმნილია.',
'createaccount-title' => 'ანგარიშის შექმნა {{SITENAME}}-თვის',
'createaccount-text' => 'ვიღაცამ შექმნა ანგარიში სახელით „$2“ და პაროლით „$3“ თქვენი ელექტრონული ფოსტისთვის {{SITENAME}}-ში ($4). გთხოვთ დარეგისტრირდეთ და შეცვალოთ პაროლი.

შეგიძლიათ ყურადღება არ მიაქციოთ ამ შეტყობინებას, თუ ანგარიში შეცდომით შეიქმნა.',
'usernamehasherror' => 'მომხმარებლის სახელი არ უნდა შეიცავდეს დიეზის სიმბოლოს.',
'login-throttled' => 'You have made too many recent login attempts.
Please wait $1 before trying again.',
'login-abort-generic' => 'თქვენი ავტორიზაცია წარუმატებელია – გაუქმდა',
'loginlanguagelabel' => 'ენა: $1',
'suspicious-userlogout' => 'თქვენი მოთხოვნა გასვლის შესახებ გაუქმებულია, რადგანაც იგი გავს ქეშირებადი პროქსის ან არაკორექტული ბრაუზერის მოთხოვნას.',

# Email sending
'php-mail-error-unknown' => 'ამოუცნობი შეცდომა PHP-ის mail() ფუნქციაში',
'user-mail-no-addy' => 'ცდილობდა ელ-ფოსტის გაგზავნას ელ-ფოსტის მისამართის გარეშე.',
'user-mail-no-body' => 'ცდილობდა ცარიელი ან უაზროდ მოკლე შინაარსის ელექტრონული წერილის გაგზავნას.',

# Change password dialog
'changepassword' => 'პაროლის შეცვლა',
'resetpass_announce' => 'თქვენ შემოხვედით დროებით ელ-ფოსტის კოდით. რეგისტრაციის დასრულებისთვის, უნდა შექმნათ ახალი პაროლი აქ:',
'resetpass_text' => '<!-- აქ დაამატეთ ტექსტი -->',
'resetpass_header' => 'შეცვალეთ ანგარიშის პაროლი',
'oldpassword' => 'ძველი პაროლი:',
'newpassword' => 'ახალი პაროლი:',
'retypenew' => 'ახალი პაროლი განმეორებით:',
'resetpass_submit' => 'მიუთითეთ პაროლი და დარეგისტრირდით',
'changepassword-success' => 'თქვენი პაროლი წარმატებით შეიცვალა!',
'resetpass_forbidden' => 'პაროლის შეცვლა შეუძლებელია',
'resetpass-no-info' => 'კონკრეტულად ამ გვერდთან სამუშაოდ თქვენ უნდა წარადგინოთ თავი სისტემისადმი.',
'resetpass-submit-loggedin' => 'პაროლის შეცვლა',
'resetpass-submit-cancel' => 'გაუქმება',
'resetpass-wrong-oldpass' => 'არასწორი დროებითი ან მოქმედი პაროლი.
შესაძლოა თქვენ წარმატებით შეცვალეთ პაროლი ან მოითხოვეთ ახალი.',
'resetpass-temp-password' => 'დროებითი პაროლი:',
'resetpass-abort-generic' => 'პაროლის შეცვლა შეჩერდა გაფართოების მიერ.',
'resetpass-expired' => 'თქვენს პაროლს ვადა გაუვიდა. გთხოვთ, დააყენოთ ახალი.',

# Special:PasswordReset
'passwordreset' => 'პაროლის აღდგენა',
'passwordreset-text-one' => 'შეავსეთ ეს ფორმა, რათა კვლავ დააყენოთ თქვენი პაროლი.',
'passwordreset-text-many' => '{{PLURAL:$1|ელ.ფოსტაზე დროებითი პაროლის მისაღებად შეავსეთ ერთ-ერთი ველი.}}',
'passwordreset-legend' => 'პაროლის აღდგენა',
'passwordreset-disabled' => 'ამ ვიკიში პაროლის კვლავ დაყენების ფუნქცია გამორთულია.',
'passwordreset-emaildisabled' => 'ამ ვიკიში ელ.ფოსტის ფუნქციები გამორთულია.',
'passwordreset-username' => 'მომხმარებლის სახელი:',
'passwordreset-domain' => 'დომენი:',
'passwordreset-capture' => 'გამოსული ელ-ფოსტის ხილვა?',
'passwordreset-capture-help' => 'თუ მონიშნავთ ამ უჯრას, მაშინ თქვენ შეგეძლებათ მომხმარებლისათვის გაგზავნილი ელ.ფოსტის ნახვა (დროებითი პაროლით).',
'passwordreset-email' => 'ელ. ფოსტის მისამართი:',
'passwordreset-emailtitle' => 'ანგარიშის მონაცემები {{SITENAME}}-თვის',
'passwordreset-emailtext-ip' => 'ვიღაცამ (შესაძლოა თქვენ, ამ IP-მისამართიდან $1) მოითხოვა თქვენი 
პაროლის თავიდან დაყენება საიტისათვის {{SITENAME}} ($4).
{{PLURAL:$3|შემდეგი ანგარიში მიბმულია|შემდეგი ანგარიშები მიბმულია}} ამ ელ.ფოსტის მისამართზე:

$2

{{PLURAL:$3|ეს დროებითი პაროლი|ეს დროებითი პაროლები}} იმოქმედებს {{PLURAL:$5|ერთი დღე|$5 დღე}}.
თქვენ უნდა შეხვიდეთ სისტემაში და აირჩიოთ ახალი პაროლი.
თუ თქვენ არ გაგიკეთებიათ აღნიშნული მოთხოვნა, ან გაიხსენეთ თქვენი პაროლი
და აღარ გსურთ მისი შეცვლა, მაშინ შეგიძლიათ იგნორირება გაუკეთოთ ამ შეტყობინებას
და გააგრძელოთ თქვენი ძველი პაროლის გამოყენება.',
'passwordreset-emailtext-user' => 'მომხმარებელმა $1 პროექტიდან {{SITENAME}} მოითხოვა თქვენი 
პაროლის თავიდან დაყენება საიტისათვის {{SITENAME}} ($4).
{{PLURAL:$3|შემდეგი ანგარიში მიბმულია|შემდეგი ანგარიშები მიბმულია}} ამ ელ.ფოსტის მისამართზე:

$2

{{PLURAL:$3|ეს დროებითი პაროლი|ეს დროებითი პაროლები}} იმოქმედებს {{PLURAL:$5|ერთი დღე|$5 დღე}}.
თქვენ უნდა შეხვიდეთ სისტემაში და აირჩიოთ ახალი პაროლი.
თუ თქვენ არ გაგიკეთებიათ აღნიშნული მოთხოვნა, ან გაიხსენეთ თქვენი პაროლი
და აღარ გსურთ მისი შეცვლა, მაშინ შეგიძლიათ იგნორირება გაუკეთოთ ამ შეტყობინებას
და გააგრძელოთ თქვენი ძველი პაროლის გამოყენება.',
'passwordreset-emailelement' => 'მომხმარებლის სახელი: $1
დროებითი პაროლი: $2',
'passwordreset-emailsent' => 'პაროლის თავიდან დასაყენებელი ელ.ფოსტა გაიგზავნა.',
'passwordreset-emailsent-capture' => 'ქვემოთ ნაჩვენები პაროლის თავიდან დასაყენებელი წერილი გაიგზავნა.',
'passwordreset-emailerror-capture' => 'ქვემოთ მოცემულია შექმნილი პაროლის დასაყენებელი წერილი, რომლის გაგზავნაც {{GENDER:$2|მომხმარებელთან}} ვერ მოხერხდა: $1 გამო',

# Special:ChangeEmail
'changeemail' => 'ელ-ფოსტის მისამართის შეცვლა',
'changeemail-header' => 'ანგარიშის ელ-ფოსტის მისამართის შეცვლა',
'changeemail-text' => 'შეავსეთ ეს ფორმა თქვენი ელ-ფოსტის მისამართის შესაცვლელად. თქვენი პაროლის შეყვანა დაგჭირდებათ ამ ცვლილების დასადასტურებლად.',
'changeemail-no-info' => 'თქვენ ავტირიზებული უნდა იყოთ ამ გვერდთან უშუალო წვდომისთვის.',
'changeemail-oldemail' => 'ელ-ფოსტის ამჟამინდელი მისამართი:',
'changeemail-newemail' => 'ახალი ელ-ფოსტის მისამართი:',
'changeemail-none' => '(არაფერი)',
'changeemail-password' => 'თქვენი პაროლი პროექტში {{SITENAME}}:',
'changeemail-submit' => 'ელ-ფოსტის შეცვლა',
'changeemail-cancel' => 'გაუქმება',

# Special:ResetTokens
'resettokens-tokens' => 'ჟეტონები:',
'resettokens-token-label' => '$1 (მიმდინარე მნიშვნელობა: $2)',

# Edit page toolbar
'bold_sample' => 'მუქი ტექსტი',
'bold_tip' => 'მუქი ტექსტი',
'italic_sample' => 'კურსივი',
'italic_tip' => 'კურსივი',
'link_sample' => 'ბმულის სათაური',
'link_tip' => 'შიდა ბმული',
'extlink_sample' => 'http://www.example.com ბმულის სათაური',
'extlink_tip' => 'გარე ბმული (გახსოვდეთ http:// პრეფიქსი)',
'headline_sample' => 'სათაურის ტექსტი',
'headline_tip' => 'ქვესათაური',
'nowiki_sample' => 'ჩასვით დაუფორმატებელი ტექსტი აქ',
'nowiki_tip' => 'ვიკის ფორმატირების იგნორირება',
'image_sample' => 'მაგალითი.jpg',
'image_tip' => 'ჩასმული ფაილი',
'media_sample' => 'მაგალითი.ogg',
'media_tip' => 'ბმული ფაილზე',
'sig_tip' => 'თქვენი ხელმოწერა და დრო',
'hr_tip' => 'ჰორიზონტალური ხაზი (ნუ გამოიყენებთ ხშირად)',

# Edit pages
'summary' => 'რეზიუმე:',
'subject' => 'თემა/სათაური:',
'minoredit' => 'მცირე რედაქტირება',
'watchthis' => 'უთვალთვალე ამ გვერდს',
'savearticle' => 'შენახვა',
'preview' => 'წინასწარი გადახედვა',
'showpreview' => 'წინასწარი გადახედვა',
'showlivepreview' => 'შავი ნიმუში',
'showdiff' => 'ცვლილებების ჩვენება',
'anoneditwarning' => "'''გაფრთხილება:''' თქვენ არ ხართ რეგისტრირებული. თქვენი IP მისამართი ჩაიწერება ამ გვერდის რედაქტირების ისტორიაში.",
'anonpreviewwarning' => "''თქვენ არ შესულხართ სისტემაში. თქვენი IP მისამართი შეინახება გვერდის ისტორიაში. ''",
'missingsummary' => "'''შეხსენება:''' თქვენ არ მიგითითებიათ რედაქტირების რეზიუმე.
თუ ისევ დააწკაპუნებთ შენახვაზე, თქვენი რედაქტირება რეზიუმეს გარეშე დამახსოვრდება.",
'missingcommenttext' => 'გთხოვთ კომენტარი შეიყვანოთ ქვემოთ.',
'missingcommentheader' => "'''შეხსენება:''' თქვენ ამ კომენტარისთვის სათაური/თემა არ მიგითითებიათ. თუ შენახვაზე \"{{int:savearticle}}\" დააწკაპუნებთ, თქვენი ცვლილება მის გარეშე იქნება შენახული.",
'summary-preview' => 'რეზიუმეს წინასწარი გადახედვა:',
'subject-preview' => 'თემის/სათაურის წინასწარი გადახედვა:',
'blockedtitle' => 'მომხმარებელი ბლოკირებულია',
'blockedtext' => "'''თქვენი მომხმარებლის სახელი ან IP მისამართი დაბლოკილ იქნა.'''

ბლოკირება განახორციელა $1-მ.
მიზეზად დასახელდა შემდეგი: ''$2''.

* დაბლოკვის დასაწყისი: $8
* ბლოკის ვადის გასვლის დრო: $6
* დაბლოკილ იქნა: $7

შეგიძლიათ დაუკავშირდეთ $1-ს ან რომელიმე სხვა [[{{MediaWiki:Grouppage-sysop}}|ადმინისტრატორს]] დაბლოკვის განსახილველად.
გაითვალისწინეთ, რომ თქვენ ვერ შეძლებთ გამოიყენოთ ფუნქცია „მომხმარებლისთვის ელ. ფოსტის გაგზავნა“, თუ არ გაქვთ მითითებული მოქმედი ელ. ფოსტის მისამართი თქვენი [[Special:Preferences|ანგარიშის კონფიგურაციაში]] ან თუ დაბლოკვის შედეგად გაქვთ ამ ფუნქციის გამოყენების ნებართვა ჩამორთმეული.
თქვენი ამჟამინდელი IP მისამართია $3, ხოლო ბლოკის იდენტიფიკატორი #$5.
გთხოვთ, მიუთითოთ ყველა ზემოთხსენებული მონაცემი თქვენს კორესპონდენციაში.",
'autoblockedtext' => "თქვენი IP მისამართი ავტომატურად დაიბლოკა, ვინაიდან მას სხვა მომხმარებელი იყენებდა, რომელიც დაბლოკა $1-მა.
საბაბად მოყვანილი იყო შემდეგი:

:''$2''

* ბლოკის დაწყების თარიღი: $8
* ბლოკის ვადის გასვლა: $6
*დაიბლოკა $7

შეგიძლიათ დაუკავშირდეთ $10ს ან რომელიმე სხვა
[[{{MediaWiki:Grouppage-sysop}}|ადმინისტრატორს]] ამ ბლოკის განსახილველად.

გაითვალისწინეთ, რომ თქვენ ვერ გამოიყენებთ „მისწერეთ ელ-წერილი ამ მომხმარებელს“ ფუნქციას თუ თქვენ შემოწმებული ელ-ფოსტის მისამართი
არ გაქვთ მითითებული თქვენს [[Special:Preferences|კონფიგურაციაში]] და არ ხართ დაბლოკილი მისი გამოყენებისთვის.

თქვენი IP — $3. თქვენი დაბლოკვის საიდენტიფიკაციო ნომერია $5. გთხოვთ მიუთითოთ ეს ნომერი, ნებისმიერ მიმოწერაში.",
'blockednoreason' => 'მიზეზი არ არის მითითებული',
'whitelistedittext' => 'გვერდების რედაქტირებისათვის თქვენ გესაჭიროებათ $1.',
'confirmedittext' => 'გვერდების დარედაქტირებამდე უნდა დაადასტუროთ თქვენი ელფოსტის მისამართი. გთხოვთ [[Special:Preferences|მომხმარებლის პარამეტრებში]] მიუთითოთ და დაამოწმოთ ელფოსტის მისამართი.',
'nosuchsectiontitle' => 'სექცია არ არსებობს',
'nosuchsectiontext' => 'თქვენ სცადეთ არარსებული სექციის რედაქტირება.
შესაძლოა იგი გადაადგილდა ან წაიშალა თქვენს მიერ გვერდის ხილვისას.',
'loginreqtitle' => 'რეგისტრაცია აუცილებელია',
'loginreqlink' => 'შესვლა',
'loginreqpagetext' => 'თქვენ უნდა $1 სხვა გვერდები აჩვენოთ.',
'accmailtitle' => 'პაროლი გაგზავნილია.',
'accmailtext' => "შემთხვევითი მეთოდით შექმნილი პაროლი მომხმარებლისათვის [[User talk:$1|$1]] გაგზავნილია მისამართზე $2.

ავტორიზაციის გავლის შემდეგ შესაძლებელი იქნება ამ ანგარიშის  ''[[Special:ChangePassword|პაროლის შეცვლა]]'' ანგარიშში შესვლის გვერდზე.",
'newarticle' => '(ახალი)',
'newarticletext' => 'ბმულის მეშვეობით თქვენ მოხვდით გვერდზე, რომელიც ჯერ არ არსებობს.
გვერდის შესაქმნელად შეიყვანეთ ინფორმაცია ქვემო ფანჯარაში
(იხ. [[{{MediaWiki:Helppage}}|დახმარების გვერდი]] დამატებითი ინფორმაციისთვის).
თუ ამ გვერდზე შეცდომით მოხვდით, დაბრუნდით უკან თქვენი ბრაუზერის მეშვეობით.',
'anontalkpagetext' => "----''ეს არის ანონიმური მომხმარებლის განხილვის გვერდი, რომელსაც ანგარიში ჯერ არ შეუქმნია ან არ იყენებს მას.

შესაბამისად, ჩვენ მისი ციფრული IP მისამართი უნდა გამოვიყენოთ მისი იდენტიფიცირებისთვის.

ამგვარი მისამართი შეიძლება რამდენიმე მომხმარებელმა გამოიყენოს.

თუ თქვენ ანონიმური მომხმარებელი ხართ და თვლით, რომ სხვისთვის გამიზნული მითითება მიიღეთ, გთხოვთ [[Special:UserLogin/signup|შექმენით ანგარიში ან დარეგისტრირდით]] მომავალში გაუგებრობის თავიდან ასაცილებლად.''",
'noarticletext' => 'ამჟამად ამ გვერდზე ტექსტი არ არსებობს.
თქვენ შეგიძლიათ [[Special:Search/{{PAGENAME}}|მოძებნოთ ამ გვერდის სათაური]] სხვა გვერდებზე,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} მოძებნოთ შესაბამისი ჟურნალები],
ან [{{fullurl:{{FULLPAGENAME}}|action=edit}} დაიწყოთ ამ გვერდის რედაქტირება]</span>.',
'noarticletext-nopermission' => 'ამ დროისთვის ეს გვერდი ცარიელია.
თქვენ შეგიძლიათ [[Special:Search/{{PAGENAME}}|მოძებნოთ ეს სათაური]] სხვა გვერდებზე,
ან <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} მოძებნოთ ჟურნალების შესაბამისი ჩანაწერები].</span> თქვენ არ გაქვთ ამ გვერდის შექმნის ნებართვა.',
'missing-revision' => 'ვერსია $1 გვერდისათვის „{{PAGENAME}}“ არ არსებობს.

ეს ჩვეულებრივ ხდება მაშინ, თუ მოძველებული ბმულით გადადიხართ გვერდზე, რომელიც წაიშალა.
დეტალური ინფორმაცია შესაძლებელია იყოს [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} წაშლების ჟურნალში].',
'userpage-userdoesnotexist' => 'მომხმარებლის ანგარიში „$1“ არ არსებობს. დარწმუნდით, რომ ნამდვილად გსურთ ამ ანგარიშის შექმნა ან შესწორება.',
'userpage-userdoesnotexist-view' => 'მომხმარებელი „$1“ არ არის დარეგისტრირებული.',
'blocked-notice-logextract' => 'ეს მომხმარებელი უკვე დაიბლოკა.
დაბლოკვის მიზეზი შემდეგშია:',
'clearyourcache' => "'''შენიშვნა:''' შენახვის შემდეგ შესაძლოა დაგჭირდეთ ბრაუზერის ქეშის გაწმენდა ცვლილებების სანახავად. 
* '''Firefox / Safari:''' დააჭირეთ ''Shift'' ''Reload''-ზე დაწკაპებისას, ან დააჭირეთ ''Ctrl-F5'', ან ''Ctrl-R'' (''⌘-R'' Mac-ზე); 
* '''Google Chrome:''' დააჭირეთ ''Ctrl-Shift-R'' (''⌘-Shift-R'' Mac-ზე);
* '''IE:''' დააჭირეთ ''Ctrl'' ''Refresh''-ზე დაწკაპებისას, ან დააჭირეთ ''Ctrl-F5'';
* '''Opera''' გაწმინდეთ კეში ''Tools→Preferences''-დან.",
'usercssyoucanpreview' => "'''რჩევა:''' შენახვამდე გამოიყენეთ ღილაკი \"{{int:showpreview}}\" თქვენი ახალი CSS ტესტირებისთვის.",
'userjsyoucanpreview' => "'''რჩევა:''' შენახვამდე გამოიყენეთ ღილაკი \"{{int:showpreview}}\" თქვენი ახალი JS ტესტირებისთვის.",
'usercsspreview' => "'''გახსოვდეთ, რომ თქვენ მხოლოდ წინასწარ გადახედვას უყურებთ თქვენს მომხმარებლის CSS-ს, ის ჯერ შენახული არ არის!'''",
'userjspreview' => "'''გახსოვდეთ, რომ თქვენ მხოლოდ ტესტირებას უკეთებთ ან აკვირდებით წინასწარ ხედს თქვენი მომხმარებლის ჯავასკრიპტს - ის ჯერ არ არის დამახსოვრებული!'''",
'sitecsspreview' => "'''გახსოვდეთ, რომ თქვენ ამ CSS-ის მხოლოდ წინასწარ გადახედვას უყურებთ.'''
'''ის ჯერ არ არის დამახსოვრებული!'''",
'sitejspreview' => "'''გახსოვდეთ, რომ თქვენ ამ JavaScript კოდის მხოლოდ წინასწარ გადახედვას უყურებთ.'''
'''ის ჯერ არ არის დამახსოვრებული!'''",
'userinvalidcssjstitle' => "'''ყურადღება:''' გაფორმების თემა «$1» არ არის ნაპოვნი. გახსოვდეთ, რომ .css და .js გვერდებს უნდა ჰქონდეს მხოლოდ ზეხაზური სათაური, მაგ. «{{ns:user}}:ვიღაცა/vector.css», და არა «{{ns:user}}:ვიღაცა/Vector.css».",
'updated' => '(განახლდა)',
'note' => "'''შენიშვნა:'''",
'previewnote' => "'''დაიმახსოვრეთ, ეს მხოლოდ წინასწარი გადახედვაა.'''
თქვენი ცვლილებები ჯერ არ შენახულა!",
'continue-editing' => 'რედაქტირებაზე გადასვლა',
'previewconflict' => 'შავი ნიმუში უჩვენებს ტექსტს ზედა რედაქტირების ფანჯარაში, როგორც ის გამოჩნდება თუ თქვენ მას შეინახავთ.',
'session_fail_preview' => "'''უკაცრავად! ვერ შევძელით თქვენი რედაქტირების შენახვა სესიის მონაცემთა დაკარგვის გამო.
გთხოვთ ისევ სცადოთ.
თუ პრობლემა განმეორდა, სცადეთ [[Special:UserLogout|სისტემიდან გასვლა]] და ხელახლა შემოსვლა.'''",
'session_fail_preview_html' => "'''სამწუხაროდ, ჩვენ ვერ განვახორციელეთ თქვენი რედაქტირება სესიის მონაცემთა დაკარგვის გამო.'''

''რადგანაც ამ ვიკის აქვს დაუმუშავებელი HTML ჩართული, წინასწარი გადახედვა დამალულია ჯავასკრიპტის შეტევის საწინააღმდეგოდ სიფრთხილის მიზნით.''

'''თუ ეს მიღებული რედაქტირების მცდელობა იყო, გთხოვთ ისევ სცადოთ. თუ იგი კვლავ არ მუშაობს, სცადეთ თავიდან [[Special:UserLogout/დარეგისტრირებ]]ა (შესვლა)'''",
'token_suffix_mismatch' => "'''თქვენი შესწორება გაუქმდა რადგანაც პროგრამა არასწორედ აღიქვამს პუნქტუაციის ნიშნებს რედაქტირების ფანჯარაში. შესწრება გაუქმდა სტატიის არ გაფუჭების მიზნით. შესაძლოა ეს გამოწვეულია გაფუჭებული ვებ პროქსის გამოყენებით.'''",
'edit_form_incomplete' => "'''რედაქტირებების ნაწილმა სერვერამდე ვერ მიაღწია; გთხოვთ, შეამოწმეთ თქვენი რედაქტირებების სრულყოფილება და სცადეთ განმეორებით.'''",
'editing' => 'რედაქტირება: $1',
'creating' => 'იქმნება: „$1“',
'editingsection' => 'რედაქტირება - $1 (სექცია)',
'editingcomment' => 'რედაქტირება: $1 (ახალი სექცია)',
'editconflict' => 'რედაქტირების კონფლიქტი: $1',
'explainconflict' => "სხვა მომხმარებელმა შეცვალა ეს გვერდი მას შემდეგ რაც თქვენ დაიწყეთ მისი რედატირება.
ზედა ტექსტური ველი შეიცავს გვერდის შიგთავსს მისი ამჟამინდელი სახით.
თქვენი ცვლილებები ნაჩვენებია ქვედა ტექსტურ ველში.
თქვენ მოგიწევთ თქვენი ცვლილებების შერწყმა არსებულ ტექსტთან.
'''მხოლოდ''' ზედა ველში არსებული ტექსტი იქნება შენახული, როდესაც \"{{int:savearticle}}\" დააჭერთ.",
'yourtext' => 'თქვენი ტექსტი',
'storedversion' => 'შენახული ვერსია',
'nonunicodebrowser' => "'''გაფრთხილება: თქვენი ბრაუზერი უნიკოდთან თავსებადი არ არის. ჩვენ ვცდილობთ ამ პრობლემის გადაჭრას, რათა თქვენ შეძლოთ უსაფრთხოდ შეიტანოთ ცვლილებები გვერდებზე: არა-ASCII ნიშნები რედაქტირების ფანჯარაში გამოჩნდება როგორც ჰექსადეციმალური კოდები.'''",
'editingold' => "'''ყურადღება: თქვენ ამუშავებთ ამ გვერდის მოძველებულ ვერსიას. გვერდის შენახვის შემდეგ მომდევნო ვერსიებში გაკეთებული ცვლილებები დაიკარგება.'''",
'yourdiff' => 'განსხვავებები',
'copyrightwarning' => "ყურადღება მიაქციეთ: ნებისმიერი წვლილი გვერდზე {{SITENAME}} $2 ლიცენზიას ექვემდებარება (იხ. $1 დეტალებისთვის). თუ არ გსურთ თქვენი ნამუშევარი თავისუფლად გავრცელდეს და მისი დაუნდობელი რედაქტირება მოხდეს, მაშინ ნუ შეიყვანთ მას აქ.<br />
თქვენ ასევე პირობას დებთ, რომ ეს თქვენი დაწერილია, ან გადმოღებულია საზოგადოებრივი დომენიდან, ან მსგავსი თავისუფალი წყაროდან.
'''ნუ შემოიტანთ საავტორო უფლებებით დაცულ ნაშრომს ავტორის თანხმობის გარეშე!'''",
'copyrightwarning2' => "*გაითვალისწინეთ, რომ ნებისმიერი წვლილი {{SITENAME}}-ში შეიძლება ჩასწორდეს, შეიცვალოს ან წაიშალოს სხვა რედაქტორების მიერ.
*თუ არ გსურთ, რომ თქვენი ნამუშევარი შეუზღუდავად იქნეს რედაქტირებული, მას აქ ნუ განათავსებთ.<br />
*თქვენ აგრეთვე პირობას დებთ, რომ თქვენს მიერ განთავსებული ტექსტი თქვენი დაწერილია, ან გადმოწერილია საზოგადოებრივი დომენიდან ან მსგავსი თავისუფალი წყაროდან. (იხ. $1 დეტალებისთვის).
*'''ნუ შემოიტანთ საავტორო უფლებებით დაცულ ნაშრომს ავტორის ნებართვის გარეშე!'''",
'longpageerror' => "'''შეცდომა: თქვენს მიერ აკრეფილი ტექსტის ზომა {{PLURAL:$1|$1 კილობაიტია}}, რაც აღემატება, დადგენილ {{PLURAL:$2|$2 კილობაიტიან}} ზღვარს. გვერდის შენახვა შეუძლებელია.'''",
'readonlywarning' => "'''გაფრთხილება: მონაცემთა ბაზა დახურულია პერიოდული შემოწმებისთვის, შესაბამისად თქვენ ვერ შეძლებთ რედაქტირებას ამ მომენტში.'''
სასურველია ტექსტის ასლი შეინახოთ ტექსტურ რედაქტორში და მოგვიანებით შემოიტანოთ.

მონაცემთა ბაზის დამბლოკველმა ადმინისტრატორმა შემდეგი კომენტარი დატოვა: $1",
'protectedpagewarning' => "'''ყურადღება:  ეს გვერდი დაბლოკილია და მისი რედაქტირება შეუძლიათ მხოლოდ მომხმარებლებს ადმინისტრატორის უფლებებით'''
იხილეთ დაცვის ჟურნალის ჩანაწერი",
'semiprotectedpagewarning' => "'''ყურადღება:''' ეს გვერდი დაბლოკილია და მისი რედაქტირება მხოლოდ რეგისტრირებულ მომხმარებლებს შეუძლიათ.
იხილეთ ჟურნალი დამატებითი ინფორმაციისთვის:",
'cascadeprotectedwarning' => "'''გაფრთხილება:''' ეს გვერდი ჩაკეტილია ისე რომ მისი რედაქტირება მხოლოდ ადმინისტრატორებს შეუძლია, რადგან იგი ეკუთვნის შემდეგ კასკადურად დაცვის {{PLURAL:$1|გვერდს|გვერდებს}}:",
'titleprotectedwarning' => "'''ყურადღება! გვერდი ამ სათაურით დაცულია, მისი რედაქტირება შეუძლიათ მხოლოდ [[Special:ListGroupRights|სპეციალური უფლებების]] მქონე მომხმარებლებს.'''
იხილეთ ჟურნალი დამატებითი ინფორმაციისთვის:",
'templatesused' => 'ამ გვერდზე გამოყენებული {{PLURAL:$1|თარგი|თარგები}}:',
'templatesusedpreview' => '{{PLURAL:$1|თარგი, რომელიც|თარგები, რომლებიც}} წინასწარ გადახედვის გვერდზეა გამოყენებული:',
'templatesusedsection' => 'ამ სექციაში გამოყენებული {{PLURAL:$1|თარგი|თარგები}}:',
'template-protected' => '(დაცული)',
'template-semiprotected' => '(ნახევრად დაცული)',
'hiddencategories' => 'ეს გვერდი გაერთიანებულია $1 დამალულ კატეგორიაში.',
'edittools' => '<!-- აქ განთავსებული ტექსტი ნაჩვენები იქნება რედაქტირებისა და ატვირთვის ფორმების ქვეშ. -->',
'edittools-upload' => '-',
'nocreatetext' => 'ამ გვერდზე შეუძლებელია ახალი გვერდის შექმნა არსებული აკრძალვის გამო. თქვენ შეგიძლიათ უკან დაბრუნება და არსებული გვერდის რედაქტირება ან [[სპეციალური:Userlogin|შესვლა და ანგარიშის შექმნა]]',
'nocreate-loggedin' => 'თქვენ არ გაქვთ ახალი გვერდების შექმნის უფლება.',
'sectioneditnotsupported-title' => 'სექციის რედაქტირება ვერ ხერხდება',
'sectioneditnotsupported-text' => 'სექციის რედაქტირება გათიშულია ამ გვერდისთვის',
'permissionserrors' => 'ნებართვის შეცდომა',
'permissionserrorstext' => 'თქვენ არ გაქვთ ამის გაკეთების უფლება, შემდეგი {{PLURAL:$1|მიზეზის|მიზეზების}} გამო:',
'permissionserrorstext-withaction' => 'თქვენ არ გაქვთ ამ მოქმედების - „$2“ განხორციელების ნებართვა შემდეგი {{PLURAL:$1|მიზეზის|მიზეზის}} გამო:',
'recreate-moveddeleted-warn' => "'''გაფრთხილება: თქვენ ხელახლა ქმნით გვერდს, რომელიც ადრე წაიშალა.'''

გთხოვთ დაფიქრდეთ, მისაღები არის თუ არა ამ გვერდის რედაქტირების გაგრძელება.
ინფორმაციისთვის ქვემოთ მოყვანილია ამ გვერდის წაშლის ისტორია:",
'moveddeleted-notice' => 'ეს გვერდი წაიშალა. ინფორმაციის მისაღებად ქვემოთ წარმდგენილია შესაბამისი ჩანაწერები წაშლისა და გადაქრმევის ჟურნალებიდან.',
'log-fulllog' => 'ყველა ჟურნალის ხილვა',
'edit-hook-aborted' => 'შესწორება გაუქმებულია გადამჭერით.
დამატებითი ახსნა არ ჩაწერილა.',
'edit-gone-missing' => 'გვერდის განახლეა შეუძლებელია.
შესაძლოა, იგი წაიშალა.',
'edit-conflict' => 'რედაქციების კონფლიქტი.',
'edit-no-change' => 'თქვენი შესწორება არ იქნა შენახული, რადგანაც ტექსტის ცვლილება არ მოხდა.',
'postedit-confirmation' => 'თქვენი რედაქტირება შენახულია.',
'edit-already-exists' => 'ახალი გვერდის შექმნა არ მოხერხდა.
ის უკვე არსებობს.',
'defaultmessagetext' => 'შეტყობინების სტანდარტული ტექსტი',
'content-failed-to-parse' => '$2-ის შინაარსი არ შეესაბამება $1-ის ტიპს: $3.',
'invalid-content-data' => 'დაუშვებელი მონაცემები',
'content-not-allowed-here' => '„$1“-ის შინაარსი დაუშვებელია [[$2]] გვერდზე',
'editwarning-warning' => 'სხვა გვერდზე გადასვლამ შესაძლოა გამოიწვიოს ცვლილებების დაკარგვა.
თუკი თქვენ დარეგისტრირებული ხართ სისტემაში, მაშინ შეგიძლიათ გამორთოთ ეს გაფრთხილება თქვენი კონფიგურაციის განყოფილებაში „რედაქტირება“ .',

# Content models
'content-model-wikitext' => 'ვიკიტექსტი',
'content-model-text' => 'ჩვეულებრივი ტექსტი',
'content-model-javascript' => 'ჯავასკრიპტი',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'ყურადღება. მოცემული გვერდი შეიცავს ძალიან ბევრ მძიმე ფუნქციას.

გამოძახებათა რაოდენობა შეზღუდულია $2 დონეზე.ამ შემთხვევაში უნდა გაკეთდეს  $1 გამოძახება.',
'expensive-parserfunction-category' => 'გვერდი ძალიან ბევრი მძიმე ფუნქციის მოთხოვნით',
'post-expand-template-inclusion-warning' => 'ყურადღება. ჩართული თარგების ზომა ძალიან დიდია. ზოგი თარგი შეიძლება დარჩეს გათიშული.',
'post-expand-template-inclusion-category' => 'გვერდები, რომლებისთვისაც აღემატებულია ნებადართული მაქსიმალური მძიმე ფუნქციების ჩართვა',
'post-expand-template-argument-warning' => "'''ფრთხილად:''' ეს გვერდი შეიცავს თარგის მინიმუმ ერთ მნიშვნელობას, რომელიც ნამეტანად გრძელია გახსნისთვის.
ამგვარი მნიშვნელობები გამოიტოვება.",
'post-expand-template-argument-category' => 'გვერდები, რომლებიც შეიცავენ თარგების გამოტოვებულ მნიშვნელობებს',
'parser-template-loop-warning' => 'აღმოჩენილია ლუპი თარგ: [[$1]]-ში',
'parser-template-recursion-depth-warning' => 'თარგის რეკურსიის სიღრმე აემატება დაშვებულს ($1)',
'language-converter-depth-warning' => 'ენათა გადამუშავების კონვერციის ლიმიტი ამოწურულია ($1)',
'node-count-exceeded-category' => 'გვერდები, რომელშიც გადამეტებულია კვანძების რაოდენობა',
'node-count-exceeded-warning' => 'გვერდზე გადამეტებულია კვანძების რაოდენობა',
'expansion-depth-exceeded-category' => 'გვერდები გახსნის სიღრმის გადამეტებით',
'expansion-depth-exceeded-warning' => 'გვერდზე გადამეტებულია ჩადგმების ზღვარი',
'parser-unstrip-loop-warning' => 'აღმოჩენილია ციკლური ბმული',
'parser-unstrip-recursion-limit' => 'გადამეტებულია რეკურსიის ზღვარი ($1)',
'converter-manual-rule-error' => 'შეცდომა ენის ხელით გარდაქმნის წესში',

# "Undo" feature
'undo-success' => 'რედაქტირების გაუქმება შესაძლებელია. გთხოვთ შეამოწმოთ განსხვავება ქვევით, რათა დარწმუნდეთ, რომ ეს ის არის რაც თქვენ გსურთ, შემდეგ კი შეინახეთ ცვლილებები რათა დაასრულოთ რედაქტირების გაუქმება.',
'undo-failure' => 'რედაქტირების გაუქმება შეუძლებელია კონფლიქტური შუალედური რედაქტირებების გამო.',
'undo-norev' => 'რედაქტირება ვერ გაუქმდება რადგანაც არ არსებობს ან წაშლილი იქნა.',
'undo-summary' => '[[Special:Contributions/$2|$2-ის]]([[User talk:$2|განხილვა]]) ცვლილებების გაუქმება (№$1)',

# Account creation failure
'cantcreateaccounttitle' => 'ანგარიშის შექმნა ვერ ხერხდება',
'cantcreateaccount-text' => "ამ IP-მისამართიდან აიკრძალა (<b>$1</b>) მომხმარებელ [[User:$3|$3]]-ის მიერ.

$3 -ემ ამგვარი ახსნა : ''$2''",

# History pages
'viewpagelogs' => 'ამ გვერდისთვის სარეგისტრაციო ჟურნალების ჩვენება',
'nohistory' => 'ამ გვერდს განხილვის გვერდი ცარიელი აქვს.',
'currentrev' => 'მიმდინარე შესწორება',
'currentrev-asof' => 'მიმდინარე ცვლილება $1 მდგომარეობით',
'revisionasof' => '$1-ის ვერსია',
'revision-info' => '$1-ის ვერსია, შეტანილი $2-ის მიერ',
'previousrevision' => '←წინა ვერსია',
'nextrevision' => 'შემდეგი ვერსია→',
'currentrevisionlink' => 'მიმდინარე ვერსია',
'cur' => 'მიმდ.',
'next' => 'შემდეგი',
'last' => 'ბოლო',
'page_first' => 'პირველი',
'page_last' => 'ბოლო',
'histlegend' => "ვერსიების შედარება: აირჩიეთ სასურველი ვერსიები რადიო-რგოლების მონიშვნით და დააწკაპუნეთ შედარების ღილაკზე.<br />
ლეგენდა: '''({{int:cur}})''' = სხვაობა მიმდინარე ვერსიასთან, '''({{int:last}})''' = სხვაობა წინა ვერსიასთან, '''{{int:minoreditletter}}''' = მცირე შესწორება.",
'history-fieldset-title' => 'დათვალიერების ისტორია',
'history-show-deleted' => 'მხოლოდ წაშლილი',
'histfirst' => 'უძველესი',
'histlast' => 'უახლესი',
'historysize' => '($1 ბაიტი)',
'historyempty' => '(ცარიელი)',

# Revision feed
'history-feed-title' => 'რედაქტირების ისტორია',
'history-feed-description' => 'ამ გვერდის შესწორებათა ისტორია ვიკიში',
'history-feed-item-nocomment' => '$1  $2-ზე',
'history-feed-empty' => 'თქვენს მიერ მოძიებული გვერდი არ არსებობს.
შესაძლოა იგი წაშლილ იქნა ვიკიდან, ან მისი სათაური შეიცვალა.
სცადეთ [[Special:Search|searching on the wiki]] მსგავსი გვერდების სანახავად.',

# Revision deletion
'rev-deleted-comment' => '(რეზიუმე წაიშალა)',
'rev-deleted-user' => '(მომხმარებლის სახელი წაიშალა)',
'rev-deleted-event' => '(ჟურნალის ჩანაწერი წაშლილია)',
'rev-deleted-user-contribs' => '[მომხმარებლის სახელი ან IP დამალულია. რეაქტირება ასევე დამალულია]',
'rev-deleted-text-permission' => "გვერდის ეს ჩასწორება '''წაიშალა'''.
განმარტება შესაძლოა მოცემული იყოს [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} წაშლათა ჟურნალში].",
'rev-deleted-text-unhide' => "გვერდის ეს ვერსია '''წაიშალა'''.
ახსნა-განმარტება მოცემულია [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} წაშლის ჟურნალში].
სურვილის შემთხვევაში თქვენ შეგიძლიათ [$1 იხილოთ აღნიშნული ვერსია].",
'rev-suppressed-text-unhide' => "გვერდის ეს ვერსია '''დაიმალა'''.
ახსნა-განმარტება მოცემულია [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} დამალვის ჟურნალში].
სურვილის შემთხვევაში თქვენ შეგიძლიათ [$1 იხილოთ აღნიშნული ვერსია].",
'rev-deleted-text-view' => "გვერდის ეს ვერსია '''წაიშალა'''.
თქვენ შეგიძლიათ მისი ხილვა. წაშლის მიზეზები მოცემულია [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} წაშლის ჟურნალში].",
'rev-suppressed-text-view' => "გვერდის ეს ვერსია '''დამალულ იქნა'''.
როგორც ადმინისტრატორს, თქვენ შეგიძლიათ მისი ხილვა.
დამატებითი ინფორმაცია მოცემულია [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} დამალვათა ჟურნალში].",
'rev-deleted-no-diff' => "არ შეგიძლიათ ამ განსხვავების ნახვა, ვინაიდან ერთ-ერთი ცვლილება '''წაიშალა'''.
დეტალები შესაძლოა მოცემული იყოს  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} წაშლათა ჟურნალში].",
'rev-suppressed-no-diff' => "თქვენ არ შეგიძლიათ ამ განსხვავების ნახვა, რადგან ერთ-ერთი ცვლილება '''წაშლილია'''.",
'rev-deleted-unhide-diff' => "გვერდის ერთ-ერთი ვერსია '''წაიშალა'''.
დეტალები შეგიძლიათ იხილოთ [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} წაშლის ჟურნალში].
სურვილის შემთხვევაში, თქვენ შეგიძლიათ [$1 იხილოთ განსხვავება ვერსიაში].",
'rev-suppressed-unhide-diff' => "ამ ვერსიის შედარების ერთ–ერთი ვერსია '''დაიმალა'''.
დეტალები შეგიძლიათ იხილოთ [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} დამალვების ჟურნალში].
თქვენ, შეგიძლიათ [$1 იხილოთ ეს შედარება].",
'rev-deleted-diff-view' => "ამ ვერსიის შედარების ერთ-ერთი ვერსია '''წაიშალა'''.
თქვენ შეგიძლიათ იხილოთ ეს შედარება. დეტალები შეგიძლიათ იხილოთ [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} წაშლის ჟურნალში].",
'rev-suppressed-diff-view' => "ამ ვერსიის შედარების ერთ–ერთი ვერსია '''დაიმალა'''.
თქვენ, შეგიძლიათ იხილოთ ეს შედარება. დეტალები შეგიძლიათ იხილოთ [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} დამალვების ჟურნალში].",
'rev-delundel' => 'ჩვენება/დამალვა',
'rev-showdeleted' => 'ჩვენება',
'revisiondelete' => 'ცვლილებების წაშლა/დაბრუნება',
'revdelete-nooldid-title' => 'სამიზნო ვერსია არ არის მითითებული',
'revdelete-nooldid-text' => 'თქვენ არ დაგინიშნიათ სამიზნო ვერსია (ვერსიები) ამ ფუნქციის გასახორციებლად.',
'revdelete-no-file' => 'მოთხოვნილი ფაილი არ არსებობს.',
'revdelete-show-file-confirm' => 'დარწმუნებული ხართ, რომ გსურთ ამ ფაილის წაშლილი ვერსიის ნახვა, „<nowiki>$1</nowiki>“ $2, $3-დან ?',
'revdelete-show-file-submit' => 'ჰო',
'revdelete-selected' => "'''[[:$1]]-ის {{PLURAL:$2|მონიშნული ცვლილება|მონიშნული ცვლილებები}}:'''",
'logdelete-selected' => "'''ჟურნალის {{PLURAL:$1|არჩეული ჩანაწერი|არჩეული ჩანაწერები}}:'''",
'revdelete-text' => "'''გვერდებისა და მოქმედებების წაშლილი ნაწილები დარჩება ისტორიაში და ჟურნალებში, მაგრამ მათ ნაწილს ვერ ნახავენ ჩვეულებრივი მომხმარებლები.'''
პროექტის ადმინისტრატორებს ექნებათ შესაძლებლობა {{SITENAME}}ში დაინახონ ღია და არწაშლილი ნაწილი, და შეძლებენ აღადგინონ იგივე ინტერფეისის მეშვეობით, გარდა იმ შემთხვევებისა, როდესაც დამატებითი შეზღუდვა მოქმედებს.",
'revdelete-confirm' => 'გთხოვთ დაადასტუროთ, რომ გსურთ ქმედების განხორციელება. ასევე ვიმედოვნებთ, რომ ყველაფერს აკეთებთ  [[{{MediaWiki:Policy-url}}|წესებთან შესაბამისობაში]].',
'revdelete-suppress-text' => "დამალვა შეიძლება განხორციელდეს '''მხოლოდ''' შემდეგ შემთხვევებში:
* პოტენციურად ცილისმწამებლური ინფორმაცია
* უადგილო პირადი ინფორმაცია
*: ''სახლის მისამართი, ტელეფონის ნომრები, პასპორტის ნომერი და ა.შ.''",
'revdelete-legend' => 'შეზღუდვის დაყენება',
'revdelete-hide-text' => 'შეცვლილი ტექსტი',
'revdelete-hide-image' => 'ფაილის შინაარსის დამალვა',
'revdelete-hide-name' => 'დამალეთ მოქმედება და მისი ობიექტი',
'revdelete-hide-comment' => 'რედაქტირების კომენტარი',
'revdelete-hide-user' => 'რედაქტორის მომხმარებლის სახელი/IP-მისამართი',
'revdelete-hide-restricted' => 'დამალეთ მონაცემები ადმინისტრატორთაგან',
'revdelete-radio-same' => '(არ შეცვალოთ)',
'revdelete-radio-set' => 'დამალული',
'revdelete-radio-unset' => 'ხილული',
'revdelete-suppress' => 'დამალეთ მონაცემები ადმინისტრატორთაგან',
'revdelete-unsuppress' => 'მოხსენით შეზღუდვა ვერსიების აღდგენისგან',
'revdelete-log' => 'მიზეზი:',
'revdelete-submit' => '{{PLURAL:$1|არჩეული ვერსიის|არჩეული ვერსიების}} განხორციელება',
'revdelete-success' => "'''ვერსიის ხილვადობა შეიცვალა.'''",
'revdelete-failure' => "'''ვერსიის ხილვადობა არ შეიძლება დაყენებული იქნას:'''
$1",
'logdelete-success' => 'მოვლენის ხილვადობა წარმატებით შეიცვალა.',
'logdelete-failure' => "'''ჟურნალის ხილვადობა არ არის დაყენებული:'''
$1",
'revdel-restore' => 'ხილვადობის შეცვლა',
'pagehist' => 'გვერდის ისტორია',
'deletedhist' => 'წაშლილი ისტორია',
'revdelete-hide-current' => 'ჩანაწერის დამალვის შეცდიმა $2, $1: ეს არის მოქმედი ვერსია:
იგი არ შეიძლება დამალული იქნას.',
'revdelete-show-no-access' => 'ჩანაწერის გახსნის შეცდომა $2-დან, $1: ეს ჩანაწერი მონიშნულია როგორც «შეზღუდული». თქვენ მას ვერ იხილავთ.',
'revdelete-modify-no-access' => 'ჩანაწერის გასწორების შეცდომა $2-დან, $1: ეს ჩანაწერი მონიშნულია როგორც «შეზღუდული». თქვენ მას ვერ იხილავთ.',
'revdelete-modify-missing' => 'შეცდომა ID $1 ნაწეის რედაქტირებისას, იგი არ იმყოფება მონაცემთა ბაზაში!',
'revdelete-no-change' => "'''ყურადღება:''' ჩანაწერს $2, $1 უკვე აქვს მოთხოვნილი ხილვადობის კონფიგურაცია.",
'revdelete-concurrent-change' => 'შეცდომა ჩანაწერის შესწორებისას $2-დან, $1: მისი სტატუსი უკვე შეცვლილია სხვა ვინმეს მიერ თქვენი რედაქირეის სესიის დროს.
თხოვთ შეამოწმოთ ყველა ჟღნალი',
'revdelete-only-restricted' => 'თქვენ ვერ დამალავთ ჩანაწერს ($2 $1) ადმინისტრატორისგან მანამ, სანამ არ აირჩევთ დამალვის სხვა პარამეტრებს.',
'revdelete-reason-dropdown' => '*წაშლის გავრცელებული მიზეზები
** საავტორო უფლებების დარღვევა
** მიუღებელი პირადი ინფორმაცია
** მიუღებელი მომხმარებლის სახელი
** პოტენციურად ღირსების შემლახველი ინფორმაცია',
'revdelete-otherreason' => 'სხვა/დამატებითი მიზეზი:',
'revdelete-reasonotherlist' => 'სხვა მიზეზი',
'revdelete-edit-reasonlist' => 'წაშლის მიზეზების რედაქტირება',
'revdelete-offender' => 'ავტორის რედაქცია:',

# Suppression log
'suppressionlog' => 'დამალვათა ჟურნალი',
'suppressionlogtext' => 'ქვემოთ მოცემულია წაშლისა და ბლოკირებების სია, რომელიც მოიცავს ადმინისტრატორებისაგან დაფარულ მასალებს.
იხილეთ [[Special:BlockList|ბლოკირებების სიაში]] მიმდინარე ბლოკირებები.',

# History merging
'mergehistory' => 'გვერდების ისტორიის შერწყმა',
'mergehistory-header' => 'ეს გვერდი გაძლევთ ნებართვას გააერთიანოთ ორი სხვადასხვა გვერდის ისტორია, რაც შეინარჩუნებს მათ ერთიანობას.',
'mergehistory-box' => 'გააერთიანეთ 2 გვერდის ისტორია:',
'mergehistory-from' => 'წყაროს გვერდი:',
'mergehistory-into' => 'სამიზნე გგვერდი:',
'mergehistory-list' => 'რედაქტირებების გაერთიანებადი ისტორია',
'mergehistory-merge' => 'შემდეგი ვერსიები [[:$1]] შეიძლება გაერთიანებული იქნას [[:$2]]-ში. გამოიყენეთ გადამრთველი არჩეული დიაპაზონის შესწორებათა შერწყმისთვის. გაითვალისწინეთ, რომ ნავიგაციური ბმულების გამოყენებისასმონაცემები დაიკარგება.',
'mergehistory-go' => 'აჩვენეთ გაერთიანებული ცვლილებები',
'mergehistory-submit' => 'ცვლილებების შერწყმა',
'mergehistory-empty' => 'რაიმე ცვლილების შერწყმა შეუძლებელია.',
'mergehistory-success' => '$3 {{PLURAL:$3|შესწორება|შესწორებები|შესწორებების}}  [[:$1]]-დან წარმატებით {{PLURAL:$3|გადაიტანა|გადაიტანნენ|გადატანილი იქნენ}}  [[:$2]]-ში.',
'mergehistory-fail' => 'ვერ მოხერხდა გვერდების ისტორიის გაერთიანება, გთხოვთ შეამოწმოთ გვერდის პაარამეტრები და დრო.',
'mergehistory-no-source' => 'დანიშნულების გვერდი $1 არ არსებობს.',
'mergehistory-no-destination' => 'დანიშნულების გვერდი $1 არ არსებობს.',
'mergehistory-invalid-source' => 'წყაროს უნდა ჰქონდეს სწორი სათაური.',
'mergehistory-invalid-destination' => 'სამიზნე გვერდს უნდა ჰქონდეს სწორი სათაური.',
'mergehistory-autocomment' => '[[:$1]] შეერთდა [[:$2]]-სთან',
'mergehistory-comment' => 'გადატანა[[:$1]]-ის [[:$2]]-ში: $3',
'mergehistory-same-destination' => 'თავდაპირველი და სამიზნე გვერდები უნდა განსხვავდებოდეს.',
'mergehistory-reason' => 'მიზეზი:',
'mergehistory-revisionrow' => '$1 ($2) $3 . . $4 $5 $6',

# Merge log
'mergelog' => 'გაერთიანებათა ჟურნალი',
'pagemerge-logentry' => 'გაერთიანდა [[$1]] და [[$2]] (ვერსიები $3-მდე)',
'revertmerge' => 'შერწყმის გაუქმება',
'mergelogpagetext' => 'ქვემოთ წარმოდგენილია ამ გვერდის ბოლო გაერთიანებათა სია',

# Diffs
'history-title' => '$1: ცვლილებათა ისტორია',
'difference-title' => '$1: განსხვავება გადახედვებს შორის',
'difference-title-multipage' => '$1 და $2: განსხვავება გვერდებს შორის',
'difference-multipage' => '(განსხვავება გვერდებს შორის)',
'lineno' => 'ხაზი $1:',
'compareselectedversions' => 'არჩეული ვერსიების შედარება',
'showhideselectedversions' => 'ჩვენება/დამალვა არჩეული ვერსიებისა',
'editundo' => 'გაუქმება',
'diff-empty' => '(განსხვავება არ არის)',
'diff-multi-manyusers' => '({{PLURAL:$2|ერთი მომხმარებლის|$2 მომხმარებლების}} {{PLURAL:$1|ერთი შუალედური ვერსია|$1 შუალედური ვერსიები}}, რომლებიც არ არის ნაჩვენები.)',
'difference-missing-revision' => '{{PLURAL:$2|$2 ვერსია}} ამ შედარებისათვის ($1) {{PLURAL:$2|ვერ მოიძებნა}}.

ეს ჩვეულებრივ ხდება მაშინ, თუ ვერსიების შედარების მოძველებული ბმულით გადადიხართ გვერდზე, რომელიც წაიშალა.
დეტალური ინფორმაცია შესაძლებელია იყოს [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} წაშლების ჟურნალში].',

# Search results
'searchresults' => 'ძიების შედეგები',
'searchresults-title' => 'ძიების შედეგები "$1"',
'toomanymatches' => 'ნაპოვნია ძალიან ბევრი შესაბამისობა, ეცადეთ სხვა მოთხოვნა',
'titlematches' => 'სტატიის სათაური შეესაბამება',
'textmatches' => 'გვერდის ტექსტი შესაბამისია',
'notextmatches' => 'არ შეესაბამება არცერთი გვერდის ტექსტი',
'prevn' => 'წინა {{PLURAL:$1|$1}}',
'nextn' => 'შემდეგი {{PLURAL:$1|$1}}',
'prevn-title' => '{{PLURAL:$1|წინა $1 ჩანაწერი|წინა $1 ჩანაწერები|წინა $1 ჩანაწერების}}',
'nextn-title' => 'შემდეგი $1 {{PLURAL:$1|რეზულტატი|რეზულტატები}}',
'shown-title' => 'აჩვენეთ $1 {{PLURAL:$1|რეზულტატი|რეზულტატი}} გვერდზე',
'viewprevnext' => 'იხილე  ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists' => "'''ამ ვიკიპროექტში არის გვერდი „[[:$1]]“'''",
'searchmenu-new' => "'''შექმენით გვერდი „[[:$1]]“ ამ ვიკიში!''' {{PLURAL:$2|0=|აგრეთვე იხილე ძიები შედეგი.|აგრეთვე იხილე ძიების შედეგები.}}",
'searchprofile-articles' => 'ძირითადი გვერდები',
'searchprofile-project' => 'დახმარების და პროექტის გვერდები',
'searchprofile-images' => 'მულტიმედია',
'searchprofile-everything' => 'ყველაფერი',
'searchprofile-advanced' => 'გაფართოებული',
'searchprofile-articles-tooltip' => 'ძიება $1ში',
'searchprofile-project-tooltip' => 'ძიება $1ში',
'searchprofile-images-tooltip' => 'ფაილების ძიება',
'searchprofile-everything-tooltip' => 'ყველა გვერდზე ძიება (მათ შორის განხილვის გვერდები)',
'searchprofile-advanced-tooltip' => 'ძიება სახელთა მოცემულ სივრცეში',
'search-result-size' => '$1 ($2 სიტყვა)',
'search-result-category-size' => '{{PLURAL:$1|$1 ელემენტი|$1 ელემენტი|$1 ელემენტები}} ({{PLURAL:$2|$2 ქვეკატეგორია|$2 ქვეკატეგორიები|$2 ქვეკატეგორიები}}, {{PLURAL:$3|$3 ფაილი|$3 ფაილი|$3 ფაილი}})',
'search-result-score' => 'რელევანტურობა $1 %',
'search-redirect' => '(გადამისამართება $1)',
'search-section' => '(სექცია $1)',
'search-suggest' => 'ხომ არ იგულისხმეთ: $1?',
'search-interwiki-caption' => 'დობილი პროექტები',
'search-interwiki-default' => 'შედეგები $1-დან:',
'search-interwiki-more' => '(გაგრძელება)',
'search-relatedarticle' => 'დაკავშირებული',
'searcheverything-enable' => 'ძიება სახელთა ყველა სივრცეებში',
'searchrelated' => 'მიბმული',
'searchall' => 'ყველა',
'showingresults' => 'ქვემოთ იხილეთ <b>$1</b>-მდე შედეგი დაწყებული #<b>$2</b>-იდან.',
'showingresultsnum' => 'ქვემოთ იხილეთ <b>$3</b> შედეგი დაწყებული #<b>$2</b>-იდან.',
'showingresultsheader' => "{{PLURAL:$5|რეზულტატი '''$1'''  '''$3'''-დან|რეზულტატები '''$1 — $2''' -დან '''$3'''}}  '''$4'''-თვის",
'search-nonefound' => 'მოთხოვნის შესაბამისობა არ არის ნაპოვნი.',
'powersearch-legend' => 'გაფართოებული ძიება',
'powersearch-ns' => 'ძიება სახელთა სივრცეებში:',
'powersearch-redir' => 'გადამისამართებების სიის ჩვენება',
'powersearch-togglelabel' => 'მონიშვნა:',
'powersearch-toggleall' => 'ყველა',
'powersearch-togglenone' => 'არაფერი',
'search-external' => 'გარე ძიება',
'searchdisabled' => '{{SITENAME}}ში ძებნა გაუქმებულია. თქვენ შეგიძლიათ დროის შუალედით Google-ით ძებნა. მიაქციეთ ყურადღება, რომ {{SITENAME}}ში შესაძლებელია მათი ინდექსები აქტუალური არ არის.',
'search-error' => 'ძიებისას მოხდა შეცდომა: $1',

# Preferences page
'preferences' => 'კონფიგურაცია',
'mypreferences' => 'კონფიგურაცია',
'prefs-edits' => 'რედაქციების რაოდენობა:',
'prefs-skin' => 'გარეკანი',
'skin-preview' => 'წინასწარი გადახედვა',
'datedefault' => 'წყარო მითითებული არაა',
'prefs-beta' => 'ბეტა შესაძლებლობები',
'prefs-datetime' => 'თარიღი და დრო',
'prefs-labs' => 'ექსპერიმენტალური ფუნქციები',
'prefs-user-pages' => 'მომხმარებლის გვერდები',
'prefs-personal' => 'მომხმარებლის მონაცემები',
'prefs-rc' => 'ბოლო ცვლილებები',
'prefs-watchlist' => 'კონტროლის სია',
'prefs-watchlist-days' => 'კონტროლის სიაში საჩვენებელი დღეები:',
'prefs-watchlist-days-max' => 'მაქსიმუმ $1 {{PLURAL:$1|დღე|დღე}}',
'prefs-watchlist-edits' => 'გაფართოებულ კონტროლის სიაში საჩვენებელი ცვლილებების მაქსიმალური რაოდენობა:',
'prefs-watchlist-edits-max' => 'მაქსიმალური რაოდენობა: 1000',
'prefs-watchlist-token' => 'კონტროლის სიის ტოკენი:',
'prefs-misc' => 'სხვადასხვა',
'prefs-resetpass' => 'შეცვალეთ პაროლი',
'prefs-changeemail' => 'ელ-ფოსტის შეცვლა',
'prefs-setemail' => 'ელ-ფოსტის მისამართის დაყენება',
'prefs-email' => 'ელ-ფოსტის პარამეტრები',
'prefs-rendering' => 'იერსახე',
'saveprefs' => 'შენახვა',
'restoreprefs' => 'ყველა საწყისი პარამეტრის აღდგენა (ყველა სექციაში)',
'prefs-editing' => 'რედაქტირება',
'rows' => 'რიგები:',
'columns' => 'სვეტები',
'searchresultshead' => 'ძიება',
'stub-threshold' => 'გაფორმების გასაუმჯობესებლად <a href="#" class="stub"> მოცემულია ესკიზების ბმულები</a> (ბაიტებში):',
'stub-threshold-disabled' => 'გათიშულია',
'recentchangesdays' => 'ბოლო ცვლილებებში საჩვენებელი დღეები:',
'recentchangesdays-max' => 'მაქსიმუმ $1 {{PLURAL:$1|დღე}}',
'recentchangescount' => 'საჩვენებელი ცვლილებების რაოდენობა:',
'prefs-help-recentchangescount' => 'შეიცავს ახალ შესწორებებს, გვერდების ისტორიებს, ჟურნალებს.',
'savedprefs' => 'თქვენ მიერ შერჩეული პარამეტრები დამახსოვრებულია.',
'timezonelegend' => 'სასაათო სარტყელი:',
'localtime' => 'ადგილობრივი დრო:',
'timezoneuseserverdefault' => 'გამოიყენე ნაგულისხმევი პარამეტრები ($1)',
'timezoneuseoffset' => 'სხვა (მისათითებელი)',
'servertime' => 'სერვერის დრო:',
'guesstimezone' => 'ბრაუზერიდან შევსება',
'timezoneregion-africa' => 'აფრიკა',
'timezoneregion-america' => 'ამერიკა',
'timezoneregion-antarctica' => 'ანტარქტიდა',
'timezoneregion-arctic' => 'არქტიკა',
'timezoneregion-asia' => 'აზია',
'timezoneregion-atlantic' => 'ატლანტის ოკეანე',
'timezoneregion-australia' => 'ავსტრალია',
'timezoneregion-europe' => 'ევროპა',
'timezoneregion-indian' => 'ინდოეთის ოკეანე',
'timezoneregion-pacific' => 'წყნარი ოკეანე',
'allowemail' => 'სხვა მომხმარებლებისგან ელ. ფოსტის მიღების ნებართვა',
'prefs-searchoptions' => 'ძიების პარამეტრები',
'prefs-namespaces' => 'სახელთა სივრცეები',
'defaultns' => 'სხვა შემთხვევაში ძიება შემდეგ სახელთა სივრცეებში:',
'default' => 'სტანდარტული',
'prefs-files' => 'ფაილები',
'prefs-custom-css' => 'მომხმარებლის CSS',
'prefs-custom-js' => 'მომხმარებლის JS',
'prefs-common-css-js' => 'ზოგადი CSS/JS ყველა თემისთვის:',
'prefs-reset-intro' => 'ეს გვერდი შეიძლება გამოყენებული იქნეს თქვენი კონფიგურაციის შესაცვლელად საწყის კონფიგურაციაზე. ამ მოქმედების დადასტურების შემთხვევაში, თქვენ ვეღარ შეძლებთ მის გაუქმებას.',
'prefs-emailconfirm-label' => 'ელ-ფოსტის დადასტურება:',
'youremail' => 'ელექტრონული ფოსტა:',
'username' => '{{GENDER:$1|მომხმარებლის სახელი}}:',
'uid' => '{{GENDER:$1|მომხმარებლის}} იდენტიფიკატორი:',
'prefs-memberingroups' => '{{PLURAL:$1|ჯგუფის|ჯგუფების}} {{GENDER:$2|წევრი}}:',
'prefs-memberingroups-type' => '$1',
'prefs-registration' => 'რეგისტრაციის თარიღი',
'prefs-registration-date-time' => '$1',
'yourrealname' => 'ნამდვილი სახელი:',
'yourlanguage' => 'ენა:',
'yourvariant' => 'შინაარსის ენის ვარიანტი:',
'prefs-help-variant' => 'საურველი დაწერილობა ან ორთოგრაფია, რომელშიც  უნდა იყოს ნაჩვენები ვიკის გვერდები.',
'yournick' => 'მეტსახელი:',
'prefs-help-signature' => 'კომენტარები განხილვის გვერდებზე ხელმოწერილი უნდა იყოს „<nowiki>~~~~</nowiki>“ სიმბოლოების გამოყენებით, რომლებიც გადაკეთდება თქვენს ხელმოწერად და ხელმოწერის დროთი.',
'badsig' => 'არასწორი ნედლი ხელმოწერა; შეამოწმეთ HTML ჭდეები.',
'badsiglength' => 'ხელმოწერა ძალიან გრძელია.
უნდა შედგებოდეს მაქსიმუმ $1 ნიშნისაგან.',
'yourgender' => 'რომელი აღწერა უფრო შეგეფერებათ თქვენ?',
'gender-unknown' => 'მითითებას არ ვთვლი საჭიროდ',
'gender-male' => 'ის (მამრობითი) არედაქტირებს ვიკი-გვერდებს',
'gender-female' => 'ის (მდედრობითი) არედაქტირებს ვიკი-გვერდებს',
'prefs-help-gender' => 'ამ პარამეტრის დაყენება არასავალდებულოა.
პროგრამული უზრუნველყოფა ამ ინფორმაციას იყენებს მხოლოდ სწორი გრამატიკული სქესით მომართვისათვის.
ეს ინფორმაცია საჯარო იქნება ყველასათვის.',
'email' => 'ელ. ფოსტა',
'prefs-help-realname' => 'ნამდვილი სახელის მითითება აუცილებელი არ არის, მაგრამ თუ მიუთითებთ ის გამოყენებული იქნება თქვენი ნამუშევრის აღსანიშნავად.',
'prefs-help-email' => 'ელ. ფოსტის მისამართი არ არის სავალდებულო, მაგრამ მისი მითითება იძლევა ახალი პაროლის გამოგზავნის საშუალებას თქვენი პაროლის დავიწყების შემთხვევაში.',
'prefs-help-email-others' => 'ის აგრეთვე მისცემს საშუალებას სხვა მომხმარებლებს, დაგიკავშირდნენ თქვენს პირად გვერდზე მითითებული ბმულის მეშვეობით. თქვენი ელ. ფოსტის მისამართი არ იქნება გამხელილი, როდესაც სხვა მომხმარებლები დაგიკავშირდებიან.',
'prefs-help-email-required' => 'თქვენი ელ-ფოსტის მისამართი აუცილებელია.',
'prefs-info' => 'საბაზისო ინფორმაცია',
'prefs-i18n' => 'ინტერნაციონალიზაცია',
'prefs-signature' => 'ხელმოწერა',
'prefs-dateformat' => 'თარიღის ფორმატი',
'prefs-timeoffset' => 'სასაათო სარტყლის ცვლილება',
'prefs-advancedediting' => 'მთავარი პარამეტრები',
'prefs-editor' => 'რედაქტორი',
'prefs-preview' => 'წინასწარი გადახედვა',
'prefs-advancedrc' => 'გაფართოებული პარამეტრები',
'prefs-advancedrendering' => 'გაფართოებული პარამეტრები',
'prefs-advancedsearchoptions' => 'გაფართოებული პარამეტრები',
'prefs-advancedwatchlist' => 'გაფართოებული კონფიგურაციები',
'prefs-displayrc' => 'გამოსახვის კონფიგურაციები',
'prefs-displaysearchoptions' => 'გამოსახვის კონფიგურაციები',
'prefs-displaywatchlist' => 'გამოსახვის კონფიგურაციები',
'prefs-tokenwatchlist' => 'ჟეტონი',
'prefs-diffs' => 'სხვაობა ვერსიებს შორის',
'prefs-help-prefershttps' => 'ამ კონფიგურაციის არჩევა შედეგს გამოიღებს შემდგომი ავტორიზაციის შედმეგ.',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'ელ-ფოსტის მისამართი სწორად გამოიყურება',
'email-address-validity-invalid' => 'მიუთითეთ სწორი ელ-ფოსტის მისამართი',

# User rights
'userrights' => 'მომხმარებელთა უფლებების მართვა',
'userrights-lookup-user' => 'მომხმარებელთა ჯგუფების მართვა',
'userrights-user-editname' => 'შეიტანეთ მომხმარებლის სახელი:',
'editusergroup' => 'მომხმარებელთა ჯგუფების რედაქტირება',
'editinguser' => "უფლებების შეცვლა მომხმარებლისთვის: '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'დაარედაქტირეთ მომხმარებელთა ჯგუფები',
'saveusergroups' => 'მომხმარებელთა ჯგუფების შენახვა',
'userrights-groupsmember' => 'ჯგუფის წევრი:',
'userrights-groupsmember-auto' => 'ნაგულისხმევი წევრი:',
'userrights-groupsmember-type' => '$1',
'userrights-groups-help' => 'თქვენ შეგიძლიათ შეცვალოთ ჯგუფები, რომელშიც შედის ეს მომხმარებელი.
* თუ ჯგუფის სახელწოდებასთან გაკეთებულია ნიშნული, ე.ი მომხმარებელი შედის ამ ჯგუფში.
* თუ ნიშნული არ არის – მომხმარებელი არ განეკუთვნება არსებულ ჯგუფს.
* ნიშანი * ნიშნავს, რომ თქვენ არ შეგიძლიათ მომხმარებლის ჯგუფიდან წაშლა, თუ დაამატებთ მას იქ ან პირიქით.',
'userrights-reason' => 'შეცვლის მიზეზი:',
'userrights-no-interwiki' => 'თქვენ არ გაქვთ მომხმარებლის უფლებების რედაქტირების უფლება სხვა ვიკი-ებში.',
'userrights-nodatabase' => 'მონაცემთა ბაზა $1 არ არსებობს, ან არ არის ლოკალური.',
'userrights-nologin' => 'თქვენ უნდა [[Special:UserLogin|წარადგინოთ თავი სისტემისადმი]] ადმინისისტრატორის ანგარიშით იმისთვის, რომ გასცეთ მომხმარებელთა უფლებები.',
'userrights-notallowed' => 'თქვენ არ გაქვთ მომხმარებელთა უფლებების შეცვლის უფლება.',
'userrights-changeable-col' => 'ჯგუფები, რომლებიც შეგიძლიათ შეცვალოთ',
'userrights-unchangeable-col' => 'ჯგუფები, რომლებიც არ შეგიძლიათ შეცვალოთ',
'userrights-irreversible-marker' => '$1*',
'userrights-conflict' => 'მომხმარებელთა უფლებების კონფლიქტი! გთხოვთ ხელმეორედ შეინახოთ თქვენი ცვლილებები.',

# Groups
'group' => 'ჯგუფი:',
'group-user' => 'მომხმარებლები',
'group-autoconfirmed' => 'ავტომატურად დადასტურებული მომხმარებლები',
'group-bot' => 'რობოტები',
'group-sysop' => 'ადმინისტრატორები',
'group-bureaucrat' => 'ბიუროკრატები',
'group-suppress' => 'ზედამხედველები',
'group-all' => '(ყველა)',

'group-user-member' => '{{GENDER:$1|მომხმარებელი}}',
'group-autoconfirmed-member' => '{{GENDER:$1|ავტომატურად დადასტურებული მომხმარებელი}}',
'group-bot-member' => '{{GENDER:$1|ბოტი}}',
'group-sysop-member' => '{{GENDER:$1|ადმინისტრატორი}}',
'group-bureaucrat-member' => '{{GENDER:$1|ბიუროკრატი}}',
'group-suppress-member' => '{{GENDER:$1|რევიზორები}}',

'grouppage-user' => '{{ns:project}}:მომხმარებელი',
'grouppage-autoconfirmed' => '{{ns:project}}:ავტომატურად დადასტურებული მომხმარებლები',
'grouppage-bot' => '{{ns:project}}:რობოტები',
'grouppage-sysop' => '{{ns:project}}:ადმინისტრატორები',
'grouppage-bureaucrat' => '{{ns:project}}:ბიუროკრატები',
'grouppage-suppress' => '{{ns:project}}:ზედამხედველები',

# Rights
'right-read' => 'გვერდების წაკითხვა',
'right-edit' => 'გვერდების რედაქტირება',
'right-createpage' => 'გვერდების შექმნა (არა განხილვის გვერდებისა)',
'right-createtalk' => 'განხილვის გვერდების შექმნა',
'right-createaccount' => 'მომხმარებლების ახალი ანგარიშების შექმნა',
'right-minoredit' => 'ცვლილებების მითითება, როგორც „მცირე რედაქტირება“',
'right-move' => 'გვერდების გადატანა',
'right-move-subpages' => 'გვერდები გადამისამართდეს ქვეგვერდებთან ერთად',
'right-move-rootuserpages' => 'მომხმარებელთა ძირი გვერდების გადატანა',
'right-movefile' => 'ფაილების გადატანა',
'right-suppressredirect' => 'არ იქმნება გადამისამართება ძველი სახელიდან გვერდითვის სახელის შეცვლის შემთხვევაში',
'right-upload' => 'ფაილების ატვირთვა',
'right-reupload' => 'არსებულ ფაილებზე ზევიდან გადაწერა',
'right-reupload-own' => 'ფაილის გადაწერა იგივე მომხმარებლის მიერ',
'right-reupload-shared' => 'ფაილთა შეცვლა საერთო საცავიდან ლოკალურებით',
'right-upload_by_url' => 'ფაილის ატვირთვა URL-დან',
'right-purge' => 'ქეშის გაწმენდა დადასტურების გვერდის გარეშე',
'right-autoconfirmed' => 'სიჩქარის შეზღუდვა IP მისამართზე არ არის',
'right-bot' => 'ჩაითვალო ავტომატურ პროცესად',
'right-nominornewtalk' => 'მცირე რედაქტირებების არ ქონის შემთხვევაში ჩაირთვება ახალ შეტყობინებათა რეჟიმი',
'right-apihighlimits' => 'ნაკლები შეზღუდვა API-მოთხოვნებზე',
'right-writeapi' => 'API-ს გამოყენება ჩაწერისთვის',
'right-delete' => 'გვერდების წაშლა',
'right-bigdelete' => 'გრძელი ისტორიის გვერდების წაშლა',
'right-deletelogentry' => 'ჟურნალის კონკრეტული ჩანაწერების წაშლა და აღდგენა',
'right-deleterevision' => 'გვერდის კონკრეტული ვერსიების წაშლა და აღდგენა',
'right-deletedhistory' => 'წაშლილი გვერდების ხილავა წაშლილ ტექსთან ურთიერთობის გარეშე',
'right-deletedtext' => 'წაშლილი ტექსტის და განსხვავებების ხილვა.',
'right-browsearchive' => 'წაშლილი გვერდების ძიება',
'right-undelete' => 'გვერდის აღდგენა',
'right-suppressrevision' => 'ადმინთაგან დამალული გვერდების ხილვა და აღდგენა',
'right-suppressionlog' => 'კერძო ჟურნალების ნახვა',
'right-block' => 'სხვა მომხმარებლების მიერ რედაქტირების აკრძალვა',
'right-blockemail' => 'ელ ფოსტის გაგზავნის აკრძალვა',
'right-hideuser' => 'მომხმარებლის სახელის დაბლოკვა და მისი დამალვა საზოგადოებისგან',
'right-ipblock-exempt' => 'IP ბლოკის, ავტობლოკის და დიაპაზონთა ბლოკის გასვლა',
'right-proxyunbannable' => 'პროქსის ავტობლოკის გადასვლა',
'right-unblockself' => 'საკუთარი თავის განბლოკვა',
'right-protect' => 'გვერდების დაცვის დონის შეცვლა და კასკადურად დაცული გვერდების რედაქტირება',
'right-editprotected' => 'გვერდების რედაქტირება რომლებიც დაცულია როგორც „{{int:protect-level-sysop}}“',
'right-editsemiprotected' => 'გვერდების რედაქტირება რომლებიც დაცულია როგორც „{{int:protect-level-autoconfirmed}}“',
'right-editinterface' => 'მომხმარებლის ინტერფეისის შეცვლა',
'right-editusercssjs' => 'სხვა მომხმარებლების CSS- и JS- ფაილების შესწორება',
'right-editusercss' => 'სხვა მომხმარებლების CSS- ფაილების შესწორება',
'right-edituserjs' => 'სხვა მომხმარებლების JS- ფაილების შესწორება',
'right-editmyusercss' => 'თქვენი საკუთარი CSS-ფაილების რედაქტირება',
'right-editmyuserjs' => 'თქვენი საკუთარი JavaScript-ფაილების რედაქტირება',
'right-viewmywatchlist' => 'თქვენი კონტროლის სიის ხილვა',
'right-rollback' => 'გარკვეულ გვერდზე ბოლო მომხმარებლის რედაქტირების სწრაფი გაუქმება',
'right-markbotedits' => 'გაუქმებული შესწორებების მონიშვნა როგორც ბოტის',
'right-noratelimit' => 'სიჩქარის შეზღუდვის არ არსებობა',
'right-import' => 'გვერდების იმპორტი სხვა ვიკიდან',
'right-importupload' => 'გვერდების იმპორტი ფაილების ატვირთვიდან',
'right-patrol' => 'შესწორების პატრულირებულად მონიშვნა',
'right-autopatrol' => 'შესწორებები ავტომატურად აღინიშნება როგორც პატრულირებადი',
'right-patrolmarks' => 'პატრულირების ინფორმაცის ხილვა ბოლო ცვლილებებში',
'right-unwatchedpages' => 'არაკონტროლირებადი გვერდების სიის ხილვა',
'right-mergehistory' => 'გააერთიანეთ გვერდების ისტორია',
'right-userrights' => 'ყველა მომხმარებლის უფლებების შეცვლა',
'right-userrights-interwiki' => 'შეასწორეთ მომხმარებელთა უფლებები სხვა ვიკიზე',
'right-siteadmin' => 'მონაცემთა ბაზის დაბლოკვა და განბლოკვა',
'right-override-export-depth' => 'გვერდების ექსპორტირება, დაკავშირებული გვერდების ჩათვლით 5-მდე სიიღრმით',
'right-sendemail' => 'გაგუგზავნე ელექტრონული ფოსტა სხვა მომხმარებლებს',
'right-passwordreset' => 'ელ.ფოსტის ნახვა პაროლის შეცვლით',

# Special:Log/newusers
'newuserlogpage' => 'მომხმარებლის რეგისტრაციის ჟურნალი',
'newuserlogpagetext' => 'ბოლო დროს დარეგისტრირებულ მომხმარებელთა სია',

# User rights log
'rightslog' => 'მომხმარებლის უფლებების ჟურნალი',
'rightslogtext' => 'მომხმარებელთა უფლებების ცვლილებათა ჟურბალი',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'ამ გვერდის კითხვა',
'action-edit' => 'ამ გვერდის რედაქტირება',
'action-createpage' => 'გვერდების შექმნა',
'action-createtalk' => 'განხილვის გვერდების შექმნა',
'action-createaccount' => 'ამ ანგარიშის შექმნა',
'action-minoredit' => 'მონიშვნა, როგორც მცირე რედაქტირება',
'action-move' => 'ამ გვერდის გადატანა',
'action-move-subpages' => 'გვერდისა და მისი ქვეგვერდების გადატანა',
'action-move-rootuserpages' => 'მომხმარებელთა საბაზისო გვერდების გადატანა',
'action-movefile' => 'ფაილის გადატანა',
'action-upload' => 'ამ ფაილის ატვირთვა',
'action-reupload' => 'არსებულ ფაილზე გადაწერა',
'action-reupload-shared' => 'საერთო საცავიდან ფაილის გადაკეტვა',
'action-upload_by_url' => 'ატვირთეთ ფაილი URL-დან',
'action-writeapi' => 'API-ს გამოყენება რედაქტირებისთვის',
'action-delete' => 'ამ გვერდის წაშლა',
'action-deleterevision' => 'გვერდის ამ ვერსიის წაშლა',
'action-deletedhistory' => 'ამ გვერდის წაშლილი ისტორიის ხილვა',
'action-browsearchive' => 'წაშლილი გვერდების ძიება',
'action-undelete' => 'ამ გვერდის აღდგენა',
'action-suppressrevision' => 'გვერდის ამ დაფარული ვერსიის ნახვა და აღდგენა',
'action-suppressionlog' => 'ამ კერძო ჟურნალის ხილვა',
'action-block' => 'ამ მომხმარებლისთვის რედაქტირების დაბლოკვა',
'action-protect' => 'ამ გვერდის დაცვის დონის შეცვლა',
'action-rollback' => 'გარკვეულ გვერდზე ბოლო მომხმარებლის რედაქტირების სწრაფი გაუქმება',
'action-import' => 'გვერდების იმპორტი სხვა ვიკიდან',
'action-importupload' => 'გვერდების იმპორტი ატვირთული ფაილიდან',
'action-patrol' => 'სხვა მომხმარებლის შესწორების მონიშვნა შემოწმებულად',
'action-autopatrol' => 'თქვენი ცვლილების მონიშვნა პატრულირებადით',
'action-unwatchedpages' => 'იმ გვერდების ხილვა, რომლებიც არავის კონტროლში არ არის შესული',
'action-mergehistory' => 'ამ გვერდის ისტორიის შერწყმა',
'action-userrights' => 'მომხმარებელთა უფლებების ცვლილება',
'action-userrights-interwiki' => 'მომხმარებლების უფლებების შეცვლა სხვა ვიკიებში',
'action-siteadmin' => 'მონაცემთა ბაზის დაბლოკვა და განბლოკვა',
'action-sendemail' => 'ელ-ფოსტების გაგზავნა',
'action-editmywatchlist' => 'თქვენი კონტროლის სიის რედაქტირება',
'action-viewmywatchlist' => 'თქვენი კონტროლის სიის ხილვა',
'action-viewmyprivateinfo' => 'თქვენი პირადი ინფორმაციის ხილვა',
'action-editmyprivateinfo' => 'თქვენი პირადი ინფორმაციის რედაქტირება',

# Recent changes
'nchanges' => '$1 ცვლილება',
'enhancedrc-since-last-visit' => '$1 {{PLURAL:$1|ბოლო ვიზიტის შემდეგ}}',
'enhancedrc-history' => 'ისტორია',
'recentchanges' => 'ბოლო ცვლილებები',
'recentchanges-legend' => 'ბოლო ცვლილებების პარამეტრები',
'recentchanges-summary' => 'უთვალთვალეთ ვიკის ბოლო ცვლილებებს ამ გვერდზე.',
'recentchanges-feed-description' => 'ვიკის უახლესი ცვლილებების მეთვალყურეობა ამ არხში.',
'recentchanges-label-newpage' => 'ამ რედაქტირებით შეიქმნა ახალი გვერდი',
'recentchanges-label-minor' => 'ეს არის მცირე შესწორება',
'recentchanges-label-bot' => 'ეს არის ბოტის რედაქტირება',
'recentchanges-label-unpatrolled' => 'ეს რედაქტირება გადაუმოწმებელია',
'recentchanges-label-plusminus' => 'ცვლილებების ზომა ბაიტებში',
'recentchanges-legend-heading' => "'''ლეგენდა:'''",
'recentchanges-legend-newpage' => '(იხ. აგრეთვე [[Special:NewPages|ახალი გვერდების სია]])',
'rcnotefrom' => "ქვემოთ მოყვანილია ცვლილებები '''$2'''-დან (ნაჩვენებია '''$1''').",
'rclistfrom' => 'ახალი ცვლილებების ჩვენება დაწყებული $1-დან',
'rcshowhideminor' => 'მცირე რედაქტირების $1',
'rcshowhidebots' => 'რობოტების  $1',
'rcshowhideliu' => '$1 რეგისტრირებული მომხმარებელი',
'rcshowhideanons' => 'ანონიმური მომხმარებლების $1',
'rcshowhidepatr' => 'გაკონტროლებული ცვლილებების $1',
'rcshowhidemine' => 'ჩემი რედაქტირების $1',
'rclinks' => 'ბოლო $1 ცვლილების ჩვენება უკანასკნელი $2 დღის მანძილზე<br />$3',
'diff' => 'განსხ.',
'hist' => 'ისტ.',
'hide' => 'დამალვა',
'show' => 'ჩვენება',
'minoreditletter' => 'მ',
'newpageletter' => 'ა',
'boteditletter' => 'რ',
'unpatrolledletter' => '!',
'number_of_watching_users_pageview' => '[$1 მომხმარებლის/ები კონტროლი]',
'rc_categories' => 'მხოლოდ კატეგორიებიდან (განაცალკევეთ "|"-ის მიხედვით)',
'rc_categories_any' => 'ნებისმიერი',
'rc-change-size' => '$1',
'rc-change-size-new' => 'ზომა ცვლილების შემდეგ არის: {{PLURAL:$1|ბაიტი|ბაიტი}}',
'newsectionsummary' => '/* $1 */ ახალი სექცია',
'rc-enhanced-expand' => 'დეტალების  ჩვენება',
'rc-enhanced-hide' => 'დამატებითი ინფორმაციის დამალვა',
'rc-old-title' => 'თავდაპირველად შექმნილი როგორც „$1“',

# Recent changes linked
'recentchangeslinked' => 'დაკავშირებული ცვლილებები',
'recentchangeslinked-feed' => 'დაკავშირებული ცვლილებები',
'recentchangeslinked-toolbox' => 'დაკავშირებული ცვლილებები',
'recentchangeslinked-title' => '„$1“-თან დაკავშირებული ცვლილებები',
'recentchangeslinked-summary' => "ეს არის მითითებულ გვერდთან (ან მითითებული კატეგორიის წევრებთან) დაკავშირებულ გვერდებში ბოლო დროს განხორციელებული ცვლილებების სია.
გვერდები [[Special:Watchlist|თქვენი კონტროლის სიაში]] გამოყოფილია '''სქლად'''.",
'recentchangeslinked-page' => 'გვერდის დასახელება:',
'recentchangeslinked-to' => 'საპირისპიროდ აჩვენეთ ამ გვერდზე ბმულის მქონე გვერდების ცვლილებები',

# Upload
'upload' => 'ფაილის დამატება',
'uploadbtn' => 'ფაილის დამატება',
'reuploaddesc' => 'გააუქმეთ ატვირთვა და დაუბრუნდით ატვირთვის ფორმას.',
'upload-tryagain' => 'შეინახეთ ფაილის შეცვლილი აღწერა',
'uploadnologin' => 'რეგისტრაცია არ გაქვთ გავლილი',
'uploadnologintext' => 'ფაილის ასატვირთად თქვენ უნდა $1.',
'upload_directory_missing' => 'შესანახი დირექტორია ($1) არ არსებობს და მისი აღდგენა ვებ-სერვერის მიერ შეუძლებელია.',
'upload_directory_read_only' => 'ვებსერვერი ვერ იწერს ატვირთვის დირექტორიაში ($1).',
'uploaderror' => 'ატვირთვის შეცდომა',
'upload-recreate-warning' => "'''ყურადღება. ფაილი ამ სახელით წაიშალა ან გადატანილი იქნა.''

ჟურნალი იხილეთ ქვემოთ:",
'uploadtext' => "ამ ფორმის გამოყენებისას თქვენ შეძლებთ სერვერზე ფაილების ატვირთვას.

ადრე ატვირთული ფაილების სანახავად მიმართეთ  [[Special:FileList|ატვირთულ ფაილთა სიას]].ატვირთული ფაილები ასევე ჩაიწერება [[Special:Log/upload|ატვირთვათა ჟურნალში]], ხოლო წაშლილი ფაილები ჩაიწერება [[Special:Log/delete|წაშლათა ჟურნალში]].

ფაილის სტატიაში ჩასაწერად გამოიყენეთ:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' ფაილის სრული ვერსიის ჩასასმელად;
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|описание]]</nowiki></code>''' 200 პიქსელამდე შემცირებული ვერსიის ჩასასმელად აღწერის მითითების შესაძლებლობით;
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' ბმულის ჩასასმელად, გამოსახულების ჩვენების გარეშე.",
'upload-permitted' => 'მიღებული ფაილის ტიპები: $1.',
'upload-preferred' => 'სასურველი ფაილის ტიპები: $1.',
'upload-prohibited' => 'აკრძალული ფაილის ტიპები: $1.',
'uploadlog' => 'გადმოტვირთვის რეგისტრაცია',
'uploadlogpage' => 'გადმოტვირთვის რეგისტრაცია',
'uploadlogpagetext' => 'ქვემოთ არის ყველაზე ბოლოს ატვირთული ფაილების სია.',
'filename' => 'ფაილის სახელი',
'filedesc' => 'რეზიუმე',
'fileuploadsummary' => 'რეზიუმე:',
'filereuploadsummary' => 'ფაილის ცვლილებები:',
'filestatus' => 'საავტორო უფლებების სტატუსი:',
'filesource' => 'წყარო:',
'uploadedfiles' => 'ფაილების დამატება',
'ignorewarning' => 'გაფრთხილება უგულებელყავი და მაინც შეინახე ფაილი.',
'ignorewarnings' => 'უგულებელყავი ნებისმიერი გაფრთხილება',
'minlength1' => 'ფაილის სახელი უნდა იყოს არანაკლებ ერთი ასო.',
'illegalfilename' => 'ფაილის სახელი "$1" შეიცავს სიმბოლოებს, რომელთა გამოყენებაც არ არის ნებადართული სათაურებში. გთხოვთ, შეცვალოთ ფაილის სახელი და სცადოთ მისი ხელმეორედ ჩატვირთვა.',
'filename-toolong' => 'ფაილების სახელები არ უნდა აჭარბებდეს 240 ბაიტს.',
'badfilename' => 'ფაილის დასახელება შეცვლილია "$1"-ით.',
'filetype-mime-mismatch' => 'ფაილის გაფართოება ".$1" არ შეესაბამება აღმოჩენილ MIME ტიპის ($2) ფაილს.',
'filetype-badmime' => '"$1" MIME ტიპის ფაილების ატვირთვა დაშვებული არ არის.',
'filetype-bad-ie-mime' => 'შეუძლებელია ფაილის ატვირთვა, რადგანა Internet Explorer-ი აღიქვამს მას როგორც "$1", რაც აკრძალულია და პოტენციურად სახიფათო ფაილია.',
'filetype-unwanted-type' => "'''\".\$1\"''' — ფაილის არასასურველი ტიპია.
{{PLURAL:\$3|ფაილის სასურველი ტიპია|ფაილების სასურველი ტიპები:}} \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|მიუღებელი ფაილის ტიპია|მიუღებელი ფაილის ტიპია}}.
მიღებული ფაილის {{PLURAL:$3|ტიპია|ტიპებია}} $2.',
'filetype-missing' => 'ფაილს არ აქვს გაფართოება (მაგ.: ".jpg").',
'empty-file' => 'არჩეული ფაილი ცარიელია.',
'file-too-large' => 'ფაილი ძალიან დიდია',
'filename-tooshort' => 'ფაილის სახელი ზედმეტად მოკლეა',
'filetype-banned' => 'ფაილის ეს ტიპი აკრძალულია',
'verification-error' => 'ამ ფაილმა არ გაიარა შემოწმების პროცედურა.',
'hookaborted' => 'თქვენ მიერ შემოთავაზებული ცვლილება მოინიშნა გაფართოების დოკუმენტაციაში.',
'illegal-filename' => 'ფაილის ეს სახელი აკრძალულია.',
'overwrite' => 'არსებული ფაილის შეცვლა მიუღებელია.',
'unknown-error' => 'აღმოჩენილია უცნობი შეცდომა.',
'tmp-create-error' => 'შეუძლებელია დროებითი ფაილის შექმნა.',
'tmp-write-error' => 'დროებითი ფაილის წერისას შეცდომა.',
'large-file' => 'სასურველია ფაილი არ აღემატებოდეს $1-ს; ეს ფაილია $2.',
'largefileserver' => 'ეს ფაილი სერვერის მიერ დაშვებულ ზომას აღემატება.',
'emptyfile' => 'თქვენს მიერ ჩატვირთული ფაილი ცარიელია. შესაძლოა, შეცდომა მოხდა ფაილის სახელის აკრეფის დროს. გთხოვთ შეამოწმოთ ნამდვილად გსურთ თუ არა ამ ფაილის ჩატვირთვა.',
'windows-nonascii-filename' => 'ამ ვიკის არ გააჩნია სპეციალური სიმბოლოების მქონე ფაილის სახელების მხარდაჭერა.',
'fileexists' => 'ფაილი ამ სახელით უკვე არსებობს, გთხოვთ შეამოწმოთ <strong>[[:$1]]</strong> თუ არა ხართ დარწმუნებული, რომ მისი შეცვლა ნამდვილად გსურთ.
[[$1|thumb]]',
'filepageexists' => 'ამ ფაილის აღწერს გვერდი უკვე შექმნილია როგორც <strong>[[:$1]]</strong>, მაგრამ ამ სახელის ფაილი ჯერ არ არსებობს.
შეტანილი აღწერა არ გაჩნდება ფაილის აღწერის გვერდზე.
აღწერის შესაცვლელად თქვენ მოგიწევთ მისი ხელით შესწორება.
[[$1|thumb]]',
'fileexists-extension' => 'ფაილი მსგავსი სახელით არსებობს: [[$2|thumb]]
* ასატვირთი ფაილის სახელი: <strong>[[:$1]]</strong>
* არსებული ფაილის სახელი: <strong>[[:$2]]</strong>
გთხოვთ განსხვავებული სახელი აირჩიოთ.',
'fileexists-thumbnail-yes' => 'სავარაუდოდ ფაილი არის შემცირებული კოპია (მინიატურა). [[$1|thumb]]
გთხოვთ შეამოწმოთ ფაილი <strong>[[:$1]]</strong>.
თუ მოცემული ფაილები ერთი და იგივე გამოსახულებას წარმოადგენენ, შემცირებული ვერსიის ატვირთვა არ ღირს.',
'file-thumbnail-no' => 'ფაილის სახელი იწყება <strong>$1</strong>-ით.
სავარაუდოდ ფაილი არის შემცირებული კოპია (მინიატურა).
თუ თქვენ გაქვთ მოცემული გამოსახულება სრულ ზომაში, გთხოვთ ატვირთოთ იგი, ან შეასწორეთ ფაილის სახელი.',
'fileexists-forbidden' => 'ამ სახელის მქონე ფაილი უკვე არსებობს და ვერ გადაიწერება.
თუ თქვენ მაინც გსურთ მისი ატვირთვა დაბრუნდით უკან და ატვირთეთ სხვა სახელით. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'ფაილი ამ სახელწოდებით უკვე არსებობს ფაილების საერთო საცავში. თუ შეიძლება, უკან დაბრუნდით და ჩატვირთეთ ფაილი სხვა სახელწოდებით. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'ეს ფაილი არის შემდეგი {{PLURAL:$1|შემდეგი ფაილის|сშემდეგი ფაილების}} დუბლიკატი:',
'file-deleted-duplicate' => 'მსგავსი ფაილი ([[:$1]]) უკვე წაშლილა. გთხოვთ, გაეცანით ფაილის წაშლის ისტორიას, მანამდე ვიდრე მას ხელმეორედ ატვირთავთ.',
'uploadwarning' => 'გადატვირთვის შეხსენება',
'uploadwarning-text' => 'გთხოვთ ჩაასწოროთ ფაილის აღწერა ქვევით და ხელმეორედ სცადოთ.',
'savefile' => 'ფაილის შენახვა',
'uploadedimage' => 'აიტვირთა „[[$1]]“',
'overwroteimage' => 'ატვირთულია „[[$1]]-ის“ ახალი ვერსია',
'uploaddisabled' => 'ატვირთვა გამორთულია.',
'copyuploaddisabled' => 'URL ატვირთვა გაღიშულია',
'uploadfromurl-queued' => 'თქვენი ატვირთვა რიგში ჩადგა.',
'uploaddisabledtext' => 'ფაილების ატვირთვა შეუძლებელია.',
'php-uploaddisabledtext' => 'ფაილების ატვირთვა შეჩერებულია PHP-ით. გთხოვთ შეამოწმოთ file_uploads-ის მნიშვნელობა.',
'uploadscripted' => 'ფაილი შეიცავს HTML-კოდს, ან სკრიპტს, რომელიც ბროუზერმა შეიძლება არასწორედ გაანალიზოს.',
'uploadvirus' => 'ფაილი ვირუსს შეიცავს! დეტალები: $1',
'uploadjava' => 'ეს არის ZIP-ფაილი, რომელიც ჯავას CLASS-ფაილს შეიცავს.
ჯავა-ფაილების ატვირთვა დაუშვებელია, ვინაიდან მათ შესაძლოა შეზღუდონ უსაფრთხოება.',
'upload-source' => 'ფაილის წყარო',
'sourcefilename' => 'წყარო:',
'sourceurl' => 'Source URL:
წყაროს URL:',
'destfilename' => 'საბოლოო სახელი:',
'upload-maxfilesize' => 'ფაილის მაქსიმალური ზომაა $1',
'upload-description' => 'ფაილის აღწერა',
'upload-options' => 'ატვირთვის პარამეტრები',
'watchthisupload' => 'უთვალთვალე ამ ფაილს',
'filewasdeleted' => 'ამ სახელწოდების ფაილი უკვე არსებობდა, მაგრამ წაშლილ იქნა. ხელმეორედ ჩატვირთვამდე იხილეთ $1.',
'filename-bad-prefix' => "ასატვირთვი ფაილი იწყება '''„$1“''', რაც არის ფოტოკამერის მიერ სურათებისთვის მიცემული სტანდარტული სახელი. გთხოვთ აირჩიოთ ფაილის აღმწერი უკეთესი სახელი.",
'upload-success-subj' => 'წარმატებული გადატვირთვა',
'upload-success-msg' => 'თქვენი ატვირთვა [$2] შეგიძლიათ იხილოთ აქ: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'ატვირთვის პრობლემა',
'upload-failure-msg' => 'ატვირთვისას პრობლემა შეიქმნა [$2]:

$1',
'upload-warning-subj' => 'ატვირთვისთვის გაფრთხილება',
'upload-warning-msg' => '[$2]-ის ატვირთვისას დაფიქსირდა შეცდომა. შეცდომის გამოსასწორებლად დაბრუნდით [[Special:Upload/stash/$1|ატვირთვის ფორმა]]ზე.',

'upload-proto-error' => 'არასწორი პროტოკოლი',
'upload-proto-error-text' => 'ატვირთვის წასაშლელად საჭიროა მისამართი, რომელიც იწყება <code>http://</code> or <code>ftp://</code>-ით.',
'upload-file-error' => 'შიდა შეცდომა',
'upload-file-error-text' => 'შიდა შეცდომა სერვერზე დროებითი ფაილის შექმნისას. გთხოვთ მიმართოთ [[Special:ListUsers/sysop|სისტემურ ადმინისტრატორს]].',
'upload-misc-error' => 'უცნობია ატვირთვის შეცდომა',
'upload-misc-error-text' => 'ატვირთვისას უცნობი სახის შეცდომა გაიპარა.
გთხოვთ შეამოწმოთ თუ URL სწორია და ხელმისაწვდომია და ისევ სცადოთ.
თუ პრობლემა ვერ გადაიჭრა, მიმართეთ [[Special:ListUsers/sysop|ადმინისტრატორს]].',
'upload-too-many-redirects' => 'URL შეიცავს ძალიან ბევრ გადამისამართებებს',
'upload-unknown-size' => 'უცნობი ზომა',
'upload-http-error' => 'მოხდა HTTP შეცდომა: $1',
'upload-copy-upload-invalid-domain' => 'ამ დომენში ატვირთვების კოპირება არ არის ხელმისაწვდომი.',

# File backend
'backend-fail-stream' => 'ფაილი $1 ტრანსლირება ვერ მოხერხდა.',
'backend-fail-backup' => 'ფაილი $1 სარეზერვო ასლის გაკეთება ვერ მოხერხდა.',
'backend-fail-notexists' => 'ფაილი $1 არ არსებობს.',
'backend-fail-hashes' => 'შედარებისათვის ფაილების ჰეშების მიღება ვერ მოხერხდა.',
'backend-fail-notsame' => 'უკვე არსებობს  ფაილი $1, რომელიც არაა იდენტური.',
'backend-fail-invalidpath' => '$1 არ წარმოადგენს შენახვის ხელმისაწვდომ გზას.',
'backend-fail-delete' => 'ფაილი $1-ის წაშლა ვერ მოხერხდა.',
'backend-fail-describe' => 'შეუძლებელია მეტამონაცემების შეცვლა ფაილისათვის „$1“',
'backend-fail-alreadyexists' => 'ფაილი $1 უკვე არსებობს.',
'backend-fail-store' => 'ფაილი $1-ის შენახვა $2-ზე ვერ მოხერხდა.',
'backend-fail-copy' => 'ფაილი $1-ის კოპირება $2-ში ვერ მოხერხდა.',
'backend-fail-move' => 'ფაილი $1-ის გადატანა $2-ში ვერ მოხერხდა.',
'backend-fail-opentemp' => 'დროებითი ფაილის გახსნა ვერ ხერხდება.',
'backend-fail-writetemp' => 'დროებითი ფაილის დაწერა ვერ ხერხდება.',
'backend-fail-closetemp' => 'დროებითი ფაილის დახურვა ვერ ხერხდება.',
'backend-fail-read' => 'ფაილი $1-ის წაკითხვა ვერ მოხერხდა.',
'backend-fail-create' => 'ფაილი $1-ის ჩაწერა ვერ მოხერხდა.',
'backend-fail-maxsize' => 'ფაილი $1-ის ჩაწერა ვერ მოხერხდა, რადგანაც მისი ზომა აჭარბებს {{PLURAL:$2|ერთ ბაიტს|$2 ბაიტს}}.',
'backend-fail-readonly' => 'საცავი "$1" ამჟამად ხელმისაწვდომია მხოლოდ წაკითხვის რეჟიმში. მიზეზი: "$2"',
'backend-fail-synced' => 'ფაილი "$1" იმყოფება შიდა საცავის შეუთანხმებელ მდგომარეობაში',
'backend-fail-connect' => '"$1" საცავთან დაკავშირება ვერ მოხერხდა.',
'backend-fail-internal' => '"$1" საცავში მოხდა დაუდგენელი შეცდომა.',
'backend-fail-contenttype' => 'ფაილის შემადგენლობის ტიპის დადგენა ვერ მოხერხდა, "$1"-ში შესანახად.',
'backend-fail-batchsize' => 'საცავმა მიიღო {{PLURAL:$1|ფაილის ოპერაციის|ფაილების ოპერაციების}} ბლოკი $1-დან, შეზღუდვა შეადგენს $2 {{PLURAL:$1|ოპერაციას}}.',
'backend-fail-usable' => 'ფაილი $1 წაკითხვა ან ჩაწერა ვერ მოხერხდა უფლებების უკმარისობის ან საჭირო საქაღალდეების არქონის გამო.',

# File journal errors
'filejournal-fail-dbconnect' => 'ჟურნალის მონაცემთა ბაზებთან დაკავშირება "$1" მონაცემთა შესანახად ვერ მოხერხდა.',
'filejournal-fail-dbquery' => 'ჟურნალის მონაცემთა ბაზებთან დაკავშირება "$1" მონაცემთა განახლებისათვის ვერ მოხერხდა.',

# Lock manager
'lockmanager-notlocked' => '"$1"–ის განბლოკვა ვერ მოხერხდა; ის არ არის დაბლოკილი.',
'lockmanager-fail-closelock' => 'ბლოკირების ფაილის დახურვა "$1"–თვის ვერ მოხერხდა.',
'lockmanager-fail-deletelock' => 'ბლოკირების ფაილის წაშლა „$1“-თვის ვერ მოხერხდა.',
'lockmanager-fail-acquirelock' => '"$1"–ის ბლოკირება ვერ მოხერხდა.',
'lockmanager-fail-openlock' => 'ბლოკირების ფაილის გახსნა "$1"–თვის ვერ მოხერხდა.',
'lockmanager-fail-releaselock' => '"$1"–ის განბლოკვა ვერ მოხერხდა.',
'lockmanager-fail-db-bucket' => '$1 სეგმენტში ბლოკირებების ბაზების საკმარის რაოდენობასთან დაკავშირება ვერ მოხერხდა.',
'lockmanager-fail-db-release' => '$1 მონაცემთა ბაზაზე ბლოკის მოხსნა ვერ მოხერხდა.',
'lockmanager-fail-svr-acquire' => 'ვერ მოხერხდა ბლოკირების მიღება სერვერზე $1.',
'lockmanager-fail-svr-release' => '$1 სერვერზე ბლოკის მოხსნა ვერ მოხერხდა.',

# ZipDirectoryReader
'zip-file-open-error' => 'წარმოიქმნა შეცდომა ფაილის ZIP შემოწმებისათვის გახსნისას.',
'zip-wrong-format' => 'მოცემული ფაილი არაა ZIP-ფაილი.',
'zip-bad' => 'ფაილი დაზიანებულია ან სხვა მიზეზთა გამო ამ ZIP–ფაილის წაკითხვა ვერ ხერხდება. 
შეუძლებელია უსაფრთხოების სათანადოდ შემოწმება.',
'zip-unsupported' => 'ამ ZIP-ფაილს გააჩნია შეკუმშვის თვისებები, რომლებიც მედიავიკის მიერ მხარდაჭერილი არაა.
შეუძლებელია უსაფრთხოების სათანადოდ შემოწმება.',

# Special:UploadStash
'uploadstash' => 'ფარული ატვირთვა',
'uploadstash-summary' => 'ამ გვერდზე შესაძლებელია იმ ფაილთა მოძიება, რომლებიც უკვე აიტვირთნენ ან ახლა იტვირთებინ, მაგრამ ჯერ ვიკიში არ გამოქვეყნებულან. ეს ფაილები, გარდა ამტვირთავი მომხმარებლისა, ჯერ საჯაროდ არავის უნახავს.',
'uploadstash-clear' => 'დაფარული ფაილების გასუფთავება',
'uploadstash-nofiles' => 'თქვენ არ გაქვთ დაფარული ფაილები.',
'uploadstash-badtoken' => 'მითითებული მოქმედება ვერ შესრულდა. შესაძლოა, თქვენი უსაფრთხოების მანდატის მოქმედების ვადა ამოიწურა. კიდევ სცადეთ.',
'uploadstash-errclear' => 'ფაილების გასუფთავება ვერ მოხერხდა.',
'uploadstash-refresh' => 'ფაილების სიის განახლება',
'invalid-chunk-offset' => 'არასწორი საწყისი წერტილი',

# img_auth script messages
'img-auth-accessdenied' => 'მოქმედება აკრძალულია',
'img-auth-nopathinfo' => 'დაკარგულია PATH_INFO.
თქვენი სერვერი არ არის მომართული ამ ინფორმაციის გადასაცემად.
შესაძლოა, ის მუშაობს CGI-ის ბაზაზე და არ გააჩნია img_auth მხარდაჭერა.
[//www.mediawiki.org/wiki/Manual:Image_Authorization იხილეთ სურათის ავტორიზაცია.]',
'img-auth-notindir' => 'მოთხოვნილი გზა არ შეესაბამება ატვირთვის ფოლდერს.',
'img-auth-badtitle' => 'შეუძლებელია სწორი სათაურის შექმნა "$1"-დან.',
'img-auth-nologinnWL' => 'თქვენ არ შესულხართ სისტემაში, ხოლო «$1» არ არის თეთრ სიაში.',
'img-auth-nofile' => 'ფაილი "$1" არ არსებობს.',
'img-auth-isdir' => 'თქვენ ცდილობთ «$1» კატალოგთან მისავლის მიგნებას.
ნებადართულია მხოლოდ ფაილებთან კავშირი.',
'img-auth-streaming' => 'ნაკადური გადაცემა «$1».',
'img-auth-public' => 'img_auth.php-ის დანიშვნა გამოიწვევს ფაილების დახურული ვიკიდან გაოტანას.
ეს ვიკი გამართულია როგორც საზოგადი.
უსაფრთხოების ოპტიმიზააციისთვის img_auth.php გათიშულია.',
'img-auth-noread' => 'მომხმარებელს არა აქვს ნებართვა "$1"-ის წასაკითხად.',
'img-auth-bad-query-string' => 'URL შეიცავს არასწორ მოთხოვნას.',

# HTTP errors
'http-invalid-url' => 'არასწორი ბმული: $1',
'http-invalid-scheme' => '«$1» სქემის მქონე მისამართები მხარდაჭერილები არ არიან.',
'http-request-error' => 'HTTP მოთხოვნის შეცდომა უცნობი მიზეზის გამო.',
'http-read-error' => 'HTTP წაკითხვის შეცდომა.',
'http-timed-out' => 'HTTP მოთხოვნის დრო გავიდა.',
'http-curl-error' => 'შეცდომა URL: $1-ის მოთხოვნისას',
'http-bad-status' => 'HTTP მოთხოვნისას აღმოჩენილია შეცდომა - $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL მიუწვდომელია',
'upload-curl-error6-text' => 'წარმოდგენილი URL-ის მიგნება შეუძლებელია.
გთხოვთ შეამოწმოთ URL-ის სისწორე და ვებ-მისამართის ფუნქციონირება.',
'upload-curl-error28' => 'დრო, გამოყოფილი ატვირთვაზე ამოწურულია.',
'upload-curl-error28-text' => 'საიტს ძალიან დიდი ხანი დასჭირდა გამოხმაურებისთვის.
გთხოვთ შეამოწმოთ, რომ საიტი მუშაობს და მცირე ხნის შემდეგ კვლავ სცადეთ.
ალბათ სასურველია ოპერაცია ნაკლებად გადატვირთულ დროს სცადოთ.',

'license' => 'ლიცენზია:',
'license-header' => 'ლიცენზია',
'nolicense' => 'არაფერი არის მონიშნული',
'license-nopreview' => '(წინასწარ გადახედვა არ არის ხელმისაწვდომი)',
'upload_source_url' => ' (სწორი, საზოგადოდ ხელმისაწვდომი URL)',
'upload_source_file' => ' (ფაილი შენს კომპიუტერზე)',

# Special:ListFiles
'listfiles-summary' => 'ეს სპეციალური გვერდი აჩვენებს ყველა ატვირთულ ფაილს.',
'listfiles_search_for' => 'ძიება სურათის სახელის მიხედვით:',
'imgfile' => 'ფაილი',
'listfiles' => 'სურათების სია',
'listfiles_thumb' => 'მინიატიურა',
'listfiles_date' => 'თარიღი',
'listfiles_name' => 'სახელი',
'listfiles_user' => 'მომხმარებელი',
'listfiles_size' => 'ზომა (ბაიტები)',
'listfiles_description' => 'აღწერილობა',
'listfiles_count' => 'ვერსიები',
'listfiles-show-all' => 'სურათების ძველი ვერსიების ჩართვა',
'listfiles-latestversion' => 'მიმდინარე ვერსია',
'listfiles-latestversion-yes' => 'დიახ',
'listfiles-latestversion-no' => 'არა',

# File description page
'file-anchor-link' => 'ფაილი',
'filehist' => 'ფაილის ისტორია',
'filehist-help' => 'დააწკაპუნეთ თარიღზე/დროზე, რათა იხილოთ ფაილი, როგორც ის მაშინ გამოიყურებოდა.',
'filehist-deleteall' => 'წაშალე ყველა',
'filehist-deleteone' => 'წაშლა',
'filehist-revert' => 'დააბრუნე',
'filehist-current' => 'მიმდინარე',
'filehist-datetime' => 'თარიღი/დრო',
'filehist-thumb' => 'მინიატიურა',
'filehist-thumbtext' => 'მინიატურა $1 ვერსიისთვის',
'filehist-nothumb' => 'არ არის მინიატურა',
'filehist-user' => 'მომხმარებელი',
'filehist-dimensions' => 'განზომილებები',
'filehist-filesize' => 'ფაილის ზომა',
'filehist-comment' => 'კომენტარი',
'filehist-missing' => 'ფაილი ვერ მოიძებნა',
'imagelinks' => 'ფაილის გამოყენება',
'linkstoimage' => 'მომდევნო {{PLURAL:$1|გვერდი|გვერდები}} ებმის ამ ფაილს:',
'linkstoimage-more' => '$1-ზე მეტი {{PLURAL:$1|გვერდები|გვერდების|გვერდები}} რომლებსაც აქვთ ბმულები ამ ფაილზე.
მოცემულ სიაში {{PLURAL:$1|წარმოდგენილია მხოლოდ $1 ბმული|წარმოდგენილია მხოლოდ $1 ბმულები|წარმოდგენილია მხოლოდ $1 ბმულების}} ამ ფაილზე.
შეგიძლიათ ნახოთ ასევე [[Special:WhatLinksHere/$2|სრული სია]].',
'nolinkstoimage' => 'არ არსებობს ამ ფაილთან დაკავშირებული გვერდები.',
'morelinkstoimage' => 'იხილეთ [[Special:WhatLinksHere/$1|სხვა ბმულები]] ამ ფაილზე.',
'linkstoimage-redirect' => '$1 (ფაილის გადამისამართება) $2',
'duplicatesoffile' => '{{PLURAL:$1|შემდეგი $1 ფაილი არის დუბლიკატი|შემდეგი $1 ფაილები არიან დუბლიკატები|შემდეგი $1 ფაილები არიან დუბლიკატები}} ამ ფაილისა ([[Special:FileDuplicateSearch/$2|დამატებითი ინფორმაცია]]):',
'sharedupload' => 'ეს ფაილი $1-დანაა და შეიძლება სხვა პროექტებიც იყენებდეს.',
'sharedupload-desc-there' => 'ეს ფაილი $1-დან შეიძლება გამოყენებული იქნას სხვა პროექტებშიც.
დამატებითი ინფორმაციის მოპოვება შეიძლება [$2 ფაილის აღწერის გვერდზე].',
'sharedupload-desc-here' => 'ეს ფაილი $1-დან შეიძლება გამოყენებული იქნას სხვა პროექტებშიც.
მისი [$2 აღწერის გვერდიდან] ინფორმაცია წარმოდგენილია ქვევით.',
'sharedupload-desc-edit' => 'ეს ფაილი $1-დანაა, ის შესაძლოა გამოიყენებოდეს რამდენიმე სხვა საიტზეც.
მისი აღწერის რედაქტირება შესაძლებელია [$2 შესაბამის გვერდზე].',
'sharedupload-desc-create' => 'ეს ფაილი $1-დანაა, ის შესაძლოა გამოიყენებოდეს რამდენიმე სხვა საიტზეც.
მისი აღწერის რედაქტირება შესაძლებელია [$2 შესაბამის გვერდზე].',
'filepage-nofile' => 'ამ სახელით ფაილი არ არსებობს.',
'filepage-nofile-link' => 'ამ სახელით ფაილი არ არსებობს, [$1 თუმცა თქვენ მისი ატვირთვა შეგიძლიათ].',
'uploadnewversion-linktext' => 'ატვირთეთ ამ ფაილის ახალი ვერსია',
'shared-repo-from' => ' $1-დან',
'shared-repo' => 'საერთო საცავიდან',
'shared-repo-name-wikimediacommons' => 'ვიკისაწყობი',
'upload-disallowed-here' => 'თქვენ არ შეგიძლიათ ამ ფაილზე გადაწერა.',

# File reversion
'filerevert' => 'დააბრუნე $1',
'filerevert-legend' => 'დააბრუნე ფაილი',
'filerevert-intro' => '<span class="plainlinks">თქვენ აბრუნებთ \'\'\'[[Media:$1|$1]]\'\'\'  [$4 ვერსიას $3, $2]-თან.</span>',
'filerevert-comment' => 'მიზეზი:',
'filerevert-defaultcomment' => 'დაბრუნება ვერსიასთან $2, $1-დან.',
'filerevert-submit' => 'გაუქმება',
'filerevert-success' => "'''[[Media:$1|$1]]''' დაუბრუნდა ვერსიას [$4  $3, $2]-დან.",
'filerevert-badversion' => 'არ არსებობს ფაილის წინა ლოკალური ვერსია მოთხოვნილი  თარიღითა და დროით',

# File deletion
'filedelete' => '$1 წაშლა',
'filedelete-legend' => 'ფაილის წაშლა',
'filedelete-intro' => "თქვენ შლით '''[[Media:$1|$1]]''' მისი ისტორიით.",
'filedelete-intro-old' => '<span class="plainlinks">თქვენ შლით ვერსიას \'\'\'[[Media:$1|$1]]\'\'\'  [$4 $3, $2]-დან.</span>',
'filedelete-comment' => 'მიზეზი:',
'filedelete-submit' => 'წაშლა',
'filedelete-success' => "'''$1''' წაშლილია.",
'filedelete-success-old' => "ვერსია '''[[Media:$1|$1]]'''  $3 $2-დან წაიშალა.",
'filedelete-nofile' => "'''$1''' არ არსებობს.",
'filedelete-nofile-old' => "მითითებული ატრიბუტებით '''$1'''-ის არქივირებული ვერსია არ არსებობს.",
'filedelete-otherreason' => 'სხვა/დამატებითი მიზეზი:',
'filedelete-reason-otherlist' => 'სხვა მიზეზი',
'filedelete-reason-dropdown' => '* წაშლის ხშირი მიზეზები
** საავტორო უფლებების დარღვევა
** ფაილი-დუბლიკატი',
'filedelete-edit-reasonlist' => 'წაშლის მიზეზების რედაქტირება',
'filedelete-maintenance' => 'ფაილების წაშლა და აღდგენა დროებით გათიშულია ტექნიკური სამუშაობის განმავლობაში.',
'filedelete-maintenance-title' => 'ფაილის წაშლა ვერ ხერხდება',

# MIME search
'mimesearch' => 'MIME ძიება',
'mimesearch-summary' => 'ამ გვერდის მეშვეობით შესაძლებელია ფაილების მოძიება მათი MIME-ტიპის მიხედვით. შეტანის ფორმა: შიგთავსის ტიპი/ქვეტიპი, მაგ <code>image/jpeg</code>.',
'mimetype' => 'MIME ტიპი:',
'download' => 'გადმოტვირთვა',

# Unwatched pages
'unwatchedpages' => 'არაკონტროლირებადი გვერდები',

# List redirects
'listredirects' => 'გადამისამართებების სია',

# Unused templates
'unusedtemplates' => 'გამოუყენებელი თარგები',
'unusedtemplatestext' => 'ეს გვერდი სახელთა სივრცეში "{{ns:template}}" მოიცავს ყველა იმ გვერდის ჩამონათვალს, რომელიც არ არის მოთავსებული სხვა გვერდებზე.
გახსოვდეთ თარგების სხვა ბმულებს სანამ წაშლით შეამოწმეთ.',
'unusedtemplateswlh' => 'სხვა ბმულები',

# Random page
'randompage' => 'ნებისმიერი გვერდი',
'randompage-nopages' => '{{PLURAL:$2|სახელთა შემდეგი სივრცე|სახელთა შემდეგ სივრცეში}} "$1" არ არის გვერდები.',

# Random page in category
'randomincategory' => 'კატეგორიის შემთხვევითი გვერდი',
'randomincategory-invalidcategory' => 'კატეგორია „$1“ არ არსებობს.',
'randomincategory-selectcategory-submit' => 'მიდი',

# Random redirect
'randomredirect' => 'ნებისმიერი გადამისამართება',
'randomredirect-nopages' => 'სახელთა სივრცეში „$1“ არ არის გადამისამართებები.',

# Statistics
'statistics' => 'სტატისტიკა',
'statistics-header-pages' => 'გვერდების სტატისტიკა',
'statistics-header-edits' => 'რედაქციების სტატისტიკა',
'statistics-header-views' => 'გვერდის მონახულების სტატისტიკა',
'statistics-header-users' => 'მომხმარებლის სტატისტიკა',
'statistics-header-hooks' => 'სხვა სტატისტიკა',
'statistics-articles' => 'სტატია',
'statistics-pages' => 'გვერდები',
'statistics-pages-desc' => 'ვიკის ყველა გვერდი, განხილვის, გადამისამართების და სხვ. ჩათვლით.',
'statistics-files' => 'ატვირთული ფაილები',
'statistics-edits' => 'გვერდის შესწორებები მას შემდეგ რაც შეიქმნა პროექტი {{SITENAME}}',
'statistics-edits-average' => 'რედაქტირების საერთო რაოდენობა გვერდზე',
'statistics-views-total' => 'სულ ხილვა',
'statistics-views-total-desc' => 'სათვალავში არ მიიღება არარსებული და სამუშაო გვერდების გადახედვა',
'statistics-views-peredit' => 'შესწორებათა ხილვა',
'statistics-users' => 'დარეგისტრირებული [[Special:ListUsers|მომხმარებლები]]',
'statistics-users-active' => 'აქტიური მომხმარებლები',
'statistics-users-active-desc' => 'მომხმარებლები, რომლებმაც განახორციელეს ქმედება {{PLURAL:$1|ბოლო $1 დღის|ბოლო $1 დღის}} განმავლობაში',
'statistics-mostpopular' => 'ყველზე ხშირად ხილვადი გვერდები',

'pageswithprop' => 'გვერდები განსაზღვრული თვისებით',
'pageswithprop-legend' => 'გვერდები განსაზღვრული თვისებით',
'pageswithprop-text' => 'აქ მოცემულია გვერდები, რომელთაც ხელით განესაზღვრათ გარკვეული თვისებები.',
'pageswithprop-prop' => 'თვისების სახელი:',
'pageswithprop-submit' => 'მიდი',

'doubleredirects' => 'ორმაგი გადამისამართება',
'doubleredirectstext' => 'ამ გვერდზე ჩამოთვლილია გვერდები, რომლებიც გადამისამართებულია სხვა გადამისამართების გვერდებზე.
ყოველი მწკრივი შეიცავს ბმულებს პირველ და მეორე გადამისამართებაზე, აგრეთვე მეორე გადამისამართების ტექსტის პირველ სტრიქონს, რომელშიც ჩვეულებრივ მითითებულია რეალური „სამიზნე“ გვერდის სათაური. საჭიროა, რომ პირველი გადამისამართებაც უთითებდეს ამ გვერდზე.
<del>გადახაზული</del> მონაცემები უკვე გამართულია.',
'double-redirect-fixed-move' => '[[$1]] გადატანილ იქნა.
ამჟამად ის გადამისამართებულია [[$2]]-ზე.',
'double-redirect-fixed-maintenance' => 'ორმაგი გადამისამართების გასწორება [[$1]]დან [[$2]]ზე.',
'double-redirect-fixer' => 'გადამისამართება შემსწორებელი',

'brokenredirects' => 'გაწყვეტილი გადამისამართება',
'brokenredirectstext' => 'შემდეგი გადამისამართებები გაკეთებულია არარსებულ გვერდებზე:',
'brokenredirects-edit' => 'რედაქტირება',
'brokenredirects-delete' => 'წაშლა',

'withoutinterwiki' => 'გვერდები ენის ბმულების გარეშე',
'withoutinterwiki-summary' => 'შემდეგ გვერდებს სხვა ენების ვერსიებზე არ აქვთ ბმულები:',
'withoutinterwiki-legend' => 'წინსართი',
'withoutinterwiki-submit' => 'ჩვენება',

'fewestrevisions' => 'ყველაზე ნაკლებად რედაქტირებული სტატიები',

# Miscellaneous special pages
'nbytes' => '$1 ბაიტი',
'ncategories' => '$1 კატეგორია',
'ninterwikis' => '$1 {{PLURAL:$1|ინტერვიკი|ინტერვიკი}}',
'nlinks' => '$1 ბმული',
'nmembers' => '$1 წევრი',
'nrevisions' => '$1 რედაქტირება',
'nviews' => '$1 ჩვენება',
'nimagelinks' => 'გამოიყენება $1 {{PLURAL:$1|გვერდზე}}',
'ntransclusions' => 'გამოიყენება $1 {{PLURAL:$1|გვერდზე}}',
'specialpage-empty' => 'ეს გვერდი ცარიელია.',
'lonelypages' => 'ობოლი გვერდები',
'lonelypagestext' => 'შემდეგი გვერდები არ არის დაკავშირებული ან ბმული სხვა გვერდებიდან {{SITENAME}}-ში არ მისამართდება.',
'uncategorizedpages' => 'გვერდები კატეგორიის გარეშე',
'uncategorizedcategories' => 'კატეგორიები კატეგორიის გარეშე',
'uncategorizedimages' => 'უკატეგორიო ფაილები',
'uncategorizedtemplates' => 'თარგები კატეგორიების გარეშე',
'unusedcategories' => 'გამოუყენებელი კატეგორიები',
'unusedimages' => 'გამოუყენებელი ფაილები',
'popularpages' => 'პოპულარული გვერდები',
'wantedcategories' => 'მოთხოვნილი კატეგორიები',
'wantedpages' => 'მოთხოვნილი გვერდები',
'wantedpages-badtitle' => 'შეცდომითი სათაური მთხოვნაში  $1.',
'wantedfiles' => 'მოთხოვნილი ფაილები',
'wantedfiletext-cat' => 'შემდეგი ფაილების გამოყენებას ცდილობენ, თუმცა ისინი არ არსებობენ. ამ სიაში შეცდომით შეიძლება მოხვდნენ ისე ფაილები, რომლებიც გარე საცავებში არიან. მსგავსი ცრუ ინფორმაცია აღნიშნული იქნება <del>გადახაზული ხაზით</del>. გარდა ამისა, გვერდები რომლებიც შეიცავენ არარსებულ ფაილებს ჩამოთვლილია აქ [[:$1]].',
'wantedfiletext-nocat' => 'შემდეგი ფაილების გამოყენებას ცდილობენ, თუმცა ისინი არ არსებობენ. ამ სიაში შეცდომით შეიძლება მოხვდნენ ისე ფაილები, რომლებიც გარე საცავებში არიან. მსგავსი ცრუ ინფორმაცია აღნიშნული იქნება <del>გადახაზული ხაზით</del>.',
'wantedtemplates' => 'მოთხოვნილი თარგები',
'mostlinked' => 'ყველაზე მეტი ბმულების მქონე გვერდები',
'mostlinkedcategories' => 'ყველაზე მეტი ბმულების მქონე კატეგორიები',
'mostlinkedtemplates' => 'ყველაზე მეტი ბმულების მქონე თარგები',
'mostcategories' => 'ყველაზე მეტი კატეგორიის მქონე სტატიები',
'mostimages' => 'ყველაზე მეტი ბმულების მქონე ფაილები',
'mostinterwikis' => 'ყველაზე მეტი ინტერვიკის მქონე სტატია',
'mostrevisions' => 'ყველაზე მეტად რედაქტირებული სტატიები',
'prefixindex' => 'ყველა გვერდი (პრეფიქსით)',
'prefixindex-namespace' => 'ყველა პრეფიქსიანი გვერდი ($1 სახელთა სივრცე)',
'shortpages' => 'მოკლე გვერდები',
'longpages' => 'გრძელი გვერდები',
'deadendpages' => 'ჩიხის გვერდები',
'deadendpagestext' => 'ამ ვიკიში შემდგომ გვერდებს არ აქვთ ბმული სხვა გვერდებთან.',
'protectedpages' => 'დაცული გვერდები',
'protectedpages-indef' => 'მხოლოდ უვადო დაცვები',
'protectedpages-cascade' => 'მხოლოდ კასკადური დაცვა',
'protectedpagesempty' => 'ამ დროისთვის არ არსებობს დაცული გვერდები მოთხოვნილი პარამეტრებით.',
'protectedpages-page' => 'გვერდი',
'protectedpages-expiry' => 'ვადა გასდის',
'protectedpages-reason' => 'მიზეზი',
'protectedpages-unknown-timestamp' => 'უცნობი',
'protectedpages-unknown-performer' => 'უცნობი მომხმარებელი',
'protectedtitles' => 'დაცული სათაურები',
'protectedtitlesempty' => 'ამ დროისთვის არ არსებობს მოთხოვნილი გვერდები მოცემული პარამეტრებით.',
'listusers' => 'მომხმარებლების სია',
'listusers-editsonly' => 'აჩვენთ მხოლოდ ის მომხმარებლები, რომლებსაც ერთი შესწორება აქვს გაკეთებული.',
'listusers-creationsort' => 'დაალაგეთ შექმნის თარიღის მიხედვით.',
'usereditcount' => '$1 რედაქტირება',
'usercreated' => '{{GENDER:$3|შექმნილია}} $2-ზე $1-ში',
'newpages' => 'ახალი გვერდები',
'newpages-username' => 'მომხმარებლის სახელი:',
'ancientpages' => 'უძველესი გვერდები',
'move' => 'გადატანა',
'movethispage' => 'ამ გვერდის გადატანა',
'unusedimagestext' => 'ეს ფაილი არ გამოიყენება არც-ერთ გვერდზე.
გაითვალისწინეთ, რომ სხვა ვებ საიტებმა შესაძლოა გამოიყენონ ეს გამოსახულება პირდაპირ URL0ით.',
'unusedcategoriestext' => 'შემდეგი კატეგორიები არსებობს, თუმცა მათ სხვა კატეგორიები ან გვერდები არ იყენებს.',
'notargettitle' => 'სამიზნე არაა',
'notargettext' => 'თქვენ არ მიუთითეთ სამიზნე გვერდი ან მომხმარებელი
ამ ფუნქციის შესასრულებლად.',
'nopagetitle' => 'ამგვარი სამიზნე გვერდი არ არსებობს',
'nopagetext' => 'მოცემული სამიზნო გვერდი არ არის მიითებული.',
'pager-newer-n' => '{{PLURAL:$1|უახლესი 1|უახლესი $1}}',
'pager-older-n' => '{{PLURAL:$1|უფრო ძველი 1|უფრო ძველი $1}}',
'suppress' => 'დამალვა',
'querypage-disabled' => 'ეს სპეცგვერდი გამორთულია წარმადობის გასაზრდელად.',

# Book sources
'booksources' => 'წიგნის წყაროები',
'booksources-search-legend' => 'წიგნის წყაროს ძებნა',
'booksources-isbn' => 'ISBN:',
'booksources-go' => 'გადასვლა',
'booksources-text' => 'ქვემოთ არის ვებ გვერდების ბმულების სია სადაც იყიდება ახალი და ნახმარი წიგნები, და შესაძლოა შეიცავდნენ დამატებით ინფორმაციას წიგნების შესახებ, რომლებსაც ეძებთ:',
'booksources-invalid-isbn' => 'თქვენს მიერ მითითებული ISBN, შეცდომას შეიცავს.  შეამოწმეთ, თუ თავდაპირველი წყარო სწორადაა აკრეფილი.',

# Special:Log
'specialloguserlabel' => 'შემსრულებელი:',
'speciallogtitlelabel' => 'მიზანი (სათაური, ან მომხმარებელი):',
'log' => 'ჟურნალები',
'all-logs-page' => 'ყველა საზოგადო ჟურნალი',
'alllogstext' => '{{SITENAME}}-ის ყველა არსებული ჩანაწერის კომბინირებული ჩვენება.
შეგიძლიათ გაცხრილოთ იგი ჩანაწერის ტიპის, მომხმარებლის სახელის, ან დაკავშირებული გვერდის შერჩევით.',
'logempty' => 'შედეგები არ არის სიაში.',
'log-title-wildcard' => 'სათაურების ძებნა, რომლებიც იწყება ამ ტექსტით',
'showhideselectedlogentries' => 'არჩეული ჟურნალის ჩანაწერის ჩვენება/დამალვა',

# Special:AllPages
'allpages' => 'ყველა გვერდი',
'alphaindexline' => '$1-დან $2-მდე',
'nextpage' => 'შემდეგი გვერდი ($1)',
'prevpage' => 'წინა გვერდი ($1)',
'allpagesfrom' => 'გვერდების ჩვენება დაწყებული:',
'allpagesto' => 'გვერდები, რომლებიც სრულდება:',
'allarticles' => 'ყველა სტატია',
'allinnamespace' => 'ყველა გვერდი ($1 სახელთა სივრცეში)',
'allpagessubmit' => 'ჩვენება',
'allpagesprefix' => 'აჩვენე გვერდები პრეფიქსით:',
'allpagesbadtitle' => 'მოცემული გვერდის სათაური არასწორია ან აქვს ინტერვიკი ან ნათშორისი პრეფიქსი. იგი შესაძლოა შეიცავდეს ერთ ან მეტ სიმბოლოს, რომელიც არ შეიძლება გამოყენებულ იქნას სათაურში.',
'allpages-bad-ns' => '{{SITENAME}} "$1" არ აქვს სახელთა სივრცე.',
'allpages-hide-redirects' => 'გადამისამართებების დამალვა',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'თქვენ ნახულობთ გვერდის ქეშირებულ ვერსიას, ის შეიძლება განახლდა $1 წინ.',
'cachedspecial-viewing-cached-ts' => 'თქვენ ნახულობთ ამ გვერდის ქეშირებულ ვერსიას, რომელიც შესაძლოა მნიშვნელოვნად განსხვავდებოდეს მიმდინარე ვერსისაგან.',
'cachedspecial-refresh-now' => 'ბოლო ვერსიის ხილვა.',

# Special:Categories
'categories' => 'კატეგორიები',
'categoriespagetext' => 'შემდეგი {{PLURAL:$1|კატეგორია შეიცავს|კატეგორია შეიცავს}} გვერდს ან მედიას.
[[Special:UnusedCategories|გამოუყენებელი კატეგორიები]] აქ ნაჩვენები არ არის.
იხ. ასევე [[Special:WantedCategories|მოთხოვნილი კატეგორიები]].',
'categoriesfrom' => 'აჩვენეთ კატეგორიები, რომლებიც იწყება:',
'special-categories-sort-count' => 'დაალაგეთ რაოდენობის მიხედვით',
'special-categories-sort-abc' => 'ანბანზე დალაგება',

# Special:DeletedContributions
'deletedcontributions' => 'მომხმარებლის წაშლილი წვლილი',
'deletedcontributions-title' => 'წაშლილი წვლილი',
'sp-deletedcontributions-contribs' => 'წვლილი',

# Special:LinkSearch
'linksearch' => 'გარე ბმულების ძიება',
'linksearch-pat' => 'ძიების თარგი:',
'linksearch-ns' => 'სახელთა სივრცე:',
'linksearch-ok' => 'ძიება',
'linksearch-text' => 'შესაძლებელია გამოიყენოთ ქვეხაზოვანი სიმბოლოები, მაგალითად, "*.wikipedia.org".
უკიდურეს შემთხვევაში საჭიროა ზედა დონის დომენი, მაგალითად "*.org"<br />
მხარდამჭერი {{PLURAL:$2|პროტოკოლი|პროტოკოლები}}: <code>$1</code> (სტანდარტულად http:// თუკი პროტოკოლი არ არის მითითებული)',
'linksearch-line' => 'ბმულები $1-ზე  $2-დან',
'linksearch-error' => 'წარმოდგენილი სიმბოლოების გამოყენება შესაძლებელია მხოლოდ მისამართის დასაწყისში.',

# Special:ListUsers
'listusersfrom' => 'აჩვენეთ მომხმარებლები, რომლებიც იწყებიან:',
'listusers-submit' => 'ჩვენება',
'listusers-noresult' => 'მომხმარებელი ვერ ვიპოვეთ.',
'listusers-blocked' => '(დაბლოკილია)',

# Special:ActiveUsers
'activeusers' => 'აქტიურ მომხმარებელთა სია',
'activeusers-intro' => 'ეს არის მომხმარებელთა სია, რომელთაც აქვს წვლილი უკანასკნელი $1 {{PLURAL:$1|დღის|დღის}} განმავლობაში.',
'activeusers-count' => '$1 {{PLURAL:$1|მოქმედება|მოქმედება}} {{PLURAL:$3|დღის|$3 დღის}} განმავლობაში.',
'activeusers-from' => 'მომხმარებელთა ჩვენება, დაწყებული:',
'activeusers-hidebots' => 'რობოტების დამალვა',
'activeusers-hidesysops' => 'ადმინისტრატორების დამალვა',
'activeusers-noresult' => 'მომხმარებლები არ არიან ნაპოვნი.',

# Special:ListGroupRights
'listgrouprights' => 'მომხმარებელთა ჯგუფების უფლებები',
'listgrouprights-summary' => 'ქვემოთ წარმოდგენილია ამ ვიკიში გარკვეულ ჯგუფთა სია და მათი უფლებები.
შესაძლოა არსებობს [[{{MediaWiki:Listgrouprights-helppage}}|დამატებითი ინფორმაცია]] ინდივიდუალურ უფლებებთან დაკავშირებით.',
'listgrouprights-key' => 'ლეგენდა:
* <span class="listgrouprights-granted">მიცემული უფლებები</span>
* <span class="listgrouprights-revoked">ჩამორთმეული უფლებები</span>',
'listgrouprights-group' => 'ჯგუფი',
'listgrouprights-rights' => 'უფლებები',
'listgrouprights-helppage' => 'Help:ჯგუფების უფლებები',
'listgrouprights-members' => '(წევრების სია)',
'listgrouprights-right-display' => '<span class="listgrouprights-granted">$1 <code>($2)</code></span>',
'listgrouprights-right-revoked' => '<span class="listgrouprights-revoked">$1 <code>($2)</code></span>',
'listgrouprights-addgroup' => 'შემდეგი {{PLURAL:$2|ჯგუფის|ჯგუფების}} დამატება: $1',
'listgrouprights-removegroup' => 'შემდეგი {{PLURAL:$2|ჯგუფის|ჯგუფების}} ამოღება: $1',
'listgrouprights-addgroup-all' => 'ჩაამატეთ ყველა ჯგუფი',
'listgrouprights-removegroup-all' => 'ყველა ჯგუფის წაშლა',
'listgrouprights-addgroup-self' => 'შეუძლია ჩაუმატოს {{PLURAL:$2|ჯგუფი|ჯგუფები}} თავის ანგარიშს: $1',
'listgrouprights-removegroup-self' => 'შეუძლია წაშალოს {{PLURAL:$2|ჯგუფი|ჯგუფები}} თავისი ანგარიშიდან: $1',
'listgrouprights-addgroup-self-all' => 'შეუძლია ყელა ჯგუფია ჩამატება ანგარიშს.',
'listgrouprights-removegroup-self-all' => 'შეუძლია თავისი ანგარიშის ყველა ჯგუფის წაშლა.',

# Email user
'mailnologin' => 'გამგზავნი მისამართი არ არის მითითებული.',
'mailnologintext' => 'თქვენ უნდა [[Special:UserLogin|წარადგენილი იყოთ სისტემისადმი]] და გქონდეთ წესიერი ელექტრონული ფოსტის მისამართი თქვენს [[Special:Preferences|კონფიგურაციაში]] იმისთვის, რომ გაუგზავნოთ წერილების სხვა მომხმარებლებს.',
'emailuser' => 'გაუგზავნეთ იმეილი ამ მომხმარებელს',
'emailuser-title-target' => 'ელ. ფოსტის მიწერა {{GENDER:$1|მომხმარებელთან}}',
'emailuser-title-notarget' => 'ელ. ფოსტის გაგზავნა მომხმარებელთან',
'emailpage' => 'ელ. ფოსტა მომხმარებელს',
'emailpagetext' => 'თუ ამ მომხმარებელმა თავის პარამეტრებში ელ. ფოსტის მოქმედი მისამართი მიუთითა, ქვემოთ მოყვანილი ფორმის შევსებისას შეგიძლიათ {{GENDER:$1|მისთვის}} შეტყობინების გაგზავნა. ელ. ფოსტის მისამართი, რომელიც [[Special:Preferences|თქვენს პარამეტრებში]] მიუთითეთ, დაფიქსირდება „გამომგზავნის“ ველში, რათა ადრესატმა პასუხის გაცემა შეძლოს.',
'usermailererror' => 'ელ. ფოსტა დაბრუნდა შეცდომის გამო:',
'defemailsubject' => 'ელ-ფოსტა საიტის {{SITENAME}} მომხმარებლისგან „$1“',
'usermaildisabled' => 'მომხმარებლის e-mail გათიშულია',
'usermaildisabledtext' => 'თქვენ ვერ გაგზავნით e-mail-ს.',
'noemailtitle' => 'ელ. ფოსტის მისამართი მითითებული არ არის',
'noemailtext' => 'მომხმარებელმა არ მიუთითა მოქმედი ელ. ფოსტის მისამართი.',
'nowikiemailtitle' => 'წერილების გაგზავნის უფლება არ გაქვთ.',
'nowikiemailtext' => 'ამ მომხმარებელს არ სურს წერილების მიღება სხვა მომხმარებლებისაგან.',
'emailnotarget' => 'არარსებული ან არასწორი მომხმარებლის სახელი.',
'emailtarget' => 'შეიყვანეთ მომხმარებლის სახელი ელ-ფოსტის გასაგზავნად.',
'emailusername' => 'მომხმარებლის სახელი:',
'emailusernamesubmit' => 'შენახვა',
'email-legend' => 'წერილის გაგზავნა სხვა მომხმარებლისადმი {{grammar:genitive|{{SITENAME}}}}',
'emailfrom' => 'გამგზავნი:',
'emailto' => 'მიმღები:',
'emailsubject' => 'თემა:',
'emailmessage' => 'შეტყობინება:',
'emailsend' => 'გაგზავნა',
'emailccme' => 'ელ-ფოსტით გამომიგავნეთ ასლი.',
'emailccsubject' => 'შეტყობინების ასლი გაუგზავნეთ $1: $2',
'emailsent' => 'ელ. ფოსტა გაგზავნილია',
'emailsenttext' => 'თქვენი ელ. შეტყობინება გაგზავნილია.',
'emailuserfooter' => 'ეს ელ. შეტყობინება $1-მა გაუგზავნა $2-ს „გაუგზავნეთ მომხმარებელს ელ. შეტყობინება“ ფუნქციით {{SITENAME}}-დან.',

# User Messenger
'usermessage-summary' => 'სისტემური შეტყობინების დატოვება.',
'usermessage-editor' => 'სისტემური მესენჯერი',
'usermessage-template' => 'MediaWiki:მომხმარებლის შეტყობინება',

# Watchlist
'watchlist' => 'კონტროლის სია',
'mywatchlist' => 'კონტროლის სია',
'watchlistfor2' => '$1 ($2) თვის',
'nowatchlist' => 'თქვენი კონტროლის სია ცარიელია.',
'watchlistanontext' => '$1

იხილეთ ან რედაქტირება გაუკეთეთ თქვენი კონტროლის სიაში შეტანილ ერთეულებს.',
'watchnologin' => 'რეგისტრაცია ვერ შესრულდა',
'watchnologintext' => 'თქვენ უნდა მოახდინოთ [[Special:UserLogin|რეგისტრაცია]] თქვენი კონტროლის სიის მოდიფიცირებისათვის.',
'addwatch' => 'კონტროლის სიაში დამატება',
'addedwatchtext' => 'გვერდი „[[:$1]]“ დაემატა თქვენს [[Special:Watchlist|კონტროლის სიას]].
ამ და მასთან დაკავშირებული განხილვის გვერდის შემდგომი ცვლილებები აისახება იქ.',
'removewatch' => 'კონტროლის სიიდან წაშლა',
'removedwatchtext' => 'გვერდი „[[:$1]]“ ამოღებულია თქვენი [[Special:Watchlist|კონტროლის სიიდან]].',
'watch' => 'კონტროლი',
'watchthispage' => 'ამ გვერდის კონტროლი',
'unwatch' => 'კონტროლის მოხსნა',
'unwatchthispage' => 'შეაჩერეთ კონტროლი',
'notanarticle' => 'შიგთავსის გვერდი არ არის',
'notvisiblerev' => 'შესწორება წაშლილია',
'watchlist-details' => '$1 გვერდია თქვენი კონტროლის სიაში განხილვის გვერდების ჩაუთვლელად.',
'wlheader-enotif' => 'ელ.ფოსტით შეტყობინება ჩართულია.',
'wlheader-showupdated' => "თქვენი ბოლო ვიზიტის შემდეგ შეცვლილი გვერდები, აღნიშნულია '''მუქად'''.",
'watchmethod-recent' => 'მიმდინარეობს უახლესი შესწორებების შემოწმება კონტროლის ქვეშ მყოფი გვერდების მიხედვით.',
'watchmethod-list' => 'მიმდინარეობს თქვენი კონტროლის ქვეშ მყოფი გვერდების შემოწმება უახლესი შესწორებების მიხედვით.',
'watchlistcontains' => 'თქვენი კონტროლის სია შეიცავს $1 გვერდს.',
'iteminvalidname' => '„$1-ს“ პრობლემა აქვს, სახელი არასწორია...',
'wlshowlast' => 'აჩვენე ბოლო $1 საათის $2 დღის $3',
'watchlist-options' => 'კონტროლის სიის პარამეტრები',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'კონტროლებადი...',
'unwatching' => 'არაკონტროლირებადი...',
'watcherrortext' => '"$1"–თვის კონტროლის სიის პარამეტრების ცვლილებისას მოხდა შეცდომა.',

'enotif_mailer' => '{{SITENAME}}. ელ. ფოსტით შეტყობინების სამსახური',
'enotif_reset' => 'აღნიშნე ყველა გვერდი, როგორც გადასინჯული',
'enotif_impersonal_salutation' => 'ვიკიპედიის მომხმარებელი',
'enotif_subject_deleted' => 'გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“ წაშალა {{gender:$2|მომხმარებელმა}} $2',
'enotif_subject_created' => 'გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“ შექმნა {{gender:$2|მომხმარებელმა}} $2',
'enotif_subject_moved' => 'გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“ გადაიტანა {{gender:$2|მომხმარებელმა}} $2',
'enotif_subject_restored' => 'გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“ აღადგინა {{gender:$2|მომხმარებელმა}} $2',
'enotif_subject_changed' => 'გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“ შეცვალა {{gender:$2|მომხმარებელმა}} $2',
'enotif_body_intro_deleted' => '$PAGEEDITDATE {{gender:$2|მომხმარებელმა}} $2 წაშალა გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“, იხილეთ $3.',
'enotif_body_intro_created' => '$PAGEEDITDATE {{gender:$2|მომხმარებელმა}} $2 შექმნა გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“, მიმდინარე ვერსია იხილიეთ ბმულზე: $3',
'enotif_body_intro_moved' => '$PAGEEDITDATE {{gender:$2|მომხმარებელმა}} $2 გადაიტანა გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“, მიმდინარე ვერსია იხილიეთ ბმულზე: $3',
'enotif_body_intro_restored' => '$PAGEEDITDATE {{gender:$2|მომხმარებელმა}} $2 აღადგინა გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“, მიმდინარე ვერსია იხილიეთ ბმულზე: $3',
'enotif_body_intro_changed' => '$PAGEEDITDATE {{gender:$2|მომხმარებელმა}} $2 შეცვალა გვერდი პროექტიდან „{{SITENAME}}“ სახელწოდებით „$1“, მიმდინარე ვერსია იხილიეთ ბმულზე: $3',
'enotif_lastvisited' => 'იხ. $1 ყველა ცვლილებისთვის თქვენი ბოლო შემოსვლის შემდეგ.',
'enotif_lastdiff' => 'იხილეთ $1 ამ ცვლილების სანახავად.',
'enotif_anon_editor' => 'ანონიმური მომხმარებელი $1',
'enotif_body' => 'ძვირფასო $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

ცვლილების მოკლე აღწერა: $PAGESUMMARY $PAGEMINOREDIT

დაუკავშირდით რედაქტორს:
ელ.ფოსტა: $PAGEEDITOR_EMAIL
ვიკი: $PAGEEDITOR_WIKI

შემდგომი ცვლილებების შესახებ შეტყობინებების მისაღებად ამ გვერდს კვლავ უნდა ესტუმროთ. თქვენ აგრეთვე შეგიძლიათ თქვენ კონტროლის სიაში გათიშოთ შეტყობინების ფუნქცია ყველა გვერდისათვის.

			 {{SITENAME}} შეტყობინებათა სისტემა

--
შეტყობინების პარამეტრების ცვლილება
{{canonicalurl:{{#special:Preferences}}}}

თქვენი კონტროლის სიის პარამეტრების ცვლილება
{{canonicalurl:{{#special:EditWatchlist}}}}

გვერდების ამოშლა თქვენი კონტროლის სიიდან
$UNWATCHURL

დამატებითი ინფორმაცია
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'შექმნილია',
'changed' => 'შეცვლილი',

# Delete
'deletepage' => 'გვერდის წაშლა',
'confirm' => 'დადასტურება',
'excontent' => 'შინაარსი იყო: „$1“',
'excontentauthor' => 'შინაარსი იყო: „$1“ (და ერთადერთი ავტორი იყო „[[Special:Contributions/$2|$2]]“)',
'exbeforeblank' => 'გვერდის შინაარსი წაშლამდე იყო შემდეგი: „$1“',
'exblank' => 'გვერდი ცარიელი იყო',
'delete-confirm' => '„$1“-ის წაშლა',
'delete-legend' => 'წაშლა',
'historywarning' => "'''ყურადღება:''' გვერდს, რომლის წაშლასაც აპირებთ, აქვს დიდი ისტორია: ($1)",
'confirmdeletetext' => 'თქვენ მოითხოვეთ გვერდისა (ან ფაილისა) და მონაცემთა ბაზიდან მისი ისტორიის წაშლა.
გთხოვთ დაადასტუროთ, რომ მართლაც აპირებთ ამის გაკეთებას და გესმით თქვენი ქმედებების ფასი.
ასევე გადაამოწმეთ, თუ ასრულებთ ამას [[{{MediaWiki:Policy-url}}|წესებიდან გამომდინარე]].',
'actioncomplete' => 'მოქმედება შესრულებულია',
'actionfailed' => 'მოქმედება ვერ განხორციელდა',
'deletedtext' => '„$1“ წაშლილია. ბოლო წაშლილი გვერდების სია იხილეთ $2-ში.',
'dellogpage' => 'წაშლილთა_სია',
'dellogpagetext' => 'ქვემოთ იხილეთ ახლად წაშლილთა სია.',
'deletionlog' => 'წაშლილთა სია',
'reverted' => 'დაბრუნდა წინა ვერსიაზე',
'deletecomment' => 'მიზეზი:',
'deleteotherreason' => 'სხვა/დამატებითი მიზეზი:',
'deletereasonotherlist' => 'სხვა მიზეზი',
'deletereason-dropdown' => '* წაშლის ხშირი მიზეზები
** სპამი
** ვანდალიზმი
** საავტორო უფლების დარღვევა
** ავტორის მოთხოვნით
** გატეხილი გადამისამართება',
'delete-edit-reasonlist' => 'წაშლის მიზეზების რედაქტირება',
'delete-toobig' => 'ამ გვერდს ძალიან გრძელი ისტორია გააჩნია,  $1 {{PLURAL:$1|ვერსიაზე|ვერსიიებზე|ვერსიებზე}} მეტი. მისი წაშლა აიკრძალა {{SITENAME}}-ის კორექტურად მუშაობის უზრუნველყოფისთვის.',
'delete-warning-toobig' => 'ამ გვერდს ძალიან გრძელი ისტორია გააჩნია,  $1 {{PLURAL:$1|ვერსიაზე|ვერსიიებზე|ვერსიებზე}} მეტი.
მისმა წაშლამ შესაძლოა გამოიწვიოს საიტის მონაცემთა ბაზის  {{SITENAME}} არაკორექტული მუშაობა;
იმოქმედეთ სიფრთხილით.',
'deleting-backlinks-warning' => "'''გაფრთხილება:''' რამდენიმე სხვა გვერდი დაკავშირებულია ამ წასაშლელ გვერდთან.",

# Rollback
'rollback' => 'ცვლილებების გაუქმება',
'rollback_short' => 'სწრაფი გაუქმება',
'rollbacklink' => 'სწრაფი გაუქმება',
'rollbacklinkcount' => '$1 {{PLURAL:$1|ცვლილების|ცვლილების}} გაუქმება',
'rollbacklinkcount-morethan' => '$1-ზე მეტი {{PLURAL:$1|ცვლილების|ცვლილების}} გაუქმება',
'rollbackfailed' => 'შეცდომა გაუქმებისას',
'cantrollback' => 'შეუძლებელია უწინდელი რედაქციის აღდგენა; ის, ვინც უკანასკნელი ცვლილებები შეიტანა, ამ სტატიის ერთადერთი ავტორია.',
'alreadyrolled' => 'შეუძლებელია ბოლო ცვლილების გაუქმება [[:$1]], გაკეებული [[User:$2|$2]] ([[User talk:$2|განხილვა]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
ვიღაცა სხვამ უკვე შეასწორა ან გაააუქმა ეს გვერდი.

ბოლო ცვლილებები შეიტანა  [[User:$3|$3]] ([[User talk:$3|განხილვა]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "რედაქტირება განმარტებული იყო როგორც: \"''\$1''\".",
'revertpage' => '[[Special:Contributions/$2|$2]]-ის რედაქტირება გაუქმდა; აღდგა ბოლოს [[User:$1|$1]]-ის მიერ რედაქტირებული ვერსია',
'revertpage-nouser' => 'მომხმარებლის (მომხმარებლის სახელი დამალულია) ცვლილებები დაბრუნებულია ვერსიაზე {{GENDER:$1|[[User:$1|$1]]}}',
'rollback-success' => 'გაუქმდა შესწორება $1; დაბრუნება ვერსიაზე $2.',

# Edit tokens
'sessionfailure-title' => 'სეანსის შეცდომა',
'sessionfailure' => 'ჩანს, რომ პრობლემაა თქვენი რეგისტრაციის სესიისათვის;
ეს მოქმედება შეჩერდა თქვენი სესიაში შემოჭრის თავიდან ასაცილებლად.
გთხოვთ, დააწკაპუნოთ ღილაკს "უკან" და თავიდან ჩართოთ გვერდი, რომლიდანაც შემოხვედით და სცადოთ განმეორებით.',

# Protect
'protectlogpage' => 'დაცვის ისტორია',
'protectlogtext' => 'ქვემოთ წარმოდგენილია გვერდის დაცვის დონის ცვლილებების სია. 
იხილეთ ასევე [[Special:ProtectedPages|დაცული გვერდების სია]] ამ მომენტისთვის.',
'protectedarticle' => 'დაცულია გვერდი: „[[$1]]“',
'modifiedarticleprotection' => 'შეცვლილია დაცვის დონე გვერდისთვის „[[$1]]“',
'unprotectedarticle' => '„[[$1]]“-დან დაცვა მოხსნილია',
'movedarticleprotection' => 'დაცვის პარამეტრების გადატანა გვერდიდან „[[$2]]“ გვერდზე „[[$1]]“',
'protect-title' => 'დაცვის დონის შეცვლა გვერდისთვის „$1“',
'protect-title-notallowed' => 'დაცვის დონის ხილვა გვერდისთვის „$1“',
'prot_1movedto2' => '[[$1]] გადატანილია გვერდზე [[$2]]',
'protect-badnamespace-title' => 'დაუცველი სახელთა სივრცე',
'protect-badnamespace-text' => 'ამ სახელთა სივრცის გვერდების დაცვა შეუძლებელია.',
'protect-norestrictiontypes-text' => 'ამ გვერდის დაცვა შეუძლებელია, რადგან მისთვის არ არსებობს შესაბამისი დაცვის ტიპი.',
'protect-norestrictiontypes-title' => 'დაუცველი გვერდი',
'protect-legend' => 'დაცვის დადასტურება',
'protectcomment' => 'მიზეზი:',
'protectexpiry' => 'ვადა',
'protect_expiry_invalid' => 'ვადის გასვლის დრო არასწორია.',
'protect_expiry_old' => 'ვადის გასვლის დრო წარსულშია.',
'protect-unchain-permissions' => 'მოხსენით ბლოკი დაცვის პარამეტრებს',
'protect-text' => "თქვენ შეგიძლიათ აქ იხილოთ და შეცვალოთ დაცვის დონე გვერდისთვის '''$1'''.",
'protect-locked-blocked' => "თქვენ ვერ შეცვლით დაცვლის დონეს, რადგანაც თავად ხართ დაბლოკილი.
მოქმედი დაცვის მონაცემები გვერდისთვის '''$1''':",
'protect-locked-dblock' => "დაცვის დონე ვერ შეიცვლება, რადგანაც მონაცემთა ბაზა დაბლოკილია. მოქმედი დაცვის საშუალება გვერდისთვის '''$1''':",
'protect-locked-access' => "თქვენს ანგარიშს არ აქვს გვერდის დაცვის დონეების შეცვლის ნებართვა.
იხილეთ ქვემოთ ამჟამინდელი პარამეტრები გვერდისთვის '''$1''':",
'protect-cascadeon' => 'ეს გვერდი ამჟამად დაცულია, ვინაიდან იგი ნაწილია ამ {{PLURAL:$1|გვერდის, რომელსაც|გვერდების, რომელთაც}} კასკადური დაცვა აქვს ჩართული.
თქვენ შეგიძლიათ ამ გვერდის დაცვის დონე შეცვალოთ, თუმცა ეს კასკადურ დაცვაზე გავლენას არ იქონიებს.',
'protect-default' => 'ყველა მომხმარებელი',
'protect-fallback' => 'ხელმისაწვდომია მხოლოდ „$1-ის“ უფლების მქონე მომხმარებლებისათვის',
'protect-level-autoconfirmed' => 'ხელმისაწვდომია მხოლოდ ავტომატურად დადასტურებული მომხმარებლებისათვის',
'protect-level-sysop' => 'მხოლოდ ადმინისტრატორები',
'protect-summary-desc' => '[$1=$2] ($3)',
'protect-summary-cascade' => 'იერარქიული',
'protect-expiring' => 'ვადა გასდის: $1 (UTC)',
'protect-expiring-local' => 'ვადის გასვლის თარიღია $1',
'protect-expiry-indefinite' => 'განუსაზღვრელი',
'protect-cascade' => 'ამ გვერდში ჩართული გვერდების დაცვა (იერარქიული დაცვა)',
'protect-cantedit' => 'თქვენ არ შეგიძლიათ ამ გვერდის დაცვის დონის შეცვლა, ვინაიდან არ გაქვთ მისი რედაქტირების ნებართვა.',
'protect-othertime' => 'სხვა დრო:',
'protect-othertime-op' => 'სხვა დრო',
'protect-existing-expiry' => 'დასრულების დრო: $2, $3',
'protect-otherreason' => 'სხვა/დამატებითი მიზეზი:',
'protect-otherreason-op' => 'სხვა/დამატებითი მიზეზი',
'protect-dropdown' => '* დაცვის ტიპიური მიზეზები
** გადაჭარბებული ვანდალიზმი
** გადაჭარბებული სპამი
** რედაქტირებათა ომი
** მაღალი რისკის გვერდი',
'protect-edit-reasonlist' => 'დაცვის მიზეზთა რედაქტირება',
'protect-expiry-options' => '1 საათი:1 hour,1 დღე:1 day,1 კვირა:1 week,2 კვირა:2 weeks,1 თვე:1 month,3 თვე:3 months,6 თვე:6 months,1 წელი:1 year,განუსაზღვრელი ვადით:infinite',
'restriction-type' => 'უფლება',
'restriction-level' => 'შეზღუდვის დონე:',
'minimum-size' => 'მინ ზომა',
'maximum-size' => 'მაქს. ზომა',
'pagesize' => '(ბაიტი)',

# Restrictions (nouns)
'restriction-edit' => 'რედაქტირება',
'restriction-move' => 'გადატანა',
'restriction-create' => 'შექმნა',
'restriction-upload' => 'ატვირთვა',

# Restriction levels
'restriction-level-sysop' => 'სრული დაცვა',
'restriction-level-autoconfirmed' => 'ნახევრად დაცვა',
'restriction-level-all' => 'ნებისმიერი დონე',

# Undelete
'undelete' => 'აჩვენე წაშლილი გვერდები',
'undeletepage' => 'იხილეთ და აღადგინეთ წაშლილი გვერდები',
'undeletepagetitle' => "'''ქვემოთ ჩამოთვლილია გვერდის წაშლილი ვერსიები [[:$1|$1]]'''",
'viewdeletedpage' => 'იხილეთ წაშლილი გვერდები',
'undeletepagetext' => 'მომდევნო {{PLURAL:$1|გვერდი|$1 გვერდი}} წაშლილია, მაგრამ ჯერ კიდევ არქივშია და შესაძლებელია აღდგენა.
არქივი შესაძლებელია პერიოდულად გასუფთავდეს.',
'undelete-fieldset-title' => 'წინა ვერსიის აღდგენა',
'undeleteextrahelp' => "ამ გვერდის ისტორიის მთლიანად აღსადგენად დატოვეთ ყველა მოსანიშნი უჯრა ცარიელი და დააჭირეთ '''''{{int:undeletebtn}}'''''.
ნაწილობრივი აღდგენისათვის მონიშნეთ გვერდის ის ვერსიები, რომელთა აღდგენაც გსურთ და დააჭირეთ '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 ვერსიები დაარქივებულია',
'undeletehistory' => 'თუ გვერდს აღადგენთ, ყველა ვერსია აღდგება ისტორიაში.
თუ ახალი გვერდი იგივე სახელით მისი წაშლის შემდეგ უკვე შეიქმნა, აღდგენილი ვერსიები გამოჩნდება წინა ისტორიაში.',
'undeleterevdel' => 'აღდგენა არ შესრულდება, თუ ის გამოიწვევს გვერდის ბოლო ვერსიის ან ფაილის ნაწილობრივ წაშლას.
ასეთ შემთხვევაში თქვენ უნდა მოხსნათ ნიშნული ან აჩვენოთ ბოლო წაშლილი ვერსიები.',
'undeletehistorynoadmin' => 'ეს სტატია წაშლილია. წაშლის მიზეზი ნაჩვენებია მოკლე ანოტაციაში ქვემოთ, იმ მომხმარებელთა დეტალებთან ერთად ვინც რედაქტირება გაუკეთა ამ გვერდს წაშლის წინ. იმ წაშლილი ტექსტების აქტუალური ვერსიები მიღწევადია მხოლოდ ადმინისტრატორებისათვის.',
'undelete-revision' => '$1-ის წაშლილი ვერსია ($5, $4-ის მდგომარეობით), შენახული მომხმარებლის $3 მიერ:',
'undeleterevision-missing' => 'არასწორი ან არარსებული ვერსია. სავარაუდოდ ქვენ გადახვედით არასწორ ბმულზე, ან იგი წაიშალა არქივიდან.',
'undelete-nodiff' => 'წინა ცვლილება ვერ ვიპოვეთ.',
'undeletebtn' => 'აღდგენა',
'undeletelink' => 'ნახვა/აღდგენა',
'undeleteviewlink' => 'იხილე',
'undeleteinvert' => 'გააუქმეთ გამოყოფა',
'undeletecomment' => 'მიზეზი:',
'undeletedrevisions' => '$1 ვერსია აღდგენილია',
'undeletedrevisions-files' => '$1 ვერსია და $2 ფაილი აღდგენილია',
'undeletedfiles' => '$1 ფაილი აღდგენილია',
'cannotundelete' => 'წაშლის გაუქმება ვერ განხორციელდა: 
$1',
'undeletedpage' => "'''$1 აღდგენილია'''

უკანასკნელი წაშლილთა და აღდგენის სია შეგიძლიათ ნახოთ [[Special:Log/delete|წაშლილთა სიაში]].",
'undelete-header' => 'ბოლოს წაშლილი გვერდების სიის ნახვა შეიძლება [[Special:Log/delete|წაშლათა ჟურნალში]].',
'undelete-search-title' => 'წაშლილი გვერდების ძიება',
'undelete-search-box' => 'წაშლილი გვერდების ძიება',
'undelete-search-prefix' => 'უჩვენეთ გვერდები, რომლებიც იწყება ამგვარად:',
'undelete-search-submit' => 'ძიება',
'undelete-no-results' => 'არ არის ნაპოვნი შესაბამისი გვერდები წაშლათა არქივში.',
'undelete-filename-mismatch' => 'შეუძლებელია წაშლილი ფაილის აღდგენა $1-ში – განსხვავებები წაშლამდე.',
'undelete-bad-store-key' => 'შეუძლებელია წაშლილი ფაილის აღდგენა $1-ში – იგი არ არსებობდა წაშლამდე.',
'undelete-cleanup-error' => 'გამოუყენებელი სარქივო ფაილის „$1“ წაშლის შეცდომა:',
'undelete-missing-filearchive' => 'შეუძლებელია ფაილის აღდგენა არქივის იდენტიფიკატორით $1, რადგანაც ის არ არის მონაცემთა ბაზაში. შესაძლებელია ფაილი უკვე აღდგენილია.',
'undelete-error' => 'შეცდომა გვერდის აღდგენისას',
'undelete-error-short' => 'შეცდომა ფაილის წაშლის გაუქმებაში: $1',
'undelete-error-long' => 'ფაილის აღდგენისას წარმოიშვა შეცდომები

$1',
'undelete-show-file-confirm' => 'დარწმუნებული ხართ, რომ გსურთ ფაილ <nowiki>$1</nowiki>-ის წაშლილი ვერსიის ხილვა $2 $3-დან?',
'undelete-show-file-submit' => 'ჰო',

# Namespace form on various pages
'namespace' => 'სახელთა სივრცე:',
'invert' => 'ყველა, მონიშნულის გარდა',
'tooltip-invert' => 'მონიშნეთ ეს უჯრა, რათა დამალოთ გვერდების ცვლილებები არჩეული სახელთა სივრცის ფარგლებში (და მასთან დაკავშირებულ სახელთა სივრცეში, თუ მსგავსი რამ მითითებულია)',
'namespace_association' => 'თანმხლები სახელთა სივრცე',
'tooltip-namespace_association' => 'მონიშნეთ ეს უჯრა, რათა აგრეთვე ჩართოთ განხილვის სახელთა სივრცე, რომელიც დაკავშირებულია არჩეულ სახელთა სივრცესთან',
'blanknamespace' => '(მთავარი)',

# Contributions
'contributions' => '{{GENDER:$1|მომხმარებლის}} წვლილი',
'contributions-title' => 'მომხმარებლის წვლილი $1',
'mycontris' => 'წვლილი',
'contribsub2' => 'მომხმარებელი {{GENDER:$3|$1}} წვლილი ($2)',
'nocontribs' => 'ძებნისას მითითებული პარამეტრების შესაბამისი არც ერთი ცვლილება ნაპოვნი არ არის',
'uctop' => '(მიმდინარე)',
'month' => 'თვე:',
'year' => 'წელი:',

'sp-contributions-newbies' => 'მხოლოდ ახალი მომხმარებლების წვლილის ჩვენება',
'sp-contributions-newbies-sub' => 'ახალბედებისთვის',
'sp-contributions-newbies-title' => 'ბოლოს დარეგისტრირებულ მომხმარებელთა წვლილი',
'sp-contributions-blocklog' => 'ბლოკირების ისტორია',
'sp-contributions-deleted' => 'მომხმარებლის წაშლილი შესწოებები',
'sp-contributions-uploads' => 'ატვირთვები',
'sp-contributions-logs' => 'ჟურნალები',
'sp-contributions-talk' => 'განხილვა',
'sp-contributions-userrights' => 'მომხმარებელთა უფლებების მართვა',
'sp-contributions-blocked-notice' => 'ეს მომხმარებელი ამჟამად დაბლოკილია. ქვემოთ მოყვანილია ამონაწერი წაშლათა ჟურნალიდან:',
'sp-contributions-blocked-notice-anon' => 'ეს მომხმარებელი ამჟამად დაბლოკილია.
ქვემოთ მოყვანილია ამონაწერი წაშლათა ჟურნალიდან:',
'sp-contributions-search' => 'წვლილის ძიება',
'sp-contributions-username' => 'IP მისამართი ან მომხმარებლის სახელი:',
'sp-contributions-toponly' => 'აჩვენე მხოლოდ ბოლო ვერსიები',
'sp-contributions-submit' => 'ძიება',

# What links here
'whatlinkshere' => 'ბმული გვერდზე',
'whatlinkshere-title' => 'გვერდები, რომლებიც შეიცავენ ბმულებს „$1“-ზე',
'whatlinkshere-page' => 'გვერდი:',
'linkshere' => "მომდევნო გვერდები შეიცავენ ბმულებს '''[[:$1]]'''-ზე:",
'nolinkshere' => "'''[[:$1]]'''-ზე ბმული არ არის.",
'nolinkshere-ns' => "არჩეულ სახელთა სივრცეში არ არის გვერდები, რომლებიც მისამართდება '''[[:$1]]'''.",
'isredirect' => 'გადამისამართების გვერდი',
'istemplate' => 'ჩართვა',
'isimage' => 'ბმული ფაილზე',
'whatlinkshere-prev' => '{{PLURAL:$1|წინა|წინა $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|შემდეგი|შემდეგი $1}}',
'whatlinkshere-links' => '← ბმულები',
'whatlinkshere-hideredirs' => 'გადამისამართების $1',
'whatlinkshere-hidetrans' => '$1 ჩართვები',
'whatlinkshere-hidelinks' => 'ბმულების $1',
'whatlinkshere-hideimages' => '$1 სურათის ბმულები',
'whatlinkshere-filters' => 'ფილტრები',

# Block/unblock
'autoblockid' => 'ავტომატური ბლოკირება #$1',
'block' => 'მომხმარებლის დაბლოკვა',
'unblock' => 'მომხმარებელზე ბლოკის მოხსნა',
'blockip' => 'მომხმარებლის ან IP მისამართის ბლოკირება',
'blockip-legend' => 'მომხმარებლის დაბლოკვა',
'blockiptext' => 'გამოიყენეთ ქვემოთ მოყვანილი ფორმა სპეციფიური IP მისამართის
ან მომხმარებლისთვის რედაქტირების ბლოკირებისთვის.
ამის გაკეთება შეიძლება მხოლოდ ვანდალიზმის ასარიდებლად,
და [[{{MediaWiki:Policy-url}}|პოლიტიკასთან]] თანხმობაში.
ჩაწერეთ სპეციფიური მიზეზი ქვემოთ (მაგ. მიუთითეთ გვერდები,
რომლებზეც ვანდალიზმი განხორციელდა).',
'ipadressorusername' => 'IP მისამართი ან მომხმარებლის სახელი',
'ipbexpiry' => 'ვადა',
'ipbreason' => 'მიზეზი:',
'ipbreason-dropdown' => '* დაბლოკვის სტანდარტული მიზეზები
** ცრუ ინფორმაციის ჩამატება
** გვერდების შინაარსის წაშლა
** სპამ ბმულები გარე საიტებზე
** სულელური ტექსტის/ნაგვის ჩამატება
** დაშინება, მომხმარებელთა დარბევა
** რამდენიმე ანგარიშის ბოროტად გამოყენება
** მომხმარებლის მიუღებელი სახელი',
'ipb-hardblock' => 'სისტემაში შესული მომხმარებლისთვის ამ IP მისამართით სარგებლობის აკრძალვა',
'ipbcreateaccount' => 'ანგარიშის შექმნის აკრძალვა',
'ipbemailban' => 'აუკრძალეთ მომხმარებელს ელ-ფოსტის გაგზავნა',
'ipbenableautoblock' => 'აბომატურად დაბლოკეთ მომხმარებლის მიერ გამოყენებული IP მისამართები.',
'ipbsubmit' => 'მომხმარებლის დაბლოკვა',
'ipbother' => 'სხვა დრო',
'ipboptions' => '2 საათი:2 hours,1 დღე:1 day,3 დღე:3 days,1 კვირა:1 week,2 კვირა:2 weeks,1 თვე:1 month,3 თვე:3 months,6 თვე:6 months,1 წელი:1 year,განუსაზღვრელი ვადით:infinite',
'ipbhidename' => 'მომხმარებლის სახელის დამალვა შესწორებებსა და სიებში.შ',
'ipbwatchuser' => 'ჩაამატეთ მომხმარებლის პირადი გვერდი და მისი განხილვის გვერდი კონტროლის სიაში.',
'ipb-disableusertalk' => 'ამ მომხმარებლისათვის საკუთარი განხილვის გვერდის რედაქტირების აკრძალვა, სანამ იგი დაბლოკილია',
'ipb-change-block' => 'გადაბლოკეთ მომხმარებელი შესაბამისი კონფიგურაციით',
'ipb-confirm' => 'ბლოკის დადასტურება',
'badipaddress' => 'არასწორი IP მისამართი',
'blockipsuccesssub' => 'ბლოკირება შესრულებულია',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] ბლოკირებულ იქნა.<br />
იხილეთ [[Special:BlockList|ბლოკირებული IP მისამართების სია]].',
'ipb-blockingself' => 'თქვენ აპირებთ საკუთარი თავის დაბლოკვას! დარწმუნებული ხართ, რომ გსურთ ამის გაკეთება?',
'ipb-confirmhideuser' => 'თქვენ აპირებთ მომხმარებლის დაბლოკვას და ჩართული გაქვთ ოპცია „დამალე მომხმარებელი“. ასეთი ქმედება აღკვეთს მომხმარებლის სახელს ყველა სიიდან და ჟურნალების ჩანაწერებიდან. დარწმუნებული ხართ, რომ ამის გაკეთება გსურთ?',
'ipb-edit-dropdown' => 'დაბლოკვის მიზეზების რედაქტირება',
'ipb-unblock-addr' => 'ბლოკის მოხსნა $1',
'ipb-unblock' => 'მომხმარებლის სახელზე ან IP მისამართზე ბლოკის მოხსნა',
'ipb-blocklist' => 'იხილე არსებული ბლოკირებები',
'ipb-blocklist-contribs' => '$1 მომხმარებლის წვლილი',
'unblockip' => 'მომხმარებელზე ბლოკის მოხსნა',
'unblockiptext' => 'გამოიყენეთ ქვემოთ მოცემული ფორმულარი, რათა  დაბლოკილი IP მისამართი ან მომხმარებლის სახელი აღადგინოთ.',
'ipusubmit' => 'ამ ბლოკის მოხსნა',
'unblocked' => '[[User:$1|$1]] ბლოკი მოხსნილი აქვს',
'unblocked-range' => '$1 დაბლოკილი აღარ არის',
'unblocked-id' => 'ბლოკი $1 მოიხსნა',
'blocklist' => 'დაბლოკილი მომხმარებლები',
'ipblocklist' => 'დაბლოკილი მომხმარებლები',
'ipblocklist-legend' => 'დაბლოკილი მომხმარებლის პოვნა',
'blocklist-userblocks' => 'დამალე ანგარიშის ბლოკირებები',
'blocklist-tempblocks' => 'დამალე დროებითი ბლოკირებები',
'blocklist-addressblocks' => 'დამალე გარკვეული IP მისამართის ბლოკირებები',
'blocklist-rangeblocks' => 'დიაპაზონების ბლოკირებების დამალვა',
'blocklist-timestamp' => 'ნიშნული',
'blocklist-target' => 'სამიზნე',
'blocklist-expiry' => 'ბლოკირების ხანგრძლივობა',
'blocklist-by' => 'დამბლოკველი ადმინისტრატორი',
'blocklist-params' => 'ბლოკირების პარამეტრები',
'blocklist-reason' => 'მიზეზი',
'ipblocklist-submit' => 'ძიება',
'ipblocklist-localblock' => 'ლოკალური ბლოკირება',
'ipblocklist-otherblocks' => 'სხვა {{PLURAL:$1|დაბლოკვა|დაბლოკვები}}',
'infiniteblock' => 'უსასრულო',
'expiringblock' => 'ვადის გასვლის დრო $1 $2',
'anononlyblock' => 'მხოლოდ ანონ.',
'noautoblockblock' => 'ავტობლოკირება გათიშულია',
'createaccountblock' => 'ანგარიშის გახსნა ბლოკირებულია',
'emailblock' => 'დაიბლოკა ელ. ფოსტა',
'blocklist-nousertalk' => 'ვერ შეასწორებთ განხილვის გვერდს',
'ipblocklist-empty' => 'დაბლოკვის სია ცარიელია.',
'ipblocklist-no-results' => 'მოთხოვნილი IP-მისამართი არ არის დაბლკილი',
'blocklink' => 'ბლოკირება',
'unblocklink' => 'ბლოკის მოხსნა',
'change-blocklink' => 'ბლოკის შეცვლა',
'contribslink' => 'წვლილი',
'emaillink' => 'ელ-ფოსტის გაგზავნა',
'autoblocker' => 'თქვენ ავტომატურად ბლოკირებული ხართ, ვინაიდან თქვენი IP მისამართი ახლახან იქნა გამოყენებული "[[User:$1|$1]]"–ის მიერ. $1-ის ბლოკირების მიზეზი: "\'\'\'$2\'\'\'"',
'blocklogpage' => 'დაბლოკილთა აღრიცხვა',
'blocklog-showlog' => 'ეს მომხმარებელი ამჟამად დაბლოკილია.
ქვემოთ მოყვანილია ამონაწერი ბოლირებათა ჟურნალი:',
'blocklog-showsuppresslog' => 'ეს მომხმარებლი უკვე დამალულია და დაბლოკილია.
დაბლოკვათა ჟურნალი ქვემოთ მოყვანილია:',
'blocklogentry' => 'დაიბლოკა [[$1]]. ბლოკირების ვადა $2 $3.',
'reblock-logentry' => 'შეასწორა ბლოკირების კონფიგურაცია [[$1]]-სთვის, ბლოკირების ვადაა $2 $3',
'blocklogtext' => 'ეს არის მომხმარებლების დაბლოკვის და განბლოკვის ჟურნალი. 
ავტომატურად დაბლოკილი IP მისამართები არაა ჩამოთვლილი. 
იხილეთ [[Special:BlockList|ბლოკირებების სია]] მიმდინარე დაბლოკვებისთვის.',
'unblocklogentry' => 'ბლოკი მოხსნილია $1',
'block-log-flags-anononly' => 'მხოლოდ ანონიმური მომხმარებლები',
'block-log-flags-nocreate' => 'ანგარიშის შექმნა გამორთულია',
'block-log-flags-noautoblock' => 'ავტობლოკირება გათიშულია',
'block-log-flags-noemail' => 'დაიბლოკა ელ. ფოსტა',
'block-log-flags-nousertalk' => 'ვერ შეასწორებს განხილვის გვერდს',
'block-log-flags-angry-autoblock' => 'ჩართულია გაფართოებული ავტობლოკი',
'block-log-flags-hiddenname' => 'მომხმარებლის სახელი დაფარულია',
'range_block_disabled' => 'ადმინთათვის დაბლოკვათა აკრძალული დიაპაზონი',
'ipb_expiry_invalid' => 'მოქმედების მიუღებელი პერიოდი',
'ipb_expiry_temp' => 'ბლოკირება მომხმარებლის სახელის დამალვით უვადო უნდა იყოს',
'ipb_hide_invalid' => 'შეუძლებელია მოხემული ანგარიშის დამალვა, სავარაუდოდ მის მიერ განხორციელებულია ძალიან ბევრი შესწორება',
'ipb_already_blocked' => '„$1“ უკვე ბლოკირებულია',
'ipb-needreblock' => 'მომხმარებელი $1 უკვე დაიბლოკა. გსურთ დაბლოკვის პარამეტრების შესწორება?',
'ipb-otherblocks-header' => 'სხვა {{PLURAL:$1|დაბლოკვა|დაბლოკვები}}',
'unblock-hideuser' => 'თქვენ არ შეგიძლიათ მოხსნათ ბლოკი ამ მომხმარებელს, რადგან მისი მომხმარებლის სახელი დამალულია.',
'ipb_cant_unblock' => 'შეცდომა. ბლოკირება  $1 ID-ით არ არის ნაპოვნი. შესაძლოა იგი უკვე მოხსნილია',
'ipb_blocked_as_range' => 'შეცდომა:  IP-მისამართი $1 არ იყო პირდაპირ დაბლოკილი, შესაბამისად ვერ მოხდება მისი განბლოკვა.თუმცა იგი ეკუთვნის დიაპაზონს $2, რომლის განბლოკვა შესაძლებელია.',
'ip_range_invalid' => 'არასწორი IP მისამართი',
'ip_range_toolarge' => 'დაბლოკვა /$1 დიაპაზონზე ზემოთ აკრძალულია.',
'proxyblocker' => 'პროქსის ბლოკირება',
'proxyblockreason' => 'თქვენი IP მისამართი დაიბლოკა, ვინაიდან ის ღია პროქსია. გთხოვთ დაუკავშირდეთ თქვენ ინტერნეტ პროვაიდერს ან ტექ. სამსახურს და აცნობოთ მათ ამ სერიოზული უსაფრთხოების პრობლემის შესახებ.',
'sorbs' => 'DNSBL',
'sorbsreason' => 'თქვენი IP-მისამართი მიჩნევა ღია პროქსიდ DNSBL-ის თანახმად.',
'sorbs_create_account_reason' => 'თქვენი IP-მისამართი ითვლება ღია პროქსიდ DNSBL-ის ანახმად. თქვენ ვერ შექმნით ანგარიშს.',
'xffblockreason' => 'დაიბლოკა IP-მისამართი, რომელიც იმყოფებოდა X-Forwarded-For-ის სათაურში და რომელიც გეკუთვნით თქვენ ან თქვენ მიერ გამოყენებულ პროქსი-სერვერს. დაბლოკვის თავდაპირველი მიზეზი იყო: $1',
'cant-see-hidden-user' => 'მომხმარებელი, რომლის დაბლოკვასაც ცდილოთ, უკვე დაბლოკილია და დამალულია. რადგანაც თქვენ არ გაქვთ დამალულ მომხმარებლებთან მუშაობის ნებართვა, თქვენ ვერ შეცვლით ამ ბლოკს.',
'ipbblocked' => 'თქვენ ვერ დაბლოკავთ ან მოხსნით ბლოკს სხვა მომხმარებლებს, რადგანაც თავად ხართ დაბლოკილი.',
'ipbnounblockself' => 'თქვენ ვერ მოხსნოთ ბლოკს საკუთარ თავს',

# Developer tools
'lockdb' => 'ჩაკეტე მონაცემთა ბაზა',
'unlockdb' => 'მოხსენი საკეტი მონაცემთა ბაზაზე',
'lockdbtext' => 'მონაცემთა ბაზის დაბლოკვა გამოიწვევს გვერდების, მომხმარებელთა კონფიგურაციების, კონტროლის სიების და სხვა ქმედებების აკრძალვას. გთხოვთ დაადასტუროთ, რომ სწორედ ამის გაკეთება გსურთ და მოხსნით ბლოკს როდესაც შეწყვეტთ მონაცემთა ბაზის რედაქტირებას.',
'unlockdbtext' => 'მონაცემთა ბაზის განბლოკვა აღადგენს ყველა მომხმარებლის შესაძლებლობას რედაქტირება გაუკეთოს გვერდებს, შეცვალოს მათი პარამეტრები, რედაქტირება გაუკეთოს მათს საკონტროლო სიებს და სხვა მოქმედებებს მონაცემთა ბაზაში საჭირო ცვლილებების გასაკეთებლად. გთხოვთ დაადასტურეთ, რომ თქვენ ამის გაკეთება გსურთ.',
'lockconfirm' => 'დიახ, ნამდვილად მსურს მონაცემთა ბაზის ჩაკეტვა.',
'unlockconfirm' => 'დიახ, ნამდვილად მსურს მონაცემთა ბაზაზე საკეტის მოხსნა.',
'lockbtn' => 'მონაცემთა ბაზის ჩაკეტვა',
'unlockbtn' => 'მონაცემთა ბაზაზე საკეტის მოხსნა',
'locknoconfirm' => 'თქვენ არ მოგინიშნავთ დასტურის ყუთი.',
'lockdbsuccesssub' => 'მონაცემთა ბაზა წარმატებით ჩაიკეტა',
'unlockdbsuccesssub' => 'მონაცემთა ბაზის ბლოკი მოიხსნა',
'lockdbsuccesstext' => 'პროექტის მონაცემთა ბაზა დაიბლოკა.<br />
არ დაგავიწყდეთ [[Special:UnlockDB|ბლოკის მოხსნა]] მონაცემთა ბაზასთან სამუშაოების გატარების შემდეგ.',
'unlockdbsuccesstext' => 'მომაცემთა ბაზაზე ბლოკი მოიხსნა.',
'lockfilenotwritable' => 'არ გაქვთ უფლება მონაცემთა ბაზის დაცვის ფაილის შესწორების. დასაბლოკად ან ბლოკის მოსახსნელად საჭიროა ფაილი ღია იყოს.',
'databasenotlocked' => 'მონაცემთა ბაზა არაა ჩაკეტილი.',
'lockedbyandtime' => '($1 $2 $3)',

# Move page
'move-page' => '$1 — გადატანა',
'move-page-legend' => 'გვერდის გადატანა',
'movepagetext' => "ქვემოთ მოცემული ფორმა გვერდს სახელს გადაარქმევს, რაც გადაიტანს მასთან დაკავშირებულ ისტორიასაც ახალ სახელზე. 
ძველი სათაური გახდება გადამისამართების გვერდი ახალ სათაურზე. 
ბმულები ძველი გვერდის სათაურზე არ შეიცვლება; 
შეამოწმეთ [[Special:DoubleRedirects|ორმაგი]] ან [[Special:BrokenRedirects|გამწყდარი გადამისამართებები]]. 
თქვენ ხართ პასუხისმგებელი, რომ ბმულები მკითხველს დანიშნულებისამებრ მიიყვანს.

გაითვალისწინეთ, რომ გვერდი არ გადავა, თუ ახალი სათაურით სტატია უკვე არსებობს, გარდა იმ შემთხვევისა, როდესაც მსგავსი გვერდი ცარიელია ან გადამისამართებაა და არ აქვს გვერდის რედაქტირების ისტორია. 
ეს ნიშნავს, რომ თქვენ შეგიძლიათ დაუბრუნოთ ძველი სახელი გვერდს, თუ შეცდომა დაუშვით, მაგრამ არ შეგიძლიათ ზემოთ გადააწეროთ არსებულ გვერდს.

'''ფრთხილად!'''
ამ მოქმედებამ შეიძლება მნიშვნელოვანი და მოულოდნელი ცვლილება გამოიწვის პოპულარულ გვერდზე; 
სანამ გააგრძელებდეთ, გთხოვთ დარწმუნდეთ, რომ თქვენ გესმით თქვენი ქმედების შედეგები.",
'movepagetext-noredirectfixer' => "ქვემოთ მოცემული ფორმა გვერდს სახელს გადაარქმევს, რაც გადაიტანს მასთან დაკავშირებულ ისტორიასაც ახალ სახელზე. 
ძველი სათაური გახდება გადამისამართების გვერდი ახალ სათაურზე.
შეამოწმეთ [[Special:DoubleRedirects|ორმაგი]] ან [[Special:BrokenRedirects|გამწყდარი]] გადამისამართებები. 
თქვენ ხართ პასუხისმგებელი, რომ ბმულები მკითხველს დანიშნულებისამებრ მიიყვანს.

გაითვალისწინეთ, რომ გვერდი არ გადავა, თუ ახალი სათაურით სტატია უკვე არსებობს, გარდა იმ შემთხვევისა, თუ ის ცარიელია ან გადამისამართებაა და არ აქვს გვერდის რედაქტირების ისტორია. ეს ნიშნავს, რომ თქვენ შეგიძლიათ დაუბრუნოთ ძველი სახელი გვერდს, თუ შეცდომა დაუშვით, მაგრამ არ შეგიძლიათ ზემოთ გადააწეროთ არსებულ გვერდს.

'''გაფრთხილებთ!''' 
ამ მოქმედებამ შეიძლება მნიშვნელოვანი და მოულოდნელი ცვლილება გამოიწვის პოპულარულ გვერდზე; სანამ გააგრძელებდეთ, გთხოვთ დარწმუნდეთ, რომ თქვენ გესმით თქვენი ქმედების შედეგები.",
'movepagetalktext' => "დაკავშირებული განხილვის გვერდი ავტომატურად გადავა მასთან ერთად, '''გარდა იმ შემთხვევისა, თუ''':
*განხილვის გვერდი ახალი სათაურით და გარკვეული შინაარსით უკვე არსებობს, ან
*თქვენ მოხსნით ნიშნულს ქვევით დაფაზე.

ამ შემთხვევებში, თქვენ თავად მოგიწევთ ამ გვერდის გადატანა, სურვილისამებრ.",
'movearticle' => 'გვერდის გადატანა',
'moveuserpage-warning' => "'''გაფრთხილება:''' თქვენ გადაგაქვთ მომხმარებლის გვერდი. გთხოვთ გაითვალისწინეთ, რომ გადატანა შესრულდება, მომხმარებლის სახელის გადარქმევა კი ''არა''.",
'movenologintext' => 'თქვენ უნდა [[Special:UserLogin|წარუდგინოთ თავი]],
სისტემას რათა გადაიტანოთ გვერდები.',
'movenotallowed' => 'თქვენ არ გაქვთ გვერდების გადატანის უფლება.',
'movenotallowedfile' => 'თქვენ ვერ გადაიტანთ ფაილებს.',
'cant-move-user-page' => 'თქვენ ვერ გადაიტანთ მომხმარებელთა გვერდებს.',
'cant-move-to-user-page' => 'თქვენ ვერ გადაიტანთ მომხმარებლის გვერდებს (გარდა მომხმარებელთა ქვეგვერდებისა)',
'newtitle' => 'ახალი სათაური',
'move-watch' => 'ამ გვერდის კონტროლი',
'movepagebtn' => 'გვერდის გადატანა',
'pagemovedsub' => 'გადატანა შესრულებულია',
'movepage-moved' => "'''„$1“ გადატანილია „$2-ზე“'''",
'movepage-moved-redirect' => 'შეიქმნა გადამისამართება.',
'movepage-moved-noredirect' => 'გადამისამართება გაუქმდა.',
'articleexists' => 'ამ დასახელების გვერდი უკვე არსებობს, ან თქვენს მიერ მითითებული დასახელება არასწორია. თუ შეიძლება, მიუთითეთ სხვა სახელი.',
'cantmove-titleprotected' => 'შეუძლებელია გვერდის გადატანა, რადანაც მისი ახალი სახელი შავ სიაშია.',
'movetalk' => 'დაკავშირებული განხილვის გადატანა',
'move-subpages' => 'ქვეგვერდების გადატანა  ($1-მდე)',
'move-talk-subpages' => 'განხილვის ქვეგვერდის გადატანა  ($1-მდე)',
'movepage-page-exists' => 'გვერდი $1უკვე არსებობს და არ შეიძლება იყოს ავტომატურად გადაწერილი.',
'movepage-page-moved' => 'გვერდი $1 გადატანილი იქნა $2-ში.',
'movepage-page-unmoved' => 'გვერდი $1 არ შეიძლება გადატანილი იქნას $2-ზე.',
'movepage-max-pages' => '$1 {{PLURAL:$1|გვერდი გადაიტანა|გვერდები გადაიტანეს|გადატანილი გვერდების}} — ეს მაქსიმუმია. ავტომატურად მეტი გვერდის გადატანა არ შეიძლება.',
'movelogpage' => 'გადატანის რეგისტრაცია',
'movelogpagetext' => 'ქვემოთ წარმოდგენილია გადატანილ გვერდთა სია.',
'movesubpage' => '{{PLURAL:$1|ქვეგვერდი|ქვეგვერდები}}',
'movesubpagetext' => 'ამ გვერდს $1  აქვს {{PLURAL:$1|ქვეგვერდი|ქვეგვერდები|ქვეგვერდები}}.',
'movenosubpage' => 'ამ გვერდს არა აქვს ქვეგვერდები',
'movereason' => 'მიზეზი:',
'revertmove' => 'გაუქმება',
'delete_and_move' => 'წაშლა და გადატანა',
'delete_and_move_text' => '==საჭიროა წაშლა==

სტატია დასახელებით „[[:$1]]“ უკვე არსებობს. გსურთ მისი წაშლა გადატანისთვის ადგილის დასათმობად?',
'delete_and_move_confirm' => 'დიახ, წაშალეთ ეს გვერდი',
'delete_and_move_reason' => 'წაშლილია „[[$1]]“-დან გადატანისთვის ადგილის დასათმობად',
'selfmove' => 'წყარო და დანიშნულების სათაურები მსგავსია; შეუძლებელია გვერდის საკუთარ თავზე გადატანა.',
'immobile-source-namespace' => 'შეუძლებელია სახელის გადარქმევა „$1“ სახელთა სივრცეში',
'immobile-target-namespace' => 'შეუძლებელია გვერდის გადატანა „$1“ სახელთა სივრცეში',
'immobile-target-namespace-iw' => 'ინტერვიკის ბმული შეუძლებელია გამოყენებული იქნას გადარქმევისთვის.',
'immobile-source-page' => 'ამ გვეერდის გადატანა შეუძლებელია.',
'immobile-target-page' => 'შეუძლებელია მოცემულ სახელზე გადატანა.',
'bad-target-model' => 'შეუძლებელია $1-ის გარდაქმნა $2-ზე: მონაცემების შეუსაბამო მოდელი.',
'imagenocrossnamespace' => 'შეუძლებელია ფაილს მიეცეს სახელი სახელთა სხვა სივრციდან',
'nonfile-cannot-move-to-file' => 'შეუძლებელია არაფაილების გადატანა ფაილის სახელთა სივრცეში',
'imagetypemismatch' => 'ფაილს ახალი გაფართოება არ შეესაბამება მის ტიპს',
'imageinvalidfilename' => 'ფაილის საბოლოო სახელი შეცდომას შეიცავს',
'fix-double-redirects' => 'ძველ სათაურზე მიმთითებელი გადამისამართების ავტომატურად გასწორება',
'move-leave-redirect' => 'გადამისამართების დატოვება',
'protectedpagemovewarning' => "'''ყურადღება.''' ეს არის დაცული გვერდი. მისი გადატანა მხოლოდ ადმინისტრატორებს შეუძლია.
იხილეთ დაცვის ჟურნალის ჩანაწერი ინფორმაციისთვის:",
'semiprotectedpagemovewarning' => "'''ყურადღება.''' ეს გვერდი დაცულია, მისი გადატანა მხოლოდ დარეგისტრირებულ მომხმარებლებს შეუძლიათ.
იხილეთ დაცვის ჟურნალის ჩანაწერი ინფორმაციისთვის:",
'move-over-sharedrepo' => '==ფაილი არსებობს==
[[:$1]] არსებობს საზიარო საცავში. ფაილის ამ სათაურზე გადმოტანა საზიარო ფაილს გადაფარავს.',
'file-exists-sharedrepo' => 'არჩეული ფაილის სახელი უკვე გამოყენებულია საზიარო საცავში.
გთხოვთ სხვა სახელი აირჩიოთ.',

# Export
'export' => 'გვერდების ექსპორტი',
'exporttext' => 'თქვენ შეგიძლიათ ტექსტებისა, ცვლილებათა ჟურნალის და XML გვერდების ექსპორტირება, რომელიც შეიძლება შემდეგ [[Special:Import|გადატანილი]] იქნას სხვა ვიკიპროექტში, რომელიც მუშაობს MediaWiki-ზე.

გვერდის ექსპორტირებისთვის შეიყვანეთ მათი სახელები თითო ხაზზე და აირჩიეთ, თუ გსურთ სტატიის ყველა ვერსიის გადატანა, თუ მხოლოდ ბოლო ვერსიისა.

თქვენ შეგიძლიათ ასევე გამოიყენოთ სპეციალური მისამართი გვერდის მხოლოდ ბოლო ვერსიის საექსპორტოდ. მაგალითად [[{{MediaWiki:Mainpage}}]]  ეს არის მისამართი [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]].',
'exportall' => 'ყველა გვერდის ექსპორტი',
'exportcuronly' => 'მიუთითეთ მხოლოდ მიმდინარე ცვლილება, და არა სრული ისტორია',
'exportnohistory' => "----
'''ყურადღება:''' გვერდის ყველა ვერსიის ექსპორტირება გათიშუკია სერვერზე დატვირტვის გამო.",
'exportlistauthors' => 'ყველა გვერდის მთლიანი წვლილის სიის ჩართვა',
'export-submit' => 'ექსპორტი',
'export-addcattext' => 'გვერდების დამატება კატეგორიიდან:',
'export-addcat' => 'დამატება',
'export-addnstext' => 'ჩაამატეთ გვერდებისახელთა სივრცედან:',
'export-addns' => 'დამატება',
'export-download' => 'შეინახე როგორც ფაილი',
'export-templates' => 'ჩართეთ თარგები',
'export-pagelinks' => 'ჩართეთ დაკავშირებული გვერდები სიღრმით:',

# Namespace 8 related
'allmessages' => 'ყველა სისტემური შეტყობინება',
'allmessagesname' => 'დასახელება',
'allmessagesdefault' => 'სტანდარტული ტექსტი',
'allmessagescurrent' => 'მიმდინარე ტექსტი',
'allmessagestext' => 'ეს არის სისემურ შეტყობინებათა სია «MediaWiki» სახელთა სივრცეში.
გთხოვთ ეწვიოთ  [https://www.mediawiki.org/wiki/Localisation ლოკალიზაციის აღმწერ] გვერდს [//translatewiki.net translatewiki.net] პროექტს, თუ გსურთ MediaWiki ლოკალიზაციაში წვლილის შეტანა.',
'allmessagesnotsupportedDB' => '{{ns:special}}:AllMessages-ის უზრუნველყოფა არ ხდება, ვინაიდან wgUseDatabaseMessages გამორთულია.',
'allmessages-filter-legend' => 'ფილტრი',
'allmessages-filter' => 'ფილტრი ცვლილებების სტატუსით:',
'allmessages-filter-unmodified' => 'უცვლადე',
'allmessages-filter-all' => 'ყველა',
'allmessages-filter-modified' => 'ცვლადი',
'allmessages-prefix' => 'წინსართის ფილტრი:',
'allmessages-language' => 'ენა:',
'allmessages-filter-submit' => 'გადასვლა',
'allmessages-filter-translate' => 'თარგმნა',

# Thumbnails
'thumbnail-more' => 'გაზარდე',
'filemissing' => 'ფაილი აკლია',
'thumbnail_error' => 'ესკიზის შექმნის შეცდომა: $1',
'thumbnail_error_remote' => 'შეცდომის შეტყობინება მომხმარებლისაგან $1:
$2',
'djvu_page_error' => 'DjVu გვერდის ნომერი',
'djvu_no_xml' => 'შეუძლებელია XML-ის მიღება DjVu-სთვის',
'thumbnail-temp-create' => 'დროებითი ესკიზის ფაილის შექმნა ვერ ხერხდება',
'thumbnail-dest-create' => 'ესკიზის დანიშნულების ადგილას შენახვა ვერ ხერხდება',
'thumbnail_invalid_params' => 'მინიატურის არასწორი პარამეტრი',
'thumbnail_dest_directory' => 'შეუძლებელია სამიზნე დირექტორიის შექმნა',
'thumbnail_image-type' => 'გამოსახულების მოცემული ტიპი არ არის მხარდაჭერილი',
'thumbnail_gd-library' => 'ბიბლიოთეკა GD-ს არასწორი კონფიგურაცია: $1 ფუნქცია არ არის აღმოჩენილი',
'thumbnail_image-missing' => 'სავარაუდოდ $1 ფაილი არ არსებობს',

# Special:Import
'import' => 'გვერდების იმპორტი',
'importinterwiki' => 'ტრანსვიკი იმპორტი',
'import-interwiki-text' => 'წარმოადგინეთ ვიკი და იმპორტირებადი გვერდის სახელი.
ცვლილებათა რიცხვები და ავტორთა სახელები შენნარჩუნდება.
ტრანსვიკი იმპორტის ყველა ოპერაცია რეგისტრირდება [[Special:Log/import|სპეციალურ ჟურნალში]].',
'import-interwiki-source' => 'ვიკი წყარო/გვერდი:',
'import-interwiki-history' => 'ამ გვერდის ცვლილებათა ისტორიის კოპირება.',
'import-interwiki-templates' => 'ყველა თარგის ჩართვა',
'import-interwiki-submit' => 'იმპორტირება',
'import-interwiki-namespace' => 'სამიზნე სახელთა სივრცე',
'import-interwiki-rootpage' => 'ძირეული გვერდი (არასავალდებულო):',
'import-upload-filename' => 'ფაილის სახელი:',
'import-comment' => 'კომენტარი:',
'importtext' => 'გთხოვთ, მოახდინოთ გვერდის ექსპორტი თავდაპირველი ვიკიდან, [[Special:Export|შესაბამისი ხელსაწყოს]] გამოყენებით. ფაილი შეინახეთ დისკზე, ხოლო შემდეგ ატვირთეთ აქ.',
'importstart' => 'გვერდების იმპორტი...',
'import-revision-count' => '$1 ცვლილება',
'importnopages' => 'იმპორტისთვის გვერდები არ არის.',
'imported-log-entries' => 'გადატანილია {{PLURAL:$1|ჟურნალის ჩანაწერი|ჟურნალის ჩანაწერი}} $1.',
'importfailed' => 'იმპორტი ვერ განხორციელდა: $1',
'importunknownsource' => 'იმპორტის წყაროს ტიპი უცნობია',
'importcantopen' => 'იმპორტირებული ფაილი არ გაიხსნა',
'importbadinterwiki' => 'არასწორი ინტერვიკი ბმული',
'importnotext' => 'ცარიელია',
'importsuccess' => 'იმპორტი განხორციელდა!',
'importhistoryconflict' => 'არსებულ ვერსიათა კონფლიქტი. შესაძლოა იგი უკვე იქნა იმპორტირებული.',
'importnosources' => 'ტრანსვიკი იმპორტის წყარო არ არის არჩეული. ცვლილებათა ისტორიის პირდაპირი ატვირთვა გათიშულია.',
'importnofile' => 'საიმპორტო ფაილის ატვირთვა ვერ მოხერხდა.',
'importuploaderrorsize' => 'ვერ მოხერხდა ფაილის ატვირთვა ან იმპორტირება. ფაილის ზომ არღვევს მითითებულ ზღვარს.',
'importuploaderrorpartial' => 'ვერ მოხერხდა ფაილის ატვირთვა ან იმპორტირება. იგი ნაწილობრივ ატვირთულია.',
'importuploaderrortemp' => 'ვერ მოხერხდა ფაილის ატვირთვა ან იმპორტირება. დრებითი ფოლდერი არ არის ნაპოვნი.',
'import-parse-failure' => 'XML გარჩევის შეცდომა იმპორტისას',
'import-noarticle' => 'იმპორტირების გვერდი არ არის ნაპოვნი!',
'import-nonewrevisions' => 'ყველა რედაქცია იმპორტირებული იქნა.',
'xml-error-string' => '$1 ხაზში $2, პოზიციის $3 (ბაიტი $4): $5',
'import-upload' => 'XML მონაცემების ატვირთვა',
'import-token-mismatch' => 'სეანსის მონაცემები დაიკარგა. კიდევ ერთხელ სცადეთ!',
'import-invalid-interwiki' => 'შეუძლებელია იმპორტირება მოცემული ვიკიდან.',
'import-error-edit' => 'გვერდი „$1“ იმპორტირება არ მოხდა, რადგან თქვენ არ გაქვთ მისი რედაქტირების უფლება.',
'import-error-create' => 'გვერდი „$1“ იმპორტირება არ მოხდა, რადგან თქვენ არ გაქვთ მისი შექმნის უფლება.',
'import-error-interwiki' => 'გვერდი „$1“ არ იქნა იმპორტირებული, რადგანაც მისი სახელი დარეგისტრირებულია გარე ბმულებისათვის (interwiki).',
'import-error-special' => 'გვერდი „$1“ არ იქნა იმპორტირებული, რადგანაც ის განეკუთვნება განსაკუთრებულ სახელთა სივრცეს, რომელიც კრძალავს გვერდების შექმნას.',
'import-error-invalid' => 'გვერდი "$1" იმპორტირება არ მოხდა მიუღებელი სახელის გამო.',
'import-error-unserialize' => 'ვერსია $2 გვერდისათვის „$1“ არ შეიძლება იყოს სტრუქტურირებული (დესერიალიზებული). მიღებულია შეტყობინება, რომ ამ ვერსიაში გამოიყენება $3 შემცველი მოდელი, სერიალიზებული ფორმატში $4.',
'import-options-wrong' => 'არასწორი {{PLURAL:$2|პარამეტრი|პარამეტრი}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'ძირეული გვერდის მითითებული სახელი არასწორია.',
'import-rootpage-nosubpage' => 'სახელტა სივრცეში მითითებულ ძირეულ გვერდში „$1“ ქვეგვერდები დაუშვებელია.',

# Import log
'importlogpage' => 'იმპორტის ჟურნალი',
'importlogpagetext' => 'ადმინისტრატორთა მიერ გვერდების იმპორტირება  ცვლილებების ჩათვლით სხვა ვიკიდან.',
'import-logentry-upload' => '„[[$1]]“ — ფაილის იმპორტი',
'import-logentry-upload-detail' => '$1 ცვლილება',
'import-logentry-interwiki' => '„$1“ — ტრანსვიკი იმპორტი',
'import-logentry-interwiki-detail' => '$1 ცვლილება $2-დან',

# JavaScriptTest
'javascripttest' => 'JavaScript-ის ტესტირება',
'javascripttest-title' => 'მიმდინარეობს $1-ის ტესტირება',
'javascripttest-pagetext-noframework' => 'ეს გვერდი დარეგისტრირებულია JavaScript-ის ტესტების გასაშვებად.',
'javascripttest-pagetext-unknownframework' => '„$1-ის“ ტესტირების უცნობი გარემო.',
'javascripttest-pagetext-frameworks' => 'გთხოვთ, აირჩიეთ ტესტირების ერთ-ერთი შემდეგი გარემო: $1',
'javascripttest-pagetext-skins' => 'ტესტების გასაშვებად აირჩიეთ გაფორმების თემა:',
'javascripttest-qunit-intro' => 'იხილეთ [$1 ტესტირების დოკუმენტები] mediawiki.org-ზე.',
'javascripttest-qunit-heading' => 'MediaWiki JavaScript QUnit-ის ტესტების კრებული',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'თქვენი მომხმარებლის გვერდი',
'tooltip-pt-anonuserpage' => 'ჩემი IP-ის მქონე მომხმარებლის გვერდი',
'tooltip-pt-mytalk' => 'თქვენი განხილვის გვერდი',
'tooltip-pt-anontalk' => 'ჩემი  IP-ის განხილვის გვერდი',
'tooltip-pt-preferences' => 'თქვენი კონფიგურაცია',
'tooltip-pt-watchlist' => 'გვერდების სია, რომელთა ცვლილებებს თქვენ უთვალთვალებთ',
'tooltip-pt-mycontris' => 'თქვენი წვლილის სია',
'tooltip-pt-login' => 'სასურველია დარეგისტრირდეთ, თუმცა აუცილებელია არაა.',
'tooltip-pt-logout' => 'გასვლა',
'tooltip-ca-talk' => 'შიგთავსის გვერდის განხილვა',
'tooltip-ca-edit' => 'თქვენ შეგიძლიათ ამ გვერდის რედაქტირება. გთხოვთ გამოიყენოთ  წინასწარი ხედვის ღილაკი სანამ გვერდს შეინახავთ.',
'tooltip-ca-addsection' => 'ახალი სექციის შექმნა',
'tooltip-ca-viewsource' => 'გვერდი დაცულია. შეგიძლიათ იხილოთ მისი წყარო.',
'tooltip-ca-history' => 'ამ გვერდის ბოლო ვერსიები.',
'tooltip-ca-protect' => 'გვერდის დაცვა',
'tooltip-ca-unprotect' => 'ამ გვერდის დაცვის დონის შეცვლა',
'tooltip-ca-delete' => 'ამ გვერდის წაშლა',
'tooltip-ca-undelete' => 'აღადგინეთ გვერდის ცვლილებები მის წაშლამდე.',
'tooltip-ca-move' => 'ამ გვერდის გადატანა',
'tooltip-ca-watch' => 'დაამატეთ ეს გვერდი თქვენი კონტროლის სიას',
'tooltip-ca-unwatch' => 'მოხსენით ეს გვერდი თქვენი კონტროლის სიიდან',
'tooltip-search' => 'ძიება {{SITENAME}}',
'tooltip-search-go' => 'მოიძიე გვერდი ზუსტად ამ სახელით',
'tooltip-search-fulltext' => 'მოძებნე გვერდები, რომლებიც ამ ტექსტს შეიცავენ',
'tooltip-p-logo' => 'მთავარი გვერდი',
'tooltip-n-mainpage' => 'იხილეთ მთავარი გვერდი',
'tooltip-n-mainpage-description' => 'იხილეთ მთავარი გვერდი',
'tooltip-n-portal' => 'პროექტის შესახებ, რა შეგიძლიათ გააკეთოთ, სად იპოვოთ',
'tooltip-n-currentevents' => 'გაიგეთ ვრცელი ინფორმაცია მიმდინარე მოვლენებზე',
'tooltip-n-recentchanges' => 'ვიკიში ბოლო ცვლილებების სია.',
'tooltip-n-randompage' => 'შემთხვევითი გვერდის ჩვენება',
'tooltip-n-help' => 'გვერდი, სადაც იპოვით.',
'tooltip-t-whatlinkshere' => 'ყველა ვიკი გვერდის სია, რომლებშიც ეს გვერდია მითითებული',
'tooltip-t-recentchangeslinked' => 'ბოლო ცვლილებები ამ გვერდთან დაკავშირებულ გვერდებზე',
'tooltip-feed-rss' => 'მოცემული გვერდის RSS არხის ტრანსალაცია',
'tooltip-feed-atom' => 'მოცემული გვერდის Atom არხის ტრანსალაცია',
'tooltip-t-contributions' => 'იხილეთ ამ მომხმარებლის წვლილის სია',
'tooltip-t-emailuser' => 'გაუგზავნე ელ. ფოსტა ამ მომხმარებელს',
'tooltip-t-upload' => 'ჩატვირთეთ მედიაფაილები',
'tooltip-t-specialpages' => 'ყველა სპეციალური გვერდის სია',
'tooltip-t-print' => 'ამ გვერდის დასაბეჭდი ვერსია',
'tooltip-t-permalink' => 'მუდმივი ბმული გვერდის ამ ვერსიაზე',
'tooltip-ca-nstab-main' => 'შინაარსის ჩვენება',
'tooltip-ca-nstab-user' => 'მომხმარებლის გვერდის ჩვენება',
'tooltip-ca-nstab-media' => 'მედია-ფაილი',
'tooltip-ca-nstab-special' => 'ეს სპეციალური გვერდია. მისი რედაქტირება არ შეგიძლიათ.',
'tooltip-ca-nstab-project' => 'იხილეთ პროექტის გვერდი',
'tooltip-ca-nstab-image' => 'სურათის გვერდის ჩვენება',
'tooltip-ca-nstab-mediawiki' => 'იხილე სისტემური შეტყობინება',
'tooltip-ca-nstab-template' => 'თარგის ჩვენება',
'tooltip-ca-nstab-help' => 'იხილეთ დახმარების გვერდი',
'tooltip-ca-nstab-category' => 'გვერდის კატეგორიის ჩვენება',
'tooltip-minoredit' => 'მონიშნე როგორც მცირე რედაქტირება [alt-i]',
'tooltip-save' => 'თქვენი ცვლილებების შენახვა',
'tooltip-preview' => 'წინასწარ გადახედე ცვლილებებს, გთხოვთ გამოიყენოთ ეს შენახვამდე! [alt-p]',
'tooltip-diff' => 'ტექსტში შეტანილი ცვლილებების ჩვენება. [alt-v]',
'tooltip-compareselectedversions' => 'იხილეთ ამ გვერდის  ორ შერჩეულ ვერსიას შორის განსხვავებები.',
'tooltip-watch' => 'ამ გვერდის დამატება თქვენს საკონტროლოს სიას [alt-w]',
'tooltip-watchlistedit-normal-submit' => 'არჩეული სათაურების წაშლა',
'tooltip-watchlistedit-raw-submit' => 'კონტროლის სიის განახლება',
'tooltip-recreate' => 'აღადგინე ეს გვერდი მიუხედავად იმისა, რომ წაშლილ იქნა',
'tooltip-upload' => 'დაიწყეთ ატვირთვა',
'tooltip-rollback' => 'ბოლო რედაქტორის მიერ გაკეთებული ცვლილებების გაუქმება ერთი დაჭერით',
'tooltip-undo' => 'შეტანილი ცვლილებების გაუქმება და წინასწარ გადახედვის ჩვენება, გაუქმების მიზეზის სქოლიოში ჩაწერასთან ერთად.',
'tooltip-preferences-save' => 'შეინახეთ კონფიგურაცია',
'tooltip-summary' => 'შეიყვანეთ მოკლე სქოლიო',
'interlanguage-link-title' => '$1 — $2',

# Stylesheets
'common.css' => '/** აქ ჩასმული CSS გამოყენებული იქნება გაფორმების ყველა გარეკანზე */',
'cologneblue.css' => '/* აქ ჩასმული CSS გამოყენებული იქნება კელნის ლურჯი გაფორმების თემაში */',
'monobook.css' => '/* აქ ჩასმული CSS გავლენას იქონიებს Monobook ინტერფეისის მომხმარებლებზე */',
'modern.css' => '/* აქ ჩასმული CSS გამოყენებული იქნება თანამედროვე გაფორმების თემაში */',
'vector.css' => '/* აქ ჩასმული CSS გამოყენებული იქნება ვექტორული გაფორმების თემაში */',
'group-autoconfirmed.css' => '/* აქ განთავსებული CSS გამოყენებული იქნება მხოლოდ ავტომატურად დადასტურებული მომხმარებლებისათვის */',
'group-bot.css' => '/* აქ განთავსებული CSS გამოყენებული იქნება მხოლოდ ბოტებისათვის */',
'group-sysop.css' => '/* აქ განთავსებული CSS გამოყენებული იქნება მხოლოდ ადმინისტრატორებისათვის */',
'group-bureaucrat.css' => '/* აქ განთავსებული CSS გამოყენებული იქნება მხოლოდ ბიუროკრატებისათვის */',

# Scripts
'common.js' => '/* აქ ნებისმიერი ჯავასკრიპტი ყველა მომხმარებლისთვის ჩაიტვირთება ყველა გვერდზე. */',

# Metadata
'notacceptable' => 'ვიკი სერვერს არ შეუძლია წარმოგიდგინოთ ინფორმაცია იმ სახით, რომლის კითხვა თქვენ ბრაუზერს შეუძლია.',

# Attribution
'anonymous' => '{{SITENAME}}-ის ანონიმური {{PLURAL:$1|მომხმარებელი|მომხმარებლები}}',
'siteuser' => '{{SITENAME}} მომხმარებელი $1',
'anonuser' => '{{SITENAME}} ანონიმური მომხმარებელი $1',
'lastmodifiedatby' => 'ეს გვერდი ბოლოს შეიცვალა $2, $1  $3-ით.',
'othercontribs' => '$1-ს ნამუშევრის მიხედვით.',
'others' => 'სხვები',
'siteusers' => '{{SITENAME}}-ის {{PLURAL:$2|მომხმარებელი|მომხმარებლები|}} $1',
'anonusers' => '{{SITENAME}} ანონიმური {{PLURAL:$2|მომხმარებელი|მომხმარებლები}} $1',
'creditspage' => 'წვლილი',
'nocredits' => 'აქ ამ გვერდისთვის ხელმისაწვდომი ინფორმაცია არ არსებობს.',

# Spam protection
'spamprotectiontitle' => 'სპამ-ფილტრი',
'spamprotectiontext' => 'ინტერნეტ-რესურსი, რომლის შენახვასაც ცდილობთ, დაბლოკილია სპამ-ფილტრით.
სავარაუდოდ, თქვენს მიერ დამატებული ვებ-გვერდის მისამართი შავ სიაშია.',
'spamprotectionmatch' => 'მომდევნო ტექსტი იყო სპამ-ფილტრის ჩართვის მიზეზი: $1',
'spambot_username' => 'სპამის გასუფთავება',
'spam_reverting' => 'დაბრუნება ბოლო ვერსიასთან, რომელიც არ შეიცავს ბმულს $1-თან',
'spam_blanking' => 'ყველა გვერდი შეიცავს ბმულს $1-გვერდზე. გასუფთავება',
'spam_deleting' => 'ყველა ვერსია შეიცავდა ბმულს $1-ზე, მიმდინარეობს წაშლა',
'simpleantispam-label' => "სპამის საწინააღმდეგო შემოწმება.
ეს '''არ''' შეავსოთ!",

# Info page
'pageinfo-title' => 'ინფორმაცია „$1“-თვის',
'pageinfo-not-current' => 'ბოდიში, ეს ინფორმაცია შეიძლება არ იყოს ძველ ვერსიებში.',
'pageinfo-header-basic' => 'საბაზისო ინფორმაცია',
'pageinfo-header-edits' => 'რედაქტირების ისტორია',
'pageinfo-header-restrictions' => 'გვერდის დაცვა',
'pageinfo-header-properties' => 'გვერდის თვისებები',
'pageinfo-display-title' => 'ნაჩვენები სათაური',
'pageinfo-default-sort' => 'სტანდარტული სორტირების გასაღები',
'pageinfo-length' => 'გვერდის სიგრძე (ბაიტებში)',
'pageinfo-article-id' => 'გვერდის ID',
'pageinfo-language' => 'გვერდის შინაარსის ენა',
'pageinfo-robot-policy' => 'ინდექსაცია საძიებო რობოტებით',
'pageinfo-robot-index' => 'დაშვებულია',
'pageinfo-robot-noindex' => 'არ არის დაშვებული',
'pageinfo-views' => 'ხილვების რაოდენობა',
'pageinfo-watchers' => 'გვერდის დამკვირვებელთა რაოდენობა',
'pageinfo-few-watchers' => 'სულ მცირე $1 {{PLURAL:$1|დამკვირვებელი|დამკვირვებელი}}',
'pageinfo-redirects-name' => 'გადამისამართებების რაოდენობა ამ გვერდზე',
'pageinfo-redirects-value' => '$1',
'pageinfo-subpages-name' => 'ამ გვერდის ქვეგვერდები',
'pageinfo-subpages-value' => '$1($2 {{PLURAL:$2|გადამისამართება|გადამისამართება}}; $3 {{PLURAL:$3|ჩვეულებრივი|ჩვეულებრივი}})',
'pageinfo-firstuser' => 'გვერდის შემქნელი',
'pageinfo-firsttime' => 'გვერდის შექმნის თარიღი',
'pageinfo-lastuser' => 'ბოლო რედაქტორი',
'pageinfo-lasttime' => 'ბოლო რედაქტირების თარიღი',
'pageinfo-edits' => 'რედაქტირებების ჯამური რაოდენობა',
'pageinfo-authors' => 'განსხვავებულ ავტორთა ჯამური რაოდენობა',
'pageinfo-recent-edits' => 'ბოლო ცვლილებები (უკანასკნელი $1 განმავლობაში)',
'pageinfo-recent-authors' => 'უნიკალური ავტორების უკანასკნელი რაოდენობა',
'pageinfo-magic-words' => 'ჯადოსნური {{PLURAL:$1|სიტყვა|სიტყვა}} ($1)',
'pageinfo-hidden-categories' => 'დამალული {{PLURAL:$1|კატეგორია|კატეგორია}} ($1)',
'pageinfo-templates' => 'ინტეგრირებულია {{PLURAL:$1|თარგი|თარგი}} ($1)',
'pageinfo-transclusions' => '{{PLURAL:$1|ჩართული გვერდი|ჩართული გვერდი}} ($1)',
'pageinfo-toolboxlink' => 'გვერდის ინფორმაცია',
'pageinfo-redirectsto' => 'გადამისამართება',
'pageinfo-redirectsto-info' => 'ინფორმაცია',
'pageinfo-contentpage' => 'ითვლება როგორც შინაარსის გვერდი',
'pageinfo-contentpage-yes' => 'დიახ',
'pageinfo-protect-cascading' => 'კასკადური დაცვა აქედან',
'pageinfo-protect-cascading-yes' => 'დიახ',
'pageinfo-protect-cascading-from' => 'კასკადური დაცვა',
'pageinfo-category-info' => 'ინფორმაცია კატეგორიის შესახებ',
'pageinfo-category-pages' => 'გვერდების რაოდენობა',
'pageinfo-category-subcats' => 'ქვეკატეგორიების რაოდენობა',
'pageinfo-category-files' => 'ფაილების რაოდენობა',

# Skin names
'skinname-cologneblue' => 'კელნის ლურჯი',
'skinname-monobook' => 'მონობუკი',
'skinname-modern' => 'თანამედროვე',
'skinname-vector' => 'ვექტორული',

# Patrolling
'markaspatrolleddiff' => 'მონიშნე როგორც პატრულირებული',
'markaspatrolledtext' => 'მონიშნე ეს სტატია როგორც პატრულირებული',
'markedaspatrolled' => 'მონიშნულია როგორც პატრულირებული',
'markedaspatrolledtext' => 'არჩეული ვერსია [[:$1]] მონიშნულია როგორც პატრულირებული',
'rcpatroldisabled' => 'ბოლო ცვლილებების პატრულირება აკრძალულია',
'rcpatroldisabledtext' => 'ბოლო ცვლილებების პატრულირების შესაძლებლობა ამ მომენტისთვის გათიშულია',
'markedaspatrollederror' => 'შეუძლებელია ამ სტატიის მოhttp://translatewiki.net/w/i.php?title=MediaWiki:Markedaspatrollederror/ka&action=edit&loadgroup=core&loadtask=untranslatedნიშნვნა პატრულირებულად.',
'markedaspatrollederrortext' => 'თქვენ უნდა მონიშნოთ ვერსია, რომელიც პატრულირებულად ჩაითვლება.',
'markedaspatrollederror-noautopatrol' => 'თქვენ ვერ მონიშნავთ თქვენივე შესწორებებს პატრულირებულად.',
'markedaspatrollednotify' => 'ეს ცვლილება გვერდზე „$1“ პატრულირებულად მოინიშნა.',
'markedaspatrollederrornotify' => 'პატრულირებულად მონიშვნა ვერ მოხერხდა.',

# Patrol log
'patrol-log-page' => 'პატრულირების ჟურნალი',
'patrol-log-header' => 'ეს არის პატრულირებულ ვერსიათა ჟურნალი.',
'log-show-hide-patrol' => '$1 პატრულირების ჟურნალი',

# Image deletion
'deletedrevision' => 'წაშლილია ძველი ვერსია $1.',
'filedeleteerror-short' => 'შეცდომა ფაილის $1 წაშლისას',
'filedeleteerror-long' => 'ფაილის წაშლისას წარმოიშვა შეცდომები:

$1',
'filedelete-missing' => 'ფაილი „$1“ ვერ წაიშლება, რადგანაც არ არსებობს.',
'filedelete-old-unregistered' => 'მოთხოვნილი „$1“ ფაილის ვესია არ არსებობს მონაცემთა ბაზაში.',
'filedelete-current-unregistered' => 'მოთხოვნილი ფაილი „$1“ არ არსებობს მონაცემთა ბაზაში.',
'filedelete-archive-read-only' => 'საარქივო ფოლდერი „$1“ მიუწვდომელია ვებ-სერვერის ჩასაწერად.',

# Browsing diffs
'previousdiff' => '← წინა ცვლილება',
'nextdiff' => 'შემდეგი ცვლილება →',

# Media information
'mediawarning' => "'''ყურადღება''': ეს ფაილი შესაძლოა შეიცავდეს მავნე კოდს.
მისმა ჩატვირთვამ შესაძლოა თქვენი სისტემა დააზიანოს.",
'imagemaxsize' => "სურათის მაქსიმალური ზომა <br />''აღწერილობის გვერდზე:''",
'thumbsize' => 'შემცირებული ზომა:',
'widthheight' => '$1 × $2',
'widthheightpage' => '$1 × $2, $3 გვერდი',
'file-info' => 'ფაილის ზომა: $1, MIME ტიპი: $2',
'file-info-size' => '$1 × $2 პიქსელი, ფაილის ზომა: $3, MIME ტიპი: $4',
'file-info-size-pages' => '$1 × $2 პიქსელი, ფაილის ზომა: $3, MIME ტიპი: $4, $5 გვერდი',
'file-nohires' => 'უფრო მაღალი გარჩევადობა არ არის შესაძლებელი.',
'svg-long-desc' => 'ფაილი SVG, ნომინალურად $1 × $2 პიქსელი, ფაილის ზომა: $3',
'svg-long-desc-animated' => 'ანიმირებული SVG ფაილი, ნომინალური $1 × $2 პიქსელი, ფაილის ზომა: $3',
'svg-long-error' => 'არასწორი SVG ფაილი: $1',
'show-big-image' => 'თავდაპირველი ფაილი',
'show-big-image-preview' => 'ზომა წინასწარი გადახედვისას: $1.',
'show-big-image-other' => 'სხვა {{PLURAL:$2|გაფართოება|გაფართოება}}: $1.',
'show-big-image-size' => '$1 × $2 პიქსელი',
'file-info-gif-looped' => 'დარგოლილი',
'file-info-gif-frames' => '$1 კადრი',
'file-info-png-looped' => 'დარგოლილი',
'file-info-png-repeat' => 'დაკრულია $1 {{PLURAL:$1|ჯერ}}',
'file-info-png-frames' => '$1 კადრი',
'file-no-thumb-animation' => "'''შენიშვნა: ტექნიკური მიზეზების გამო, ამ ფაილის მინიატიურები არ იქნება ანიმირებული.'''",
'file-no-thumb-animation-gif' => "'''შენიშვნა: ტექნიკური მიზეზების გამო, მაღალი გარჩევადობის GIF ფორმატის სურათების მსგავსი მინიატიურები არ იქნება ანიმირებული.'''",

# Special:NewFiles
'newimages' => 'ახალი ფაილების გალერეა',
'imagelisttext' => "ქვემოთ მოცემულია '''$1''' ფაილის სია დახარისხებული მომხმარებლის $2 მიერ.",
'newimages-summary' => 'ეს სპეცგვერდი აჩვენებს ბოლო დროს ატვირთულ ფაილებს.',
'newimages-legend' => 'ფილტრი',
'newimages-label' => 'ფაილის (ან მისი სახელის) ნაწილი',
'showhidebots' => '(რობოტების $1)',
'noimages' => 'გადასახედი არაფერია.',
'ilsubmit' => 'ძიება',
'bydate' => 'თარიღით',
'sp-newimages-showfrom' => 'ახალი ფაილების ჩვენება დაწყებული $2, $1-იდან',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'video-dims' => '$1, $2 × $3',
'seconds-abbrev' => '$1 წმ',
'minutes-abbrev' => '$1 წთ',
'hours-abbrev' => '$1 სთ',
'days-abbrev' => '$1 დღე',
'seconds' => '$1 წამის',
'minutes' => '$1 წუთის',
'hours' => '$1 საათის',
'days' => '$1 დღის',
'weeks' => '{{PLURAL:$1|$1 კვირა|$1 კვირა}}',
'months' => '{{PLURAL:$1|$1 თვე|$1 თვე}}',
'years' => '{{PLURAL:$1|$1 წელი|$1 წელი}}',
'ago' => '$1 წინ',
'just-now' => 'ახლახანს',

# Human-readable timestamps
'hours-ago' => '$1 {{PLURAL:$1|საათის|საათის}} წინ',
'minutes-ago' => '$1 {{PLURAL:$1|წუთის|წუთის}} წინ',
'seconds-ago' => '$1 {{PLURAL:$1|წამის|წამის}} წინ',
'monday-at' => 'ორშაბათს $1-ზე',
'tuesday-at' => 'სამშაბათს $1-ზე',
'wednesday-at' => 'ოთხშაბათს $1-ზე',
'thursday-at' => 'ხუთშაბათს $1-ზე',
'friday-at' => 'პარასკევს $1-ზე',
'saturday-at' => 'შაბათს $1-ზე',
'sunday-at' => 'კვირას $1-ზე',
'yesterday-at' => 'გუშინ $1-ზე',

# Bad image list
'bad_image_list' => 'ფორმატი შემდეგია:

მხოლოდ სიაში (ხაზები რომლებიც იწყება *-ით) მითითებული პირობები არის გათვალისწინებული.
პირველი ბმული ხაზზე უნდა იყოს ბმული ხარვეზიან ფაილზე.
ნებისმიერი შემდგომი ბმული იმავე ხაზზე მიჩნეულია, როგორც გამონაკლისი, მაგ. გვერდები, სადაც ფაილი შეიძლება ხაზებს შორის იყოს ჩასმული.',

# Metadata
'metadata' => 'მეტამონაცემები',
'metadata-help' => 'ეს ფაილი შეიცავს დამატებით ინფორმაციას, სავარაუდოდ ციფრული კამერიდან ან სკანერიდან, რომელიც მის შესაქმნელად გამოიყენეს. თუ ფაილის ორიგინალი შეცვლილია, ზოგიერთი დეტალი შესაძლოა სრულად არ ასახავდეს ფაილში შეტანილ ცვლილებებს.',
'metadata-expand' => 'დამატებითი ინფორმაციის ჩვენება',
'metadata-collapse' => 'დამატებითი ინფორმაციის დამალვა',
'metadata-fields' => 'მეტამონაცემების ჩამონათვალი ამ შეტყობინებაში დამატებული იქნება სურათის გვერდზე, როცა მეტამონაცემების ცხრილი გახსნილია.
სხვები უპირობოდ დამალული იქნება.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',
'metadata-langitem' => "'''$2:''' $1",
'metadata-langitem-default' => '$1',

# Exif tags
'exif-imagewidth' => 'სიგანე',
'exif-imagelength' => 'სიმაღლე',
'exif-bitspersample' => 'ფერის კომპონენტთა სიღრმე',
'exif-compression' => 'შეკუმშვის მეთოდი',
'exif-photometricinterpretation' => 'პიქსელთა შემადგენლობა',
'exif-orientation' => 'ორიენტაცია',
'exif-samplesperpixel' => 'კომპონენტთა რიცხვი',
'exif-planarconfiguration' => 'მონაცემთა ორგანიზაციის პრინციპი',
'exif-ycbcrsubsampling' => 'კომპონენტ Y-ის შეფარდება C-სდამი',
'exif-ycbcrpositioning' => 'კომპონენტ Y-სა და C-ს განლაგების წესი',
'exif-xresolution' => 'ჰორიზონტალური გაფართოება',
'exif-yresolution' => 'ვერტიკალური გაფართოება',
'exif-stripoffsets' => 'მონაცემთა ბლოკის მდებარეობა',
'exif-rowsperstrip' => '1 ბლოკში ხაზთა რაოდენობა',
'exif-stripbytecounts' => 'შეკუმშული ბლოკის ზომა',
'exif-jpeginterchangeformat' => 'ბლოკ preview-ს მდებარეობა',
'exif-jpeginterchangeformatlength' => 'JPEG მონაცემთა ზომა',
'exif-whitepoint' => 'თეთრი წერტილის ფერადობა',
'exif-primarychromaticities' => 'ძირითადი ფერების ფერადობა',
'exif-ycbcrcoefficients' => 'ფერადი მოდელის გარდაქმნის კოეფიციენტი',
'exif-referenceblackwhite' => 'შავი და თეთრი წერტილების მდებარეობა',
'exif-datetime' => 'ფაილის შეცვლის თარიღი და დრო',
'exif-imagedescription' => 'სურათის ტიტული',
'exif-make' => 'კამერის მწარმოებელი',
'exif-model' => 'კამერის მოდელი',
'exif-software' => 'გამოყენებული პროგრამა',
'exif-artist' => 'ავტორი',
'exif-copyright' => 'საავტორო უფლებების მფლობელი',
'exif-exifversion' => 'ვერსია Exif',
'exif-flashpixversion' => 'FlashPix-ის მხარდამჭერი ვერსია',
'exif-colorspace' => 'ფერთა სივრცე',
'exif-componentsconfiguration' => 'ცალკეულ კომპონენტთა კონფიგურაცია',
'exif-compressedbitsperpixel' => 'სურათის შეკუმშვის რეჟიმი',
'exif-pixelydimension' => 'სურათის სიგანე',
'exif-pixelxdimension' => 'სურათის სიმაღლე',
'exif-usercomment' => 'მომხმარებლის კომენტარი',
'exif-relatedsoundfile' => 'შესაბამისი აუდიო ფაილი',
'exif-datetimeoriginal' => 'გენერირების თარიღი და დრო',
'exif-datetimedigitized' => 'ციფრირების თარიღი და დრო',
'exif-subsectime' => 'წამების მეათედები ფაილის ცვლილებისას',
'exif-subsectimeoriginal' => 'წამების მეათედები ორიგინალურ დროში',
'exif-subsectimedigitized' => 'წამების მეათედები ფაილების კომპიუტერიზაციისას',
'exif-exposuretime' => 'ექსპოზიციის დრო',
'exif-exposuretime-format' => '$1 წამ ($2)',
'exif-fnumber' => 'F ნომერი',
'exif-fnumber-format' => 'f/$1',
'exif-exposureprogram' => 'ექსპოზიციის პროგრამა',
'exif-spectralsensitivity' => 'სპექტრული გრძNობადობა',
'exif-isospeedratings' => 'ISO ფერისგრძნობადობა',
'exif-shutterspeedvalue' => 'APEX-ის დახურვის სიჩქარე',
'exif-aperturevalue' => 'APEX-დიაფრაგმა',
'exif-brightnessvalue' => 'APEX-სინათლე',
'exif-exposurebiasvalue' => 'ექსპოზიციის კომპენსაცია',
'exif-maxaperturevalue' => 'დიაფრაგმას მინიმალური რიცხვი',
'exif-subjectdistance' => 'ობიექტამდე მანძილი',
'exif-meteringmode' => 'ექსპოზიციის დათვლის რეჟიმი',
'exif-lightsource' => 'განათების წყარო',
'exif-flash' => 'ფლეშის სტატუსი',
'exif-focallength' => 'ფოკუსური დაშორება',
'exif-focallength-format' => '$1 მმ',
'exif-subjectarea' => 'გადაღების ობიექტის მდებარეობა და ფართობი',
'exif-flashenergy' => 'ფლეშის ენერგია',
'exif-focalplanexresolution' => 'გაფართოება X ფოტოკალური სიბრტყით',
'exif-focalplaneyresolution' => 'გაფართოება Y ფოტოკალური სიბრტყით',
'exif-focalplaneresolutionunit' => 'გაფართოების საზომვის ერთეული ფოტოკალურ სიბრტყეში',
'exif-subjectlocation' => 'ობიექტის მდებარეობა',
'exif-exposureindex' => 'ექსპოზიციის ინდექსი',
'exif-sensingmethod' => 'სენსორის ტიპი',
'exif-filesource' => 'ფაილის წყარო',
'exif-scenetype' => 'სცენის ტიპი',
'exif-customrendered' => 'სურათის ინდივიდუალური დამუშავება',
'exif-exposuremode' => 'ექსპოზიციის არჩევის რეჟიმი',
'exif-whitebalance' => 'თეთრის ბალანსი',
'exif-digitalzoomratio' => 'ციფრული გადიდების კოეფიციენტი (ციფრული ზუმი)',
'exif-focallengthin35mmfilm' => 'ეკვივალენტური ფოკუსური მანძილი (35 მმ-იანი პლიონკისთვის)',
'exif-scenecapturetype' => 'სცენის ტიპი გადაღებისას',
'exif-gaincontrol' => 'სცენის კონტროლი',
'exif-contrast' => 'კონტრასტი',
'exif-saturation' => 'ნაჯერობა',
'exif-sharpness' => 'სიმკვეთრე',
'exif-devicesettingdescription' => 'მოწყობილობის პარამეტრების აღწერილობა',
'exif-subjectdistancerange' => 'მანძილი გადაღების ობიექტამდე',
'exif-imageuniqueid' => 'გამოსახულების ნომერი (ID)',
'exif-gpsversionid' => 'GPS ინფორმაციის ბლოკის ვერსია',
'exif-gpslatituderef' => 'განედის ინდექსი',
'exif-gpslatitude' => 'განედი',
'exif-gpslongituderef' => 'გრძედის ინდექსი',
'exif-gpslongitude' => 'გრძედი',
'exif-gpsaltituderef' => 'სიმაღლის ინდექსი',
'exif-gpsaltitude' => 'სიმაღლე',
'exif-gpstimestamp' => 'ზუსტი დრო UTC-თ',
'exif-gpssatellites' => 'გამოყენებული თანამგზავრების აღწერა',
'exif-gpsstatus' => 'რისივერის სტატუსი',
'exif-gpsmeasuremode' => 'მდებარეობის გამოთვლის მეთოდი',
'exif-gpsdop' => 'გაზომვის სიზუსტე',
'exif-gpsspeedref' => 'სიჩქარის ერთეული',
'exif-gpsspeed' => 'GPS რისივერის სიჩქარე',
'exif-gpstrackref' => 'GPS მიმღების აზიმუტი',
'exif-gpstrack' => 'მოძრაობის მიმართულება',
'exif-gpsimgdirectionref' => 'გამოსახულების აზიმუტი',
'exif-gpsimgdirection' => 'სურათზე მიმართულება',
'exif-gpsmapdatum' => 'გამოყენებული კორდინატთა გეოდეზური სისტემა',
'exif-gpsdestlatituderef' => 'ობიექტის გაედის ინდექსი',
'exif-gpsdestlatitude' => 'ობიექტის გრძედი',
'exif-gpsdestlongituderef' => 'ობიექტის განედი',
'exif-gpsdestlongitude' => 'ობიექტის სიგანე',
'exif-gpsdestbearingref' => 'მიმართულების ორიენტირების სახე',
'exif-gpsdestbearing' => 'ორიენტირების სახე',
'exif-gpsdestdistanceref' => 'მანძილის გაზომვის ერთეულები',
'exif-gpsdestdistance' => 'მანძილი დანიშნულებამდე',
'exif-gpsprocessingmethod' => 'მდებარეობის გამოთვლის მეთოდი',
'exif-gpsareainformation' => 'GPS მხარის სახელწოდება',
'exif-gpsdatestamp' => 'GPS-ის მონაცემი',
'exif-gpsdifferential' => 'დიფერენციალური შესწორება',
'exif-coordinate-format' => '$1° $2′ $3″ $4',
'exif-jpegfilecomment' => 'JPEG-ფაილის კომენტარი',
'exif-keywords' => 'საძიებო სიტყვები',
'exif-worldregioncreated' => 'მსოფლიოს რეგიონი, სადაც გადაღებულია ფოტო',
'exif-countrycreated' => 'ქვეყანა, სადაც გადაღებულია ფოტო',
'exif-countrycodecreated' => 'ქვეყნის კოდი, სადაც გადაღებულია ფოტო',
'exif-provinceorstatecreated' => 'ოლქი, პროვინცია ან შტატი, სადაც გადაღებულია ფოტო',
'exif-citycreated' => 'ქალაქი, სადაც გადაღებულია ფოტო',
'exif-sublocationcreated' => 'ქალაქის რაიონი, სადაც გადაღებულია ფოტო',
'exif-worldregiondest' => 'მსოფლიოს ნაჩვენები რეგიონი',
'exif-countrydest' => 'ნაჩვენები სახელმწიფო',
'exif-countrycodedest' => 'ნაჩვენები სახელმწიფოს კოდი',
'exif-provinceorstatedest' => 'ნაჩვენები პროვინცია, ან შტატი',
'exif-citydest' => 'ნაჩვენები ქალაქი',
'exif-sublocationdest' => 'ნაჩვენები ქალაქის რაიონი',
'exif-objectname' => 'მოკლე სათაური',
'exif-specialinstructions' => 'სპეციალური ინსტრუქციები',
'exif-headline' => 'სათაური',
'exif-credit' => 'კრედიტი/პროვაიდერი',
'exif-source' => 'წყარო',
'exif-editstatus' => 'სურათის საგამომცემლო სტატუსი',
'exif-urgency' => 'აქტუალურობა',
'exif-fixtureidentifier' => 'სვეტის სახელი',
'exif-locationdest' => 'გამოსახული ადგილი',
'exif-locationdestcode' => 'გამოსახული ადგილის კოდი',
'exif-objectcycle' => 'დღე-ღამის მონაკვეთი, რომლისთვისაც განკუთვნილია გამოსახულება',
'exif-contact' => 'საკონტაქტო ინფორმაცია',
'exif-writer' => 'ავტორი',
'exif-languagecode' => 'ენა',
'exif-iimversion' => 'IIM-ვერსია',
'exif-iimcategory' => 'კატეგორია',
'exif-iimsupplementalcategory' => 'დამატებითი კატეგორიები',
'exif-datetimeexpires' => 'აღარ გამოიყენო',
'exif-datetimereleased' => 'გამოქვეყნდა',
'exif-originaltransmissionref' => 'გადაცემის საწყისი ადგილის კოდი',
'exif-identifier' => 'იდენტიფიკატორი',
'exif-lens' => 'გამოყენებული ლინზა',
'exif-serialnumber' => 'კამერის სერიული ნომერი',
'exif-cameraownername' => 'კამერის მფლობელი',
'exif-label' => 'სახელი',
'exif-datetimemetadata' => 'მეტამონაცემების ბოლო ცვლილების თარიღი',
'exif-nickname' => 'სურათის არაფორმალური სახელი',
'exif-rating' => 'რეიტინგი (5-დან)',
'exif-rightscertificate' => 'უფლებათა მართვის სერთიფიკატი',
'exif-copyrighted' => 'საავტორო უფლებების სტატუსი',
'exif-copyrightowner' => 'საავტორო უფლებების მფლობელი',
'exif-usageterms' => 'გამოყენების პირობები',
'exif-webstatement' => 'საავტორო უფლებების მდგომარეობა ინტერნეტში',
'exif-originaldocumentid' => 'ორიგინალი დოკუმენტის უნიკალური იდენტიფიკატორი',
'exif-licenseurl' => 'საავტორო ლიცენზიის URL',
'exif-morepermissionsurl' => 'ალტერნატიული სალიცენზიო ინფორმაცია',
'exif-attributionurl' => 'ამ სამუშაოს გამოყენებისას, გთხოვთ, დატოვეთ ბმული',
'exif-preferredattributionname' => 'ამ სამუშაოს გამოყენებისას, გთხოვთ, მიუთითეთ',
'exif-pngfilecomment' => 'PNG ფაილის კომენტარი',
'exif-disclaimer' => 'პასუხისმგებლობის მოხსნა',
'exif-contentwarning' => 'გაფრთხილება შინაარსის შესახებ',
'exif-giffilecomment' => 'GIF ფაილის კომენტარი',
'exif-intellectualgenre' => 'ობიექტის ტიპი',
'exif-subjectnewscode' => 'თემის კოდი',
'exif-scenecode' => 'IPTC სცენის კოდი',
'exif-event' => 'გამოსახული მოვლენა',
'exif-organisationinimage' => 'გამოსახული ორგანიზაცია',
'exif-personinimage' => 'გამოსახული პიროვნება',
'exif-originalimageheight' => 'სურათის სიმაღლე კადრირებამდე',
'exif-originalimagewidth' => 'სურათის სიგანე კადრირებამდე',

# Make & model, can be wikified in order to link to the camera and model name
'exif-contact-value' => '$1

$2
<div class="adr">
$3

$4, $5, $6 $7
</div>
$8',
'exif-subjectnewscode-value' => '$2 ($1)',

# Exif attributes
'exif-compression-1' => 'შეუკუმშავი',
'exif-compression-2' => 'CCITT Group 3, ჰაფმანის სერიის სიგრძის კოდირების 1-განზომილებიანი მოდიფიკაცია',
'exif-compression-3' => 'CCITT Group 3 ფაქსის კოდირება',
'exif-compression-4' => 'CCITT Group 4 ფაქსის კოდირება',
'exif-compression-5' => 'LZW',
'exif-compression-6' => 'JPEG (ძველი)',
'exif-compression-7' => 'JPEG',
'exif-compression-8' => 'Deflate (Adobe)',
'exif-compression-32773' => 'PackBits (Macintosh RLE)',
'exif-compression-32946' => 'Deflate (PKZIP)',
'exif-compression-34712' => 'JPEG2000',

'exif-copyrighted-true' => 'საავტორო უფლებებით დაცული',
'exif-copyrighted-false' => 'საავტორო უფლებები არ არის არჩეული',

'exif-photometricinterpretation-2' => 'RGB',
'exif-photometricinterpretation-6' => 'YCbCr',

'exif-unknowndate' => 'უცნობი თარიღი',

'exif-orientation-1' => 'ნორმალური',
'exif-orientation-2' => 'ჰორიზონტალით აირეკლა',
'exif-orientation-3' => '180°-ით შებრუნდა',
'exif-orientation-4' => 'აირეკლა ვერტიკალურად',
'exif-orientation-5' => 'შეტრიალებული 90°-ით CCW და ვერტიკალურად აირეკლა',
'exif-orientation-6' => 'მობრუნებულია 90°-ით',
'exif-orientation-7' => 'შეტრიალებულია 90°-ით CW და ვერტიკალურად აირეკლა',
'exif-orientation-8' => ' 90°-ით მობრუნება',

'exif-planarconfiguration-1' => 'ფორმატი «chunky»',
'exif-planarconfiguration-2' => 'ფორმატი «planar»',

'exif-xyresolution-i' => '$1 dpi',
'exif-xyresolution-c' => '$1 dpc',

'exif-colorspace-1' => 'sRGB',
'exif-colorspace-65535' => 'არაკალიბრირებული',

'exif-componentsconfiguration-0' => 'არ არსებობს',

'exif-exposureprogram-0' => 'უცნობია',
'exif-exposureprogram-1' => 'მანუალური',
'exif-exposureprogram-2' => 'სტანდარტული პროგრამა',
'exif-exposureprogram-3' => 'დიაფრაგმის პრიორიტეტი',
'exif-exposureprogram-4' => 'ჩამკეტის პრიორიტეტი',
'exif-exposureprogram-5' => 'მხატვრული პროგრამა (აქცენტი სიმკვეთრის სიღრმეზე)',
'exif-exposureprogram-6' => 'სპორტული რეჟიმი (ჩამკეტის მაქსიმალური სისწრაფით)',
'exif-exposureprogram-7' => 'პორტრეტის რეჟიმი (მსხვილი პლანებისთვის ფონით ფოკუსის
გარეშე)',
'exif-exposureprogram-8' => 'პეიზაჟის რეჟიმი (პანორამული ფოტოებისთვის ფონით ფოკუსში)',

'exif-subjectdistance-value' => '$1 მეტრი',

'exif-meteringmode-0' => 'უცნობი',
'exif-meteringmode-1' => 'საშუალო',
'exif-meteringmode-2' => 'ცენტრულადაწონილი',
'exif-meteringmode-3' => 'წერტილოვანი',
'exif-meteringmode-4' => 'მულტიწერტილოვანი',
'exif-meteringmode-5' => 'მატრიცული',
'exif-meteringmode-6' => 'ნაწილობრივი',
'exif-meteringmode-255' => 'სხვა',

'exif-lightsource-0' => 'უცნობი',
'exif-lightsource-1' => 'დღის სინათლე',
'exif-lightsource-2' => 'დღის სინათლის ლამპა',
'exif-lightsource-3' => 'ნათურა',
'exif-lightsource-4' => 'ფლეში',
'exif-lightsource-9' => 'კარგი ამინდი',
'exif-lightsource-10' => 'მოღრუბლული ამინდი',
'exif-lightsource-11' => 'ჩრდილი',
'exif-lightsource-12' => 'დღის სინათლის ნათურა D (5700 − 7100K)',
'exif-lightsource-13' => 'დღის სინათლის ნათურა N(4600 − 5400K)',
'exif-lightsource-14' => 'დღის სინათლის ნათურა W (3900 − 4500K)',
'exif-lightsource-15' => 'დღის სინათლის ნათურა WW (3200 − 3700K)',
'exif-lightsource-17' => 'სტანდარტული განათება A',
'exif-lightsource-18' => 'სტანდარტული განათება B',
'exif-lightsource-19' => 'სტანდარტული განათება C',
'exif-lightsource-24' => 'სტტუდიური ნათურა  ISO სტანდარტის',
'exif-lightsource-255' => 'განათების სხვა წყარო',

# Flash modes
'exif-flash-fired-0' => 'ფლეში არ მუშაობს',
'exif-flash-fired-1' => 'ფლეში მოქმედებს',
'exif-flash-return-0' => 'წინასწარი ფლეშის რეჟიმი გათიშულია',
'exif-flash-return-2' => 'წინასწარი ფლეშ იმპულსი არ არის მიღებული',
'exif-flash-return-3' => 'მიღებულია ფლეშის უკუიმპულსი',
'exif-flash-mode-1' => 'ფლეშის იმპულსი',
'exif-flash-mode-2' => 'ფლეშის ჩახშობა',
'exif-flash-mode-3' => 'ავტო რეჟიმი',
'exif-flash-function-1' => 'ფლეშის გათიშვა',
'exif-flash-redeye-1' => 'წითელი თვალების მოშორების რეჟიმი',

'exif-focalplaneresolutionunit-2' => 'დუიმი',

'exif-sensingmethod-1' => 'განუსაზღვრელი',
'exif-sensingmethod-2' => 'ერთჩიპიანი მატრიცული ფერადი სენსორი',
'exif-sensingmethod-3' => 'ორ მატრიციანი სენსორი',
'exif-sensingmethod-4' => 'სამმატრიციანი სენსორი',
'exif-sensingmethod-5' => 'მატრიციანი სენსორი ფერების შეცვლით',
'exif-sensingmethod-7' => 'სამფერიანი ხაზოვანი სენსორი',
'exif-sensingmethod-8' => 'ხაზოვანი სენსორი ფერთა შეცვლით',

'exif-filesource-3' => 'ციფრული ფოტოაპარატი',

'exif-scenetype-1' => 'გამოსახულება გადაღებულია პირდაპირ',

'exif-customrendered-0' => 'სტანდარტული დამუშავება',
'exif-customrendered-1' => 'არასტანდარტული დამუშავება',

'exif-exposuremode-0' => 'ავტომატური ექსპოზიცია',
'exif-exposuremode-1' => 'მანუალური ექსპოზიცია',
'exif-exposuremode-2' => 'ფოტოფირის ექსპონირების მწკრივი (ბრეკეტინგი)',

'exif-whitebalance-0' => 'თეთრის ავტობალანსი',
'exif-whitebalance-1' => 'თეთრის ბალანსის ხელოვნური დაყენება',

'exif-scenecapturetype-0' => 'სტანდარტული',
'exif-scenecapturetype-1' => 'პეიზაჟი',
'exif-scenecapturetype-2' => 'პორტრეტი',
'exif-scenecapturetype-3' => 'ღამის კადრი',

'exif-gaincontrol-0' => 'არაფერი',
'exif-gaincontrol-1' => 'მცირე გადიდება',
'exif-gaincontrol-2' => 'დიდი გადიდება',
'exif-gaincontrol-3' => 'მცირე გადიდება',
'exif-gaincontrol-4' => 'დიდი შემცირება',

'exif-contrast-0' => 'ნორმალური',
'exif-contrast-1' => 'სუსტი',
'exif-contrast-2' => 'ძლიერი',

'exif-saturation-0' => 'ნორმალური',
'exif-saturation-1' => 'მცირე სავსებადობა',
'exif-saturation-2' => 'დიდი სავსებადობა',

'exif-sharpness-0' => 'ნორმალური',
'exif-sharpness-1' => 'სუსტი',
'exif-sharpness-2' => 'ძლიერი',

'exif-subjectdistancerange-0' => 'უცნობი',
'exif-subjectdistancerange-1' => 'მაკროგადაღება',
'exif-subjectdistancerange-2' => 'ახლო მანძილიდან გადაღება',
'exif-subjectdistancerange-3' => 'შორიდან გადაღება',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'ჩრდილოეთი განედი',
'exif-gpslatitude-s' => 'სამხრეთი განედი',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'აღმოსავლეთი განედი',
'exif-gpslongitude-w' => 'დასავლეთი განედი',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 მეტრი ზღვის დონიდან',
'exif-gpsaltitude-below-sealevel' => '$1 მეტრი ზღვის დონის ქვემოთ',

'exif-gpsstatus-a' => 'ცვლილება დაუსრულებელია',
'exif-gpsstatus-v' => 'მონაცემთა გადაცემისთვის მზადაა',

'exif-gpsmeasuremode-2' => '2 კოორდინატის ცვლილება',
'exif-gpsmeasuremode-3' => '3-განზომილებიანი გაზომვა',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'კილომეტრი საათში',
'exif-gpsspeed-m' => 'მილი საათში',
'exif-gpsspeed-n' => 'კვანძები',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'კილომეტრი',
'exif-gpsdestdistance-m' => 'მილი',
'exif-gpsdestdistance-n' => 'საზღვაო მილი',

'exif-gpsdop-excellent' => 'შესანიშნავი ($1)',
'exif-gpsdop-good' => 'კარგი ($1)',
'exif-gpsdop-moderate' => 'ზომიერი ($1)',
'exif-gpsdop-fair' => 'საშუალოზე დაბალი ($1)',
'exif-gpsdop-poor' => 'ცუდი ($1)',

'exif-objectcycle-a' => 'მხოლოდ დილით',
'exif-objectcycle-p' => 'მხოლოდ საღამოს',
'exif-objectcycle-b' => 'ორივე დილას და საღამოს',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'ჭეშმარიტი',
'exif-gpsdirection-m' => 'მაგნიტური',

'exif-ycbcrpositioning-1' => 'ცენტრირებული',
'exif-ycbcrpositioning-2' => 'Co-sited',

'exif-dc-contributor' => 'წვლილის შემომტანები',
'exif-dc-coverage' => 'მედიის სივრცული, ან დროებითი ჩარჩოები',
'exif-dc-date' => 'თარიღ(ებ)ი',
'exif-dc-publisher' => 'გამომქვეყნებელი',
'exif-dc-relation' => 'დაკავშირებული მედია',
'exif-dc-rights' => 'უფლებები',
'exif-dc-source' => 'წყაროს მედია',
'exif-dc-type' => 'მედიის ტიპი',

'exif-rating-rejected' => 'უარყოფილია',

'exif-isospeedratings-overflow' => '65535-ზე მეტი',

'exif-maxaperturevalue-value' => '$1 APEX (f/$2)',

'exif-iimcategory-ace' => 'ხელოვნება, კულტურა და გართობა',
'exif-iimcategory-clj' => 'დანაშაული და კანონი',
'exif-iimcategory-dis' => 'კატასტროფები და ავარიები',
'exif-iimcategory-fin' => 'ეკონომიკა და ბიზნესი',
'exif-iimcategory-edu' => 'განათლება',
'exif-iimcategory-evn' => 'გარემო',
'exif-iimcategory-hth' => 'ჯანმრთელობა',
'exif-iimcategory-hum' => 'ღირსშესანიშნავი ისტორიები',
'exif-iimcategory-lab' => 'შრომა',
'exif-iimcategory-lif' => 'ცხოვრების წესი და დასვენება',
'exif-iimcategory-pol' => 'პოლიტიკა',
'exif-iimcategory-rel' => 'რელიგია და რწმენა',
'exif-iimcategory-sci' => 'მეცნიერება და ტექნოლოგია',
'exif-iimcategory-soi' => 'სოციალური კითხვები',
'exif-iimcategory-spo' => 'სპორტი',
'exif-iimcategory-war' => 'ომი, კონფლიქტი და არეულობა',
'exif-iimcategory-wea' => 'ამინდი',

'exif-urgency-normal' => 'ნორმალური ($1)',
'exif-urgency-low' => 'დაბალი ($1)',
'exif-urgency-high' => 'მაღალი ($1)',
'exif-urgency-other' => 'მომხმარებლის მიერ განსაზღვრული პრიორიტეტი ($1)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'ყველა',
'namespacesall' => 'ყველა',
'monthsall' => 'ყველა',

# Email address confirmation
'confirmemail' => 'ელ. ფოსტის მისამართის დადასტურება',
'confirmemail_noemail' => 'თქვენ არ გაქვს მითითებული მართებული ელმისამართი [[Special:Preferences|მომხმარებლის პარამეტრებში]].',
'confirmemail_text' => '{{SITENAME}} ითხოვს თქვენი ელ. ფოსტის დადასტურებას, სანამ ელ.
ფოსტის ფუნქციების გამოყენებას შეძლებთ.
გააქტიურეთ ღილაკი ქვემოთ თქვენს მისამართზე დამადასტურებელი შეტყობინების გასაგზავნად.
თქვენს ელ. წერილში მითითებული იქნება ბმული შესაბამის კოდზე;
გახსენით ბმული თქვენს ბრაუზერში თქვენი ელ.
ფოსტის მისამართის გასააქტიურებლად.',
'confirmemail_pending' => 'წერილი დადასტურების კოდით უკვე გაგზავნილია.
თუ თქვენ ამწამს შექმენით ანგარიში გთხოვთ დალოდოთ ცოტა ხანი კოდის ახლად მოთხოვნამდე.',
'confirmemail_send' => 'დადასტურების კოდის გაგზავნა',
'confirmemail_sent' => 'დამადასტურებელი შეტყობინება გაგზავნილია.',
'confirmemail_oncreate' => 'წერილი დადასტურების კოდით გაიგზავნა თქვენს მიერ მითთებულ საფოსტო ყუთზე.
მოცემული კოდი არ არის საჭირო სისტემაში შესვლისთვის, თუმცა თქვენ უნდა წარმოადგინოთ იგი.
მანამ, სანამ მიიღებთ ელ-ფოსტის გამოყენებას პროექტში.',
'confirmemail_sendfailed' => 'შეუძლებელია დამადასტურებელი შეტყობინების გაგზავნა.
გადაამოწმეთ მისამართის შემადგენელი სიმბოლოების სისწორე.

სერვერის პასუხი: $1',
'confirmemail_invalid' => 'არასწორი კოდი. შესაძლოა კოდი ძალადაკარგული იყოს.',
'confirmemail_needlogin' => 'თქვენ გჭირდებათ $1 თქვენი ელ-ფოსტის მისამართის დასადასტურებლად.',
'confirmemail_success' => 'თქვენი ელ. ფოსტის მისამართი დადასტურებულია. ახლა შეგიძლიათ ვიკიში [[Special:UserLogin|შესვლა]].',
'confirmemail_loggedin' => 'თქვენი ელ. ფოსტის მისამართის დადასტურება მიღებულია.',
'confirmemail_subject' => '{{SITENAME}} ელ. ფოსტის მისამართის დადასტურება',
'confirmemail_body' => 'ვიღაცამ, შესაძლოა თქვენ, IP მისამართით $1, დაარეგისტრირეთ
ანგარიში "$2" ამ ელ-ფოსტის მისამართით აქ {{SITENAME}}.

იმის დასადასტურებლად, რომ ეს ანგარიში ნამდვილად თქვენ გეკუთვნით
და ელ-ფოსტის შესაძლებლობების  გადააქტიურებლად {{SITENAME}} გვერდზე,
გახსენით ეს ბმული თქვენს ბრაუზერში:

$3

თუ ეს თქვენ *არ* იყავით, მაშინ ნუ შეხვალთ ამ ბმულზე.
დადასტურების კოდის ვადა ამოიწურება $4-თვის.',
'confirmemail_body_changed' => 'ვიღაცამ, შესაძლოა თქვენ, IP მისამართით $1,
შეცვალა ანარიშის იმეილი "$2" ამ ელ-ფოსტის მისამართით {{SITENAME}}-ზე.

იმის დასადასტურებლად, რომ ეს ანგარიში ნამდვილად თქვენ გეკუთვნით
და ელ-ფოსტის შესაძლებლობების  გადააქტიურებლად {{SITENAME}} გვერდზე,

გახსენით ეს ბმული თქვენს ბრაუზერში:

$3

თუ ეს თქვენ *არ* იყავით, მაშინ ნუ შეხვალთ მიყევით ამ ბმულს იმეილის შემოწმების გასათიშად.

$5

წერილი მოძველდება $4.',
'confirmemail_body_set' => 'ვიღაცამ, შესაძლოა თქვენ, IP მისამართით $1,
პროექტში {{SITENAME}} შეცვალა ელ.ფოსტის მისამართი ანგარიშისათვის "$2" ამ მისამართით.

იმის დასადასტურებლად, რომ ეს ანგარიში ნამდვილად თქვენ გეკუთვნით
და ელ.ფოსტის შესაძლებლობების  გასააქტიურებლად საიტზე {{SITENAME}}, გახსენით ეს ბმული თქვენს ბრაუზერში:

$3

თუ ეს თქვენ *არ* იყავით, მაშინ ელ.ფოსტის მისამართის დასტურების გასაუქმებლად, გადადით ამ ბმულზე:

$5

წერილის ვადის გასვლის თარიღია $4.',
'confirmemail_invalidated' => 'ელ-ფოსტის დადასტურება გაუქმდა',
'invalidateemail' => 'ელ-ფოსტის დადასტურების გაუქმება',

# Scary transclusion
'scarytranscludedisabled' => '[«Interwiki transcluding» გათიშულია]',
'scarytranscludefailed' => '[$1-თან დაკავშირების შეცდომა]',
'scarytranscludefailed-httpstatus' => '[ვერ მოხერხდა თარგის ჩატვირთვა $1-თვის: HTTP $2]',
'scarytranscludetoolong' => '[URL ძალიან გრძელია]',

# Delete conflict
'deletedwhileediting' => "'''ყურადღება''': ეს გვერდი წაიშალა მას შემდეგ, რაც თქვენ მისი რედაქტირება დაიწყეთ!",
'confirmrecreate' => "მომხმარებელმა [[User:$1|$1]] ([[User talk:$1|განხილვა]]) წაშალა ეს გვერდი მას შემდეგ რაც თქვენ დაიწყეთ რედაქტირება შემდეგი მიზეზით:
: ''$2''
გთხოვთ დაადასტუროთ, რომ ნამდვილად გსურთ ამ გვერდის აღდგენა.",
'confirmrecreate-noreason' => 'მომხმარებელმა [[User:$1|$1]] ([[User talk:$1|განხილვა]]) წაშალა ეს გვერდი მას შემდეგ, რაც თქვენ დაიწყეთ მისი რედაქტირება. გთხოვთ, დარწმუნდით, რომ თქვენ ნამდვილად გსურთ ამ გვერდის ხელახლა შექმნა.',
'recreate' => 'აღადგინე',

'unit-pixel' => 'პქ',

# action=purge
'confirm_purge_button' => 'კარგი',
'confirm-purge-top' => 'გსურთ ამ გვერდის ქეშის წაშლა?',
'confirm-purge-bottom' => 'ქეშის გაწმენდის შემდეგ იქნება ნაჩვენები ბოლო ვერსია.',

# action=watch/unwatch
'confirm-watch-button' => 'კარგი',
'confirm-watch-top' => 'დავამატო ეს გვერდი თქვენი კონტროლის სიას?',
'confirm-unwatch-button' => 'კარგი',
'confirm-unwatch-top' => 'მოვხსნა ეს გვერდი თქვენი კონტროლის სიიდან?',

# Separators for various lists, etc.
'semicolon-separator' => ';&#32;',
'comma-separator' => ',&#32;',
'colon-separator' => ':&#32;',
'pipe-separator' => '&#32;|&#32;',
'word-separator' => '&#32;',
'ellipsis' => '...',
'percent' => '$1%',
'parentheses' => '($1)',
'brackets' => '[$1]',

# Multipage image navigation
'imgmultipageprev' => '&larr; წინა გვერდი',
'imgmultipagenext' => 'შემდეგი გვერდი &rarr;',
'imgmultigo' => 'გადასვლა',
'imgmultigoto' => 'გადასვლა გვერდზე $1',

# Language selector for translatable SVGs
'img-lang-go' => 'წინ',

# Table pager
'ascending_abbrev' => 'დაბრ',
'descending_abbrev' => 'აღწერა',
'table_pager_next' => 'შემდეგი გვერდი',
'table_pager_prev' => 'წინა გვერდი',
'table_pager_first' => 'პირველი გვერდი',
'table_pager_last' => 'ბოლო გვერდი',
'table_pager_limit' => 'აჩვენეთ $1 ელემნტი გვერდზე',
'table_pager_limit_label' => 'ჩანაწერი გვერდზე:',
'table_pager_limit_submit' => 'აჩვენე',
'table_pager_empty' => 'შედეგები არაა',

# Auto-summaries
'autosumm-blank' => 'გვერდის შიგთავსი დაცარიელდა',
'autosumm-replace' => 'შინაარსი შეიცვალა „$1“-ით',
'autoredircomment' => 'გადამისამართება [[$1]]-ზე',
'autosumm-new' => 'ახალი გვერდი: $1',

# Size units
'size-bytes' => '$1 ბ',
'size-kilobytes' => '$1 კბ',
'size-megabytes' => '$1 მბ',
'size-gigabytes' => '$1 გბ',
'size-terabytes' => '$1 ტბ',
'size-petabytes' => '$1 პბ',
'size-exabytes' => '$1 ებ',
'size-zetabytes' => '$1 ზბ',
'size-yottabytes' => '$1 იბ',

# Bitrate units
'bitrate-bits' => '$1 ბ/წმ',
'bitrate-kilobits' => '$1 კბ/წმ',
'bitrate-megabits' => '$1 მბ/წმ',
'bitrate-gigabits' => '$1 გბ/წმ',
'bitrate-terabits' => '$1 ტბ/წმ',
'bitrate-petabits' => '$1 პბ/წმ',
'bitrate-exabits' => '$1 ებ/წმ',
'bitrate-zetabits' => '$1 ზბ/წმ',
'bitrate-yottabits' => '$1 იბ/წმ',

# Live preview
'livepreview-loading' => 'იტვირთება…',
'livepreview-ready' => 'იტვირთება… მზადაა!',
'livepreview-failed' => 'ვვერ მოხერხდა ჩქარი წინასწარ გადახედვის განხორციელება. ეცადეთ ჩვეულებრივი წინასწარ გადახედვის გამოყენება/',
'livepreview-error' => 'ვერ მოხერხდა დაკავშირება: $1 «$2». ეცადეთ ჩვეულებრივი წინასწარ გადახედვის გამოყენება.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'სიაში $1 {{PLURAL:$1|წამი|წამები|წამებში}} განხორციელებული ცვლილებები არ იქნება ნაჩვენები ამ სიაში.',
'lag-warn-high' => 'სერვერთა სიქრონიზაციაში შეფერხების გამო $1 {{PLURAL:$1|წამი|წამები|წამებში}} განხორციელებული ცვლილებები არ იქნება ნაჩვენები ამ სიაში.',

# Watchlist editor
'watchlistedit-numitems' => 'თქვენი კონტროლის სია $1 სათაურს შეიცავს, განხილვის გვერდების გარდა.',
'watchlistedit-noitems' => 'თქვენი კონტროლის სია ცარიელია.',
'watchlistedit-normal-title' => 'კონტროლის სიის რედაქტირება',
'watchlistedit-normal-legend' => 'მოხსენით სათაურები კონტროლის სიიდან',
'watchlistedit-normal-explain' => "ქვემოთ წარმოდგენილია თქვენი კონტროლის სიის გვერდები.
წაშლისთვის მონიშნეთ გვერდები დაა დააჭირეთ '''„ჩანაწერების წაშლას“'''.
თქვენ ასევე შეგიძლიათ მისი  [[Special:EditWatchlist/raw|ტექსტად შესწორება]].",
'watchlistedit-normal-submit' => 'სათაურების წაშლა',
'watchlistedit-normal-done' => '$1 სათაური მოიხსნა თქვენი კონტროლის სიიდან.',
'watchlistedit-raw-title' => 'კონტროლის სიის რედაქტირება ტექსტის ფორმატში',
'watchlistedit-raw-legend' => 'კონტროლის სიის რედაქტირება ტექსტის ფორმატში',
'watchlistedit-raw-explain' => 'ქვემოთ წარმოდგენილია თქვენი კონტროლის სიის გვერდები.
თქვენ შეგიძლიათ ამ სიის შეცვლა მისგან სათაურების სტრიქონების წაშლით.
შესწორებათა დასრულების შემდეგ დააჭირეთ «ცვლილებათა შენახვას».
თქვენ ასევე შეგიძლიათ გვერდების წაშლა [[Special:EditWatchlist| ჩვეულებრივი ხერხით]].',
'watchlistedit-raw-titles' => 'სათაურები:',
'watchlistedit-raw-submit' => 'კონტროლის სიის განახლება',
'watchlistedit-raw-done' => 'თქვენი კონტროლის სია განახლდა.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 სათაური|$1 სათაურები}} მიემატა:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 სათაური|$1 სათაურები}} წაიშალა:',

# Watchlist editing tools
'watchlisttools-view' => 'დაკავშირებული ცვლილებების ხილვა',
'watchlisttools-edit' => 'კონტროლის სიის ხილვა და რედაქტირება',
'watchlisttools-raw' => 'კონტროლის სიის რედაქტირება ტექსტის ფორმატში',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|განხილვა]])',
'timezone-utc' => 'UTC',

# Core parser functions
'unknown_extension_tag' => 'უცნობი დამატების «$1» თეგი',
'duplicate-defaultsort' => "'''ყურადღება.'''სორტირების გასაღებს «$2»-ს გააჭრის წინა გასაღებს «$1»-ს.",

# Special:Version
'version' => 'ვერსია',
'version-extensions' => 'დაყენებული გაფართოებები',
'version-specialpages' => 'სპეციალური გვერდები',
'version-parserhooks' => 'სინტაქსური ანალიზატორის ჰუკები',
'version-variables' => 'ცვალებადი',
'version-antispam' => 'სპამის პრევენცია',
'version-skins' => 'იერსახე',
'version-api' => 'API',
'version-other' => 'სხვა',
'version-mediahandlers' => 'მედია დამუშავება',
'version-hooks' => 'ჰუკები',
'version-parser-extensiontags' => 'სინტაქსური ანალიზატორის თეგი',
'version-parser-function-hooks' => 'სინტაქსური ანალიზატორის ჰუკი',
'version-hook-name' => 'ჰუკის სახელი',
'version-hook-subscribedby' => 'ჩაწერილია',
'version-version' => '(ვერსია $1)',
'version-svn-revision' => '(r$2)',
'version-license' => 'მედიავიკის ლიცენზია',
'version-ext-license' => 'ლიცენზია',
'version-ext-colheader-name' => 'გაფართოებები',
'version-ext-colheader-version' => 'ვერსია',
'version-ext-colheader-license' => 'ლიცენზია',
'version-ext-colheader-description' => 'აღწერა',
'version-ext-colheader-credits' => 'ავტორები',
'version-poweredby-credits' => "ეს ვიკი მუშაობს '''[https://www.mediawiki.org/ MediaWiki]'''-ს ძრავზე, copyright © 2001-$1 $2.",
'version-poweredby-others' => 'სხვები',
'version-poweredby-translators' => 'translatewiki.net-ის მთარგმნელები',
'version-credits-summary' => 'გვინდა მადლობა გადავუხადოთ შემდეგ მომხმარებლებს მათი წვლილისათვის [[Special:Version|მედიავიკის]] განვითარებაში.',
'version-license-info' => 'MediaWiki არის თავისუფალი პროგრამული უზრუნველყოფა; შეგიძლიათ მისი გავრცელება ან/და მოდიფიცირება GNU General Public License ლიცენზიის პირობების შესაბამისად. როგორც გამოქვეყნებულია თავისუფალი პროგრამული უზრუნველყოფის ფონდის მიერ; ან ლიცენზიის მეორე ვერსიაში, ან (თქვენი აზრით) უფრო ახალში.

MediaWiki ვრცელდება იმ იმედით, რომ ის სასარგებლო იქნება, მაგრამ გარანტიის გარეშე; კომერციული ღირებულების ნაგულისხმევი გარანტიის გარეშეც კი ან რაიმე მიზნისთვის სარგებლის მისაღებად. მეტი დეტალური ინფორმაციისთვის, იხილეთ GNU General Public License.

ამ პროგრამასთან ერთად თქვენ უნდა მიგეღოთ [{{SERVER}}{{SCRIPTPATH}}/COPYING GNU General Public License ლიცენზიის ასლი]; თუ არ მიგიღიათ, მისწერეთ თავისუფალი პროგრამული უზრუნველყოფის ფონდს, Free Software Foundation, Inc., ფრანკლინის ქუჩა 51, მეხუთე სართული, ბოსტონი, MA 02110-1301, აშშ, ან [//www.gnu.org/licenses/old-licenses/gpl-2.0.html წაიკითხეთ იგი ინტერნეტში].',
'version-software' => 'დაინსტალირებული პროგრამული უზრუნველყოფა',
'version-software-product' => 'პროდუქტი',
'version-software-version' => 'ვერსია',
'version-entrypoints' => 'შესვლის წერტილის URL-ები',
'version-entrypoints-header-entrypoint' => 'შესვლის წერტილი',
'version-entrypoints-header-url' => 'URL',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath გზა სტატიისაკენ]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath გზა სკრიპტისაკენ]',

# Special:Redirect
'redirect' => 'გადამისამართება ფაილიდან, მომხმარებლიდან, გვერდიდან ან ვერსიის იდენტიფიკატორიდან',
'redirect-legend' => 'გადამისამართება ფაილზე ან გვერდზე',
'redirect-submit' => 'მიდი',
'redirect-lookup' => 'ძიება:',
'redirect-value' => 'მნიშვნელობა:',
'redirect-user' => 'მომხმარებლის იდენტიფიკატორი',
'redirect-page' => 'გვერდის ID',
'redirect-revision' => 'გვერდის ვერსია',
'redirect-file' => 'ფაილის სახელი',
'redirect-not-exists' => 'მნიშვნელობა ვერ მოიძებნა',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'ერთნაირი ფაილების ძიება',
'fileduplicatesearch-summary' => 'ერთნაირი ფაილების ძიება ჰეშ-კოდის მიხედვით.',
'fileduplicatesearch-legend' => 'დუბლიკატების ძიება',
'fileduplicatesearch-filename' => 'ფაილის სახელი:',
'fileduplicatesearch-submit' => 'ძიება',
'fileduplicatesearch-info' => '$1 × $2 პიქსელზე<br />ფაილის ზომაა: $3<br />MIME-ტიპი: $4',
'fileduplicatesearch-result-1' => 'ფაილ «$1» არ გააჩნია იდენტური დუბლიკატები.',
'fileduplicatesearch-result-n' => 'ფაილს «$1» გააჩნია $2 {{PLURAL:$2|იდენტური დუბლიკატი|იდენტური დუბლიკატები|იდენტური დუბლიკატი}}.',
'fileduplicatesearch-noresults' => 'ფაილი სახელით "$1" ვერ მოიძებნა.',

# Special:SpecialPages
'specialpages' => 'სპეციალური გვერდები',
'specialpages-note-top' => 'ლეგენდა',
'specialpages-note' => '* ჩვეულებრივი სპეცგვერდები.
* <span class="mw-specialpagerestricted">სპეცგვერდები შეზღუდული წვდომით.</span>',
'specialpages-group-maintenance' => 'ტექნიკური მომსახურების ანგარიშები',
'specialpages-group-other' => 'სხვა სპეციალური გვერდები',
'specialpages-group-login' => 'შესვლა / რეგისტრაცია',
'specialpages-group-changes' => 'ბოლო ცვლილებები და ჟურნალები',
'specialpages-group-media' => 'მედია მასალებისა და ატვირთვების ანგარიშები',
'specialpages-group-users' => 'მომხმარებლები და უფლებები',
'specialpages-group-highuse' => 'ხშირად გამოყენებული გვერდები',
'specialpages-group-pages' => 'გვერდების სიები',
'specialpages-group-pagetools' => 'ინსტრუმენტები გვერდებისთვის',
'specialpages-group-wiki' => 'მონაცემები და ინსტრუმენტები',
'specialpages-group-redirects' => 'სპეცგვერდების გადამისამართება',
'specialpages-group-spam' => 'ინსტრუმენტები სპამის წინააღმდეგ',

# Special:BlankPage
'blankpage' => 'ცარიელი გვერდი',
'intentionallyblankpage' => 'ეს გვერდი სპეციალურად დარჩა ცარიელი',

# External image whitelist
'external_image_whitelist' => '  #დატოვეთ ეს ხაზი ისე, როგორც არის <pre>
#განათვსეთ აქ რეგულარულ გამოთქმათა ფრაგმენტები (ისინი, რომლებიც // შორის იმყოფება)
#ისინი იქნებიან შეფარდებულები გარე გამოსახულებათა URL-თან.
#მოგერგებული იქნება ნაჩვენები გამოსახულებათა სახით, ხოლო სხვები ბმულების სახით.
#ხაზები, რომლებიც იწყება #, ითვლება კომენტარად.
#ხაზები გრძნობადები არიან რეგისტრისადმი.</pre>',

# Special:Tags
'tags' => 'ცვლილებათა მოქმედი მონიშვნები',
'tag-filter' => '[[Special:Tags|მონიშვნათა]] ფილტრი',
'tag-filter-submit' => 'გაფილტვრა',
'tags-title' => 'მონიშვნები',
'tags-intro' => 'ამ გვერდზე წარმოდგენილია მონიშვნათა სია, რომლითაც პროგრამული უზრუნველყოფა მონიშნავს შესწორებებს, ასევე ამ მონიშვნათა მნიშვნელობა.',
'tags-tag' => 'ტეგის სახელი',
'tags-display-header' => 'რედაქტირებების სიაში ცვლილებების წარმოდგენა',
'tags-description-header' => 'მნიშვნელობის სრული აღწერა',
'tags-active-header' => 'აქტიურია?',
'tags-hitcount-header' => 'აღნიშნული ცვლილებები',
'tags-active-yes' => 'დიახ',
'tags-active-no' => 'არა',
'tags-edit' => 'რედაქტირება',
'tags-hitcount' => '$1 ცვლილება',

# Special:ComparePages
'comparepages' => 'გვერდების შედარება',
'compare-page1' => '1 გვერდი',
'compare-page2' => '2 გვერდი',
'compare-rev1' => 'პირველი ვერსია',
'compare-rev2' => 'მეორე ვერსია',
'compare-submit' => 'შედარება',
'compare-invalid-title' => 'თქვენ მიერ მითითებულია დაუშვებელი სახელი.',
'compare-title-not-exists' => 'თქვენ მიერ მითითებული სახელი არ არსებობს.',
'compare-revision-not-exists' => 'თქვენ მიერ მითითებული ვერსია არ არსებობს.',

# Database error messages
'dberr-header' => 'ეს ვიკი განიცდის პრობლემას',
'dberr-problems' => 'ბოდიში! საიტზე დროებითი ტექნიკური პრობლემებია',
'dberr-again' => 'ეცადეთ რამდენიმე წუთით დაცდა და ამ გვერდის გადატვირთვა',
'dberr-info' => 'ვერ მოხერხდა ინფორმაციის $1 სერვერთან დაკავშირება',
'dberr-info-hidden' => '(მონაცემთა ბაზის სერვერთან დაკავშირება შეუძლებელია)',
'dberr-usegoogle' => 'ამ დროს კი  შეგიძლიათ Google-ით ძიება',
'dberr-outofdate' => 'გაითვალისწინეთ, რომ თქვენი კონტენტის ინდექსები შეიძლება შეუსაბამო იყოს',
'dberr-cachederror' => 'ეს არის მოთხოვნილი გვერდის კეშირებული ვერსია, და შესაძლება მოძველდა.',

# HTML forms
'htmlform-invalid-input' => 'თქვენ მიერ შეყვანილი ინფორმაციის ნაწილმა გამოიწვია პრობლემები',
'htmlform-select-badoption' => 'თქვენ მიერ მითითებული მნიშვნელობა მიუღებელია.',
'htmlform-int-invalid' => 'თქვენ მიერ მითითებული მნიშვნელობა არ არის მთელი რიცხვი.',
'htmlform-float-invalid' => 'თქვენ მიერ მითითებული მნიშვნელობა არ არის რიცხვი.',
'htmlform-int-toolow' => 'თქვენ მიერ მითითებული მნიშვნელობა მინიმუმზე დაბალია — $1',
'htmlform-int-toohigh' => 'თქვენ მიერ მითითებული მნიშვნელობა მაქსიმალურს აღემატება — $1',
'htmlform-required' => 'ეს მნიშვნელობა საჭიროა',
'htmlform-submit' => 'შენახვა',
'htmlform-reset' => 'ცვლილებების გაუქმება',
'htmlform-selectorother-other' => 'სხვა',
'htmlform-no' => 'არა',
'htmlform-yes' => 'დიახ',
'htmlform-chosen-placeholder' => 'აირჩიეთ პარამეტრი',

# SQLite database support
'sqlite-has-fts' => '$1 სრული ტექსტის ძიების მხარდაჭერით',
'sqlite-no-fts' => '$1 სრული ტექსტის ძიების მხარდაჭერის გარეშე',

# New logging system
'logentry-delete-delete' => 'მომხმარებელმა $1 {{GENDER:$2|წაშალა}} გვერდი: „$3“',
'logentry-delete-restore' => 'მომხმარებელმა $1 {{GENDER:$2|აღადგინა}} გვერდი $3',
'logentry-delete-event' => 'მომხმარებელმა $1 {{GENDER:$2|შეცვალა}} {{PLURAL:$5|ჟურნალის ჩანაწერის|$5 ჟურნალის ჩანაწერების}} ხილვადობა $3-ზე: $4',
'logentry-delete-revision' => 'მომხმარებელმა $1 {{GENDER:$2|შეცვალა}} {{PLURAL:$5|$5 ვერსიის|$5 ვერსიის}} ხილვადობა გვერდისათვის $3: $4',
'logentry-delete-event-legacy' => 'მომხმარებელმა $1 {{GENDER:$2|შეცვალა}} ჩანაწერების ჟურნალის ხილვადობა $3-ზე',
'logentry-delete-revision-legacy' => 'მომხმარებელმა $1 {{GENDER:$2|შეცვალა}} რედაქტირების კომენტარი გვერდზე $3',
'logentry-suppress-delete' => 'მომხმარებელმა $1 {{GENDER:$2|ჩაახშო}} $3 გვერდი',
'logentry-suppress-event' => 'მომხმარებელმა $1 ფარულად {{GENDER:$2|შეცვალა}} {{PLURAL:$5|ჟურნალის ჩანაწერის|$5 ჟურნალის ჩანაწერების}} ხილვადობა $3-ზე: $4',
'logentry-suppress-revision' => 'მომხმარებელმა $1 ფარულად {{GENDER:$2|შეცვალა}} {{PLURAL:$5|$5 ვერსიის|$5 ვერსიის}} ხილვადობა $3 გვერდზე: $4',
'logentry-suppress-event-legacy' => 'მომხმარებელმა $1 ფარულად {{GENDER:$2|შეცვალა}} $3 ჩანაწერების ჟურნალის ხილვადობა',
'logentry-suppress-revision-legacy' => 'მომხმარებელმა $1 ფარულად {{GENDER:$2|შეცვალა}} ვერსიის ხილვადობა $3 გვერდზე',
'revdelete-content-hid' => 'შინაარსი დამალულია',
'revdelete-summary-hid' => 'რედაქტირების აღწერა დამალულია',
'revdelete-uname-hid' => 'მომხმარებლის სახელი დაფარულია',
'revdelete-content-unhid' => 'შინაარსი გახსნილია',
'revdelete-summary-unhid' => 'რედაქტირების აღწერა გახსნილია',
'revdelete-uname-unhid' => 'მომხმარებლის სახელი გახსნილია',
'revdelete-restricted' => 'შეზღუდვა ადმინისტრატორთათვის',
'revdelete-unrestricted' => 'ადმინისტრატორთათვის შეზღუდვები მოხსნილია',
'logentry-move-move' => 'მომხმარებელმა $1 გვერდი „$3“ {{GENDER:$2|გადაიტანა}} გვერდზე „$4“',
'logentry-move-move-noredirect' => 'მომხმარებელმა $1 გვერდი „$3“ {{GENDER:$2|გადაიტანა}} გვერდზე „$4“ გადამისამართების დატოვების გარეშე',
'logentry-move-move_redir' => 'მომხმარებელმა $1 გვერდი „$3“ {{GENDER:$2|გადაიტანა}} გვერდზე „$4“ გადამისამართებაზე',
'logentry-move-move_redir-noredirect' => 'მომხმარებელმა $1 {{GENDER:$2|გადაიტანა}} გვერდი $3 $4-ში გადამისამართების დატოვების გარეშე',
'logentry-patrol-patrol' => 'მომხმარებელმა $1 {{GENDER:$2|გააკეთა}} გვერდის „$3“ $4 ვერსიის პატრულირება',
'logentry-patrol-patrol-auto' => 'მომხმარებელმა $1 ავტომატურად {{GENDER:$2|გააკეთა}} გვერდის „$3“ $4 ვერსიის პატრულირება',
'logentry-newusers-newusers' => 'მომხმარებლის ანგარიში $1 {{GENDER:$2|შექმნილია}}',
'logentry-newusers-create' => '{{GENDER:$2|შეიქმნა}} მომხმარებლის ანგარიში $1',
'logentry-newusers-create2' => 'მომხმარებლის ანგარიში $3 {{GENDER:$2|შექმნა}} მომხმარებელმა $1',
'logentry-newusers-byemail' => 'მომხმარებლის ანგარიში $3 {{GENDER:$2|შექმნა}} მომხმარებელმა $1 და პაროლი გაგზავნა ელ. ფოსტით',
'logentry-newusers-autocreate' => 'ავტომატურად {{GENDER:$2|შეიქმნა}} მომხმარებლის ანგარიში $1',
'logentry-rights-rights' => 'მომხმარებელმა $1 {{GENDER:$2|შეცვალა}} ჯგუფის წევრობა $3-თვის $4-დან $5-ზე',
'logentry-rights-rights-legacy' => 'მომხმარებელმა $1 {{GENDER:$2|შეცვალა}} ჯგუფის წევრობა $3-თვის',
'logentry-rights-autopromote' => 'მომხმარებელი $1 ავტომატურად იქნა {{GENDER:$2|გადაყვანილი}} $4–დან $5–ში',
'rightsnone' => '(არცერთი)',

# Feedback
'feedback-bugornote' => 'თუ თქვენ მზად ხართ დეტალურად აღწეროთ ტექნიკური პრობლემა, გთხოვთ, [$1 შეგვატყობინეთ შეცდომის შესახებ].
წინააღმდეგ შემთხვევაში თქვენ შეგიძლიათ ისარგებლოთ ამ მარტივი ფორმით. თქვენი კომენტარი დაემატება  „[$3 $2]“ გვერდზე თქვენი მომხმარებლის სახელთან და გამოყენებულ ბრაუზერთან ერთად.',
'feedback-subject' => 'თემა:',
'feedback-message' => 'შეტყობინება:',
'feedback-cancel' => 'გაუქმება',
'feedback-submit' => 'შეფასების გაგზავნა',
'feedback-adding' => 'თქვენი შეფასების შენახვა...',
'feedback-error1' => 'შეცდომა. API-ს მოულოდნელი რეზულტატი.',
'feedback-error2' => 'შეცდომა: რედაქტირება ვერ განხორციელდა',
'feedback-error3' => 'შეცდომა. არ არის API-ს პასუხი .',
'feedback-thanks' => 'გმადლობთ! თქვენი შეფასება განთავსებულია „[$2 $1]“ გვერდზე.',
'feedback-close' => 'გაკეთდა',
'feedback-bugcheck' => 'კარგია! გთხოვთ, კიდევ ერთხელ შეამოწმეთ, ხომ არ არის აქ რომელიმე უკვე [$1 ნაცნობი შეცდომა].',
'feedback-bugnew' => 'მე შევამოწმე. ახალი შეცდომის შეტყობინება',

# Search suggestions
'searchsuggest-search' => 'ძიება',
'searchsuggest-containing' => 'შეიცავს...',

# API errors
'api-error-badaccess-groups' => 'თქვენ არ გაქვთ ამ ვიკიში ფაილების ატვირთვის უფლება.',
'api-error-badtoken' => 'შიდა შეცდომა: ცუდი ტოკენი.',
'api-error-copyuploaddisabled' => 'ამ სერვერზე URL-მისამართის საშუალებით ატვირთვა გამორთულია.',
'api-error-duplicate' => 'უკვე {{PLURAL:$1|არსებობს [$2 სხვა ფაილი]|არსებობს [$2 სხვა მსგავსი ფაილი]}} ანალოგიური შინაარსით.',
'api-error-duplicate-archive' => 'საიტზე ადრე {{PLURAL:$1|უკვე იყო [$2 ფაილი]}} ანალოგიური შინაარსით, მაგრამ {{PLURAL:$1|ის წაიშალა|ისინი წაიშალა}}.',
'api-error-duplicate-archive-popup-title' => 'უკვე წაშლილი {{PLURAL:$1|ფაილის|ფაილის}} დუბლიკატი.',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|ფაილის|ფაილის}} დუბლიკატი.',
'api-error-empty-file' => 'არჩეული ფაილი ცარიელია.',
'api-error-emptypage' => 'ახალი, ცარიელი გვერდების შექმნა აკრძალულია.',
'api-error-fetchfileerror' => 'შიდა შეცდომა: ფაილის მიღებისას მოხდა რაღაც შეცდომა.',
'api-error-fileexists-forbidden' => 'ფაილი სახელით „$1“ უკვე არსებობს და მისი გადაწერა შეუძლებელია.',
'api-error-fileexists-shared-forbidden' => 'ფაილი სახელით „$1“ უკვე არსებობს საერთო ფაილების საცავში და გადაწერა შეუძლებელია.',
'api-error-file-too-large' => 'არჩეული ფაილი ძალიან დიდია.',
'api-error-filename-tooshort' => 'ფაილის სახელი ზედმეტად მოკლეა',
'api-error-filetype-banned' => 'ფაილის ეს ტიპი აკრძალულია',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|მიუღებელი ფაილის ტიპია|მიუღებელი ფაილის ტიპებია}}. მისაღებიი ფაილის {{PLURAL:$3|ტიპია|ტიპებია}} $2.',
'api-error-filetype-missing' => 'ფაილს აკლია გაფართოვება.',
'api-error-hookaborted' => 'თქვენ მიერ შემოთავაზებული ცვლილება მოინიშნა გაფართოების დოკუმენტაციაში.',
'api-error-http' => 'აღმოჩენილია შეცდომა სერვერთან დაკავშირებისას.',
'api-error-illegal-filename' => 'ფაილის ეს სახელი აკრძალულია.',
'api-error-internal-error' => 'შიდა შეცდომა: ვიკიში თქვენი ატვირთვის დამუშავებისას მოხდა შეცდომა.',
'api-error-invalid-file-key' => 'სერვერმა ვერ იპოვა თქვენ მიერ მითითებული ფაილი',
'api-error-missingparam' => 'შიდა შეცდომა: მოთხოვნილი პარამეტრები დაიკარგა.',
'api-error-missingresult' => 'შიდა შეცდომა. ვერ მოხერხდა იმის დადგენა, იყო თუ არა კოპირება წარმატებული.',
'api-error-mustbeloggedin' => 'ფაილების ასატვირთად თქვენ უნდა შეხვიდეთ სისტემაში.',
'api-error-mustbeposted' => 'პროგრამული შეცდომა; გამოყენებულია არასწორი HTTP-მეთოდი.',
'api-error-noimageinfo' => 'ატვირთვა წარმატებით განხორციელდა, მაგრამ სერვერმა არ აჩვენა ფაილის შესახებ არანაირი ინფორმაცია.',
'api-error-nomodule' => 'შიდა შეცდომა. ატვირთვის მოდული არ არის კონფიგურირებული.',
'api-error-ok-but-empty' => 'შიდა შეცდომა. სერვერს არ დაუბრუნებია ინფორმაცია ატვირთვადი ფაილის შესახებ.',
'api-error-overwrite' => 'არსებული ფაილის შეცვლა მიუღებელია.',
'api-error-stashfailed' => 'შიდა შეცდომა: სერვერმა ვერ შეძლო დროებითი ფაილის შენახვა.',
'api-error-publishfailed' => 'შიდა შეცდომა: სერვერმა ვერ შეძლო დროებითი ფაილის შენახვა.',
'api-error-timeout' => 'სერვერმა არ მოახდინა რეაგირება მოსალოდნელ დროში.',
'api-error-unclassified' => 'აღმოჩენილია უცნობი შეცდომა.',
'api-error-unknown-code' => 'უცნობი შეცდომა : „$1“',
'api-error-unknown-error' => 'შიდა შეცდომა: ფაილის ატვირთვისას აღმოჩენილია უცნობი შეცდომა.',
'api-error-unknown-warning' => 'უცნობი გაფრთხილება: „$1“.',
'api-error-unknownerror' => 'უცნობი შეცდომა: „$1“.',
'api-error-uploaddisabled' => 'ატვირთვის მექანიზმი ამ ვიკიზე გამორთულია',
'api-error-verification-error' => 'ეს ფაილი ან რაიმე შეცდომას შეიცავს, ან არ აქვს სახელის გაფართოება.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|წამი|წამი}}',
'duration-minutes' => '$1 {{PLURAL:$1|წუთი|წუთი}}',
'duration-hours' => '$1 {{PLURAL:$1|საათი|საათი}}',
'duration-days' => '$1 {{PLURAL:$1|დღე|დღე}}',
'duration-weeks' => '$1 {{PLURAL:$1|კვირა|კვირა}}',
'duration-years' => '$1 {{PLURAL:$1|წელი|წელი}}',
'duration-decades' => '$1 {{PLURAL:$1|დეკადა|დეკადა}}',
'duration-centuries' => '$1 {{PLURAL:$1|საუკუნე|საუკუნე}}',
'duration-millennia' => '$1 {{PLURAL:$1|ათასწლეული|ათასწლეული}}',

# Image rotation
'rotate-comment' => 'სურათი მოტრიალებულია $1 {{PLURAL:$1|გრადუსით|გრადუსით}} საათის ისრის მიმართულებით',

# Limit report
'limitreport-cputime-value' => '$1 {{PLURAL:$1|წამი}}',
'limitreport-walltime' => 'რეალურ დროში გამოყენება',
'limitreport-walltime-value' => '$1 {{PLURAL:$1|წამი}}',
'limitreport-postexpandincludesize-value' => '$1/$2 {{PLURAL:$2|ბაიტი}}',
'limitreport-templateargumentsize-value' => '$1/$2 {{PLURAL:$2|ბაიტი}}',

# Special:ExpandTemplates
'expandtemplates' => 'გაშლილი თარგები',
'expand_templates_title' => 'კონტექსტის სათაური, {{FULLPAGENAME}}-სთვის და ა.შ.:',
'expand_templates_input' => 'შესაყვანი ტექსტი:',
'expand_templates_output' => 'შედეგი',
'expand_templates_xml_output' => 'XML-ის გამოტანა',
'expand_templates_ok' => 'შესრულება',
'expand_templates_remove_comments' => 'კომენტარების წაშლა',
'expand_templates_remove_nowiki' => 'ტეგების დათრგუნვა <nowiki> შედეგში',
'expand_templates_preview' => 'წინა',

);

<?
defined('C5_EXECUTE') or die("Access Denied.");
return array(
	'\Concrete\Core\File\FileServiceProvider',
	'\Concrete\Core\Encryption\EncryptionServiceProvider',
	'\Concrete\Core\Validation\ValidationServiceProvider',
	'\Concrete\Core\Localization\LocalizationServiceProvider',
	'\Concrete\Core\Feed\FeedServiceProvider',
	'\Concrete\Core\Html\HtmlServiceProvider',
	'\Concrete\Core\Mail\MailServiceProvider',
	'\Concrete\Core\Application\ApplicationServiceProvider',
	'\Concrete\Core\Utility\UtilityServiceProvider',
	'\Concrete\Core\Database\DatabaseServiceProvider',
	'\Concrete\Core\Form\FormServiceProvider',
	'\Concrete\Core\Session\SessionServiceProvider',
    '\Concrete\Core\Logging\LoggingServiceProvider',
	'\Concrete\Core\Http\HttpServiceProvider',
	'\Concrete\Core\Events\EventsServiceProvider'

);
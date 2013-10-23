<?php  defined('C5_EXECUTE') or die("Access Denied.");

class HorizintalLineBlockController extends BlockController {

	protected $btName = 'Разделитель';
	protected $btDescription = 'Модуль содержит нет HR и используется для разделения блоков на странице';

	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "150";

	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = true;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
}

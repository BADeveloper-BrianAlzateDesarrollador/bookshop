<?php 

	namespace BrianAlzateBADeveloper\BookShop;

	use BrianAlzateBADeveloper\BookShop\Services\BookShopServices;

	class BookShop extends BookShopServices
	{	
		private $info;

		public function init()
		{
			parent::shop();

			$this->info = $this->name ."<br>". $this->email . "<br>" . $this->role . "<br>" . $this->suma ."<br> los numeros son: " . $this->num1 . " y " . $this->num2;

			return $this->info;
		}
	}

?>
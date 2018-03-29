<?php 

	namespace BrianAlzateBADeveloper\BookShop;

	use BrianAlzateBADeveloper\BookShop\Services\BookShopServices;

	class BookShop extends BookShopServices
	{	
		private $info;

		public function init($num,$num2)
		{
			parent::shop();
			parent::calculate($num,$num2);

			$this->info = $this->name ."<br>". $this->email . "<br>" . $this->role . "<br> suma: " .$this->suma ."<br> resta: " . $this->resta . "<br> los numeros son: " . $this->num1 . " y " . $this->num2;

			return $this->info;
		}
	}

?>
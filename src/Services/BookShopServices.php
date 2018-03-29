<?php 

	namespace BrianAlzateBADeveloper\BookShop\Services;

	class BookShopServices
	{

		protected $name;
		protected $email;
		protected $role;
		protected $num1;
		protected $num2;
		protected $suma;
		protected $resta;
		// protected $division;

		public function shop()
		{
			$this->name = "Brian Steven Alzate Garcia";
			$this->email = "brianalzate97@gmail.com";
			$this->role = "Developer";
		}

		public function calculate($num1,$num2)
		{
			$this->num1 = $num1;
			$this->num2 = $num2;

			$this->suma = $this->num1 + $this->num2;
			$this->resta = $this->num1 - $this->num2;
		}

	}

?>
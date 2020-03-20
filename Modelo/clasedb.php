<?php
	class clasedb{
		private $db;
		public function conectar(){
			$this->db=mysqli_connect("localhost","root",
			"","armeriathom") or die ("No se pudo conectar con Mysql");
		
			return $this->db;
			
		}
	}
		
?>
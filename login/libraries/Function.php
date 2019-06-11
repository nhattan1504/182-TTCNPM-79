

<?php 
	
	/**
	  * get input
	  */



	/**
	  * post input
	  */
	function base_url()
	{
		return $url = "http://localhost/tutphp/";
	}

	function public_admin()
	{
		return base_url() . "public/admin/";
	}

	function public_frontend()
	{
		return base_url() . "public/frontend/";
	}
	function modules($url)
	{
		return base_url() . "admin/modules/" .$url ;
	}
 ?>
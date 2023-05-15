<?php 

namespace App\Controllers;

class MyHome extends BaseController
{
	public function index()
	{
		$mydata['data'] = [1,2,3];
        echo '<h1>111<h1>';
		return view('myhello',$mydata);
        
	}
	public function hello(string $name='yyyy')
	{
		$myname['data'] = array(
			'one'=>'2',
			'two'=>$name,
		);
		return view('myhello',$myname);
	}
	public function sql()
	{
		$db->query('YOUR QUERY HERE');
		$query = $db->query('YOUR QUERY HERE');
		if ($db->simpleQuery('YOUR QUERY')) {
			echo "Success!";
		} else {
			echo "Query failed!";
		}
	}

}

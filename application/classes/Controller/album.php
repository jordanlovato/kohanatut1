<?php 

class Controller_Album extends Controller
{
	private $album_model;
	private $genre_model;

	private $list_view;
	private $create_view;
	private $update_view;

	public function __contruct() {
		parent::__construct();
		// Who needs DI?
		$this->album_model = ORM::factory('album'); 
		$this->genre_model = ORM::factory('genre');
	}

	public function action_index()
	{
		$this->show_albums_list();
	}

	public function show_albums_list()
	{
		var_dump($this->album_model); exit;
		$albums_list = $this->album_model->where('name', '=', 'Thriller')->find_all();
		var_dump($albums_list);exit;
		$view = View::factory('album/index')
			->set('albums_list',$albums_list);
		$this->response->body($view);
	}
}

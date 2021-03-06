<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Repository as Cache;
use GrahamCampbell\GitHub\GitHubManager;

class HomeController extends BaseController
{

    /**
     * Laravel Request Repository
     *
     * @var object
     */
    protected $request;

    /**
     * Laravel Cache Repository
     *
     * @var object
     */
    protected $cache;

    /**
     * Create a new home controller instance.
     *
     * @return void
     */
	public function __construct(Request $request, Cache $cache, GitHubManager $github)
	{
		parent::__construct($cache);
		$this->namespace = __NAMESPACE__;
		$this->basename = class_basename($this);
		$this->request = $request;
		$this->cache = $cache;
        $this->github = $github;
	}

	public function index()
	{
        /* Create a label */
        //$this->github->issues()->labels()->create('ritey','grimtofu',['name' => 'General forum', 'color' => 'ff0000']);

        /* Create an issue */
        //dd($this->github->issues()->create('ritey','grimtofu', ['title' => 'Testing new thread', 'body' => 'Look a new thread :)', 'labels' => ['testing-forum']]));

        /* Get issues tagged testing-forum */
        //dd($this->github->issues()->all('ritey','grimtofu', ['state' => 'open', 'labels' => 'testing-forum' ]));
        //
        /* Get an issue using number not id */
        //dd($this->github->issues()->show('ritey','grimtofu', 3));

        /* Create a comment on an issue using number not id */
        //dd($this->github->issues()->comments()->create('ritey','grimtofu', 3, ['body' => 'This is a great reply!']));

        /* Get comments on an issue using number not id */
        //dd($this->github->issues()->comments()->all('ritey','grimtofu', 3));
	}
}
<?php

class ArticleController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $allArticles = array();
        $articles = Article::all();
        foreach($articles as $article){
            $art = array(
                'title'         =>  $article->title,
                'body'          =>  $article->body,
                'author'        =>  $article->author->name,
                'author_id'     =>  $article->author->id,
                'article_id'    =>  $article->id
            );
            array_push($allArticles, $art);
        }

        return View::make('articles.index', array('articles' => $allArticles));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $article = Article::find($id);
        $art = array(
            'title'         =>  $article->title,
            'body'          =>  $article->body,
            'author'        =>  $article->author->name,
            'author_id'     =>  $article->author->id,
            'article_id'    =>  $article->id
        );

        return View::make('articles.show', array('article' => $art));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
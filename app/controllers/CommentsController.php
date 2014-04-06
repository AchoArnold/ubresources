<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($uri)
	{
		 $validate = Comment::validate(Input::all());

        if ( $validate->passes() ) {
			$comment = new Comment;
			$comment->content = String::makeLinks( HTML::entities(Input::get('content')) );
			$comment->author_id ='1';
			$comment->gist_id = Gist::whereGistUri($uri)->firstOrFail()->id;
			if($comment->save()){
				return Redirect::back()
				->with('message', 'Comment posted successfully!');
			}else{
				return Redirect::back()
				->with('error', 'Comment could not be posted!');
			}
		}
		else{
			return Redirect::back()
			->with('error', $validate->messages()->get('content'));
		}
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
		//
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
		$comment = Comment::findOrFail($id);
		if($comment->delete())
		{
	  		return Redirect::back()
      	->with('message', 'Successfully deleted comment!');
		}
		else{
			return Redirect::back()
			->with('error', 'Could not delete comment');
		}
	}

}
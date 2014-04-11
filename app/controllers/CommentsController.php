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

        if ( $validate->passes() && Auth::check()) {
			$comment = new Comment;
			$comment->content = String::makeLinks( HTML::entities(Input::get('content')) );
			$comment->author_id = Auth::user()->id;
			$comment->gist_id = Gist::whereGistUri($uri)->firstOrFail()->id;
			if($comment->save()){
				return Redirect::to('gist/'.$uri.'#comments')
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
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comment = Comment::findOrFail($id);
		if (Auth::user()->id == $comment->author_id)
		{
			if($comment->delete())
			{
		  		return Redirect::back()
	      	->with('message', 'Successfully deleted comment!');
			}

			return Redirect::back()
			->with('error', 'Could not delete comment');
		}
		
		return Redirect::back()
		->with('error', 'Could not delete comment');
	}

}
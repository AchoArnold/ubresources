<?php

class Comment extends Eloquent{
	protected $fillable = array('content');

	public static function validate($input) {
      $rules = array(
      	'content' => 'Required|Min:2|Max:500'
      );

       return Validator::make($input, $rules);
   }
   public static function get_comments($gist_id)
   {
   	$comments = DB::table('comments')
   	->select('recovery_email','comments.created_at','comments.author_id', 'comments.content' )
   	->join('users', 'author_id', '=', 'users.id')
	->where('gist_id', '=', $gist_id)
	->orderBy('comments.updated_at', 'dsc')
	->get();

		return $comments;
   }


   public function gist()
   {
      return $this->belongsTo('Gist');
   }
}
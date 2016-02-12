<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tweet;
use App\User;
use App\Comment;
use Intervention\Image\ImageManager;

class ProfileController extends Controller
{
    public function index() {

    	// Count the total amount of posts by this user
    	$totalTweets = \Auth::user()->tweets()->count();

    	return view('profile.index', compact('totalTweets'));

    }

    public function newTweet( Request $request ){

    	$this->validate($request, [
    		'content'=>'required|min:4|max:140'
    	]);

    	$newTweet = new Tweet();

    	$newTweet->content = $request->content;
    	$newTweet->user_id = \Auth::user()->id;

    	$newTweet->save();

    	return redirect('profile');

    }

    public function show($username){

        // Find the user
        $user = User::where('username', '=', $username)->firstOrFail();

        $userPosts = $user->tweets()->get();

        // return $user;
        return view('profile.show', compact('user', 'userPosts'));

    }

    public function newComment( Request $request ){

        // return $request->all;
        $this->validate($request, [
            'comment'=>'required|min:4|max:140',
            'tweet-id'=>'required|exists:tweets,id'
            ]);

        // Create a new comment
        $comment = new Comment();

        $comment->content = $request->comment;
        $comment->user_id = \Auth::user()->id;
        $comment->tweet_id = $request['tweet-id'];

        $comment->save();

        return back();

    }

    public function deleteTweet( $id ){

        // Find the tweet
        $tweet = Tweet::findOrFail($id);

        // Cheack that the logged in user owns this tweet
        if( $tweet->user_id != \Auth::user()->id ) {

            return 'not your tweet';
        }

        return view('profile.confirm_tweet_delete', compact('tweet'));

    }

    public function destroyTweet( $id ){

         // Find the tweet
        $tweet = Tweet::findOrFail($id);

        // Cheack that the logged in user owns this tweet
        if( $tweet->user_id != \Auth::user()->id ) {

            return 'not your tweet';
        }

        $tweet->delete();

        return redirect('profile/'.$tweet->user->username);

    }

    public function newProfileImage( Request $request ) {

        // return $request->photo;

        $this->validate($request, [
            'photo' => 'required|image'
            ]);

        // Create instance of Image Intervention
        $manager = new ImageManager();

        $profileImage = $manager->make( $request->photo );

        $profileImage->resize(240, null, function ($constraint) {
            $constraint->aspectRatio();
         });

        $profileImage->save('profiles/'.\Auth::user()->id .'.jpg', 90 );

        // Save file nme in users tabel
        $user = User::find( \Auth::user()->id );
        $user->profileImage = \Auth::user()->id .'.jpg';

        $user->save();

        return redirect('profile/'.$user->username);
    }
}

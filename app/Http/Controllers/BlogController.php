<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use DB;

class BlogController extends Controller
{






    //blog inert input file

    public function inputFormBlog(){
        return view('blog');
    }

    //diplay wwelcome

    public function displayWelcome(){
       // $data['blogs']=Blog::where('status',1)->get();

       // return view('welcome',$data);

       // $data =DB::table('blogs where status =1')->paginate(3);

        //$data =DB::table('blogs where status =1')->paginate(3);

       // $allUsers = User::paginate(15);

        // $someUsers = User::where('votes', '>', 100)->paginate(15);

        //  $someUsers = User::where('votes', '>', 100)->paginate(15);

        //  $data =DB::table('blogs')->paginate(3);

        //  return view('admin.blogList',['blogs'=>$data]);


        $data = Blog::where('status', '!=',0)->paginate(6);

        $data1 = Settings::all();

         return view('welcome',['blogs'=>$data],['settingsWelcome'=>$data1]);



    }

    //display welcome2

    public function display2Welcome(Request $request){
        $data['blog']=Blog::find($request->id);
        return view('welcome2', $data);
    }




    public function blogSave(Request $request){
        $data=new Blog();
        if(isset($request->id)&& !empty($request->id))
            $data=Blog::find($request->id);
        $data->title = $request->title;
        if(!empty($request->file('photo')))
        $data->photo = $this->uploadimage($request->file('photo'),'admin/uploads/','','','');
        $data->description = $request->description;
        $data->status = $request->status;

        $data->save();
        return redirect('blogs' );

    }
    //image upload function

    function uploadimage($img, $path, $user_file_name = null, $width =null , $height = null)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists(path_image_thumb() . $user_file_name)) {
            unlink(path_image_thumb() . $user_file_name);
        }
// saving image in target path
        $imgName = uniqid() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);


        $img_main = \Intervention\Image\Facades\Image::make($img);
        $img_main->orientate();
        $img_main->save($path.$imgName);


        if ( file_exists($path. $imgName)) {

         /*   $newNme = public_path(path_image_thumb() . $imgName);

            if (!file_exists(path_image_thumb())) {
               mkdir(path_image_thumb(), 0777, true);
            }
           $img = \Intervention\Image\Facades\Image::make($imgPath);
           $img->fit(200);
            $img->orientate();
            $img->save(path_image_thumb().$imgName);
*/
            return $imgName;
        }
        return false;
    }




    public function blogList(){

        //$data['blogs']=Blog::all();
        //return view('admin.blogList',$data);

        $data =DB::table('blogs')->paginate(4);

        return view('admin.blogList',['blogs'=>$data]);
    }

    public function blogAdd(){
        return view('admin.blogAddEdit');
    }

    public function blogDelete(Request $request){
        Blog::find($request->id)->delete();
        return redirect()->back();
    }

    public function blogEdit(Request $request){
        $data['blog'] = Blog::find($request->id);
        return view('admin.blogAddEdit',$data);
    }


}


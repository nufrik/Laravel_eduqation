<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function show()
        {
            $users = User::paginate(3);

            return view('user.show', [
                'users' => $users,
            ]);
        }

        public function form(Request $request)
        {
            if ($request->has('name')) {
                $user = new User;
                $user->name = $request->input('name');
                $user->save();
                dump('Юзер успешно добавлен!');
            }
            return view('user.form');
        }

        public function delete($id)
        {
            User::destroy($id);
            dump('Юзер успешно удалён!');
        }

        public function update(Request $request,$id)
        {
            if ($request->has('name')) {
                $user = User::find($id);
                $user->name = $request->input('name');
                $user->save();
                dump('Юзер успешно изменён!');
            }
            return view('user.form');
        }

        /*public function show(Request $request)
        {
            echo $request->path() . '<br>';
            echo $request->url() . '<br>';
            echo $request->fullUrl() . '<br>';

            if ($request->is('admin/*')) {
                echo 'net';
            }
            elseif($request->is('test/*')){
                echo 'da';
            }
        }*/

        /*public function form(Request $request, $id, $login)
        {

            return view('user.form', [
                'id' => $id,
                'login' => $login,
                'data' => $data,
            ]);
        }*/
    }

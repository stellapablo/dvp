<?php

class UsersController extends BaseController {

    /**
     * User Repository
     *
     * @var User
     */
    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function login() {

        $direcciones = Direccion::where('estado_id', '=', 1)->get();

        $delegaciones = Delegacion::where('estado_id', '=', 1)->get();

        return View::make('users.login', compact('direcciones', 'delegaciones'));
    }

    public function ingresar() {

        $input = Input::all();


        $attempt = Auth::attempt([
                    'nick' => $input['email'],
                    'password' => $input['password']
        ]);

        if ($attempt) {
            return Redirect::intended('administracion');
        } else {
            return Redirect::to('login')->with('message', 'Usuario o contraseña invalidos');
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::to('/login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $users = $this->user->all();

        return View::make('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $roles = ['1' => 'Administrador', '2' => 'Mapas y Consorcios', '3' => 'Noticias', '4' => 'Alertas','5'=>'Licitaciones'];
        return View::make('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Input::all();
        $validation = Validator::make($input, User::$rules);

        if ($validation->passes()) {
            $row = new User;
            $row->nick = Input::get('nick');
            $row->password = Hash::make(Input::get('password'));
            $row->rol = Input::get('rol');
            $row->save();

            return Redirect::route('users.index');
        }

        return Redirect::route('users.create')
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $user = $this->user->findOrFail($id);

        return View::make('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $user = $this->user->find($id);

        if (is_null($user)) {
            return Redirect::route('users.index');
        }

        $roles = ['1' => 'Administrador', '2' => 'Mapas y Consorcios', '3' => 'Noticias', '4' => 'Alertas'];
        return View::make('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $input = array_except(Input::all(), '_method');

        $validation = Validator::make($input, User::$rules);

        if ($validation->passes()) {
            $user = $this->user->find($id);
            $user->nick = Input::get('nick');
            $user->password = Hash::make(Input::get('password'));
            if (Input::get('rol')) {
                $user->rol = Input::get('rol');
            }
            $user->update();

            if (Auth::user()->rol == 1) {
                return Redirect::route('users.index');
            } else {
                return Redirect::to('/administracion');
            }
        }

        return Redirect::route('users.edit', $id)
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $this->user->find($id)->delete();

        return Redirect::route('users.index');
    }

}

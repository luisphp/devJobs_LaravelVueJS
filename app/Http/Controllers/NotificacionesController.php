<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __invoke(Request $request)
    // {
    //     return 'Desde notificaciones'; 
    // }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $notificaciones = auth()->user()->unreadNotifications;

        auth()->user()->unreadNotifications->markAsRead();

        return view('notificaciones.index')->with(['notificaciones' => $notificaciones]);
    }
}

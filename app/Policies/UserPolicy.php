<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function Administrador(User $user){
        if($user->tipo === 'Administrador'){
            return true;
        }
    }

    public function empresa(User $user) {
        if($user->tipo === 'Empresa') {
            return true;
        }
    }

    public function viewPermissao(User $user) {
        if($user->status === 'Inativo') {
            return false;
        }else {
            return true;
        }
    }

    public function viewBasico(User $user) {
        if($user->status === 'Inativo') {
            return true;
        }
    }

    public function view(User $user)
    {
        if($user->tipo === 'Administrador' ||
            $user->tipo === 'Comandante' ||
            $user->tipo === 'Recrutador'){
            return true;
        }
    }

    public function create(User $user)
    {
        if($user->tipo === 'Administrador'){
            return true;
        }elseif($user->tipo === 'Gerente'){
            return true;
        }
    }

    public function update(User $user)
    {
        if($user->tipo === 'Administrador'){
            return true;
        }elseif($user->tipo === 'Gerente'){
            return true;
        }elseif($user->tipo == 'Usuario'){
            return true;
        }
    }

    public function delete(User $user)
    {
        if($user->tipo === 'Administrador'){
            return true;
        }elseif($user->tipo === 'Gerente'){
            return true;
        }
    }
}
